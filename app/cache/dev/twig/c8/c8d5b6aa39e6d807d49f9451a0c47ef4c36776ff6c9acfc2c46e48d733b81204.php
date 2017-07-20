<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5d1b99ed421045eda868521b5af213581d75039243dc9402f1937a3ce5023cc1 extends Twig_Template
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
        $__internal_088680bbcf93dcb9ab5df12bc212a3a1d6b2ff1e32535309cf39c972480281e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_088680bbcf93dcb9ab5df12bc212a3a1d6b2ff1e32535309cf39c972480281e7->enter($__internal_088680bbcf93dcb9ab5df12bc212a3a1d6b2ff1e32535309cf39c972480281e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_088680bbcf93dcb9ab5df12bc212a3a1d6b2ff1e32535309cf39c972480281e7->leave($__internal_088680bbcf93dcb9ab5df12bc212a3a1d6b2ff1e32535309cf39c972480281e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_52275bd1132d4266e44f80ee3f90794357a754bdabdb0402f9bc8f15885e2d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52275bd1132d4266e44f80ee3f90794357a754bdabdb0402f9bc8f15885e2d0d->enter($__internal_52275bd1132d4266e44f80ee3f90794357a754bdabdb0402f9bc8f15885e2d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_52275bd1132d4266e44f80ee3f90794357a754bdabdb0402f9bc8f15885e2d0d->leave($__internal_52275bd1132d4266e44f80ee3f90794357a754bdabdb0402f9bc8f15885e2d0d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_00d30ca16003e595413dda1edf375a4196b98326f267c2d282398410647c78eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d30ca16003e595413dda1edf375a4196b98326f267c2d282398410647c78eb->enter($__internal_00d30ca16003e595413dda1edf375a4196b98326f267c2d282398410647c78eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_00d30ca16003e595413dda1edf375a4196b98326f267c2d282398410647c78eb->leave($__internal_00d30ca16003e595413dda1edf375a4196b98326f267c2d282398410647c78eb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc94659001fae23ef4477055a7b2778158e099c7e0d22db5daee8e1c0b6c8f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc94659001fae23ef4477055a7b2778158e099c7e0d22db5daee8e1c0b6c8f53->enter($__internal_dc94659001fae23ef4477055a7b2778158e099c7e0d22db5daee8e1c0b6c8f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dc94659001fae23ef4477055a7b2778158e099c7e0d22db5daee8e1c0b6c8f53->leave($__internal_dc94659001fae23ef4477055a7b2778158e099c7e0d22db5daee8e1c0b6c8f53_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/barbara/Workspace/Warsztat_5/AdressBook/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
