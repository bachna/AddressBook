<?php

/* ContactsBundle:Person:form.html.twig */
class __TwigTemplate_1eca7755d76efaed8c5e613e20a050d1e914707463a60a547e9a0d0c3a6a254c extends Twig_Template
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
        $__internal_98acef9bd4f933d1d72dc989405778d512e5be3999c2150bc834677c385bbf3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98acef9bd4f933d1d72dc989405778d512e5be3999c2150bc834677c385bbf3b->enter($__internal_98acef9bd4f933d1d72dc989405778d512e5be3999c2150bc834677c385bbf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactsBundle:Person:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98acef9bd4f933d1d72dc989405778d512e5be3999c2150bc834677c385bbf3b->leave($__internal_98acef9bd4f933d1d72dc989405778d512e5be3999c2150bc834677c385bbf3b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd48ba1c4777f45d86e45232b8d34b4aa0495ffe5855dbcf9ef1ab8c5b449d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd48ba1c4777f45d86e45232b8d34b4aa0495ffe5855dbcf9ef1ab8c5b449d9d->enter($__internal_fd48ba1c4777f45d86e45232b8d34b4aa0495ffe5855dbcf9ef1ab8c5b449d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <form class=\"ui left aligned container form\">
        <div class=\"ui divider\"></div>
        <div class=\"field\">
            <label>* Name</label>
            <input type=\"text\" name=\"name\" placeholder=\"Type name\">
        </div>
        <div class=\"field\">
            <label>* Surname</label>
            <input type=\"text\" name=\"surname\" placeholder=\"Type surname\">
        </div>
        <div class=\"field\">
            <label>Description</label>
            <textarea name=\"description\"></textarea>
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
        
        $__internal_fd48ba1c4777f45d86e45232b8d34b4aa0495ffe5855dbcf9ef1ab8c5b449d9d->leave($__internal_fd48ba1c4777f45d86e45232b8d34b4aa0495ffe5855dbcf9ef1ab8c5b449d9d_prof);

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
            <label>* Name</label>
            <input type=\"text\" name=\"name\" placeholder=\"Type name\">
        </div>
        <div class=\"field\">
            <label>* Surname</label>
            <input type=\"text\" name=\"surname\" placeholder=\"Type surname\">
        </div>
        <div class=\"field\">
            <label>Description</label>
            <textarea name=\"description\"></textarea>
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

", "ContactsBundle:Person:form.html.twig", "/home/barbara/Workspace/AddressBook/src/ContactsBundle/Resources/views/Person/form.html.twig");
    }
}
