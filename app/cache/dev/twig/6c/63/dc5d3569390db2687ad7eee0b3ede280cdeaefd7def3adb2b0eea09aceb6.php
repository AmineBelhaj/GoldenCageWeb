<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_6c63dc5d3569390db2687ad7eee0b3ede280cdeaefd7def3adb2b0eea09aceb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <li>";
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 17
        $this->env->loadTemplate("SonataAdminBundle:Button:show_button.html.twig")->display($context);
        echo "</li>
    <li>";
        // line 18
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        echo "</li>
";
    }

    // line 21
    public function block_form($context, array $blocks = array())
    {
        // line 22
        echo "    <form class=\"form-horizontal\"
              action=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "acl", 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "
              method=\"POST\"
              ";
        // line 25
        if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "html5_validate"), "method"))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 26
        echo "              >
        ";
        // line 27
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "errors")) > 0)) {
            // line 28
            echo "            <div class=\"sonata-ba-form-error\">
                ";
            // line 29
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            </div>
        ";
        }
        // line 32
        echo "
        <table class=\"table\">
            <thead>
                <tr>
                    <th>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("td_username", array(), "SonataAdminBundle"), "html", null, true);
        echo "</th>
                    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 38
            echo "                    <th>";
            echo twig_escape_filter($this->env, (isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tr>
            </thead>
            <tbody>
            ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 44
            echo "                <tr>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "html", null, true);
            echo "</td>
                    ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 47
                echo "                    <td>";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id") . (isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission"))), array(), "array"), 'widget');
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "            </tbody>
        </table>

        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 56
        $this->displayBlock('formactions', $context, $blocks);
        // line 61
        echo "    </form>
";
    }

    // line 56
    public function block_formactions($context, array $blocks = array())
    {
        // line 57
        echo "            <div class=\"well well-small form-actions\">
                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_acl", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
            </div>
        ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 207,  664 => 206,  648 => 198,  646 => 197,  624 => 194,  603 => 192,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 186,  581 => 185,  572 => 180,  568 => 178,  566 => 177,  563 => 176,  561 => 175,  558 => 174,  554 => 153,  542 => 149,  539 => 148,  523 => 167,  521 => 166,  518 => 165,  507 => 160,  481 => 155,  476 => 147,  447 => 137,  441 => 136,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  410 => 127,  404 => 125,  401 => 124,  382 => 115,  376 => 113,  369 => 111,  359 => 107,  356 => 105,  353 => 103,  329 => 96,  306 => 88,  303 => 87,  291 => 84,  286 => 82,  280 => 78,  267 => 74,  195 => 51,  321 => 152,  295 => 142,  274 => 135,  272 => 134,  242 => 113,  236 => 109,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 229,  753 => 228,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  675 => 132,  662 => 125,  658 => 204,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  619 => 113,  617 => 112,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  550 => 94,  547 => 93,  527 => 91,  515 => 85,  512 => 162,  509 => 161,  503 => 81,  501 => 158,  493 => 78,  478 => 154,  467 => 146,  456 => 140,  450 => 138,  442 => 62,  433 => 60,  428 => 133,  426 => 58,  405 => 49,  390 => 43,  377 => 37,  371 => 35,  366 => 110,  363 => 109,  350 => 26,  335 => 98,  332 => 97,  316 => 16,  290 => 5,  276 => 395,  266 => 366,  263 => 365,  245 => 66,  207 => 269,  194 => 66,  170 => 79,  551 => 184,  546 => 182,  543 => 181,  541 => 180,  537 => 178,  531 => 175,  525 => 172,  520 => 170,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 153,  475 => 152,  462 => 143,  448 => 139,  443 => 137,  424 => 128,  414 => 52,  408 => 50,  403 => 48,  399 => 116,  391 => 113,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 101,  346 => 100,  342 => 23,  325 => 94,  313 => 15,  308 => 89,  292 => 81,  255 => 71,  184 => 233,  124 => 47,  188 => 48,  181 => 232,  161 => 202,  320 => 122,  317 => 121,  311 => 14,  288 => 4,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  250 => 69,  237 => 70,  232 => 84,  222 => 297,  191 => 246,  153 => 72,  692 => 399,  683 => 135,  678 => 133,  676 => 385,  666 => 126,  661 => 205,  656 => 378,  652 => 200,  645 => 369,  641 => 196,  635 => 117,  631 => 364,  625 => 361,  615 => 354,  607 => 193,  597 => 342,  590 => 338,  583 => 334,  579 => 332,  577 => 329,  575 => 328,  569 => 325,  565 => 324,  555 => 95,  548 => 151,  540 => 308,  536 => 147,  529 => 169,  524 => 90,  516 => 169,  510 => 293,  504 => 159,  500 => 291,  495 => 289,  490 => 77,  486 => 286,  482 => 285,  470 => 73,  464 => 71,  459 => 69,  452 => 268,  434 => 256,  421 => 126,  417 => 243,  400 => 47,  385 => 116,  361 => 207,  344 => 24,  339 => 191,  324 => 179,  310 => 89,  302 => 84,  296 => 82,  282 => 161,  259 => 149,  244 => 140,  231 => 133,  226 => 131,  186 => 47,  104 => 40,  110 => 42,  76 => 27,  126 => 55,  114 => 111,  58 => 24,  216 => 100,  152 => 61,  150 => 56,  70 => 27,  223 => 77,  215 => 280,  205 => 32,  200 => 54,  155 => 53,  146 => 34,  118 => 46,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 135,  435 => 146,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 237,  398 => 123,  393 => 114,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 112,  368 => 34,  362 => 110,  360 => 109,  355 => 27,  337 => 22,  322 => 101,  314 => 99,  312 => 90,  298 => 91,  294 => 85,  283 => 138,  278 => 410,  258 => 354,  252 => 80,  247 => 78,  241 => 86,  229 => 73,  220 => 63,  214 => 61,  140 => 51,  132 => 28,  128 => 47,  61 => 28,  273 => 394,  269 => 133,  240 => 65,  238 => 312,  235 => 311,  230 => 106,  227 => 301,  224 => 103,  217 => 56,  179 => 44,  159 => 39,  135 => 35,  119 => 117,  102 => 19,  71 => 32,  63 => 25,  59 => 23,  85 => 31,  75 => 29,  68 => 31,  87 => 36,  21 => 11,  88 => 37,  78 => 34,  46 => 19,  28 => 14,  201 => 65,  183 => 46,  171 => 57,  166 => 42,  151 => 188,  142 => 61,  136 => 58,  121 => 24,  24 => 13,  209 => 96,  203 => 55,  199 => 265,  193 => 51,  176 => 58,  173 => 65,  168 => 41,  149 => 62,  147 => 52,  144 => 48,  141 => 58,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  112 => 27,  99 => 41,  73 => 27,  33 => 16,  54 => 26,  22 => 12,  164 => 55,  162 => 54,  157 => 56,  145 => 54,  139 => 59,  123 => 48,  106 => 104,  96 => 18,  92 => 38,  83 => 32,  80 => 13,  43 => 21,  365 => 111,  358 => 139,  351 => 102,  347 => 134,  343 => 132,  341 => 105,  338 => 99,  327 => 154,  323 => 125,  319 => 92,  315 => 91,  309 => 148,  305 => 87,  301 => 144,  299 => 86,  293 => 6,  289 => 83,  285 => 3,  281 => 411,  277 => 136,  271 => 374,  265 => 130,  262 => 105,  260 => 72,  257 => 103,  254 => 147,  251 => 101,  248 => 116,  246 => 90,  239 => 97,  228 => 68,  225 => 64,  219 => 101,  213 => 82,  211 => 81,  204 => 55,  197 => 90,  174 => 42,  158 => 75,  148 => 49,  143 => 33,  138 => 49,  134 => 55,  131 => 160,  127 => 32,  116 => 45,  94 => 34,  49 => 123,  38 => 18,  270 => 75,  268 => 373,  264 => 73,  253 => 70,  243 => 327,  233 => 304,  221 => 67,  212 => 279,  210 => 270,  208 => 57,  206 => 71,  202 => 266,  198 => 53,  196 => 52,  192 => 88,  189 => 63,  187 => 87,  185 => 61,  182 => 85,  180 => 66,  177 => 43,  175 => 74,  172 => 46,  169 => 44,  167 => 56,  165 => 77,  163 => 58,  160 => 57,  156 => 64,  154 => 36,  137 => 46,  120 => 46,  115 => 45,  113 => 44,  111 => 43,  108 => 42,  100 => 40,  95 => 38,  90 => 16,  81 => 32,  65 => 30,  47 => 22,  35 => 17,  30 => 15,  129 => 44,  117 => 51,  109 => 43,  107 => 37,  105 => 20,  103 => 41,  97 => 39,  93 => 17,  89 => 33,  86 => 33,  84 => 41,  82 => 36,  79 => 35,  72 => 28,  69 => 32,  66 => 30,  64 => 24,  62 => 24,  57 => 27,  55 => 22,  39 => 16,  34 => 15,  53 => 22,  50 => 21,  45 => 18,  40 => 17,  37 => 17,  67 => 26,  60 => 22,  52 => 21,  44 => 18,  41 => 81,  101 => 40,  98 => 39,  91 => 37,  77 => 29,  74 => 30,  56 => 23,  51 => 21,  48 => 8,  42 => 17,  29 => 3,  32 => 4,  27 => 14,  25 => 3,  20 => 1,  36 => 16,  31 => 15,  26 => 2,  23 => 18,  19 => 11,);
    }
}
