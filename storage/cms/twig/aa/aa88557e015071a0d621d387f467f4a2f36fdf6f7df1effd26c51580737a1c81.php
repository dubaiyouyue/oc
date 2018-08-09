<?php

/* E:\oc.com/plugins/shahiemseymor/ckeditor/components/ckeditor/default.htm */
class __TwigTemplate_58a82527d5601ae9a761a60b8a105ba1ec89cc67393d21d97653fa044bbbac6b extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2
        echo "<script type=\"text/javascript\">
\$(document).ready( function () {
    \$('[data-control=\"editable\"]').attr('contenteditable', 'true');
});
</script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 8
        echo "
<style type=\"text/css\">
.cke_inner { width: 70% !important; }
</style>";
    }

    public function getTemplateName()
    {
        return "E:\\oc.com/plugins/shahiemseymor/ckeditor/components/ckeditor/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  32 => 1,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put scripts %}
<script type=\"text/javascript\">
\$(document).ready( function () {
    \$('[data-control=\"editable\"]').attr('contenteditable', 'true');
});
</script>
{% endput %}

<style type=\"text/css\">
.cke_inner { width: 70% !important; }
</style>", "E:\\oc.com/plugins/shahiemseymor/ckeditor/components/ckeditor/default.htm", "");
    }
}
