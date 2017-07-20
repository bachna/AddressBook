<?php

/* ContactsBundle:Person:form.html.twig */
class __TwigTemplate_9c4aa18beeeafa40e5bb40b2f523311c3a4818dc1be508888acb4e6be9d90769 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ContactsBundle:Person:form.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_181c13b9c6ab3f77618df28723489e6612f129140de2943170b5bfebc52f7128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181c13b9c6ab3f77618df28723489e6612f129140de2943170b5bfebc52f7128->enter($__internal_181c13b9c6ab3f77618df28723489e6612f129140de2943170b5bfebc52f7128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactsBundle:Person:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_181c13b9c6ab3f77618df28723489e6612f129140de2943170b5bfebc52f7128->leave($__internal_181c13b9c6ab3f77618df28723489e6612f129140de2943170b5bfebc52f7128_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_064e238b4a559c9b78f8bd1b2f2d3fa7fc7ce5f6d5000b071c0f311c39312e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064e238b4a559c9b78f8bd1b2f2d3fa7fc7ce5f6d5000b071c0f311c39312e53->enter($__internal_064e238b4a559c9b78f8bd1b2f2d3fa7fc7ce5f6d5000b071c0f311c39312e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form class=\"ui left aligned container form\">
        <div class=\"ui divider\"></div>
        <div class=\"field\">
            <label>* First Name</label>
            <input type=\"text\" name=\"first_name\" placeholder=\"Type first name\">
        </div>
        <div class=\"field\">
            <label>* Last Name</label>
            <input type=\"text\" name=\"last_name\" placeholder=\"Type last name\">
        </div>
        <div class=\"field\">
            <label>Description</label>
            <textarea name=\"descriptiion\"></textarea>
        </div>
        <div class=\"field left aligned\">
            <label>Street</label>
            <input type=\"text\" name=\"street\" placeholder=\"Type street\">
        </div>
        <div class=\"field left aligned\">
            <label>Postal code</label>
            <input type=\"text\" name=\"postal_code\" placeholder=\"Type postal code\">
        </div>
        <div class=\"field left aligned\">
            <label>City</label>
            <input type=\"text\" name=\"city\" placeholder=\"Type city\">
        </div>
        <div class=\"field\">
            <div class=\"ui checkbox\">
                <input type=\"checkbox\" tabindex=\"0\" class=\"hidden\">
                <label>I agree to the Terms and Conditions</label>
            </div>
        </div>
        <button class=\"ui button\" type=\"submit\">Submit</button>
    </form>
";
        
        $__internal_064e238b4a559c9b78f8bd1b2f2d3fa7fc7ce5f6d5000b071c0f311c39312e53->leave($__internal_064e238b4a559c9b78f8bd1b2f2d3fa7fc7ce5f6d5000b071c0f311c39312e53_prof);

    }

    public function getTemplateName()
    {
        return "ContactsBundle:Person:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block body %}
    <form class=\"ui left aligned container form\">
        <div class=\"ui divider\"></div>
        <div class=\"field\">
            <label>* First Name</label>
            <input type=\"text\" name=\"first_name\" placeholder=\"Type first name\">
        </div>
        <div class=\"field\">
            <label>* Last Name</label>
            <input type=\"text\" name=\"last_name\" placeholder=\"Type last name\">
        </div>
        <div class=\"field\">
            <label>Description</label>
            <textarea name=\"descriptiion\"></textarea>
        </div>
        <div class=\"field left aligned\">
            <label>Street</label>
            <input type=\"text\" name=\"street\" placeholder=\"Type street\">
        </div>
        <div class=\"field left aligned\">
            <label>Postal code</label>
            <input type=\"text\" name=\"postal_code\" placeholder=\"Type postal code\">
        </div>
        <div class=\"field left aligned\">
            <label>City</label>
            <input type=\"text\" name=\"city\" placeholder=\"Type city\">
        </div>
        <div class=\"field\">
            <div class=\"ui checkbox\">
                <input type=\"checkbox\" tabindex=\"0\" class=\"hidden\">
                <label>I agree to the Terms and Conditions</label>
            </div>
        </div>
        <button class=\"ui button\" type=\"submit\">Submit</button>
    </form>
{% endblock %}

", "ContactsBundle:Person:form.html.twig", "/home/barbara/Workspace/Warsztat_5/AdressBook/src/ContactsBundle/Resources/views/Person/form.html.twig");
    }
}
