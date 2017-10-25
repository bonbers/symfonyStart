<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_8e967a462fa68a5a795a710e5512f3cbbdd29af05c82c6fabe6f7d7999ebf70d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5331a561a75041c0fc272146b1f3a249fc29a1835fbc10f09614d389e4ebf6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5331a561a75041c0fc272146b1f3a249fc29a1835fbc10f09614d389e4ebf6d5->enter($__internal_5331a561a75041c0fc272146b1f3a249fc29a1835fbc10f09614d389e4ebf6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_95f2ffa6596b71693635a5ec0a8ff23a851e1fa5ce91a4171a5bb828a09b21aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f2ffa6596b71693635a5ec0a8ff23a851e1fa5ce91a4171a5bb828a09b21aa->enter($__internal_95f2ffa6596b71693635a5ec0a8ff23a851e1fa5ce91a4171a5bb828a09b21aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5331a561a75041c0fc272146b1f3a249fc29a1835fbc10f09614d389e4ebf6d5->leave($__internal_5331a561a75041c0fc272146b1f3a249fc29a1835fbc10f09614d389e4ebf6d5_prof);

        
        $__internal_95f2ffa6596b71693635a5ec0a8ff23a851e1fa5ce91a4171a5bb828a09b21aa->leave($__internal_95f2ffa6596b71693635a5ec0a8ff23a851e1fa5ce91a4171a5bb828a09b21aa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c31773bd0c19ea3f8f454dedb6ee49ff66110df2be5885cbd75c94ad01d280c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31773bd0c19ea3f8f454dedb6ee49ff66110df2be5885cbd75c94ad01d280c0->enter($__internal_c31773bd0c19ea3f8f454dedb6ee49ff66110df2be5885cbd75c94ad01d280c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c519ed09c42a8ba26a549cdb54fcc3475b1c28353236a8d0e909da367bb0527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c519ed09c42a8ba26a549cdb54fcc3475b1c28353236a8d0e909da367bb0527->enter($__internal_7c519ed09c42a8ba26a549cdb54fcc3475b1c28353236a8d0e909da367bb0527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7c519ed09c42a8ba26a549cdb54fcc3475b1c28353236a8d0e909da367bb0527->leave($__internal_7c519ed09c42a8ba26a549cdb54fcc3475b1c28353236a8d0e909da367bb0527_prof);

        
        $__internal_c31773bd0c19ea3f8f454dedb6ee49ff66110df2be5885cbd75c94ad01d280c0->leave($__internal_c31773bd0c19ea3f8f454dedb6ee49ff66110df2be5885cbd75c94ad01d280c0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/symfonyStart/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
