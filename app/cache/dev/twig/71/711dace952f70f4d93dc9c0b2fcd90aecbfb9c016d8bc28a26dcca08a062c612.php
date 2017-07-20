<?php

/* ContactsBundle:Default:index.html.twig */
class __TwigTemplate_7fa77e198cd39d4655daeb0eb7aec97f68f7eb18f433c8deaa9802d716edc9dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "ContactsBundle:Default:index.html.twig", 1);
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
        $__internal_2e039bd466883a7adf154d434c61792e6aee1aef70d874e84dfb5a46eb4ea685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e039bd466883a7adf154d434c61792e6aee1aef70d874e84dfb5a46eb4ea685->enter($__internal_2e039bd466883a7adf154d434c61792e6aee1aef70d874e84dfb5a46eb4ea685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e039bd466883a7adf154d434c61792e6aee1aef70d874e84dfb5a46eb4ea685->leave($__internal_2e039bd466883a7adf154d434c61792e6aee1aef70d874e84dfb5a46eb4ea685_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a00012f0f50ba96093bd97b94b5a4d101efec8c0ee768d7691378960d2fb411a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00012f0f50ba96093bd97b94b5a4d101efec8c0ee768d7691378960d2fb411a->enter($__internal_a00012f0f50ba96093bd97b94b5a4d101efec8c0ee768d7691378960d2fb411a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"ui left aligned container category search\">
        <div class=\"ui icon input\">
            <input class=\"prompt\" type=\"text\" placeholder=\"Search by surname...\">
            <i class=\"search icon\"></i>
        </div>
        <div class=\"results\"></div>
    </div>
    <div>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("frm");
        echo "\" class=\"ui right floated button\">
            <i class=\"icon user\"></i>
            Add person
        </a>
    </div>
    <button class=\"ui right floated button\"> Show groups </button>
";
        
        $__internal_a00012f0f50ba96093bd97b94b5a4d101efec8c0ee768d7691378960d2fb411a->leave($__internal_a00012f0f50ba96093bd97b94b5a4d101efec8c0ee768d7691378960d2fb411a_prof);

    }

    public function getTemplateName()
    {
        return "ContactsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
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
    <div class=\"ui left aligned container category search\">
        <div class=\"ui icon input\">
            <input class=\"prompt\" type=\"text\" placeholder=\"Search by surname...\">
            <i class=\"search icon\"></i>
        </div>
        <div class=\"results\"></div>
    </div>
    <div>
        <a href=\"{{ path(\"frm\") }}\" class=\"ui right floated button\">
            <i class=\"icon user\"></i>
            Add person
        </a>
    </div>
    <button class=\"ui right floated button\"> Show groups </button>
{% endblock %}
", "ContactsBundle:Default:index.html.twig", "/home/barbara/Workspace/Warsztat_5/AdressBook/src/ContactsBundle/Resources/views/Default/index.html.twig");
    }
}
