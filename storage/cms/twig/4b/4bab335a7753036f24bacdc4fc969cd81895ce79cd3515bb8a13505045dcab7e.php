<?php

/* E:\oc.com/plugins/rainlab/pages/components/staticpage/default.htm */
class __TwigTemplate_d596c46a9b5c6dc41ecf8daaef8f812e9bb62bec4830d520bfe9ccd76855b8a6 extends Twig_Template
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
        echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "content", array());
    }

    public function getTemplateName()
    {
        return "E:\\oc.com/plugins/rainlab/pages/components/staticpage/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ __SELF__.content|raw }}", "E:\\oc.com/plugins/rainlab/pages/components/staticpage/default.htm", "");
    }
}
