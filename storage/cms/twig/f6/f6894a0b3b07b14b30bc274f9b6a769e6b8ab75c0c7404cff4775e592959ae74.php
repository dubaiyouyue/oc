<?php

/* E:\oc.com/plugins/rainlab/pages/components/staticbreadcrumbs/default.htm */
class __TwigTemplate_5f51f9e5a6c146ce1506664e390533a4a0addb66d03911b34b35f40d7e1ae5b7 extends Twig_Template
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
        if (($context["breadcrumbs"] ?? null)) {
            // line 2
            echo "    <ul>
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 4
                echo "            <li class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "isActive", array())) ? ("active") : (""));
                echo "\">
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "title", array()), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\oc.com/plugins/rainlab/pages/components/staticbreadcrumbs/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  37 => 5,  32 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if breadcrumbs %}
    <ul>
        {% for breadcrumb in breadcrumbs %}
            <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">
                <a href=\"{{ breadcrumb.url }}\">{{ breadcrumb.title }}</a>
            </li>
        {% endfor %}
    </ul>
{% endif %}", "E:\\oc.com/plugins/rainlab/pages/components/staticbreadcrumbs/default.htm", "");
    }
}
