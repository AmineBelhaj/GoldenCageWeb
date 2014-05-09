<?php

/* EspritDemoBundle:Produit:index.html.twig */
class __TwigTemplate_0bce5751f2a3df4c9161c7554c3d705238a96152c95da0def46f9b0db06dce3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav1' => array($this, 'block_nav1'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "Liste des produits
";
    }

    // line 6
    public function block_nav1($context, array $blocks = array())
    {
        // line 7
        echo "                            <ul class=\"menu\">
                                <li><a class=\"active\"  href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">Produits</a></li>
                                    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("prestataire");
        echo "\">Espace perso</a></li>
                                   
                            </ul>
                            
  ";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "<h1 style=\"margin-left:450px   \">Liste des produits</h1>

<table border=\"1\" style=\"margin-left:350px\" class=\"style-table\" >
        <thead>
            <tr>
                <th>Nomproduit</th>
                <th>Photo</th>
                <th>Coutproduit</th>
                <th>Coutsolde</th>
                <th>Descriptionproduit</th>
               <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "            <tr>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nomproduit"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "photo"), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coutproduit"), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "coutsolde"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descriptionproduit"), "html", null, true);
            echo "</td>
              ";
            // line 37
            echo "                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Voir</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">Modifier</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("produit_new");
        echo "\">
                Ajouter un nouveau produit
            </a>
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Produit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  76 => 29,  126 => 61,  114 => 42,  58 => 26,  216 => 49,  152 => 88,  150 => 85,  70 => 25,  223 => 77,  215 => 69,  205 => 32,  200 => 4,  155 => 76,  146 => 68,  118 => 57,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  362 => 110,  360 => 109,  355 => 106,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  298 => 91,  294 => 90,  283 => 88,  278 => 86,  258 => 81,  252 => 80,  247 => 78,  241 => 86,  229 => 73,  220 => 76,  214 => 69,  140 => 64,  132 => 51,  128 => 49,  61 => 27,  273 => 96,  269 => 94,  240 => 86,  238 => 85,  235 => 74,  230 => 77,  227 => 81,  224 => 71,  217 => 75,  179 => 69,  159 => 61,  135 => 54,  119 => 48,  102 => 46,  71 => 29,  63 => 24,  59 => 17,  85 => 38,  75 => 30,  68 => 14,  87 => 33,  21 => 2,  88 => 38,  78 => 34,  46 => 14,  28 => 3,  201 => 92,  183 => 82,  171 => 61,  166 => 71,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  24 => 1,  209 => 46,  203 => 78,  199 => 67,  193 => 73,  176 => 64,  173 => 65,  168 => 72,  149 => 51,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 71,  125 => 44,  122 => 58,  112 => 43,  99 => 36,  73 => 19,  33 => 4,  54 => 25,  22 => 2,  164 => 59,  162 => 59,  157 => 79,  145 => 46,  139 => 56,  123 => 70,  106 => 64,  96 => 46,  92 => 35,  83 => 31,  80 => 30,  43 => 8,  365 => 111,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  341 => 105,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  309 => 97,  305 => 95,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  285 => 89,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  254 => 92,  251 => 101,  248 => 100,  246 => 90,  239 => 97,  228 => 88,  225 => 87,  219 => 76,  213 => 82,  211 => 81,  204 => 72,  197 => 4,  174 => 67,  158 => 67,  148 => 71,  143 => 80,  138 => 54,  134 => 66,  131 => 52,  127 => 54,  116 => 43,  94 => 34,  49 => 14,  38 => 6,  270 => 4,  268 => 85,  264 => 84,  253 => 1,  243 => 88,  233 => 78,  221 => 77,  212 => 68,  210 => 73,  208 => 32,  206 => 71,  202 => 31,  198 => 66,  196 => 90,  192 => 64,  189 => 71,  187 => 84,  185 => 59,  182 => 66,  180 => 56,  177 => 65,  175 => 53,  172 => 51,  169 => 60,  167 => 48,  165 => 64,  163 => 62,  160 => 44,  156 => 66,  154 => 58,  137 => 37,  120 => 45,  115 => 43,  113 => 66,  111 => 55,  108 => 65,  100 => 37,  95 => 42,  90 => 20,  81 => 34,  65 => 20,  47 => 12,  35 => 6,  30 => 3,  129 => 59,  117 => 67,  109 => 50,  107 => 38,  105 => 37,  103 => 37,  97 => 34,  93 => 33,  89 => 32,  86 => 28,  84 => 16,  82 => 31,  79 => 31,  72 => 16,  69 => 11,  66 => 15,  64 => 26,  62 => 23,  57 => 14,  55 => 15,  39 => 10,  34 => 6,  53 => 18,  50 => 21,  45 => 8,  40 => 8,  37 => 5,  67 => 26,  60 => 15,  52 => 15,  44 => 8,  41 => 7,  101 => 35,  98 => 45,  91 => 34,  77 => 36,  74 => 30,  56 => 21,  51 => 17,  48 => 9,  42 => 10,  29 => 4,  32 => 5,  27 => 4,  25 => 3,  20 => 11,  36 => 5,  31 => 4,  26 => 6,  23 => 1,  19 => 1,);
    }
}
