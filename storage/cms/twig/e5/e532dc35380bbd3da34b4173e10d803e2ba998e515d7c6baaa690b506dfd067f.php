<?php

/* E:\oc.com/themes/demo/pages/404.htm */
class __TwigTemplate_f0995f409dc067e6228707f75557ddacef02b3f78fc2b193ed3fa3a4c155d506 extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Page not found234</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\oc.com/themes/demo/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Page not found234</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>", "E:\\oc.com/themes/demo/pages/404.htm", "");
    }
}
