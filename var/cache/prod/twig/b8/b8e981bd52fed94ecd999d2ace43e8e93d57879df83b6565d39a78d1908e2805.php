<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* invoice/limpio.html */
class __TwigTemplate_c279be92deee254a53a5ac6b6e6db95728b9b8ba45ca5f895241249d579474e0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"invoice_date\"><select id=\"invoice_date_month\" name=\"invoice[date][month]\">
        <option value=\"1\">Jan</option>
        <option value=\"2\" selected=\"selected\">Feb</option>
        <option value=\"3\">Mar</option>
        <option value=\"4\">Apr</option>
        <option value=\"5\">May</option>
        <option value=\"6\">Jun</option>
        <option value=\"7\">Jul</option>
        <option value=\"8\">Aug</option>
        <option value=\"9\">Sep</option>
        <option value=\"10\">Oct</option>
        <option value=\"11\">Nov</option>
        <option value=\"12\">Dec</option>
    </select><select id=\"invoice_date_day\" name=\"invoice[date][day]\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\">3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"6\">6</option>
        <option value=\"7\">7</option>
        <option value=\"8\">8</option>
        <option value=\"9\">9</option>
        <option value=\"10\">10</option>
        <option value=\"11\">11</option>
        <option value=\"12\">12</option>
        <option value=\"13\">13</option>
        <option value=\"14\">14</option>
        <option value=\"15\">15</option>
        <option value=\"16\">16</option>
        <option value=\"17\">17</option>
        <option value=\"18\">18</option>
        <option value=\"19\">19</option>
        <option value=\"20\">20</option>
        <option value=\"21\">21</option>
        <option value=\"22\">22</option>
        <option value=\"23\">23</option>
        <option value=\"24\">24</option>
        <option value=\"25\">25</option>
        <option value=\"26\">26</option>
        <option value=\"27\">27</option>
        <option value=\"28\" selected=\"selected\">28</option>
        <option value=\"29\">29</option>
        <option value=\"30\">30</option>
        <option value=\"31\">31</option>
    </select><select id=\"invoice_date_year\" name=\"invoice[date][year]\">
        <option value=\"2015\">2015</option>
        <option value=\"2016\">2016</option>
        <option value=\"2017\">2017</option>
        <option value=\"2018\">2018</option>
        <option value=\"2019\">2019</option>
        <option value=\"2020\" selected=\"selected\">2020</option>
        <option value=\"2021\">2021</option>
        <option value=\"2022\">2022</option>
        <option value=\"2023\">2023</option>
        <option value=\"2024\">2024</option>
        <option value=\"2025\">2025</option>
    </select></div>






=============

<div id=\"invoice_date\"><select id=\"invoice_date_month\" name=\"invoice[date][month]\">
        <option value=\"1\">Jan</option>
        <option value=\"2\" selected=\"selected\">Feb</option>
        <option value=\"3\">Mar</option>
        <option value=\"4\">Apr</option>
        <option value=\"5\">May</option>
        <option value=\"6\">Jun</option>
        <option value=\"7\">Jul</option>
        <option value=\"8\">Aug</option>
        <option value=\"9\">Sep</option>
        <option value=\"10\">Oct</option>
        <option value=\"11\">Nov</option>
        <option value=\"12\">Dec</option>
    </select><select id=\"invoice_date_day\" name=\"invoice[date][day]\">
        <option value=\"1\">1</option>
        <option value=\"2\">2</option>
        <option value=\"3\">3</option>
        <option value=\"4\">4</option>
        <option value=\"5\">5</option>
        <option value=\"6\">6</option>
        <option value=\"7\">7</option>
        <option value=\"8\">8</option>
        <option value=\"9\">9</option>
        <option value=\"10\">10</option>
        <option value=\"11\">11</option>
        <option value=\"12\">12</option>
        <option value=\"13\">13</option>
        <option value=\"14\">14</option>
        <option value=\"15\">15</option>
        <option value=\"16\">16</option>
        <option value=\"17\">17</option>
        <option value=\"18\">18</option>
        <option value=\"19\">19</option>
        <option value=\"20\">20</option>
        <option value=\"21\">21</option>
        <option value=\"22\">22</option>
        <option value=\"23\">23</option>
        <option value=\"24\">24</option>
        <option value=\"25\">25</option>
        <option value=\"26\">26</option>
        <option value=\"27\">27</option>
        <option value=\"28\" selected=\"selected\">28</option>
        <option value=\"29\">29</option>
        <option value=\"30\">30</option>
        <option value=\"31\">31</option>
    </select><select id=\"invoice_date_year\" name=\"invoice[date][year]\">
        <option value=\"2015\">2015</option>
        <option value=\"2016\">2016</option>
        <option value=\"2017\">2017</option>
        <option value=\"2018\">2018</option>
        <option value=\"2019\">2019</option>
        <option value=\"2020\" selected=\"selected\">2020</option>
        <option value=\"2021\">2021</option>
        <option value=\"2022\">2022</option>
        <option value=\"2023\">2023</option>
        <option value=\"2024\">2024</option>
        <option value=\"2025\">2025</option>
    </select></div>";
    }

    public function getTemplateName()
    {
        return "invoice/limpio.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "invoice/limpio.html", "D:\\Users\\ruben\\Escritorio\\Trabajos\\DWES\\2EV\\invoice\\templates\\invoice\\limpio.html");
    }
}
