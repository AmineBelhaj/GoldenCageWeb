<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_ec1c06d2cd2b1aeaa7c7bbb77004b1f9522433b29b9c67e31423a9835c3eafde extends Twig_Template
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
        // line 1
        echo "[exception] ";
        echo twig_escape_filter($this->env, (((((isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")) . " | ") . (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"))) . " | ") . $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "class")), "html", null, true);
        echo "
[message] ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray"));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "class"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "message"), "html", null, true);
            echo "
";
            // line 5
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e"))));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  201 => 92,  183 => 82,  171 => 73,  166 => 71,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  24 => 2,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  176 => 64,  173 => 74,  168 => 72,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  112 => 42,  99 => 30,  73 => 19,  33 => 4,  54 => 21,  22 => 2,  164 => 60,  162 => 59,  157 => 56,  145 => 46,  139 => 45,  123 => 47,  106 => 33,  96 => 31,  92 => 27,  83 => 25,  80 => 21,  43 => 6,  365 => 141,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  341 => 131,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  309 => 120,  305 => 119,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  285 => 111,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  254 => 102,  251 => 101,  248 => 100,  246 => 32,  239 => 97,  228 => 88,  225 => 87,  219 => 84,  213 => 82,  211 => 81,  204 => 78,  197 => 74,  174 => 67,  158 => 67,  148 => 60,  143 => 59,  138 => 57,  134 => 56,  131 => 42,  127 => 54,  116 => 36,  94 => 35,  49 => 19,  38 => 6,  270 => 4,  268 => 107,  264 => 2,  253 => 1,  243 => 98,  233 => 81,  221 => 79,  212 => 74,  210 => 73,  208 => 72,  206 => 71,  202 => 77,  198 => 66,  196 => 90,  192 => 64,  189 => 71,  187 => 84,  185 => 59,  182 => 68,  180 => 56,  177 => 54,  175 => 53,  172 => 51,  169 => 66,  167 => 48,  165 => 64,  163 => 70,  160 => 44,  156 => 66,  154 => 54,  137 => 37,  120 => 40,  115 => 43,  113 => 44,  111 => 38,  108 => 37,  100 => 23,  95 => 28,  90 => 20,  81 => 15,  65 => 83,  47 => 18,  35 => 9,  30 => 3,  129 => 59,  117 => 44,  109 => 34,  107 => 52,  105 => 40,  103 => 32,  97 => 47,  93 => 21,  89 => 43,  86 => 28,  84 => 16,  82 => 22,  79 => 21,  72 => 13,  69 => 25,  66 => 24,  64 => 15,  62 => 23,  57 => 12,  55 => 16,  39 => 16,  34 => 4,  53 => 10,  50 => 14,  45 => 8,  40 => 11,  37 => 10,  67 => 19,  60 => 13,  52 => 21,  44 => 18,  41 => 5,  101 => 39,  98 => 32,  91 => 31,  77 => 36,  74 => 14,  56 => 23,  51 => 20,  48 => 9,  42 => 7,  29 => 6,  32 => 4,  27 => 8,  25 => 3,  20 => 11,  36 => 5,  31 => 3,  26 => 14,  23 => 12,  19 => 1,);
    }
}
