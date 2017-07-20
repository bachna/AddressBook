<?php

/* ::base.html.twig */
class __TwigTemplate_f8e7c70a27d7a2d9e0b3fe1176495b03ae6b1cc0acdb8e884021785e826552b6 extends Twig_Template
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
        $__internal_3b944c10178d431d42cbdefb944b501ff48ebfa78c193e7710deea11608c47b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b944c10178d431d42cbdefb944b501ff48ebfa78c193e7710deea11608c47b1->enter($__internal_3b944c10178d431d42cbdefb944b501ff48ebfa78c193e7710deea11608c47b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 9
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </head>
    <body>
        <div class=\"ui center aligned container\">
            <div class=\"ui grid\">
                <div class=\"four wide column\"></div>
                <div class=\"eight wide column\">
                    <p>
                    <h1> Address Book </h1><br>
                    </p>
                    ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "                </div>
                <div class=\"four wide column\"></div>
            </div>
        </div>
    </body>
</html>

";
        
        $__internal_3b944c10178d431d42cbdefb944b501ff48ebfa78c193e7710deea11608c47b1->leave($__internal_3b944c10178d431d42cbdefb944b501ff48ebfa78c193e7710deea11608c47b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e6005c6a0fb55ecee4f79c91c14c04db2112bd04f9b1507ca84b7b6d57d5c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e6005c6a0fb55ecee4f79c91c14c04db2112bd04f9b1507ca84b7b6d57d5c8d->enter($__internal_9e6005c6a0fb55ecee4f79c91c14c04db2112bd04f9b1507ca84b7b6d57d5c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Address Book ";
        
        $__internal_9e6005c6a0fb55ecee4f79c91c14c04db2112bd04f9b1507ca84b7b6d57d5c8d->leave($__internal_9e6005c6a0fb55ecee4f79c91c14c04db2112bd04f9b1507ca84b7b6d57d5c8d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8ae05e2a8ba9681d1ce01e39a2a9d3ec0b4fe9445be33ebc5881e218aa677099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae05e2a8ba9681d1ce01e39a2a9d3ec0b4fe9445be33ebc5881e218aa677099->enter($__internal_8ae05e2a8ba9681d1ce01e39a2a9d3ec0b4fe9445be33ebc5881e218aa677099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/semantic/semantic.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        ";
        
        $__internal_8ae05e2a8ba9681d1ce01e39a2a9d3ec0b4fe9445be33ebc5881e218aa677099->leave($__internal_8ae05e2a8ba9681d1ce01e39a2a9d3ec0b4fe9445be33ebc5881e218aa677099_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac117837aa6ee92b9ffb1cd64e542ca2f4be6e12295dba493772d539d9ab67cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac117837aa6ee92b9ffb1cd64e542ca2f4be6e12295dba493772d539d9ab67cc->enter($__internal_ac117837aa6ee92b9ffb1cd64e542ca2f4be6e12295dba493772d539d9ab67cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/semantic/semantic.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_ac117837aa6ee92b9ffb1cd64e542ca2f4be6e12295dba493772d539d9ab67cc->leave($__internal_ac117837aa6ee92b9ffb1cd64e542ca2f4be6e12295dba493772d539d9ab67cc_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_8db558bfc36d368582a51f290783d7890736d1236cc417fecacc6f1b2d16f5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db558bfc36d368582a51f290783d7890736d1236cc417fecacc6f1b2d16f5b5->enter($__internal_8db558bfc36d368582a51f290783d7890736d1236cc417fecacc6f1b2d16f5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8db558bfc36d368582a51f290783d7890736d1236cc417fecacc6f1b2d16f5b5->leave($__internal_8db558bfc36d368582a51f290783d7890736d1236cc417fecacc6f1b2d16f5b5_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 21,  102 => 10,  96 => 9,  86 => 7,  80 => 6,  68 => 5,  54 => 22,  52 => 21,  41 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
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
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('/semantic/semantic.js') }}\"></script>
        {% endblock %}
    </head>
    <body>
        <div class=\"ui center aligned container\">
            <div class=\"ui grid\">
                <div class=\"four wide column\"></div>
                <div class=\"eight wide column\">
                    <p>
                    <h1> Address Book </h1><br>
                    </p>
                    {% block body %}{% endblock %}
                </div>
                <div class=\"four wide column\"></div>
            </div>
        </div>
    </body>
</html>

", "::base.html.twig", "/home/barbara/Workspace/Warsztat_5/AdressBook/app/Resources/views/base.html.twig");
    }
}
