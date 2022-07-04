<?php

namespace App\Controller;

use App\Entity\Budget;
use App\Entity\Invoice;
use App\Entity\Client;
use App\Entity\Enterprise;
use App\Entity\Product;
use App\Entity\ProductLine;
use App\Entity\User;
use App\Form\BudgetType;
use App\Form\InvoiceType;
use App\Repository\EnterpriseRepository;
use App\Repository\InvoiceRepository;
use App\Repository\BudgetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\ArrayCollection;
use App\Controller\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


/**
 * @Route("/budget")
 */
class BudgetController extends AbstractController
{
    /**
     * @Route("/client/{idclient}", name="budget_index", methods={"GET"})
     */
    public function index(BudgetRepository $budgetRepository, $idclient): Response
    {
        $repositoryEnterprises = $this->getDoctrine()->getRepository(Enterprise::class);
        // Cargo el cliente (por route)
        $repositoryClient = $this->getDoctrine()->getRepository(Client::class);

        $client = $repositoryClient->findOneById($idclient);

        // Cargo la empresa a la que pertecene el cliente
        $enterprise = $client->getEnterprise();

        // $repositoryClient = $this->getDoctrine()->getRepository(Client::class);
        // $client = $repositoryClient->findOneById($idclient);

        

        return $this->render('budget/index.html.twig', [
            'budgets' => $budgetRepository->findbyClient($idclient),
            'idclient' => $idclient,
            'enterprise' => $enterprise,
            'enterprises' => $repositoryEnterprises->findAll(),
            
        ]);
    }
  /**
     * @Route("/new/client/{idclient}", name="budget_new", methods={"GET","POST"})
     */
    public function new(Request $request, $idclient,MailerInterface $mailer): Response
    {

        // Cargo el cliente (por route)
        $repositoryClient = $this->getDoctrine()->getRepository(Client::class);
        $client = $repositoryClient->findOneById($idclient);

        // Cargo la empresa a la que pertecene el cliente
        $enterprise = $client->getEnterprise();

        //Cargo los productos de esa empresa
        $repositoryProduct = $this->getDoctrine()->getRepository(Product::class);
        $products = $repositoryProduct->findByEnterpriseId($enterprise);

        //Cargo todo lo del repositorio
        $repositoryBudget= $this->getDoctrine()->getRepository(Budget::class);
        $budgets=$repositoryBudget->findAll();

        $nextBudget=count($budgets)+1;

        //Genero un nuevo presupuesto
        $budget = new Budget();

        // Pongo los datos por defecto        
        $hoy = new \DateTime();
        // $budget->setInvoicenumber($enterprise->getNextinvoicenumber());
        $budget->setDate($hoy);
        // $invoice->setVisible(true);
        $budget->setFooter($enterprise->getFooter());

        // Creo un array de Productlines
        $this->ProductLine = new ArrayCollection();

        // Se genera el formulario con los datos
        $form = $this->createForm(BudgetType::class, $budget);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $budget->setClient($client);
            $budget->setEnterprise($enterprise);
            // $budget->setVisible(true);
            $names = $_REQUEST['productName'];
            $quantities = $_REQUEST['quantity'];
            $prices = $_REQUEST['price'];
            $vats = $_REQUEST['VAT'];

            //Aqui toca comprobar que el presupuesto es valido

            //Guardo las lineas 
            for ($i = 0; $i < count($names); $i++) {

                $newLine = new ProductLine();

                $newLine->setName($names[$i]);
                $newLine->setQuantity($quantities[$i]);
                $newLine->setPrice($prices[$i]);
                $newLine->setVat($vats[$i]);
                $newLine->setInvoice(null);


                $budget->addLine($newLine);
            }

            //GENERAR CONTRASEÑA ALEATORIA
            $length=8;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }

            $budget->setPsswrd($randomString);
            
            $entityManager->persist($budget);
            $entityManager->flush();






            //ENVIO CORREO AL USUARIO



            // $destino="".$client->getEmail() ;
            // $mensaje="http://localhost:8000/new/client/".$idclient."/".$randomString;
            // $asunto= "presupuesto";
            // mail($destino,$asunto,$mensaje);
            // if(mail($destino,$asunto,$mensaje)){
            //     return $this->render('budget/error.html.twig');
            // }
            $numbudget=$budget->getId();
            $mensaje="http://localhost:8000/budget/budget/".$numbudget."/".$randomString;
            $condiciones=$budget->getContract();
            $destino="".$client->getEmail() ;
            $email = (new Email())
            ->from('postmaster@localhost')
            ->to($destino)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Presupuesto'.$budget->getId())
            // ->text('Sending emails is fun again!')
            ->html("URL ".$mensaje ."<br>Condiciones ".$condiciones);

        $mailer->send($email);

    
            



            return $this->redirectToRoute('budget_index', [
                'idclient' => $idclient,
                
                ]);
        }

       

        return $this->render('budget/new.html.twig', [
            'budget' => $budget,
            'form' => $form->createView(),
            'enterprise' => $enterprise,
            'client' => $client,
            'products' => $products,
            'nextbudget' => $nextBudget,
        ]);

        
    } 
    
    /**
    * @Route("/budget/{id}/{psswrd}", name="budget_show", methods={"GET","POST"})
    */
   public function print(Request $request , Budget $budget, $id, $psswrd ): Response
   {

    
       // Cargo el cliente (por presupuesto)
       $client = $budget->getClient();
       // Cargo la empresa a la que pertecene el cliente
       $enterprise = $client->getEnterprise();

       //Cargo los productos de esa empresa
       $repositoryProduct = $this->getDoctrine()->getRepository(Product::class);
       $products = $repositoryProduct->findByEnterpriseId($enterprise);

       $form = $this->createForm(BudgetType::class, $budget);

       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {

           //Cargo las lineas de productos de esa empresa
           $repositoryProductLine = $this->getDoctrine()->getRepository(ProductLine::class);
           $productLines = $repositoryProductLine->findByBudget($budget);

           // Eliminar todas las lineas
           for ($i = 0; $i < count($budget->getLine()); $i++) {
               // $invoice->removeLine($invoice->getLine($i)[0]);
               $this->getDoctrine()->getManager()->remove($productLines[$i]);
           }

           $this->getDoctrine()->getManager()->flush();

           $names = $_REQUEST['productName'];
           $quantities = $_REQUEST['quantity'];
           $prices = $_REQUEST['price'];
           $vats = $_REQUEST['VAT'];

           //Aqui toca comprobar que la nueva factura es válida
           for ($i = 0; $i < count($names); $i++) {

               $newLine = new ProductLine();

               $newLine->setName($names[$i]);
               $newLine->setQuantity($quantities[$i]);
               $newLine->setPrice($prices[$i]);
               $newLine->setVat($vats[$i]);

               $budget->addLine($newLine);
           }


           //Guardo las lineas 
           for ($i = 0; $i < count($names); $i++) {

               $newLine = new ProductLine();

               $newLine->setName($names[$i]);
               $newLine->setQuantity($quantities[$i]);
               $newLine->setPrice($prices[$i]);
               $newLine->setVat($vats[$i]);

               $budget->addLine($newLine);
           }

           $this->getDoctrine()->getManager()->flush();

           return $this->redirectToRoute('budget_index', ['idclient' => $client->getId()]);
       }


       //CONSULTO LA CONTRASEÑA DEL PRESUPUESTO 
    
        $idroute=$id;
        $passroute=$psswrd;

        $idriginal=$budget->getId();

        $passoriginal=$budget->getPsswrd();

        //COMPROBAR QUE SEA USUARIO ANONIMO PARA QUE AL EMITIR NO SE MARQUE COMO VISTA

       if($passroute == $passoriginal){
            $status= $budget->getStatus();
            //COMPROBAR QUE SEA USUARIO ANONIMO PARA QUE AL EMITIR NO SE MARQUE COMO VISTA
            $securityContext = $this->container->get('security.authorization_checker');
            //$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED');
            //IS_AUTHENTICATED_FULLY
            
            if($status == 2 || $status == 3 || $securityContext->isGranted('IS_AUTHENTICATED_FULLY')){
                return $this->render('budget/show2.html.twig', [
                    'budget' => $budget,
                    'form' => $form->createView(),
                    'enterprise' => $budget->getEnterprise(),
                    'client' => $budget->getClient(),
                    'lines' => $budget->getLine(),
                    'products' => $products,
                    'status' => $status
                 ]);
              
       
            }else{
           


                $entityManager = $this->getDoctrine()->getManager();

                $budget->setStatus(1);
            
                $entityManager->persist($budget);
                $entityManager->flush();


                return $this->render('budget/show.html.twig', [
                    'budget' => $budget,
                    'form' => $form->createView(),
                    'enterprise' => $budget->getEnterprise(),
                    'client' => $budget->getClient(),
                    'lines' => $budget->getLine(),
                    'products' => $products,
                 ]);
            }
        }else{
            return $this->render('budget/error.html.twig');
        }

    // return $this->render('budget/show.html.twig', [
    //                 'budget' => $budget,
    //                 'form' => $form->createView(),
    //                 'enterprise' => $budget->getEnterprise(),
    //                 'client' => $budget->getClient(),
    //                 'lines' => $budget->getLine(),
    //                 'products' => $products,
    //                 'arrayb' => $passroute,
    //                 'arraya' => $idroute,
    //             ]);
     }

    /**
    * @Route("/budget_approbe/{id}", name="budget_approbe", methods={"GET"})
    */
    public function approbe(Request $request , Budget $budget, $id  ): Response
    {
       
        //PONGO EN LA BASE DE DATOS QUE ESTÁ ACEPTADA
        $status= $budget->getStatus();
        if($status == 2 || $status == 3  ){
            
            return $this->render('budget/executed.html.twig',[
            'status' => $status,
         
            
        ]);
       
        }else{
            $entityManager = $this->getDoctrine()->getManager();

            $budget->setStatus(2);
            
            $entityManager->persist($budget);
            $entityManager->flush();











        //     //GENERAR FACTURA
        //     $invoice=new Invoice();
        //     $entityManagerInvoice = $this->getDoctrine()->getManager();

            
        //     // Cargo el cliente (por presupuesto)
        //     $client = $budget->getClient();
        //     $invoice->setClient($client);

            
        //     // Cargo la empresa a la que pertecene el cliente
        //     $enterprise = $client->getEnterprise();
        //     $invoice->setEnterprise($enterprise);
        //     //Cargo los productos de esa empresa
        //     $repositoryProduct = $this->getDoctrine()->getRepository(Product::class);
        //     $products = $repositoryProduct->findByEnterpriseId($enterprise);

        

        //             //Cargo las lineas de productos de esa empresa
        //             $repositoryProductLine = $this->getDoctrine()->getRepository(ProductLine::class);
        //             $productLines = $repositoryProductLine->findByBudget($budget);

        //             //CONSULTAR LAS LINEAS ProductLine de ese Budget

        //             // //Guardo las lineas 
        //             // for ($i = 0; $i < count($names); $i++) {

        //             //     $newLine = new ProductLine();

        //             //     $newLine->setName($names[$i]);
        //             //     $newLine->setQuantity($quantities[$i]);
        //             //     $newLine->setPrice($prices[$i]);
        //             //     $newLine->setVat($vats[$i]);

        //             //     $invoice->addLine($newLine);
        //             // }

        //             $entityManagerInvoice->persist($invoice);
        //             $entityManagerInvoice->flush();
        }
        













        

        return $this->render('budget/approbe.html.twig');
    }

    /**
    * @Route("/budget_reject/{id}", name="budget_reject", methods={"GET"})
    */
    public function reject(Request $request , Budget $budget, $id  ): Response
    {
        //PONGO EN LA BASE DE DATOS QUE ESTÁ RECHAZADA
        $status= $budget->getStatus();
        if($status == 2 || $status == 3  ){
            
            return $this->render('budget/executed.html.twig',[
            'status' => $status,
         
            
        ]);
       
        }else{
            $entityManager = $this->getDoctrine()->getManager();

            $budget->setStatus(3);
            
            $entityManager->persist($budget);
            $entityManager->flush();
        }

        return $this->render('budget/reject.html.twig');
    }


    /**
    * @Route("/budget_invoice/{id}", name="budget_invoice", methods={"GET"})
    */
    public function budget_to_invoice(Request $request , Budget $budget, $id  ): Response
    {

        //A PARTIR DEL PRESUPUESTO CREO LA FACTURA
        
            // Cargo el cliente (por route)
            $client = $budget->getClient();
            $idclient=$client->getid();
            // Cargo la empresa a la que pertecene el cliente
            $enterprise = $client->getEnterprise();

        //Cargo los productos de esa empresa
        $repositoryProduct = $this->getDoctrine()->getRepository(Product::class);
        $products = $repositoryProduct->findByEnterpriseId($enterprise);

            //GENERO LA FACTURA
            $invoice = new Invoice();
    
            $entityManager = $this->getDoctrine()->getManager();

            // AÑADO LOS DATOS A LA FACTURA      
            $hoy = new \DateTime();
            $invoice->setInvoicenumber($enterprise->getNextinvoicenumber());
            $invoice->setDate($hoy);
            $invoice->setVisible(true);
            $invoice->setClient($client);
            $invoice->setEnterprise($enterprise);
            $invoice->setFooter($enterprise->getFooter());
            $invoice->setDescription($budget->getContract());
            $invoice->setSubtotal($budget->getSubtotal());
            $invoice->setTotal($budget->getTotal());
            

            //RECORRO EL PRODUCTLINE DE ESE ID_BUDGET Y 
            //EN EL REPOSITORIO DE PRODUCTLINE, BUSCO DONDE EL BUDGET_ID SEA EL ID QUE PASO
            $repositoryProductLine = $this->getDoctrine()->getRepository(ProductLine::class);
            $productLines = $repositoryProductLine->findByBudget($budget->getId());
            
            for ($i = 0; $i < count($productLines); $i++) {

                $productLines[$i]->setInvoice($invoice);

                // $invoice->addLine( $productLines[$i]);

                //GUARDO EL CAMBIO DEL PRODUCTLINE
                $entityManager->persist($productLines[$i]);
                
            }


            //Subo id de invoicenext
            $enterprise->setNextinvoicenumber($enterprise->getNextinvoicenumber() + 1);

            //GUARDO LOS CAMBIOS
            $entityManager->persist($invoice);
            $entityManager->flush();

            return $this->redirectToRoute('invoice_index', ['idclient' => $idclient]);
    }
}
