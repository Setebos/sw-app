<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a53ddc25aabe48ca3c961ae92e54a3dcafaba00df9e6fba1afdfaa31247e9552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53ddc25aabe48ca3c961ae92e54a3dcafaba00df9e6fba1afdfaa31247e9552->enter($__internal_a53ddc25aabe48ca3c961ae92e54a3dcafaba00df9e6fba1afdfaa31247e9552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6202cbbf8a3dbeb31ec59e381e2846dd99cea2e121171369be5012abb616376c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6202cbbf8a3dbeb31ec59e381e2846dd99cea2e121171369be5012abb616376c->enter($__internal_6202cbbf8a3dbeb31ec59e381e2846dd99cea2e121171369be5012abb616376c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a53ddc25aabe48ca3c961ae92e54a3dcafaba00df9e6fba1afdfaa31247e9552->leave($__internal_a53ddc25aabe48ca3c961ae92e54a3dcafaba00df9e6fba1afdfaa31247e9552_prof);

        
        $__internal_6202cbbf8a3dbeb31ec59e381e2846dd99cea2e121171369be5012abb616376c->leave($__internal_6202cbbf8a3dbeb31ec59e381e2846dd99cea2e121171369be5012abb616376c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6422671f52808f2cc1c1b5ef6e8e628699de20fd3c99e7101d41b6297db166b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6422671f52808f2cc1c1b5ef6e8e628699de20fd3c99e7101d41b6297db166b8->enter($__internal_6422671f52808f2cc1c1b5ef6e8e628699de20fd3c99e7101d41b6297db166b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dff2c27b7c5866a0d40678b99866c5e4676fab7cdc7ab98cae9d5f6cd1bd148d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff2c27b7c5866a0d40678b99866c5e4676fab7cdc7ab98cae9d5f6cd1bd148d->enter($__internal_dff2c27b7c5866a0d40678b99866c5e4676fab7cdc7ab98cae9d5f6cd1bd148d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dff2c27b7c5866a0d40678b99866c5e4676fab7cdc7ab98cae9d5f6cd1bd148d->leave($__internal_dff2c27b7c5866a0d40678b99866c5e4676fab7cdc7ab98cae9d5f6cd1bd148d_prof);

        
        $__internal_6422671f52808f2cc1c1b5ef6e8e628699de20fd3c99e7101d41b6297db166b8->leave($__internal_6422671f52808f2cc1c1b5ef6e8e628699de20fd3c99e7101d41b6297db166b8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8fc59058f3dc8aabf308eb29547d6487da3ead8804110a1be7edcce7d03d6734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fc59058f3dc8aabf308eb29547d6487da3ead8804110a1be7edcce7d03d6734->enter($__internal_8fc59058f3dc8aabf308eb29547d6487da3ead8804110a1be7edcce7d03d6734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5baa0e94e12030145d2f2593c9c369a9f3bcf733028b3543ee942d0f4c618eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5baa0e94e12030145d2f2593c9c369a9f3bcf733028b3543ee942d0f4c618eb3->enter($__internal_5baa0e94e12030145d2f2593c9c369a9f3bcf733028b3543ee942d0f4c618eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5baa0e94e12030145d2f2593c9c369a9f3bcf733028b3543ee942d0f4c618eb3->leave($__internal_5baa0e94e12030145d2f2593c9c369a9f3bcf733028b3543ee942d0f4c618eb3_prof);

        
        $__internal_8fc59058f3dc8aabf308eb29547d6487da3ead8804110a1be7edcce7d03d6734->leave($__internal_8fc59058f3dc8aabf308eb29547d6487da3ead8804110a1be7edcce7d03d6734_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dae1928dec55d54f7d583dd70276b0c2238ed98891cd6194d8b805b7d2968b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae1928dec55d54f7d583dd70276b0c2238ed98891cd6194d8b805b7d2968b92->enter($__internal_dae1928dec55d54f7d583dd70276b0c2238ed98891cd6194d8b805b7d2968b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e410d36c8b764e287811cf0ce2deba05fb3e589eb15860a8811366abd9b21643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e410d36c8b764e287811cf0ce2deba05fb3e589eb15860a8811366abd9b21643->enter($__internal_e410d36c8b764e287811cf0ce2deba05fb3e589eb15860a8811366abd9b21643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e410d36c8b764e287811cf0ce2deba05fb3e589eb15860a8811366abd9b21643->leave($__internal_e410d36c8b764e287811cf0ce2deba05fb3e589eb15860a8811366abd9b21643_prof);

        
        $__internal_dae1928dec55d54f7d583dd70276b0c2238ed98891cd6194d8b805b7d2968b92->leave($__internal_dae1928dec55d54f7d583dd70276b0c2238ed98891cd6194d8b805b7d2968b92_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/sw-app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
