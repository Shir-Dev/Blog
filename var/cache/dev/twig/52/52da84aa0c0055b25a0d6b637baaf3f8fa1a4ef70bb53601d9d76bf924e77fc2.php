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

/* createSerie.html.twig */
class __TwigTemplate_9c96b86580bfad76a84f517157495e6de2b71e028c39be02c4523bf91ce4cba2 extends Template
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
        return "homepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "createSerie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "createSerie.html.twig"));

        $this->parent = $this->loadTemplate("homepage.html.twig", "createSerie.html.twig", 1);
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

        echo "Portfolio - Movies";
        
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
        echo "
    <div class=\"container\">

        <section class=\"title row align-items-center\">
            
            <div class=\"col\">
            </div>
            <div class=\"col-8 text-center\">
                <div class=\"add-serie-container\">
                    <h1>Adding a Serie to a Json</h1>

                    ";
        // line 17
        if ((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                        <p>Title: ";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "</p>
                    ";
        }
        // line 20
        echo "                    ";
        if ((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "                        <p>Category: ";
            echo twig_escape_filter($this->env, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 21, $this->source); })()), "html", null, true);
            echo "</p>
                    ";
        }
        // line 23
        echo "                    ";
        if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 23, $this->source); })())) {
            // line 24
            echo "                        <p>Description: ";
            echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "</p>
                    ";
        }
        // line 26
        echo "
                    <div class=\"form-container\">
                        <form method=\"post\" action=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createSerie");
        echo "\">
                            <div class=\"form-group\" id=\"serie-form\">
                                <label for=\"title\">Title</label>
                                <input name=\"title\" type=\"text\">

                                <label for=\"description\">Description</label>
                                <input name=\"description\" type=\"textarea\">

                                <label for=\"category\">Category</label>
                                <select name=\"category\">
                                    <option name=\"sci-fi\">Sci-Fi</option>
                                    <option name=\"drama\">Drama</option>
                                    <option name=\"fantasy\">Fantasy</option>
                                </select>

                                <div class=\"text-center btn-container\">
                                    <input class=\"btn btn-primary\" type=\"submit\">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"git-link\">
                    <h2>
                        For more projects, please visit my git:
                        </br>
                        <a href=\"https://github.com/Shir-Dev\">https://github.com/Shir-Dev</a>
                    </h2>
                </div>
            </div>
            <div class=\"col\">
            </div>
        </section>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "createSerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 28,  127 => 26,  121 => 24,  118 => 23,  112 => 21,  109 => 20,  103 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'homepage.html.twig' %}

{% block title %}Portfolio - Movies{% endblock %}

{% block body %}

    <div class=\"container\">

        <section class=\"title row align-items-center\">
            
            <div class=\"col\">
            </div>
            <div class=\"col-8 text-center\">
                <div class=\"add-serie-container\">
                    <h1>Adding a Serie to a Json</h1>

                    {% if title %}
                        <p>Title: {{ title }}</p>
                    {% endif %}
                    {% if category %}
                        <p>Category: {{ category }}</p>
                    {% endif %}
                    {% if description %}
                        <p>Description: {{ description }}</p>
                    {% endif %}

                    <div class=\"form-container\">
                        <form method=\"post\" action=\"{{ path('createSerie') }}\">
                            <div class=\"form-group\" id=\"serie-form\">
                                <label for=\"title\">Title</label>
                                <input name=\"title\" type=\"text\">

                                <label for=\"description\">Description</label>
                                <input name=\"description\" type=\"textarea\">

                                <label for=\"category\">Category</label>
                                <select name=\"category\">
                                    <option name=\"sci-fi\">Sci-Fi</option>
                                    <option name=\"drama\">Drama</option>
                                    <option name=\"fantasy\">Fantasy</option>
                                </select>

                                <div class=\"text-center btn-container\">
                                    <input class=\"btn btn-primary\" type=\"submit\">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"git-link\">
                    <h2>
                        For more projects, please visit my git:
                        </br>
                        <a href=\"https://github.com/Shir-Dev\">https://github.com/Shir-Dev</a>
                    </h2>
                </div>
            </div>
            <div class=\"col\">
            </div>
        </section>

    </div>

{% endblock %}", "createSerie.html.twig", "/application/templates/createSerie.html.twig");
    }
}
