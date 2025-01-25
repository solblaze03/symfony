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

/* home/centro18.html.twig */
class __TwigTemplate_99d12595e737b1de37c6787123fe31a2ba9a6bbc7108f8c3065c1d461da07c17 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/centro18.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/centro18.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/centro18.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centro"]) || array_key_exists("centro", $context) ? $context["centro"] : (function () { throw new RuntimeError('Variable "centro" does not exist.', 3, $this->source); })()), "centre", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<style>

    h1 {
        font-family:sans-serif;
        margin: 20px;
    }
    td {
        padding: 12px;
    }
    th{
        text-align: left;
    }
    table{
        padding: 10px;
    }
    li{
        font-family:sans-serif;
        font-size: 20px;
        margin: 10px;
    }
    p{
        font-family:sans-serif;
        font-size: 20px;
        margin: 20px;
    }
</style>


    <h1>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centro"]) || array_key_exists("centro", $context) ? $context["centro"] : (function () { throw new RuntimeError('Variable "centro" does not exist.', 36, $this->source); })()), "centre", [], "any", false, false, false, 36), "html", null, true);
        echo "</h1>
    <p>Descripción</p>
    <ul>
        <li>id: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centro"]) || array_key_exists("centro", $context) ? $context["centro"] : (function () { throw new RuntimeError('Variable "centro" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
        echo "</li>
        <li>Codigo: ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centro"]) || array_key_exists("centro", $context) ? $context["centro"] : (function () { throw new RuntimeError('Variable "centro" does not exist.', 40, $this->source); })()), "codi", [], "any", false, false, false, 40), "html", null, true);
        echo "</li>
        <li>Localidad: ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centro"]) || array_key_exists("centro", $context) ? $context["centro"] : (function () { throw new RuntimeError('Variable "centro" does not exist.', 41, $this->source); })()), "localitat", [], "any", false, false, false, 41), "html", null, true);
        echo "</li>
        <li>Telefono: ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centro"]) || array_key_exists("centro", $context) ? $context["centro"] : (function () { throw new RuntimeError('Variable "centro" does not exist.', 42, $this->source); })()), "telefon", [], "any", false, false, false, 42), "html", null, true);
        echo "</li>
        <li>Query: ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["centro"]) || array_key_exists("centro", $context) ? $context["centro"] : (function () { throw new RuntimeError('Variable "centro" does not exist.', 43, $this->source); })()), "query", [], "any", false, false, false, 43), "html", null, true);
        echo "</li>
        

    </ul>
    




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/centro18.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 43,  137 => 42,  133 => 41,  129 => 40,  125 => 39,  119 => 36,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{centro.centre}}{% endblock %}


{% block body %}

<style>

    h1 {
        font-family:sans-serif;
        margin: 20px;
    }
    td {
        padding: 12px;
    }
    th{
        text-align: left;
    }
    table{
        padding: 10px;
    }
    li{
        font-family:sans-serif;
        font-size: 20px;
        margin: 10px;
    }
    p{
        font-family:sans-serif;
        font-size: 20px;
        margin: 20px;
    }
</style>


    <h1>{{centro.centre}}</h1>
    <p>Descripción</p>
    <ul>
        <li>id: {{centro.id}}</li>
        <li>Codigo: {{centro.codi}}</li>
        <li>Localidad: {{centro.localitat}}</li>
        <li>Telefono: {{centro.telefon}}</li>
        <li>Query: {{centro.query}}</li>
        

    </ul>
    




{% endblock %}", "home/centro18.html.twig", "/code/templates/home/centro18.html.twig");
    }
}
