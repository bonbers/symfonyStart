<?php

/* BONBERSPlatformBundle::layout.html.twig */
class __TwigTemplate_3d20e5ddbd9dae2be07e1de55bedd9d12f51c93592d8a9d77cdb93071e8bbe8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "BONBERSPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'bonbers_platform_body' => array($this, 'block_bonbers_platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76de92b0c9487b55ff07802fb13b7e738351616df7921403c2df8b039a4b9dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76de92b0c9487b55ff07802fb13b7e738351616df7921403c2df8b039a4b9dc0->enter($__internal_76de92b0c9487b55ff07802fb13b7e738351616df7921403c2df8b039a4b9dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle::layout.html.twig"));

        $__internal_f312f448c079a05239e2b7821c77e3bf69de90a90f883b7acb079ee9be73a934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f312f448c079a05239e2b7821c77e3bf69de90a90f883b7acb079ee9be73a934->enter($__internal_f312f448c079a05239e2b7821c77e3bf69de90a90f883b7acb079ee9be73a934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BONBERSPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76de92b0c9487b55ff07802fb13b7e738351616df7921403c2df8b039a4b9dc0->leave($__internal_76de92b0c9487b55ff07802fb13b7e738351616df7921403c2df8b039a4b9dc0_prof);

        
        $__internal_f312f448c079a05239e2b7821c77e3bf69de90a90f883b7acb079ee9be73a934->leave($__internal_f312f448c079a05239e2b7821c77e3bf69de90a90f883b7acb079ee9be73a934_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19afcd772e991f86b1e0d2fbfd07da1945c6e9593f4845274a3d88891254b58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19afcd772e991f86b1e0d2fbfd07da1945c6e9593f4845274a3d88891254b58c->enter($__internal_19afcd772e991f86b1e0d2fbfd07da1945c6e9593f4845274a3d88891254b58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9da501009d2c41b5839ceafc64289993726ee7bb01a19bc339c244aea48b3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9da501009d2c41b5839ceafc64289993726ee7bb01a19bc339c244aea48b3d6->enter($__internal_d9da501009d2c41b5839ceafc64289993726ee7bb01a19bc339c244aea48b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_d9da501009d2c41b5839ceafc64289993726ee7bb01a19bc339c244aea48b3d6->leave($__internal_d9da501009d2c41b5839ceafc64289993726ee7bb01a19bc339c244aea48b3d6_prof);

        
        $__internal_19afcd772e991f86b1e0d2fbfd07da1945c6e9593f4845274a3d88891254b58c->leave($__internal_19afcd772e991f86b1e0d2fbfd07da1945c6e9593f4845274a3d88891254b58c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_187ea384632e37c59c5714221f5f4826a11068df442c4872ecf1091e2e624160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_187ea384632e37c59c5714221f5f4826a11068df442c4872ecf1091e2e624160->enter($__internal_187ea384632e37c59c5714221f5f4826a11068df442c4872ecf1091e2e624160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d3bbf2ab5a500a6507df1eacda5a64c1824e4e6469ebf8f0652d24be4f6961a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3bbf2ab5a500a6507df1eacda5a64c1824e4e6469ebf8f0652d24be4f6961a->enter($__internal_3d3bbf2ab5a500a6507df1eacda5a64c1824e4e6469ebf8f0652d24be4f6961a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "        <h1>Annonces</h1><hr>
        ";
        // line 7
        $this->displayBlock('bonbers_platform_body', $context, $blocks);
        
        $__internal_3d3bbf2ab5a500a6507df1eacda5a64c1824e4e6469ebf8f0652d24be4f6961a->leave($__internal_3d3bbf2ab5a500a6507df1eacda5a64c1824e4e6469ebf8f0652d24be4f6961a_prof);

        
        $__internal_187ea384632e37c59c5714221f5f4826a11068df442c4872ecf1091e2e624160->leave($__internal_187ea384632e37c59c5714221f5f4826a11068df442c4872ecf1091e2e624160_prof);

    }

    public function block_bonbers_platform_body($context, array $blocks = array())
    {
        $__internal_504b4cc332a9dce668e74fd23ae5e130d2b4942c9612a27827bdd10c3bf14219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504b4cc332a9dce668e74fd23ae5e130d2b4942c9612a27827bdd10c3bf14219->enter($__internal_504b4cc332a9dce668e74fd23ae5e130d2b4942c9612a27827bdd10c3bf14219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        $__internal_d2d1bf501b333992fcf1bfe059e7887a0ccf02c5abb5f21e10f8cfe8c71c1218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d1bf501b333992fcf1bfe059e7887a0ccf02c5abb5f21e10f8cfe8c71c1218->enter($__internal_d2d1bf501b333992fcf1bfe059e7887a0ccf02c5abb5f21e10f8cfe8c71c1218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bonbers_platform_body"));

        // line 8
        echo "        ";
        
        $__internal_d2d1bf501b333992fcf1bfe059e7887a0ccf02c5abb5f21e10f8cfe8c71c1218->leave($__internal_d2d1bf501b333992fcf1bfe059e7887a0ccf02c5abb5f21e10f8cfe8c71c1218_prof);

        
        $__internal_504b4cc332a9dce668e74fd23ae5e130d2b4942c9612a27827bdd10c3bf14219->leave($__internal_504b4cc332a9dce668e74fd23ae5e130d2b4942c9612a27827bdd10c3bf14219_prof);

    }

    public function getTemplateName()
    {
        return "BONBERSPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 8,  73 => 7,  70 => 6,  61 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %} Annonces - {{ parent() }}{% endblock %}

{% block body %}
        <h1>Annonces</h1><hr>
        {% block bonbers_platform_body %}
        {% endblock %}
{% endblock %}   ", "BONBERSPlatformBundle::layout.html.twig", "/var/www/html/symfonyStart/src/BONBERS/PlatformBundle/Resources/views/layout.html.twig");
    }
}
