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

/* home/index.html.twig */
class __TwigTemplate_04e46714ac320aff85409a8885f346156086380a1bba9fb56e30ddbdba141e1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello HomeController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    *{
        background: #1f1f1f;
    }

    h1{
        color: white;
    }
    ul{
        color:white;
    }
    a{
        color:white;
    }
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #1f1f1f; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Actividad Centros Symfony</h1>
    <colspan>
    <pre>
                 ⬛⬛⬛⬛⬛⬛
              ⬛🟥🟥🟥🟥🟥🟥⬛
           ⬛🟥🟥🟥🟥🟥🟥🟥🟥⬛
        ⬛🟥🟥🟥🟥⬛⬛⬛⬛⬛⬛
        ⬛🟥🟥🟥⬛🟦🟦⬜⬜⬜⬜⬛
        ⬛🟥🟥⬛🟪🟦🟦🟦⬜⬜⬜🟦⬛
   ⬛⬛⬛🟥🟥⬛🟪🟦🟦🟦🟦🟦🟦🟦⬛
⬛🟥🟥⬛🟥🟥⬛🟪🟪🟪🟦🟦🟦🟦🟪⬛
⬛🟥🟥⬛🟥🟥🟥⬛🟪🟪🟪🟪🟪🟪⬛
⬛🟥🟥⬛🟥🟥🟥🟥⬛⬛⬛⬛⬛⬛⬛
⬛🟥🟥⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
⬛🟥🟥⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
⬛🟥🟥⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
⬛🟥🟥⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
⬛🟥🟥⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
⬛🟥🟥⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
   ⬛⬛⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
        ⬛🟥🟥🟥⬛⬛⬛⬛🟥🟥🟥⬛
        ⬛🟥🟥🟥⬛     ⬛🟥🟥🟥⬛
        ⬛🟥🟥🟥⬛     ⬛🟥🟥🟥⬛
           ⬛⬛⬛          ⬛⬛⬛
    </pre>
    <ul>
        <li><a href=\"";
        // line 51
        echo "listarCentros";
        echo "\">Listar los centros</a></li>
        <li><a href=\"";
        // line 52
        echo "centrosValencia";
        echo "\">Listar centros de la provincia de Valencia</a> </li>
        <li><a href=\"";
        // line 53
        echo "ciclos";
        echo "\">Ciclos</a> </li>
        <li><a href=\"";
        // line 54
        echo "centrosDAM";
        echo "\">Centros que imparten DAM</a> </li>
        <li><a href=\"";
        // line 55
        echo "centro18";
        echo "\">Centro 18</a> </li>
        <li><a href=\"";
        // line 56
        echo "insertarCentro";
        echo "\">Insertar IES LA MAR</a> </li>
        <li><a href=\"";
        // line 57
        echo "actualizarTelefono";
        echo "\">Actualizar telefono IES LA SENIA</a> </li>
        <li><a href=\"";
        // line 58
        echo "eliminarIESMAR";
        echo "\">Eliminar IES LA MAR</a> </li>
        
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 58,  159 => 57,  155 => 56,  151 => 55,  147 => 54,  143 => 53,  139 => 52,  135 => 51,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

{% block body %}
<style>
    *{
        background: #1f1f1f;
    }

    h1{
        color: white;
    }
    ul{
        color:white;
    }
    a{
        color:white;
    }
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #1f1f1f; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Actividad Centros Symfony</h1>
    <colspan>
    <pre>
                 ⬛⬛⬛⬛⬛⬛
              ⬛🟥🟥🟥🟥🟥🟥⬛
           ⬛🟥🟥🟥🟥🟥🟥🟥🟥⬛
        ⬛🟥🟥🟥🟥⬛⬛⬛⬛⬛⬛
        ⬛🟥🟥🟥⬛🟦🟦⬜⬜⬜⬜⬛
        ⬛🟥🟥⬛🟪🟦🟦🟦⬜⬜⬜🟦⬛
   ⬛⬛⬛🟥🟥⬛🟪🟦🟦🟦🟦🟦🟦🟦⬛
⬛🟥🟥⬛🟥🟥⬛🟪🟪🟪🟦🟦🟦🟦🟪⬛
⬛🟥🟥⬛🟥🟥🟥⬛🟪🟪🟪🟪🟪🟪⬛
⬛🟥🟥⬛🟥🟥🟥🟥⬛⬛⬛⬛⬛⬛⬛
⬛🟥🟥⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
⬛🟥🟥⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
⬛🟥🟥⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
⬛🟥🟥⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
⬛🟥🟥⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
⬛🟥🟥⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
   ⬛⬛⬛🟥🟥🟥🟥🟥🟥🟥🟥🟥🟥⬛
        ⬛🟥🟥🟥⬛⬛⬛⬛🟥🟥🟥⬛
        ⬛🟥🟥🟥⬛     ⬛🟥🟥🟥⬛
        ⬛🟥🟥🟥⬛     ⬛🟥🟥🟥⬛
           ⬛⬛⬛          ⬛⬛⬛
    </pre>
    <ul>
        <li><a href=\"{{'listarCentros'}}\">Listar los centros</a></li>
        <li><a href=\"{{'centrosValencia'}}\">Listar centros de la provincia de Valencia</a> </li>
        <li><a href=\"{{'ciclos'}}\">Ciclos</a> </li>
        <li><a href=\"{{'centrosDAM'}}\">Centros que imparten DAM</a> </li>
        <li><a href=\"{{'centro18'}}\">Centro 18</a> </li>
        <li><a href=\"{{'insertarCentro'}}\">Insertar IES LA MAR</a> </li>
        <li><a href=\"{{'actualizarTelefono'}}\">Actualizar telefono IES LA SENIA</a> </li>
        <li><a href=\"{{'eliminarIESMAR'}}\">Eliminar IES LA MAR</a> </li>
        
    </ul>
</div>
{% endblock %}
", "home/index.html.twig", "/code/templates/home/index.html.twig");
    }
}
