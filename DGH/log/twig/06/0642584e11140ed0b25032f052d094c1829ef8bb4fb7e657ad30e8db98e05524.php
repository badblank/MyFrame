<?php

/* index.html */
class __TwigTemplate_aaddcf15c862dd4679ea70652a8ce5491ec58625bf52fc84d6a6ab1ba1be3e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
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
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 5
            echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "</div>
    <div class=\"panel-body\">
      ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
            echo " 
      <p>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "createtime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</p>
      <p><a href=\"/index/del/id/";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">删除</a></p>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 14,  54 => 10,  50 => 9,  46 => 8,  41 => 6,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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

{% for val in data %}
<div class=\"panel panel-default\">
    <div class=\"panel-heading\">{{val.title}}</div>
    <div class=\"panel-body\">
      {{val.content}} 
      <p>{{val.createtime|date('Y-m-d H:i:s')}}</p>
      <p><a href=\"/index/del/id/{{val.id}}\">删除</a></p>
    </div>
  </div>
{% endfor %}

{% endblock %}
", "index.html", "D:\\wampserver\\www\\adgh\\app\\views\\index.html");
    }
}
