<?php

/* ::base.html.twig */
class __TwigTemplate_d783a9a356f71c42c15969648485bbd658a1a34d3fc449319b6178f0b56798ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_846e5c9b6b901981a441b513fdb2a4a22d4478e28095d0cbe6b58fc19861991f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846e5c9b6b901981a441b513fdb2a4a22d4478e28095d0cbe6b58fc19861991f->enter($__internal_846e5c9b6b901981a441b513fdb2a4a22d4478e28095d0cbe6b58fc19861991f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </head>
    <body style=\"background-image:url('";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/images/AB_tlo.jpg"), "html", null, true);
        echo "')\">
        <div class=\"ui center aligned container\">
            <div class=\"ui grid\">
                <div class=\"three wide column\"></div>
                    <div class=\"ten wide column apla\">
                        <p>
                            <h1> Address Book </h1><br>
                        </p>
                        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "                    </div>
                <div class=\"three wide column\"></div>
            </div>
        </div>
    </body>
</html>

";
        
        $__internal_846e5c9b6b901981a441b513fdb2a4a22d4478e28095d0cbe6b58fc19861991f->leave($__internal_846e5c9b6b901981a441b513fdb2a4a22d4478e28095d0cbe6b58fc19861991f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e3ff25e28632d561ace0f51109614a250502e66633b281422d5584d11d046bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3ff25e28632d561ace0f51109614a250502e66633b281422d5584d11d046bb->enter($__internal_9e3ff25e28632d561ace0f51109614a250502e66633b281422d5584d11d046bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address Book ";
        
        $__internal_9e3ff25e28632d561ace0f51109614a250502e66633b281422d5584d11d046bb->leave($__internal_9e3ff25e28632d561ace0f51109614a250502e66633b281422d5584d11d046bb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_066e5d49bc29a2e343cddd7419aae20052080b66884ab257ab72085aba60512c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066e5d49bc29a2e343cddd7419aae20052080b66884ab257ab72085aba60512c->enter($__internal_066e5d49bc29a2e343cddd7419aae20052080b66884ab257ab72085aba60512c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/semantic/semantic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/css/AB_style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        ";
        
        $__internal_066e5d49bc29a2e343cddd7419aae20052080b66884ab257ab72085aba60512c->leave($__internal_066e5d49bc29a2e343cddd7419aae20052080b66884ab257ab72085aba60512c_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b27471e9cb5fe2cf99a002a6f7cf49aff64ecfd81dc0732faef0c619b269129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b27471e9cb5fe2cf99a002a6f7cf49aff64ecfd81dc0732faef0c619b269129->enter($__internal_4b27471e9cb5fe2cf99a002a6f7cf49aff64ecfd81dc0732faef0c619b269129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/semantic/semantic.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_4b27471e9cb5fe2cf99a002a6f7cf49aff64ecfd81dc0732faef0c619b269129->leave($__internal_4b27471e9cb5fe2cf99a002a6f7cf49aff64ecfd81dc0732faef0c619b269129_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b1e8944ca1858bf08e051e5c67121d794b922d2fe6e99c88ea5ae4c1b4c5c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1e8944ca1858bf08e051e5c67121d794b922d2fe6e99c88ea5ae4c1b4c5c13->enter($__internal_3b1e8944ca1858bf08e051e5c67121d794b922d2fe6e99c88ea5ae4c1b4c5c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b1e8944ca1858bf08e051e5c67121d794b922d2fe6e99c88ea5ae4c1b4c5c13->leave($__internal_3b1e8944ca1858bf08e051e5c67121d794b922d2fe6e99c88ea5ae4c1b4c5c13_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 22,  109 => 11,  103 => 10,  94 => 8,  89 => 7,  83 => 6,  71 => 5,  57 => 23,  55 => 22,  44 => 14,  41 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %} Address Book {% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('/semantic/semantic.css') }}\" rel=\"stylesheet\"/>
            <link href=\"{{ asset('/css/AB_style.css') }}\" rel=\"stylesheet\"/>
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('/semantic/semantic.js') }}\"></script>
        {% endblock %}
    </head>
    <body style=\"background-image:url('{{ asset('/images/AB_tlo.jpg') }}')\">
        <div class=\"ui center aligned container\">
            <div class=\"ui grid\">
                <div class=\"three wide column\"></div>
                    <div class=\"ten wide column apla\">
                        <p>
                            <h1> Address Book </h1><br>
                        </p>
                        {% block body %}{% endblock %}
                    </div>
                <div class=\"three wide column\"></div>
            </div>
        </div>
    </body>
</html>

", "::base.html.twig", "/home/barbara/Workspace/AddressBook/app/Resources/views/base.html.twig");
    }
}
