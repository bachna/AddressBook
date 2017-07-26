<?php

/* ContactsBundle:Default:index.html.twig */
class __TwigTemplate_528ec090bd15348ec2069369f72da50becfbf1bdcc6e4522dfe4e87b28c8f4a7 extends Twig_Template
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
        $__internal_bd1b796ea608bbc4265873d7206f06a023d75e24598386d0e63f71d0e096a424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1b796ea608bbc4265873d7206f06a023d75e24598386d0e63f71d0e096a424->enter($__internal_bd1b796ea608bbc4265873d7206f06a023d75e24598386d0e63f71d0e096a424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ContactsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd1b796ea608bbc4265873d7206f06a023d75e24598386d0e63f71d0e096a424->leave($__internal_bd1b796ea608bbc4265873d7206f06a023d75e24598386d0e63f71d0e096a424_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c5e237874fa55fd5dd89f6633ff4ed42d7275d80dfcaa0467727b3e8889a329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5e237874fa55fd5dd89f6633ff4ed42d7275d80dfcaa0467727b3e8889a329->enter($__internal_8c5e237874fa55fd5dd89f6633ff4ed42d7275d80dfcaa0467727b3e8889a329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1> koniec</h1>
";
        
        $__internal_8c5e237874fa55fd5dd89f6633ff4ed42d7275d80dfcaa0467727b3e8889a329->leave($__internal_8c5e237874fa55fd5dd89f6633ff4ed42d7275d80dfcaa0467727b3e8889a329_prof);

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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1> koniec</h1>
{% endblock %}
", "ContactsBundle:Default:index.html.twig", "/home/barbara/Workspace/AddressBook/src/ContactsBundle/Resources/views/Default/index.html.twig");
    }
}
