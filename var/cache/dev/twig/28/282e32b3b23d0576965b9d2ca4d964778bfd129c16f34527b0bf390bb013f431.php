<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
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
        $__internal_1c5bde8429006623d13cd66e414bea0026baa69fc2b39bea17b7107300057787 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c5bde8429006623d13cd66e414bea0026baa69fc2b39bea17b7107300057787->enter($__internal_1c5bde8429006623d13cd66e414bea0026baa69fc2b39bea17b7107300057787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_848a67c37b49943b1abbd44621e9b3922c9b8dfc507fc879c1e8e78804a09e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_848a67c37b49943b1abbd44621e9b3922c9b8dfc507fc879c1e8e78804a09e62->enter($__internal_848a67c37b49943b1abbd44621e9b3922c9b8dfc507fc879c1e8e78804a09e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c5bde8429006623d13cd66e414bea0026baa69fc2b39bea17b7107300057787->leave($__internal_1c5bde8429006623d13cd66e414bea0026baa69fc2b39bea17b7107300057787_prof);

        
        $__internal_848a67c37b49943b1abbd44621e9b3922c9b8dfc507fc879c1e8e78804a09e62->leave($__internal_848a67c37b49943b1abbd44621e9b3922c9b8dfc507fc879c1e8e78804a09e62_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df7b7815384993e63dd266d2b8c875637dd846ae8ad24f9215985c7ebaefc8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df7b7815384993e63dd266d2b8c875637dd846ae8ad24f9215985c7ebaefc8e3->enter($__internal_df7b7815384993e63dd266d2b8c875637dd846ae8ad24f9215985c7ebaefc8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_939f6278b0d3ef7e99cd0348afa34947e011e0f817071a127b0f5a364e92735a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939f6278b0d3ef7e99cd0348afa34947e011e0f817071a127b0f5a364e92735a->enter($__internal_939f6278b0d3ef7e99cd0348afa34947e011e0f817071a127b0f5a364e92735a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_939f6278b0d3ef7e99cd0348afa34947e011e0f817071a127b0f5a364e92735a->leave($__internal_939f6278b0d3ef7e99cd0348afa34947e011e0f817071a127b0f5a364e92735a_prof);

        
        $__internal_df7b7815384993e63dd266d2b8c875637dd846ae8ad24f9215985c7ebaefc8e3->leave($__internal_df7b7815384993e63dd266d2b8c875637dd846ae8ad24f9215985c7ebaefc8e3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1a57f93c4cc3a00cd523a2ac756b4178da205bd4443cdf0cd16f5f0ec1678bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a57f93c4cc3a00cd523a2ac756b4178da205bd4443cdf0cd16f5f0ec1678bc->enter($__internal_d1a57f93c4cc3a00cd523a2ac756b4178da205bd4443cdf0cd16f5f0ec1678bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c4ea38467d52384d89633270abb977f49818e83c9e5d9d46649d6d1c56a25b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4ea38467d52384d89633270abb977f49818e83c9e5d9d46649d6d1c56a25b0->enter($__internal_0c4ea38467d52384d89633270abb977f49818e83c9e5d9d46649d6d1c56a25b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c4ea38467d52384d89633270abb977f49818e83c9e5d9d46649d6d1c56a25b0->leave($__internal_0c4ea38467d52384d89633270abb977f49818e83c9e5d9d46649d6d1c56a25b0_prof);

        
        $__internal_d1a57f93c4cc3a00cd523a2ac756b4178da205bd4443cdf0cd16f5f0ec1678bc->leave($__internal_d1a57f93c4cc3a00cd523a2ac756b4178da205bd4443cdf0cd16f5f0ec1678bc_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_657139d053264b072bb25abb9931a6807be1c4a170bf22c63324c715ef7bbd66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657139d053264b072bb25abb9931a6807be1c4a170bf22c63324c715ef7bbd66->enter($__internal_657139d053264b072bb25abb9931a6807be1c4a170bf22c63324c715ef7bbd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28e35e6d350ddecbc55715b2fa67450d362f314bb2e6d1a26bfe62194525ac24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e35e6d350ddecbc55715b2fa67450d362f314bb2e6d1a26bfe62194525ac24->enter($__internal_28e35e6d350ddecbc55715b2fa67450d362f314bb2e6d1a26bfe62194525ac24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_28e35e6d350ddecbc55715b2fa67450d362f314bb2e6d1a26bfe62194525ac24->leave($__internal_28e35e6d350ddecbc55715b2fa67450d362f314bb2e6d1a26bfe62194525ac24_prof);

        
        $__internal_657139d053264b072bb25abb9931a6807be1c4a170bf22c63324c715ef7bbd66->leave($__internal_657139d053264b072bb25abb9931a6807be1c4a170bf22c63324c715ef7bbd66_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/sw-app/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
