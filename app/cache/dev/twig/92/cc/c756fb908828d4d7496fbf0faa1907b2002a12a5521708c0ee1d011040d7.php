<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_92ccc756fb908828d4d7496fbf0faa1907b2002a12a5521708c0ee1d011040d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  507 => 4,  505 => 3,  465 => 176,  462 => 175,  441 => 167,  420 => 160,  416 => 158,  412 => 156,  406 => 153,  404 => 152,  392 => 145,  380 => 139,  358 => 124,  352 => 119,  340 => 112,  334 => 108,  321 => 100,  319 => 99,  280 => 92,  237 => 70,  234 => 69,  232 => 68,  195 => 53,  165 => 43,  1408 => 419,  1400 => 416,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1223 => 356,  1211 => 349,  1202 => 347,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1098 => 313,  1095 => 312,  1084 => 307,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1014 => 272,  1012 => 271,  1009 => 270,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  756 => 165,  749 => 162,  746 => 161,  739 => 156,  724 => 154,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  662 => 125,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 105,  564 => 99,  557 => 96,  555 => 95,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  496 => 79,  490 => 1,  478 => 74,  470 => 180,  467 => 72,  464 => 71,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  426 => 164,  403 => 48,  400 => 150,  388 => 143,  385 => 41,  377 => 137,  371 => 35,  366 => 33,  363 => 32,  344 => 24,  332 => 107,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  288 => 4,  281 => 411,  276 => 89,  271 => 86,  266 => 366,  263 => 365,  260 => 363,  255 => 353,  253 => 342,  250 => 341,  248 => 336,  245 => 72,  222 => 297,  215 => 280,  212 => 59,  210 => 270,  207 => 269,  202 => 266,  197 => 54,  194 => 248,  184 => 233,  129 => 148,  124 => 27,  2739 => 857,  2730 => 856,  2728 => 855,  2725 => 854,  2707 => 850,  2700 => 849,  2697 => 848,  2694 => 847,  2691 => 846,  2688 => 845,  2686 => 844,  2683 => 843,  2659 => 839,  2634 => 838,  2632 => 837,  2629 => 836,  2617 => 831,  2614 => 830,  2611 => 829,  2608 => 828,  2605 => 827,  2602 => 826,  2599 => 825,  2596 => 824,  2593 => 823,  2590 => 822,  2587 => 821,  2584 => 820,  2581 => 819,  2578 => 818,  2575 => 817,  2572 => 816,  2569 => 815,  2564 => 814,  2562 => 813,  2559 => 812,  2550 => 806,  2544 => 804,  2541 => 803,  2536 => 802,  2534 => 801,  2531 => 800,  2525 => 796,  2521 => 794,  2519 => 793,  2516 => 792,  2507 => 790,  2503 => 789,  2496 => 788,  2492 => 786,  2489 => 785,  2487 => 784,  2484 => 783,  2481 => 782,  2478 => 781,  2476 => 780,  2473 => 779,  2470 => 778,  2467 => 777,  2465 => 776,  2462 => 775,  2454 => 771,  2451 => 770,  2448 => 769,  2445 => 768,  2437 => 764,  2435 => 763,  2432 => 762,  2423 => 757,  2420 => 756,  2414 => 754,  2411 => 753,  2405 => 751,  2402 => 750,  2396 => 748,  2393 => 747,  2387 => 745,  2385 => 744,  2382 => 743,  2376 => 741,  2373 => 740,  2371 => 739,  2368 => 738,  2359 => 733,  2357 => 732,  2333 => 731,  2330 => 730,  2327 => 729,  2324 => 728,  2322 => 727,  2319 => 726,  2313 => 724,  2311 => 723,  2308 => 722,  2302 => 720,  2300 => 719,  2297 => 718,  2291 => 716,  2289 => 715,  2286 => 714,  2280 => 712,  2278 => 711,  2275 => 710,  2269 => 708,  2266 => 707,  2264 => 706,  2261 => 705,  2258 => 704,  2255 => 703,  2252 => 702,  2249 => 701,  2246 => 700,  2243 => 699,  2241 => 698,  2238 => 697,  2231 => 693,  2227 => 692,  2222 => 691,  2220 => 690,  2217 => 689,  2210 => 684,  2207 => 683,  2199 => 677,  2197 => 676,  2192 => 674,  2189 => 673,  2178 => 671,  2175 => 670,  2173 => 669,  2170 => 668,  2167 => 667,  2165 => 666,  2162 => 665,  2159 => 664,  2156 => 663,  2153 => 662,  2150 => 661,  2147 => 660,  2144 => 659,  2141 => 658,  2138 => 657,  2135 => 656,  2132 => 655,  2129 => 654,  2127 => 653,  2124 => 652,  2121 => 651,  2118 => 650,  2116 => 649,  2113 => 648,  2104 => 643,  2101 => 642,  2098 => 641,  2095 => 640,  2092 => 639,  2089 => 638,  2087 => 637,  2084 => 636,  2075 => 631,  2071 => 629,  2065 => 627,  2063 => 626,  2058 => 625,  2052 => 623,  2050 => 622,  2045 => 621,  2042 => 620,  2039 => 619,  2036 => 618,  2033 => 617,  2030 => 616,  2027 => 615,  2024 => 614,  2021 => 613,  2018 => 612,  2015 => 611,  2012 => 610,  2009 => 609,  2007 => 608,  2004 => 607,  1997 => 603,  1993 => 601,  1988 => 599,  1984 => 598,  1980 => 597,  1975 => 596,  1969 => 593,  1965 => 592,  1961 => 591,  1955 => 590,  1950 => 589,  1948 => 588,  1941 => 587,  1938 => 586,  1935 => 585,  1932 => 584,  1929 => 583,  1927 => 582,  1924 => 581,  1921 => 580,  1919 => 579,  1916 => 578,  1913 => 577,  1910 => 576,  1907 => 575,  1904 => 574,  1901 => 573,  1898 => 572,  1895 => 571,  1892 => 570,  1889 => 569,  1886 => 568,  1883 => 567,  1881 => 566,  1878 => 565,  1875 => 564,  1872 => 563,  1870 => 562,  1867 => 561,  1859 => 557,  1857 => 553,  1855 => 552,  1852 => 551,  1847 => 547,  1825 => 542,  1822 => 541,  1819 => 540,  1816 => 539,  1813 => 538,  1810 => 537,  1807 => 536,  1804 => 535,  1801 => 534,  1799 => 533,  1796 => 532,  1793 => 531,  1790 => 530,  1787 => 529,  1784 => 528,  1781 => 527,  1779 => 526,  1776 => 525,  1773 => 524,  1770 => 523,  1768 => 522,  1765 => 521,  1762 => 520,  1759 => 519,  1757 => 518,  1754 => 517,  1751 => 516,  1748 => 515,  1745 => 514,  1742 => 513,  1739 => 512,  1736 => 511,  1733 => 510,  1730 => 509,  1728 => 508,  1725 => 507,  1722 => 506,  1720 => 505,  1717 => 504,  1709 => 498,  1706 => 497,  1704 => 496,  1701 => 495,  1693 => 491,  1690 => 490,  1688 => 489,  1685 => 488,  1673 => 484,  1670 => 483,  1667 => 482,  1664 => 481,  1661 => 480,  1658 => 479,  1655 => 478,  1652 => 477,  1649 => 476,  1647 => 475,  1644 => 474,  1636 => 470,  1633 => 469,  1631 => 468,  1628 => 467,  1620 => 463,  1617 => 462,  1615 => 461,  1612 => 460,  1604 => 456,  1601 => 455,  1599 => 454,  1596 => 453,  1587 => 447,  1584 => 446,  1581 => 445,  1579 => 444,  1576 => 443,  1568 => 439,  1565 => 438,  1563 => 437,  1560 => 436,  1552 => 432,  1549 => 431,  1547 => 430,  1544 => 429,  1537 => 424,  1535 => 420,  1532 => 419,  1530 => 418,  1527 => 417,  1519 => 413,  1516 => 412,  1514 => 411,  1511 => 410,  1503 => 406,  1500 => 405,  1498 => 404,  1496 => 403,  1493 => 402,  1486 => 397,  1480 => 396,  1475 => 395,  1471 => 394,  1466 => 393,  1463 => 392,  1460 => 391,  1454 => 389,  1451 => 388,  1449 => 387,  1446 => 386,  1438 => 380,  1436 => 379,  1435 => 378,  1434 => 377,  1433 => 376,  1428 => 375,  1425 => 374,  1419 => 372,  1416 => 371,  1414 => 421,  1411 => 369,  1402 => 417,  1398 => 415,  1394 => 414,  1390 => 360,  1385 => 413,  1382 => 358,  1376 => 356,  1373 => 355,  1371 => 354,  1368 => 353,  1352 => 349,  1350 => 348,  1347 => 398,  1331 => 343,  1329 => 342,  1326 => 341,  1319 => 336,  1314 => 333,  1312 => 332,  1306 => 330,  1300 => 328,  1294 => 325,  1290 => 324,  1274 => 323,  1271 => 375,  1268 => 374,  1265 => 320,  1262 => 319,  1259 => 318,  1256 => 369,  1253 => 316,  1250 => 315,  1247 => 314,  1245 => 313,  1241 => 311,  1233 => 309,  1228 => 357,  1221 => 355,  1218 => 354,  1215 => 304,  1212 => 303,  1210 => 302,  1207 => 301,  1204 => 300,  1201 => 299,  1198 => 346,  1195 => 345,  1192 => 344,  1189 => 295,  1186 => 294,  1183 => 293,  1181 => 292,  1178 => 291,  1176 => 290,  1173 => 289,  1170 => 288,  1168 => 332,  1165 => 286,  1158 => 282,  1155 => 281,  1151 => 279,  1146 => 276,  1144 => 275,  1138 => 273,  1132 => 271,  1126 => 268,  1122 => 267,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 263,  1094 => 262,  1091 => 261,  1088 => 308,  1085 => 259,  1082 => 258,  1079 => 306,  1077 => 305,  1074 => 304,  1066 => 253,  1061 => 251,  1054 => 250,  1051 => 291,  1048 => 290,  1045 => 247,  1042 => 246,  1040 => 285,  1037 => 244,  1034 => 243,  1031 => 242,  1028 => 241,  1025 => 240,  1022 => 239,  1019 => 238,  1016 => 276,  1013 => 236,  1010 => 235,  1007 => 234,  1004 => 266,  1002 => 232,  999 => 231,  996 => 230,  993 => 229,  991 => 228,  988 => 227,  971 => 223,  959 => 221,  952 => 251,  950 => 250,  945 => 216,  942 => 215,  924 => 214,  922 => 213,  919 => 212,  910 => 207,  907 => 206,  904 => 205,  898 => 203,  896 => 202,  891 => 201,  888 => 200,  885 => 199,  870 => 197,  868 => 196,  861 => 195,  858 => 194,  855 => 193,  853 => 192,  850 => 191,  844 => 204,  838 => 186,  832 => 184,  826 => 182,  823 => 181,  819 => 180,  814 => 191,  812 => 190,  809 => 189,  800 => 172,  794 => 170,  791 => 169,  789 => 168,  786 => 167,  779 => 162,  777 => 161,  764 => 169,  761 => 158,  753 => 164,  751 => 163,  748 => 154,  745 => 153,  742 => 152,  740 => 151,  737 => 150,  734 => 149,  731 => 148,  729 => 155,  726 => 146,  723 => 145,  721 => 153,  718 => 143,  711 => 138,  709 => 137,  702 => 135,  699 => 142,  697 => 141,  694 => 138,  686 => 130,  684 => 129,  681 => 128,  678 => 133,  675 => 132,  672 => 125,  669 => 124,  666 => 126,  664 => 122,  661 => 121,  658 => 124,  656 => 119,  653 => 118,  647 => 114,  637 => 112,  635 => 117,  632 => 110,  624 => 107,  616 => 104,  611 => 103,  609 => 102,  604 => 100,  600 => 99,  596 => 106,  592 => 96,  588 => 95,  582 => 93,  579 => 92,  576 => 101,  574 => 90,  571 => 89,  568 => 88,  565 => 87,  562 => 86,  559 => 85,  556 => 84,  553 => 83,  550 => 94,  547 => 93,  544 => 80,  541 => 79,  539 => 78,  536 => 77,  528 => 73,  525 => 72,  522 => 71,  519 => 70,  517 => 69,  514 => 68,  506 => 63,  501 => 2,  495 => 60,  493 => 78,  488 => 58,  486 => 57,  483 => 56,  476 => 51,  458 => 47,  455 => 46,  452 => 171,  449 => 170,  446 => 169,  443 => 168,  438 => 166,  432 => 38,  419 => 34,  417 => 33,  414 => 52,  411 => 31,  408 => 154,  405 => 49,  399 => 27,  396 => 147,  390 => 43,  376 => 19,  373 => 136,  370 => 133,  356 => 10,  350 => 118,  347 => 116,  345 => 115,  342 => 113,  338 => 854,  335 => 21,  333 => 843,  330 => 106,  328 => 104,  325 => 103,  323 => 812,  320 => 811,  317 => 809,  315 => 800,  310 => 775,  307 => 774,  302 => 96,  300 => 762,  297 => 761,  295 => 738,  292 => 737,  290 => 5,  287 => 696,  282 => 688,  279 => 686,  277 => 683,  274 => 88,  272 => 648,  267 => 636,  262 => 81,  259 => 80,  257 => 79,  249 => 550,  244 => 547,  239 => 504,  236 => 503,  233 => 304,  231 => 495,  228 => 494,  226 => 488,  223 => 487,  218 => 473,  216 => 467,  213 => 466,  198 => 442,  191 => 246,  188 => 428,  181 => 232,  178 => 409,  161 => 202,  153 => 39,  148 => 340,  14 => 1,  113 => 142,  225 => 298,  211 => 460,  206 => 57,  200 => 55,  192 => 52,  174 => 46,  137 => 33,  190 => 49,  186 => 50,  180 => 48,  172 => 53,  150 => 38,  146 => 181,  134 => 161,  114 => 111,  110 => 22,  90 => 32,  23 => 1,  104 => 90,  100 => 38,  84 => 29,  70 => 29,  81 => 179,  76 => 17,  126 => 147,  118 => 166,  77 => 17,  58 => 17,  53 => 10,  65 => 17,  34 => 9,  480 => 182,  474 => 50,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 149,  440 => 41,  437 => 61,  435 => 39,  430 => 37,  427 => 36,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 151,  398 => 129,  393 => 25,  387 => 23,  384 => 141,  381 => 21,  379 => 20,  374 => 36,  368 => 132,  365 => 129,  362 => 127,  360 => 126,  355 => 121,  341 => 105,  337 => 110,  322 => 101,  314 => 99,  312 => 799,  309 => 97,  305 => 768,  298 => 91,  294 => 90,  285 => 95,  283 => 94,  278 => 91,  268 => 373,  264 => 635,  258 => 354,  252 => 551,  247 => 78,  241 => 546,  229 => 67,  220 => 290,  214 => 60,  177 => 47,  169 => 210,  140 => 34,  132 => 51,  128 => 30,  107 => 36,  61 => 12,  273 => 394,  269 => 647,  254 => 78,  243 => 327,  240 => 71,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 71,  221 => 62,  219 => 58,  217 => 61,  208 => 459,  204 => 267,  179 => 224,  159 => 41,  143 => 285,  135 => 53,  119 => 25,  102 => 17,  71 => 165,  67 => 22,  63 => 6,  59 => 86,  94 => 34,  89 => 182,  85 => 38,  75 => 26,  68 => 24,  56 => 11,  28 => 3,  38 => 9,  24 => 3,  87 => 25,  26 => 9,  31 => 3,  201 => 443,  196 => 436,  183 => 49,  171 => 45,  166 => 209,  163 => 368,  158 => 352,  156 => 40,  151 => 188,  142 => 35,  138 => 226,  136 => 33,  121 => 131,  117 => 19,  105 => 18,  91 => 56,  62 => 16,  49 => 13,  25 => 35,  21 => 2,  19 => 1,  93 => 9,  88 => 31,  78 => 26,  46 => 8,  44 => 30,  27 => 5,  79 => 175,  72 => 25,  69 => 164,  47 => 8,  40 => 6,  37 => 5,  22 => 1,  246 => 548,  157 => 56,  145 => 46,  139 => 34,  131 => 31,  123 => 176,  120 => 20,  115 => 23,  111 => 110,  108 => 19,  101 => 89,  98 => 11,  96 => 10,  83 => 4,  74 => 166,  66 => 163,  55 => 14,  52 => 14,  50 => 11,  43 => 11,  41 => 5,  35 => 10,  32 => 6,  29 => 5,  209 => 58,  203 => 56,  199 => 265,  193 => 435,  189 => 51,  187 => 48,  182 => 66,  176 => 223,  173 => 401,  168 => 44,  164 => 203,  162 => 42,  154 => 189,  149 => 182,  147 => 37,  144 => 36,  141 => 35,  133 => 32,  130 => 41,  125 => 44,  122 => 26,  116 => 116,  112 => 22,  109 => 105,  106 => 104,  103 => 76,  99 => 68,  95 => 28,  92 => 35,  86 => 181,  82 => 28,  80 => 2,  73 => 16,  64 => 13,  60 => 22,  57 => 11,  54 => 78,  51 => 77,  48 => 16,  45 => 11,  42 => 16,  39 => 15,  36 => 5,  33 => 3,  30 => 3,);
    }
}
