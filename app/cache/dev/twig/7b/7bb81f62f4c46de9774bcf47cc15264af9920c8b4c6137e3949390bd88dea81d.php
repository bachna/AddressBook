<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ea12bab4332d892dbf93f54844978c2246bd52023bb23c2f0a7e07492c11e3c8 extends Twig_Template
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
        $__internal_d96ed64303b9fad2393bee0cc3de78793495dc6509884c84442d6f8fd33a7045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96ed64303b9fad2393bee0cc3de78793495dc6509884c84442d6f8fd33a7045->enter($__internal_d96ed64303b9fad2393bee0cc3de78793495dc6509884c84442d6f8fd33a7045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d96ed64303b9fad2393bee0cc3de78793495dc6509884c84442d6f8fd33a7045->leave($__internal_d96ed64303b9fad2393bee0cc3de78793495dc6509884c84442d6f8fd33a7045_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5dcfa809e9bb9a21e8f1ac4c528e37564cc866207ab7d0d64be8d87143f960f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dcfa809e9bb9a21e8f1ac4c528e37564cc866207ab7d0d64be8d87143f960f4->enter($__internal_5dcfa809e9bb9a21e8f1ac4c528e37564cc866207ab7d0d64be8d87143f960f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5dcfa809e9bb9a21e8f1ac4c528e37564cc866207ab7d0d64be8d87143f960f4->leave($__internal_5dcfa809e9bb9a21e8f1ac4c528e37564cc866207ab7d0d64be8d87143f960f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f002356cf695761a7e87a009fa711f29078ee9aeed46efb89c5bed41adfd7c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f002356cf695761a7e87a009fa711f29078ee9aeed46efb89c5bed41adfd7c97->enter($__internal_f002356cf695761a7e87a009fa711f29078ee9aeed46efb89c5bed41adfd7c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f002356cf695761a7e87a009fa711f29078ee9aeed46efb89c5bed41adfd7c97->leave($__internal_f002356cf695761a7e87a009fa711f29078ee9aeed46efb89c5bed41adfd7c97_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ce79dea0f6b6c71eb7a16c671d06f4fad832c8e2dcffc1f665b91a4a380f742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce79dea0f6b6c71eb7a16c671d06f4fad832c8e2dcffc1f665b91a4a380f742->enter($__internal_9ce79dea0f6b6c71eb7a16c671d06f4fad832c8e2dcffc1f665b91a4a380f742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ce79dea0f6b6c71eb7a16c671d06f4fad832c8e2dcffc1f665b91a4a380f742->leave($__internal_9ce79dea0f6b6c71eb7a16c671d06f4fad832c8e2dcffc1f665b91a4a380f742_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/barbara/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
