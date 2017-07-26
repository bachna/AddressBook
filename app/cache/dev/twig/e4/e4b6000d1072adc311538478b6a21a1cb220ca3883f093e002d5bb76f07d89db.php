<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_38c996e390f531201e50adc60b2d89c79ea79043b054078c1aefd05d82be2668 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41d7a31729c43d754be69d2c44ed6a7d20645e33a945ec43a67391e8785f4a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d7a31729c43d754be69d2c44ed6a7d20645e33a945ec43a67391e8785f4a18->enter($__internal_41d7a31729c43d754be69d2c44ed6a7d20645e33a945ec43a67391e8785f4a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41d7a31729c43d754be69d2c44ed6a7d20645e33a945ec43a67391e8785f4a18->leave($__internal_41d7a31729c43d754be69d2c44ed6a7d20645e33a945ec43a67391e8785f4a18_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_97e337266a65f761a717e7aba8537e6bb2b373b35f6e9fae29117333e9768e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e337266a65f761a717e7aba8537e6bb2b373b35f6e9fae29117333e9768e13->enter($__internal_97e337266a65f761a717e7aba8537e6bb2b373b35f6e9fae29117333e9768e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_97e337266a65f761a717e7aba8537e6bb2b373b35f6e9fae29117333e9768e13->leave($__internal_97e337266a65f761a717e7aba8537e6bb2b373b35f6e9fae29117333e9768e13_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c05b9ecaeb664fe7134dd141541e6dd03b77ddd1bf65937740aacd078128fb1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05b9ecaeb664fe7134dd141541e6dd03b77ddd1bf65937740aacd078128fb1c->enter($__internal_c05b9ecaeb664fe7134dd141541e6dd03b77ddd1bf65937740aacd078128fb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c05b9ecaeb664fe7134dd141541e6dd03b77ddd1bf65937740aacd078128fb1c->leave($__internal_c05b9ecaeb664fe7134dd141541e6dd03b77ddd1bf65937740aacd078128fb1c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b44816a4461e8956bc7dc526fb42d55584e414d29acf6b43298d13cb43fe21a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b44816a4461e8956bc7dc526fb42d55584e414d29acf6b43298d13cb43fe21a->enter($__internal_7b44816a4461e8956bc7dc526fb42d55584e414d29acf6b43298d13cb43fe21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7b44816a4461e8956bc7dc526fb42d55584e414d29acf6b43298d13cb43fe21a->leave($__internal_7b44816a4461e8956bc7dc526fb42d55584e414d29acf6b43298d13cb43fe21a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/barbara/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
