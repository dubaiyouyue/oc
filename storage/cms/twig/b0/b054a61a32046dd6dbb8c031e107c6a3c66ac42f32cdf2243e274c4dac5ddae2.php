<?php

/* E:\oc.com/themes/demo/layouts/fallback.htm */
class __TwigTemplate_d7f8032aa5fc9fad28372c59e4859eadffceea91a41edd5e6caa96f389167adb extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "E:\\oc.com/themes/demo/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "E:\\oc.com/themes/demo/layouts/fallback.htm", "");
    }
}
