<?php

/* add.html */
class __TwigTemplate_792d98a839dc2497e0c626f3bb03e6bd99246631ef1ddb78fdbe3ffe64b8586c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "add.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<form action=\"/index/save\" method=\"POST\">
    <div class=\"form-group\">
        <label>标题</label>
        <input type=\"text\" class=\"form-control\" name=\"title\" placeholder=\"请输入title\">
    </div>
    <div class=\"form-group\">
        <label>内容</label>
        <textarea class=\"form-control\" name=\"content\" placeholder=\"请输入内容\"></textarea>
    </div>
   
    <button type=\"submit\" class=\"btn btn-default\">提交</button>
</form>

";
    }

    public function getTemplateName()
    {
        return "add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block content %}

<form action=\"/index/save\" method=\"POST\">
    <div class=\"form-group\">
        <label>标题</label>
        <input type=\"text\" class=\"form-control\" name=\"title\" placeholder=\"请输入title\">
    </div>
    <div class=\"form-group\">
        <label>内容</label>
        <textarea class=\"form-control\" name=\"content\" placeholder=\"请输入内容\"></textarea>
    </div>
   
    <button type=\"submit\" class=\"btn btn-default\">提交</button>
</form>

{% endblock %}", "add.html", "D:\\wampserver\\www\\adgh\\app\\views\\add.html");
    }
}
