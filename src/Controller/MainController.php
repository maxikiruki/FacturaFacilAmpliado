<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        $repositoryUsers = $this->getDoctrine()->getRepository(User::class);
        $users = $repositoryUsers->findAll();

        $user = $this->getUser();
        if (isset($user)) {
            foreach ($this->getUser()->getRoles() as $roles) {
                if ($roles == 'ROLE_ADMIN') {
                    return $this->redirectToRoute('easyadmin');
                }
            }
        }


        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'user' => $this->getUser(),
            'users' => $users
        ]);
    }
    /**
     * @Route("/edit", name="edit")
     */
    public function edit()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/newenterprise", name="newenterprise")
     */
    public function newenterprise()
    {
        //vista de creacion de empresa    	
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/newclients", name="newclients")
     */
    public function newclients()
    {
        //vista de creacion de los clientes de la empresa    	
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/newproducts", name="newproducts")
     */
    public function newproducts()
    {
        //vista de creacion de los productos de la empresa    	
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/newinvoices", name="newinvoices")
     */
    public function newinvoices()
    {
        //vista de creacion de las facturas de la empresa    	
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/enterprise", name="enterprise")
     */
    public function enterprise()
    {
        //vista de la empresa seleccionada    	
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/clients", name="clients")
     */
    public function clients()
    {
        //vista de los clientes de la empresa   	
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/products", name="products")
     */
    public function products()
    {
        //vista de los productos de la empresa
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
    /**
     * @Route("/invoices", name="invoices")
     */
    public function invoices()
    {
        //vista de las facturas de la empresa
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
