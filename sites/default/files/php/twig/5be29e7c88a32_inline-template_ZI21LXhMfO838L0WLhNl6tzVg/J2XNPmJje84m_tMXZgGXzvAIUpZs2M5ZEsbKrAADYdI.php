<?php

/* {# inline_template_start #}<code>/admin/structure/menu/item/{menu_link_content}/edit</code>: GET, <del>POST</del>, <del>PATCH</del>, <del>DELETE</del></br><code>/entity/menu_link_content</code>: POST */
class __TwigTemplate_f72b62cf0c583ffc283ecf68c43a23d754ac5d297cca5c3e16809a705b479718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<code>/admin/structure/menu/item/{menu_link_content}/edit</code>: GET, <del>POST</del>, <del>PATCH</del>, <del>DELETE</del></br><code>/entity/menu_link_content</code>: POST";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<code>/admin/structure/menu/item/{menu_link_content}/edit</code>: GET, <del>POST</del>, <del>PATCH</del>, <del>DELETE</del></br><code>/entity/menu_link_content</code>: POST";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<code>/admin/structure/menu/item/{menu_link_content}/edit</code>: GET, <del>POST</del>, <del>PATCH</del>, <del>DELETE</del></br><code>/entity/menu_link_content</code>: POST", "");
    }
}
