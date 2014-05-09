<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_78bd4381f3ed0d921d6ee06a814d2076c088c1f7ef05fb1e73c5339fa7558635 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  949 => 270,  946 => 269,  942 => 302,  938 => 300,  932 => 297,  929 => 296,  927 => 295,  921 => 292,  913 => 291,  910 => 290,  908 => 289,  905 => 288,  899 => 286,  888 => 282,  886 => 281,  883 => 280,  877 => 278,  875 => 277,  872 => 276,  866 => 274,  864 => 273,  861 => 272,  859 => 269,  856 => 268,  853 => 267,  836 => 253,  824 => 246,  818 => 244,  816 => 243,  806 => 238,  803 => 237,  795 => 234,  792 => 233,  787 => 262,  784 => 233,  781 => 232,  776 => 303,  774 => 267,  761 => 230,  745 => 218,  734 => 214,  728 => 213,  716 => 211,  713 => 210,  709 => 209,  702 => 208,  693 => 206,  690 => 205,  687 => 204,  682 => 203,  673 => 199,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  632 => 187,  629 => 186,  626 => 184,  616 => 182,  610 => 181,  600 => 178,  588 => 175,  570 => 164,  522 => 156,  471 => 129,  468 => 128,  460 => 123,  454 => 121,  451 => 120,  418 => 112,  373 => 102,  370 => 101,  304 => 81,  620 => 223,  612 => 220,  601 => 216,  599 => 215,  594 => 176,  585 => 209,  580 => 207,  574 => 205,  559 => 201,  545 => 198,  532 => 192,  526 => 190,  514 => 167,  497 => 156,  485 => 124,  463 => 117,  455 => 115,  415 => 127,  412 => 126,  406 => 111,  340 => 91,  333 => 132,  326 => 86,  318 => 86,  307 => 82,  261 => 50,  330 => 103,  300 => 93,  287 => 77,  190 => 49,  178 => 48,  12 => 36,  786 => 238,  777 => 234,  775 => 233,  771 => 231,  768 => 230,  750 => 227,  747 => 226,  744 => 225,  742 => 224,  737 => 222,  725 => 220,  722 => 219,  719 => 218,  711 => 213,  708 => 212,  691 => 210,  674 => 209,  669 => 198,  664 => 206,  648 => 198,  646 => 197,  624 => 224,  603 => 179,  595 => 190,  592 => 189,  589 => 188,  586 => 187,  584 => 173,  581 => 185,  572 => 204,  568 => 178,  566 => 203,  563 => 202,  561 => 161,  558 => 160,  554 => 224,  542 => 149,  539 => 148,  523 => 189,  521 => 166,  518 => 180,  507 => 156,  481 => 155,  476 => 147,  447 => 113,  441 => 136,  425 => 132,  422 => 131,  419 => 130,  416 => 129,  410 => 110,  404 => 90,  401 => 89,  382 => 115,  376 => 103,  369 => 148,  359 => 144,  356 => 126,  353 => 103,  329 => 130,  306 => 95,  303 => 94,  291 => 80,  286 => 82,  280 => 87,  267 => 74,  195 => 54,  321 => 100,  295 => 142,  274 => 53,  272 => 134,  242 => 113,  236 => 42,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 271,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 285,  894 => 284,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 261,  846 => 205,  844 => 258,  841 => 203,  833 => 199,  830 => 249,  828 => 248,  825 => 196,  817 => 192,  814 => 191,  812 => 241,  809 => 189,  801 => 236,  798 => 235,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 235,  772 => 172,  769 => 264,  767 => 232,  764 => 231,  756 => 222,  753 => 221,  751 => 163,  749 => 220,  746 => 161,  739 => 217,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 207,  695 => 139,  694 => 138,  689 => 137,  680 => 202,  675 => 132,  662 => 125,  658 => 204,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  619 => 183,  617 => 112,  614 => 111,  598 => 191,  596 => 106,  593 => 105,  576 => 101,  564 => 162,  557 => 96,  550 => 94,  547 => 93,  527 => 91,  515 => 305,  512 => 162,  509 => 228,  503 => 81,  501 => 154,  493 => 143,  478 => 154,  467 => 146,  456 => 140,  450 => 114,  442 => 62,  433 => 60,  428 => 116,  426 => 58,  405 => 108,  390 => 43,  377 => 37,  371 => 35,  366 => 150,  363 => 109,  350 => 26,  335 => 133,  332 => 88,  316 => 16,  290 => 90,  276 => 395,  266 => 366,  263 => 365,  245 => 66,  207 => 33,  194 => 52,  170 => 79,  551 => 221,  546 => 175,  543 => 174,  541 => 180,  537 => 159,  531 => 225,  525 => 157,  520 => 170,  513 => 230,  511 => 166,  506 => 166,  502 => 164,  499 => 163,  496 => 79,  489 => 157,  483 => 156,  479 => 135,  475 => 152,  462 => 143,  448 => 119,  443 => 137,  424 => 114,  414 => 52,  408 => 109,  403 => 48,  399 => 116,  391 => 163,  388 => 117,  386 => 111,  375 => 106,  372 => 105,  354 => 101,  348 => 101,  346 => 100,  342 => 23,  325 => 94,  313 => 84,  308 => 89,  292 => 91,  255 => 71,  184 => 48,  124 => 51,  188 => 25,  181 => 232,  161 => 75,  320 => 84,  317 => 121,  311 => 83,  288 => 79,  284 => 76,  279 => 77,  275 => 86,  256 => 79,  250 => 44,  237 => 71,  232 => 84,  222 => 66,  191 => 26,  153 => 72,  692 => 399,  683 => 135,  678 => 133,  676 => 385,  666 => 126,  661 => 205,  656 => 378,  652 => 200,  645 => 369,  641 => 189,  635 => 188,  631 => 364,  625 => 361,  615 => 354,  607 => 180,  597 => 177,  590 => 338,  583 => 334,  579 => 332,  577 => 206,  575 => 328,  569 => 325,  565 => 324,  555 => 200,  548 => 176,  540 => 160,  536 => 194,  529 => 159,  524 => 90,  516 => 169,  510 => 293,  504 => 155,  500 => 291,  495 => 289,  490 => 142,  486 => 286,  482 => 136,  470 => 121,  464 => 125,  459 => 116,  452 => 268,  434 => 118,  421 => 90,  417 => 243,  400 => 47,  385 => 159,  361 => 207,  344 => 24,  339 => 191,  324 => 179,  310 => 83,  302 => 79,  296 => 151,  282 => 161,  259 => 149,  244 => 43,  231 => 69,  226 => 131,  186 => 51,  104 => 43,  110 => 22,  76 => 17,  126 => 66,  114 => 50,  58 => 17,  216 => 35,  152 => 36,  150 => 34,  70 => 29,  223 => 77,  215 => 280,  205 => 32,  200 => 31,  155 => 73,  146 => 34,  118 => 49,  480 => 75,  474 => 122,  469 => 158,  461 => 70,  457 => 153,  453 => 139,  444 => 263,  440 => 148,  437 => 135,  435 => 146,  430 => 134,  427 => 129,  423 => 57,  413 => 128,  409 => 132,  407 => 126,  402 => 107,  398 => 88,  393 => 168,  387 => 122,  384 => 106,  381 => 105,  379 => 104,  374 => 112,  368 => 34,  362 => 148,  360 => 128,  355 => 27,  337 => 90,  322 => 101,  314 => 99,  312 => 97,  298 => 91,  294 => 85,  283 => 138,  278 => 410,  258 => 72,  252 => 68,  247 => 75,  241 => 86,  229 => 73,  220 => 65,  214 => 63,  140 => 51,  132 => 57,  128 => 47,  61 => 12,  273 => 85,  269 => 133,  240 => 72,  238 => 312,  235 => 63,  230 => 62,  227 => 301,  224 => 39,  217 => 64,  179 => 44,  159 => 39,  135 => 35,  119 => 44,  102 => 17,  71 => 29,  63 => 22,  59 => 13,  85 => 32,  75 => 32,  68 => 30,  87 => 57,  21 => 11,  88 => 31,  78 => 26,  46 => 8,  28 => 3,  201 => 56,  183 => 50,  171 => 153,  166 => 42,  151 => 188,  142 => 30,  136 => 70,  121 => 51,  24 => 3,  209 => 58,  203 => 32,  199 => 265,  193 => 51,  176 => 309,  173 => 46,  168 => 43,  149 => 35,  147 => 52,  144 => 26,  141 => 72,  133 => 69,  130 => 57,  125 => 46,  122 => 45,  112 => 105,  99 => 30,  73 => 16,  33 => 4,  54 => 19,  22 => 11,  164 => 55,  162 => 41,  157 => 56,  145 => 53,  139 => 51,  123 => 65,  106 => 64,  96 => 40,  92 => 59,  83 => 55,  80 => 31,  43 => 11,  365 => 111,  358 => 139,  351 => 141,  347 => 140,  343 => 92,  341 => 105,  338 => 99,  327 => 102,  323 => 85,  319 => 92,  315 => 98,  309 => 82,  305 => 87,  301 => 80,  299 => 86,  293 => 90,  289 => 83,  285 => 78,  281 => 75,  277 => 136,  271 => 374,  265 => 51,  262 => 81,  260 => 72,  257 => 103,  254 => 46,  251 => 101,  248 => 116,  246 => 67,  239 => 64,  228 => 41,  225 => 67,  219 => 101,  213 => 82,  211 => 81,  204 => 57,  197 => 30,  174 => 154,  158 => 74,  148 => 49,  143 => 33,  138 => 49,  134 => 182,  131 => 48,  127 => 28,  116 => 43,  94 => 34,  49 => 13,  38 => 6,  270 => 84,  268 => 373,  264 => 74,  253 => 78,  243 => 66,  233 => 304,  221 => 38,  212 => 60,  210 => 59,  208 => 57,  206 => 57,  202 => 55,  198 => 55,  196 => 52,  192 => 53,  189 => 52,  187 => 87,  185 => 61,  182 => 23,  180 => 49,  177 => 43,  175 => 47,  172 => 46,  169 => 78,  167 => 56,  165 => 77,  163 => 40,  160 => 39,  156 => 38,  154 => 36,  137 => 29,  120 => 20,  115 => 47,  113 => 46,  111 => 40,  108 => 19,  100 => 62,  95 => 41,  90 => 32,  81 => 26,  65 => 29,  47 => 8,  35 => 5,  30 => 3,  129 => 67,  117 => 19,  109 => 46,  107 => 44,  105 => 18,  103 => 38,  97 => 41,  93 => 39,  89 => 34,  86 => 33,  84 => 29,  82 => 28,  79 => 31,  72 => 31,  69 => 33,  66 => 23,  64 => 13,  62 => 28,  57 => 12,  55 => 18,  39 => 12,  34 => 14,  53 => 11,  50 => 21,  45 => 8,  40 => 6,  37 => 5,  67 => 19,  60 => 26,  52 => 14,  44 => 21,  41 => 10,  101 => 37,  98 => 36,  91 => 39,  77 => 25,  74 => 29,  56 => 11,  51 => 16,  48 => 9,  42 => 7,  29 => 3,  32 => 21,  27 => 16,  25 => 35,  20 => 11,  36 => 5,  31 => 3,  26 => 9,  23 => 13,  19 => 11,);
    }
}
