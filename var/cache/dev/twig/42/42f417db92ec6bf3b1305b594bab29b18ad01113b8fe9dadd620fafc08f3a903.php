<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
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
        $__internal_e7e815e00cc69320b39998b083fed789655aa9306b11c447f8f7b713144d3ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e815e00cc69320b39998b083fed789655aa9306b11c447f8f7b713144d3ae9->enter($__internal_e7e815e00cc69320b39998b083fed789655aa9306b11c447f8f7b713144d3ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e97d2a5f5499ce910da84b30f0f2997266a574cd11d3885b90fb71450a517db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97d2a5f5499ce910da84b30f0f2997266a574cd11d3885b90fb71450a517db7->enter($__internal_e97d2a5f5499ce910da84b30f0f2997266a574cd11d3885b90fb71450a517db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7e815e00cc69320b39998b083fed789655aa9306b11c447f8f7b713144d3ae9->leave($__internal_e7e815e00cc69320b39998b083fed789655aa9306b11c447f8f7b713144d3ae9_prof);

        
        $__internal_e97d2a5f5499ce910da84b30f0f2997266a574cd11d3885b90fb71450a517db7->leave($__internal_e97d2a5f5499ce910da84b30f0f2997266a574cd11d3885b90fb71450a517db7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce0ba686c4405e1a77672932a17fe9935e0e142ce978281dc64edba2b32bae66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0ba686c4405e1a77672932a17fe9935e0e142ce978281dc64edba2b32bae66->enter($__internal_ce0ba686c4405e1a77672932a17fe9935e0e142ce978281dc64edba2b32bae66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a8b77b9a8b50caf1914f85411d7f00cbf99691c69c942777672692825c44e887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b77b9a8b50caf1914f85411d7f00cbf99691c69c942777672692825c44e887->enter($__internal_a8b77b9a8b50caf1914f85411d7f00cbf99691c69c942777672692825c44e887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a8b77b9a8b50caf1914f85411d7f00cbf99691c69c942777672692825c44e887->leave($__internal_a8b77b9a8b50caf1914f85411d7f00cbf99691c69c942777672692825c44e887_prof);

        
        $__internal_ce0ba686c4405e1a77672932a17fe9935e0e142ce978281dc64edba2b32bae66->leave($__internal_ce0ba686c4405e1a77672932a17fe9935e0e142ce978281dc64edba2b32bae66_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7731ae888b775e09791e55f49a132be0e21eb5ba985fa7184a3e733236c0aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7731ae888b775e09791e55f49a132be0e21eb5ba985fa7184a3e733236c0aab->enter($__internal_c7731ae888b775e09791e55f49a132be0e21eb5ba985fa7184a3e733236c0aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cfd7ed7de70517f61975bc02fbbea2302da806e6160ad537dd499b85fb157d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd7ed7de70517f61975bc02fbbea2302da806e6160ad537dd499b85fb157d23->enter($__internal_cfd7ed7de70517f61975bc02fbbea2302da806e6160ad537dd499b85fb157d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cfd7ed7de70517f61975bc02fbbea2302da806e6160ad537dd499b85fb157d23->leave($__internal_cfd7ed7de70517f61975bc02fbbea2302da806e6160ad537dd499b85fb157d23_prof);

        
        $__internal_c7731ae888b775e09791e55f49a132be0e21eb5ba985fa7184a3e733236c0aab->leave($__internal_c7731ae888b775e09791e55f49a132be0e21eb5ba985fa7184a3e733236c0aab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57ccb5cf960691ecba34a582424a4867ba730ebb5e180a060eb1d8d9a15398b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ccb5cf960691ecba34a582424a4867ba730ebb5e180a060eb1d8d9a15398b0->enter($__internal_57ccb5cf960691ecba34a582424a4867ba730ebb5e180a060eb1d8d9a15398b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ae4a64d3e224bcf62f4b4b654f96f934757ea0857b375315c6e246b96b05cb2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4a64d3e224bcf62f4b4b654f96f934757ea0857b375315c6e246b96b05cb2c->enter($__internal_ae4a64d3e224bcf62f4b4b654f96f934757ea0857b375315c6e246b96b05cb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae4a64d3e224bcf62f4b4b654f96f934757ea0857b375315c6e246b96b05cb2c->leave($__internal_ae4a64d3e224bcf62f4b4b654f96f934757ea0857b375315c6e246b96b05cb2c_prof);

        
        $__internal_57ccb5cf960691ecba34a582424a4867ba730ebb5e180a060eb1d8d9a15398b0->leave($__internal_57ccb5cf960691ecba34a582424a4867ba730ebb5e180a060eb1d8d9a15398b0_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/sw-app/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
