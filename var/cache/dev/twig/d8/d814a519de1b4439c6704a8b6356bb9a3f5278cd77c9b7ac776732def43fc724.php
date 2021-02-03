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

/* homepage.html.twig */
class __TwigTemplate_1011d608cb5f027b5214cdcc4f5ac27514c179d5eee5994d20a897db60806a7e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
<body>
";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 103
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to my Blog!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"/css/styles.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 15
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" height=\"60\" class=\"d-inline-block align-top\" alt=\"\">
        </a>
        <div class=\"navbar-nav\">
            <a class=\"nav-item nav-link active\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">About me</a>
            <a class=\"nav-item nav-link\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createSerie");
        echo "\">Portfolio</a>
            <a class=\"nav-item nav-link\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactPage");
        echo "\">Contact</a>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "
    <div class=\"container\">
    
        <section class=\"title row align-items-center\">
            
            <div class=\"col\">
            </div>
        
            <div class=\"header-img col-2\">
                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/shirley.jpg"), "html", null, true);
        echo "\" height=\"180\" alt=\"\">
            </div>
            <div class=\"header-text col-8\">
                <h1>Shirley Arias</h1>
                <h3>Telecommunications Engineer</h3>
            </div> 

            <div class=\"col\">
            </div> 
        </section>

        <section class=\"row info align-items-center\">
            <article class=\"col\">
            </article>
            <article class=\"col-10\">
                <div class=\"about\">
                     <p>
                        Telecommunications engineer with skills in areas
                        such as communications technology, electronics, computing
                        and telematics. Some soft skills developed through my work experience
                        are teamwork, assertive communication, troubleshooting, decision-making,
                        negotiation, among others. Likewise, I have ease and total
                        disposition to acquire new knowledge. I am currently focused on
                        areas such as IT project management, full stack web development and cybersecurity.
                    </p>
                </div>
                <div class=\"tech-skills\">
                    <h2>Tech Skills</h2>
                    <ul>
                        <li>OS Windows / Linux</li>
                        <li>PHP - Symfony</li>
                        <li>Relational and Non-Relational DDBB</li>
                        <li>Javascript - React</li>
                        <li>Node JS - Express</li>
                        <li>Docker and Git</li>
                        <li>Cybersecurity</li>
                    </ul>
                </div>
                <div class=\"hobbies\">
                    <h2>Hobbies</h2>
                    <ul>
                        <li>Photography</li>
                        <li>Yoga</li>
                        <li>Meditation</li>
                        <li>Writing</li>
                    </ul>
                </div>
                <div class=\"cv text-center\">
                   <h3>Download CV</h3>
                     <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/AriasShirley-CV21-en.jpg"), "html", null, true);
        echo "\" target=\"_blank\">
                        <button type=\"button\" class=\"btn btn-light\">Shirley's CV</button>
                    </a>
                </div>

            </article>
             <article class=\"col\">
            </article>
        </section>

    </div>


    
    
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  274 => 103,  246 => 85,  194 => 36,  183 => 27,  173 => 26,  159 => 22,  155 => 21,  151 => 20,  145 => 17,  141 => 16,  138 => 15,  128 => 14,  114 => 8,  111 => 7,  101 => 6,  82 => 5,  70 => 104,  68 => 103,  66 => 26,  64 => 14,  60 => 12,  58 => 6,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome to my Blog!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"/css/styles.css\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700&display=swap\">
    {% endblock %}
</head>
<body>
{% block header %}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
            <img src=\"{{ asset('img/logo.png') }}\" height=\"60\" class=\"d-inline-block align-top\" alt=\"\">
        </a>
        <div class=\"navbar-nav\">
            <a class=\"nav-item nav-link active\" href=\"{{ path('homepage') }}\">About me</a>
            <a class=\"nav-item nav-link\" href=\"{{ path('createSerie') }}\">Portfolio</a>
            <a class=\"nav-item nav-link\" href=\"{{ path('contactPage') }}\">Contact</a>
        </div>
    </nav>
{% endblock %}
{% block body %}

    <div class=\"container\">
    
        <section class=\"title row align-items-center\">
            
            <div class=\"col\">
            </div>
        
            <div class=\"header-img col-2\">
                <img src=\"{{ asset('img/shirley.jpg') }}\" height=\"180\" alt=\"\">
            </div>
            <div class=\"header-text col-8\">
                <h1>Shirley Arias</h1>
                <h3>Telecommunications Engineer</h3>
            </div> 

            <div class=\"col\">
            </div> 
        </section>

        <section class=\"row info align-items-center\">
            <article class=\"col\">
            </article>
            <article class=\"col-10\">
                <div class=\"about\">
                     <p>
                        Telecommunications engineer with skills in areas
                        such as communications technology, electronics, computing
                        and telematics. Some soft skills developed through my work experience
                        are teamwork, assertive communication, troubleshooting, decision-making,
                        negotiation, among others. Likewise, I have ease and total
                        disposition to acquire new knowledge. I am currently focused on
                        areas such as IT project management, full stack web development and cybersecurity.
                    </p>
                </div>
                <div class=\"tech-skills\">
                    <h2>Tech Skills</h2>
                    <ul>
                        <li>OS Windows / Linux</li>
                        <li>PHP - Symfony</li>
                        <li>Relational and Non-Relational DDBB</li>
                        <li>Javascript - React</li>
                        <li>Node JS - Express</li>
                        <li>Docker and Git</li>
                        <li>Cybersecurity</li>
                    </ul>
                </div>
                <div class=\"hobbies\">
                    <h2>Hobbies</h2>
                    <ul>
                        <li>Photography</li>
                        <li>Yoga</li>
                        <li>Meditation</li>
                        <li>Writing</li>
                    </ul>
                </div>
                <div class=\"cv text-center\">
                   <h3>Download CV</h3>
                     <a href=\"{{ asset('img/AriasShirley-CV21-en.jpg') }}\" target=\"_blank\">
                        <button type=\"button\" class=\"btn btn-light\">Shirley's CV</button>
                    </a>
                </div>

            </article>
             <article class=\"col\">
            </article>
        </section>

    </div>


    
    
    

{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "homepage.html.twig", "/application/templates/homepage.html.twig");
    }
}
