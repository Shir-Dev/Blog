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

/* contact.html.twig */
class __TwigTemplate_42d5c85fc2a63600df54a03840f740c0c8665c3201b26f45f5e75dde7fb842de extends Template
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
        // line 2
        return "homepage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.html.twig"));

        $this->parent = $this->loadTemplate("homepage.html.twig", "contact.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
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
    <div class=\"container\">
    
        <section class=\"title row align-items-center\">
            
            <div class=\"col\">
            </div>
        
            <div class=\"header-img col-12 text-center\">
                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/shirley.jpg"), "html", null, true);
        echo "\" height=\"180\" alt=\"\">
            </div>
            <div class=\"header-text col-12 text-center\">
                <h1>Contact Info</h1>
                
                <div class=\"contact-info text-center\">
                    <p>Phone: (+34) 643959109</p>
                    <p>Email: AriasV.Shirley@gmail.com</p>
                    <p>LinkedIn: ShirleyArias</p>
                </div>
            </div> 
            <div class=\"col\">
            </div> 
        </section>
        <section class=\"row align-items-center\">

            <div class=\"col\">
            </div>

            <div class=\"col-8 contact-form-container\">
                <h2>Contact Form</h2>

             
                <form method=\"post\" action=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactPage");
        echo "\" id=\"contact-form\">
                    <div class=\"form-group\">
                        <label for=\"name\">Name</label>
                        <input class=\"form-control\" name=\"name\" id=\"name\" type=\"text\">

                        <label for=\"email\">Email</label>
                        <input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\">
                    </div>

                    <label for=\"message\">Message</label>
                    <textarea rows=\"4\" cols=\"100\" name=\"message\" id=\"message\" class=\"form-control\" form=\"contact-form\">Please, write your message here...
                    </textarea>

                    <div class=\"text-center btn-container\">
                        <input class=\"btn btn-primary\" type=\"submit\">
                    </div>
                </form>
               
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
        return "contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  99 => 16,  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'homepage.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}

    <div class=\"container\">
    
        <section class=\"title row align-items-center\">
            
            <div class=\"col\">
            </div>
        
            <div class=\"header-img col-12 text-center\">
                <img src=\"{{ asset('img/shirley.jpg') }}\" height=\"180\" alt=\"\">
            </div>
            <div class=\"header-text col-12 text-center\">
                <h1>Contact Info</h1>
                
                <div class=\"contact-info text-center\">
                    <p>Phone: (+34) 643959109</p>
                    <p>Email: AriasV.Shirley@gmail.com</p>
                    <p>LinkedIn: ShirleyArias</p>
                </div>
            </div> 
            <div class=\"col\">
            </div> 
        </section>
        <section class=\"row align-items-center\">

            <div class=\"col\">
            </div>

            <div class=\"col-8 contact-form-container\">
                <h2>Contact Form</h2>

             
                <form method=\"post\" action=\"{{ path('contactPage') }}\" id=\"contact-form\">
                    <div class=\"form-group\">
                        <label for=\"name\">Name</label>
                        <input class=\"form-control\" name=\"name\" id=\"name\" type=\"text\">

                        <label for=\"email\">Email</label>
                        <input class=\"form-control\" name=\"email\" id=\"email\" type=\"email\">
                    </div>

                    <label for=\"message\">Message</label>
                    <textarea rows=\"4\" cols=\"100\" name=\"message\" id=\"message\" class=\"form-control\" form=\"contact-form\">Please, write your message here...
                    </textarea>

                    <div class=\"text-center btn-container\">
                        <input class=\"btn btn-primary\" type=\"submit\">
                    </div>
                </form>
               
            </div>

           <div class=\"col\">
            </div>
 
        </section>
    </div>
{% endblock %}", "contact.html.twig", "/application/templates/contact.html.twig");
    }
}
