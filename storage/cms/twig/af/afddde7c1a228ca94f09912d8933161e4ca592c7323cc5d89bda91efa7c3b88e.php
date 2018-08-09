<?php

/* E:\oc.com/themes/demo/partials/test.htm */
class __TwigTemplate_8dcfcc951cbdf7c0abe3cdf40037a754aa0f55132d7e54fa633696b069e3e46a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "而我却热污染";
        echo twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "content", array());
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("staticPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "

";
        // line 5
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", array());
        // line 6
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", array());
        // line 7
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", array());
        // line 8
        echo "
";
        // line 9
        if (($context["record"] ?? null)) {
            // line 10
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["displayColumn"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 12
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\oc.com/themes/demo/partials/test.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  48 => 10,  46 => 9,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  32 => 3,  29 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("而我却热污染{{ staticPage.content|raw }}{% component 'staticPage' %}

{{id}}

{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    {{ attribute(record, displayColumn) }}
{% else %}
    {{ notFoundMessage }}
{% endif %}", "E:\\oc.com/themes/demo/partials/test.htm", "");
    }
}
