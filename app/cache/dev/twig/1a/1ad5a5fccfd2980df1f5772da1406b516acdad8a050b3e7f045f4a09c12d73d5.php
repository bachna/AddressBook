<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_70e7f6d6d28cfb5d80751ce9547d7f9bf389f50701150ba1614c7bce092aa243 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24db296c8924801cbafc91fb0a2ed4b9625f968defd44eed92569a25df472d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24db296c8924801cbafc91fb0a2ed4b9625f968defd44eed92569a25df472d03->enter($__internal_24db296c8924801cbafc91fb0a2ed4b9625f968defd44eed92569a25df472d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24db296c8924801cbafc91fb0a2ed4b9625f968defd44eed92569a25df472d03->leave($__internal_24db296c8924801cbafc91fb0a2ed4b9625f968defd44eed92569a25df472d03_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c1aabfb34e147622fa6552a48891eec05e89efcf250799e49e5fc756933ac50b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1aabfb34e147622fa6552a48891eec05e89efcf250799e49e5fc756933ac50b->enter($__internal_c1aabfb34e147622fa6552a48891eec05e89efcf250799e49e5fc756933ac50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c1aabfb34e147622fa6552a48891eec05e89efcf250799e49e5fc756933ac50b->leave($__internal_c1aabfb34e147622fa6552a48891eec05e89efcf250799e49e5fc756933ac50b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f597050e08ea9bd0964629ad3d0ef9c59fc7aea806235a090197b9500ed223e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f597050e08ea9bd0964629ad3d0ef9c59fc7aea806235a090197b9500ed223e->enter($__internal_7f597050e08ea9bd0964629ad3d0ef9c59fc7aea806235a090197b9500ed223e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f597050e08ea9bd0964629ad3d0ef9c59fc7aea806235a090197b9500ed223e->leave($__internal_7f597050e08ea9bd0964629ad3d0ef9c59fc7aea806235a090197b9500ed223e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_04ae874961e12336b11281e4568ea99a94f47aba25e9b5e8725504f180984575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ae874961e12336b11281e4568ea99a94f47aba25e9b5e8725504f180984575->enter($__internal_04ae874961e12336b11281e4568ea99a94f47aba25e9b5e8725504f180984575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_04ae874961e12336b11281e4568ea99a94f47aba25e9b5e8725504f180984575->leave($__internal_04ae874961e12336b11281e4568ea99a94f47aba25e9b5e8725504f180984575_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/barbara/Workspace/Warsztat_5/AdressBook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
