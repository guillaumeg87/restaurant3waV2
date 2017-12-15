<?php

/* interfaces.twig */
class __TwigTemplate_5907581d384aad65d69baf389053080ad082099e5d69b718620f95a24590b559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.twig", "interfaces.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_c81f5968fc2c3323bf8cd3218f875cf6477e406a355060722fb11930b9f05729"] = $this->loadTemplate("macros.twig", "interfaces.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Interfaces | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body_class($context, array $blocks = array())
    {
        echo "interfaces";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"page-header\">
        <h1>Interfaces</h1>
    </div>

    ";
        // line 11
        echo $context["__internal_c81f5968fc2c3323bf8cd3218f875cf6477e406a355060722fb11930b9f05729"]->macro_render_classes((isset($context["interfaces"]) || array_key_exists("interfaces", $context) ? $context["interfaces"] : (function () { throw new Twig_Error_Runtime('Variable "interfaces" does not exist.', 11, $this->getSourceContext()); })()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "interfaces.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  49 => 7,  46 => 6,  40 => 4,  33 => 3,  29 => 1,  27 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/layout.twig\" %}
{% from \"macros.twig\" import render_classes %}
{% block title %}Interfaces | {{ parent() }}{% endblock %}
{% block body_class 'interfaces' %}

{% block page_content %}
    <div class=\"page-header\">
        <h1>Interfaces</h1>
    </div>

    {{ render_classes(interfaces) }}
{% endblock %}
", "interfaces.twig", "/home/wap45/sites/DEVELOPPEMENT/jour23-projet/Projet-code_de_depart/vendor/sami/sami/Sami/Resources/themes/default/interfaces.twig");
    }
}
