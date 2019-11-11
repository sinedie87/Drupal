<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/charity_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_b23faa52824e8fe98c647c9b0534e9adc8ec23b4bf65038308cc0d9d42c1a318 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 65, "for" => 136];
        $filters = ["escape" => 70, "raw" => 137, "date" => 560];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 60
        echo "
<!-- <div class=\"top-nav\">
  <div class=\"container\">
    <div class=\"row\">
      
      ";
        // line 65
        if (($context["show_social_icon"] ?? null)) {
            // line 66
            echo "        <div class=\"col-md-6\">
          <p class=\"social-media\">
            Follow us 
            ";
            // line 69
            if (($context["facebook_url"] ?? null)) {
                // line 70
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            ";
            }
            // line 72
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 73
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            ";
            }
            // line 75
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 76
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            ";
            }
            // line 78
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 79
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            ";
            }
            // line 81
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 82
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            ";
            }
            // line 84
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 85
                echo "              <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 87
            echo "          </p>
        </div>
      ";
        }
        // line 90
        echo "     
    </div>
  </div>
</div> -->

<div class=\"header-wrap\">

  <div class=\"header\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->

        <div class=\"navbar-header col-md-3\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <i class=\"fas fa-bars\"></i>
          </button>
          ";
        // line 107
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 108
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
          ";
        }
        // line 110
        echo "        </div>

        <!-- End: Header -->

        ";
        // line 114
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || $this->getAttribute(($context["page"] ?? null), "search", []))) {
            // line 115
            echo "          <div class=\"col-md-9\">

            ";
            // line 117
            if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
                // line 118
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
                echo "
            ";
            }
            // line 120
            echo "
            ";
            // line 121
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
                // line 122
                echo "              ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "
            ";
            }
            // line 124
            echo "            
          </div>
        ";
        }
        // line 127
        echo "
      </div>
    </div>
  </div>

  ";
        // line 132
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 133
            echo "    
      <div class=\"flexslider\">
        <ul class=\"slides\">
          ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 137
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "        </ul>
      </div>
    
  ";
        }
        // line 143
        echo "
</div>


<!-- Start: Top widget -->

";
        // line 149
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", []))) {
            // line 150
            echo "  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">

      ";
            // line 154
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])) {
                // line 155
                echo "        <div class=\"custom-block-title\" >
          ";
                // line 156
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_title", [])), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 159
            echo "
        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 163
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 164
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 165
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 169
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 170
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 171
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 175
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 176
                echo "            <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "</div>
          ";
            }
            // line 177
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 184
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 190
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 191
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 193
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 197
        echo "
<!--End: Highlighted -->


<!--Start: Top Message -->

";
        // line 203
        if ($this->getAttribute(($context["page"] ?? null), "topmessage", [])) {
            // line 204
            echo "  <div class=\"top-message\">
    <div class=\"container\">
      ";
            // line 206
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topmessage", [])), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 210
        echo "
<!--End: Top Message -->


<!--Start: Title -->
";
        // line 215
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 216
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 219
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 224
        echo "<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 232
        if ( !($context["is_front"] ?? null)) {
            // line 233
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 234
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 237
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 243
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 244
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 246
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 250
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 253
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 254
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 256
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 260
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 263
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 264
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 266
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 270
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Clients -->
";
        // line 282
        if ($this->getAttribute(($context["page"] ?? null), "clients", [])) {
            echo " 

  <div class=\"clients\" id=\"clients\">

    ";
            // line 286
            if ($this->getAttribute(($context["page"] ?? null), "clients_title", [])) {
                // line 287
                echo "      <h2 class=\"custom-block-title\" >
        ";
                // line 288
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients_title", [])), "html", null, true);
                echo "
      </h2>
    ";
            }
            // line 291
            echo "
    <div class=\"container\">
      ";
            // line 293
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients", [])), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 298
        echo "<!--End: Clients -->


<!-- Start: Features -->
";
        // line 302
        if ((($this->getAttribute(($context["page"] ?? null), "features_first", []) || $this->getAttribute(($context["page"] ?? null), "features_second", [])) || $this->getAttribute(($context["page"] ?? null), "features_third", []))) {
            // line 303
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 307
            if ($this->getAttribute(($context["page"] ?? null), "features_title", [])) {
                // line 308
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 309
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 312
            echo "
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 316
            if ($this->getAttribute(($context["page"] ?? null), "features_first", [])) {
                // line 317
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 318
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 321
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 324
            if ($this->getAttribute(($context["page"] ?? null), "features_second", [])) {
                // line 325
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 326
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 329
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 332
            if ($this->getAttribute(($context["page"] ?? null), "features_third", [])) {
                // line 333
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 334
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 337
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 344
        echo "<!--End: Features -->


<!-- Start: Services widgets -->
";
        // line 348
        if ((($this->getAttribute(($context["page"] ?? null), "services_first", []) || $this->getAttribute(($context["page"] ?? null), "services_second", [])) || $this->getAttribute(($context["page"] ?? null), "services_third", []))) {
            // line 349
            echo "
  <div class=\"services\" id=\"services\">    
    <div class=\"container\">

      ";
            // line 353
            if ($this->getAttribute(($context["page"] ?? null), "services_title", [])) {
                // line 354
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 355
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 358
            echo "
      <div class=\"row services-list\">

        <!-- Start: Bottom First -->          
        ";
            // line 362
            if ($this->getAttribute(($context["page"] ?? null), "services_first", [])) {
                // line 363
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 364
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 366
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 370
            if ($this->getAttribute(($context["page"] ?? null), "services_second", [])) {
                // line 371
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 372
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 374
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 378
            if ($this->getAttribute(($context["page"] ?? null), "services_third", [])) {
                // line 379
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 380
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 382
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 386
            if ($this->getAttribute(($context["page"] ?? null), "services_forth", [])) {
                // line 387
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 388
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 390
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 398
        echo "<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->
";
        // line 402
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 403
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 407
            if ($this->getAttribute(($context["page"] ?? null), "bottom_title", [])) {
                // line 408
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 409
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 412
            echo "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 416
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 417
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 418
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 420
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 424
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 425
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 426
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 428
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 432
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 433
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 434
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 436
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 440
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 441
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 442
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 445
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 452
        echo "<!--End: Bottom widgets -->


<!-- Start: Updates widgets -->
";
        // line 456
        if (((($this->getAttribute(($context["page"] ?? null), "updates_first", []) || $this->getAttribute(($context["page"] ?? null), "updates_second", [])) || $this->getAttribute(($context["page"] ?? null), "updates_third", [])) || $this->getAttribute(($context["page"] ?? null), "updates_forth", []))) {
            // line 457
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 461
            if ($this->getAttribute(($context["page"] ?? null), "updates_title", [])) {
                // line 462
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 463
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 466
            echo "

      <div class=\"row updates-list\">

        <!-- Start: Bottom First -->          
        ";
            // line 471
            if ($this->getAttribute(($context["page"] ?? null), "updates_first", [])) {
                // line 472
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 473
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 475
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 479
            if ($this->getAttribute(($context["page"] ?? null), "updates_second", [])) {
                // line 480
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 481
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 483
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 487
            if ($this->getAttribute(($context["page"] ?? null), "updates_third", [])) {
                // line 488
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 489
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 491
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 495
            if ($this->getAttribute(($context["page"] ?? null), "updates_forth", [])) {
                // line 496
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 497
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 500
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 507
        echo "<!--End: Team widgets -->


<!-- Start: Footer widgets -->
";
        // line 511
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 512
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 516
            if ($this->getAttribute(($context["page"] ?? null), "footer_title", [])) {
                // line 517
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 518
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 521
            echo "
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 525
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 526
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 527
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 530
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 533
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 534
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 535
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 538
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 541
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 542
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 543
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 546
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>

";
        }
        // line 553
        echo "<!--End: Footer widgets -->

<!-- Start: Copyright -->
<div class=\"copyright\">

    <div class=\"container\">

      <span>Copyright © ";
        // line 560
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>

      ";
        // line 562
        if (($context["show_credit_link"] ?? null)) {
            // line 563
            echo "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 565
        echo "
      <p class=\"social-media\">
        ";
        // line 567
        if (($context["facebook_url"] ?? null)) {
            // line 568
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
        ";
        }
        // line 570
        echo "        ";
        if (($context["google_plus_url"] ?? null)) {
            // line 571
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
            echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
        ";
        }
        // line 573
        echo "        ";
        if (($context["twitter_url"] ?? null)) {
            // line 574
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
        ";
        }
        // line 576
        echo "        ";
        if (($context["linkedin_url"] ?? null)) {
            // line 577
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
            echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
        ";
        }
        // line 579
        echo "        ";
        if (($context["pinterest_url"] ?? null)) {
            // line 580
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
            echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
        ";
        }
        // line 582
        echo "        ";
        if (($context["rss_url"] ?? null)) {
            // line 583
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
            echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
        ";
        }
        // line 585
        echo "      </p>

  </div>
</div>
<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/charity_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1086 => 585,  1080 => 583,  1077 => 582,  1071 => 580,  1068 => 579,  1062 => 577,  1059 => 576,  1053 => 574,  1050 => 573,  1044 => 571,  1041 => 570,  1035 => 568,  1033 => 567,  1029 => 565,  1025 => 563,  1023 => 562,  1018 => 560,  1009 => 553,  1000 => 546,  994 => 543,  989 => 542,  987 => 541,  982 => 538,  976 => 535,  971 => 534,  969 => 533,  964 => 530,  958 => 527,  953 => 526,  951 => 525,  945 => 521,  939 => 518,  936 => 517,  934 => 516,  928 => 512,  926 => 511,  920 => 507,  911 => 500,  905 => 497,  900 => 496,  898 => 495,  892 => 491,  886 => 489,  881 => 488,  879 => 487,  873 => 483,  867 => 481,  862 => 480,  860 => 479,  854 => 475,  848 => 473,  843 => 472,  841 => 471,  834 => 466,  828 => 463,  825 => 462,  823 => 461,  817 => 457,  815 => 456,  809 => 452,  800 => 445,  794 => 442,  789 => 441,  787 => 440,  781 => 436,  775 => 434,  770 => 433,  768 => 432,  762 => 428,  756 => 426,  751 => 425,  749 => 424,  743 => 420,  737 => 418,  732 => 417,  730 => 416,  724 => 412,  718 => 409,  715 => 408,  713 => 407,  707 => 403,  705 => 402,  699 => 398,  689 => 390,  683 => 388,  678 => 387,  676 => 386,  670 => 382,  664 => 380,  659 => 379,  657 => 378,  651 => 374,  645 => 372,  640 => 371,  638 => 370,  632 => 366,  626 => 364,  621 => 363,  619 => 362,  613 => 358,  607 => 355,  604 => 354,  602 => 353,  596 => 349,  594 => 348,  588 => 344,  579 => 337,  573 => 334,  568 => 333,  566 => 332,  561 => 329,  555 => 326,  550 => 325,  548 => 324,  543 => 321,  537 => 318,  532 => 317,  530 => 316,  524 => 312,  518 => 309,  515 => 308,  513 => 307,  507 => 303,  505 => 302,  499 => 298,  491 => 293,  487 => 291,  481 => 288,  478 => 287,  476 => 286,  469 => 282,  455 => 270,  448 => 266,  442 => 264,  440 => 263,  435 => 260,  428 => 256,  422 => 254,  420 => 253,  415 => 250,  408 => 246,  402 => 244,  400 => 243,  392 => 237,  386 => 234,  383 => 233,  381 => 232,  371 => 224,  363 => 219,  358 => 216,  356 => 215,  349 => 210,  342 => 206,  338 => 204,  336 => 203,  328 => 197,  321 => 193,  317 => 191,  315 => 190,  307 => 184,  298 => 177,  290 => 176,  288 => 175,  282 => 171,  274 => 170,  272 => 169,  266 => 165,  258 => 164,  256 => 163,  250 => 159,  244 => 156,  241 => 155,  239 => 154,  233 => 150,  231 => 149,  223 => 143,  217 => 139,  208 => 137,  204 => 136,  199 => 133,  197 => 132,  190 => 127,  185 => 124,  179 => 122,  177 => 121,  174 => 120,  168 => 118,  166 => 117,  162 => 115,  160 => 114,  154 => 110,  148 => 108,  146 => 107,  127 => 90,  122 => 87,  116 => 85,  113 => 84,  107 => 82,  104 => 81,  98 => 79,  95 => 78,  89 => 76,  86 => 75,  80 => 73,  77 => 72,  71 => 70,  69 => 69,  64 => 66,  62 => 65,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 * - logo: The url of the logo image, as defined in theme settings.
 * - site_name: The name of the site. This is empty when displaying the site
 *   name has been disabled in the theme settings.
 * - site_slogan: The slogan of the site. This is empty when displaying the site
 *   slogan has been disabled in theme settings.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the Navigation region.
 * - page.page_title: Used by Current page Title.
 * - page.banner: Items for the banner region.
 * - page.highlighted: Items for the highlighted top  region.
 * - page.content_top: The main content top of the current page.
 * - page.help: Item for the help region.
 * - page.breadcrumb: Item for the Breadcrumb region.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.content_bottom: Items for the bottom in content region.
 * - page.footer_top: Items for the footer top region.
 * - page.footer_first: Items for the footer first region.
 * - page.footer_second: Items for the footer Second region.
 * - page.footer_third: Items for the footer third region.
 * - page.footer_bottom: Items for the footer bottom region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 *
 * @ingroup themeable
 */
#}

<!-- <div class=\"top-nav\">
  <div class=\"container\">
    <div class=\"row\">
      
      {% if show_social_icon %}
        <div class=\"col-md-6\">
          <p class=\"social-media\">
            Follow us 
            {% if facebook_url %}
              <a href=\"{{ facebook_url }}\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            {% endif %}
            {% if google_plus_url %}
              <a href=\"{{ google_plus_url }}\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            {% endif %}
            {% if twitter_url %}
              <a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            {% endif %}
            {% if linkedin_url %}
              <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            {% endif %}
            {% if pinterest_url %}
              <a href=\"{{ pinterest_url }}\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            {% endif %}
            {% if rss_url %}
              <a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            {% endif %}
          </p>
        </div>
      {% endif %}
     
    </div>
  </div>
</div> -->

<div class=\"header-wrap\">

  <div class=\"header\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->

        <div class=\"navbar-header col-md-3\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <i class=\"fas fa-bars\"></i>
          </button>
          {% if page.header %}
            {{ page.header }}
          {% endif %}
        </div>

        <!-- End: Header -->

        {% if page.primary_menu  or page.search%}
          <div class=\"col-md-9\">

            {% if page.search %}
              {{ page.search }}
            {% endif %}

            {% if page.primary_menu %}
              {{ page.primary_menu }}
            {% endif %}
            
          </div>
        {% endif %}

      </div>
    </div>
  </div>

  {% if is_front and show_slideshow%}
    
      <div class=\"flexslider\">
        <ul class=\"slides\">
          {% for slider_contents in slider_content %}
            {{ slider_contents | raw }}
          {% endfor %}
        </ul>
      </div>
    
  {% endif %}

</div>


<!-- Start: Top widget -->

{% if page.topwidget_first or page.topwidget_second or page.topwidget_third %}
  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">

      {% if page.topwidget_title %}
        <div class=\"custom-block-title\" >
          {{ page.topwidget_title }}
        </div>
      {% endif %}

        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->          
          {% if page.topwidget_first %}
            <div class = {{ topwidget_class }}>{{ page.topwidget_first }}</div>
          {% endif %}          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          {% if page.topwidget_second %}
            <div class = {{ topwidget_class }}>{{ page.topwidget_second }}</div>
          {% endif %}          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          {% if page.topwidget_third %}
            <div class = {{ topwidget_class }}>{{ page.topwidget_third }}</div>
          {% endif %}          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
{% endif %}

<!--End: Top widget -->

    
<!--Start: Highlighted -->

{% if page.highlighted %}
  <div class=\"highlighted\">
    <div class=\"container\">
      {{ page.highlighted }}
    </div>
  </div>
{% endif %}

<!--End: Highlighted -->


<!--Start: Top Message -->

{% if page.topmessage %}
  <div class=\"top-message\">
    <div class=\"container\">
      {{ page.topmessage }}
    </div>
  </div>
{% endif %}

<!--End: Top Message -->


<!--Start: Title -->
{%  if page.page_title and not is_front %}
  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        {{ page.page_title }}
      </div>
    </div>
  </div>
{% endif %}
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      {% if not is_front %}
        <div class=\"row\">
          <div class=\"col-md-12\">{{ page.breadcrumb }}</div>
        </div>
      {% endif %}

      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        {% if page.sidebar_first %}
          <div class={{sidebarfirst}}>
            <div class=\"sidebar\">
              {{ page.sidebar_first }}
            </div>
          </div>
        {% endif %}
        <!-- End Left SideBar -->

        <!--- Start Content -->
        {% if page.content %}
          <div class={{contentlayout}}>
            <div class=\"content_layout\">
              {{ page.content }}
            </div>              
          </div>
        {% endif %}
        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        {% if page.sidebar_second %}
          <div class={{sidebarsecond}}>
            <div class=\"sidebar\">
              {{ page.sidebar_second }}
            </div>
          </div>
        {% endif %}
        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Clients -->
{% if page.clients %} 

  <div class=\"clients\" id=\"clients\">

    {% if page.clients_title %}
      <h2 class=\"custom-block-title\" >
        {{ page.clients_title }}
      </h2>
    {% endif %}

    <div class=\"container\">
      {{ page.clients }}
    </div>
  </div>

{% endif %}
<!--End: Clients -->


<!-- Start: Features -->
{% if page.features_first or page.features_second or page.features_third %}

  <div class=\"features\">
    <div class=\"container\">

      {% if page.features_title %}
        <h2 class=\"custom-block-title\" >
          {{ page.features_title }}
        </h2>
      {% endif %}

      <div class=\"row\">

        <!-- Start: Features First -->
        {% if page.features_first %}
          <div class = {{ features_first_class }}>
            {{ page.features_first }}
          </div>
        {% endif %}
        <!-- End: Features First -->

        <!-- Start :Features Second -->
        {% if page.features_second %}
          <div class = {{ features_class }}>
            {{ page.features_second }}
          </div>
        {% endif %}
        <!-- End: Features Second -->

        <!-- Start: Features third -->
        {% if page.features_third %}
          <div class = {{ features_class }}>
            {{ page.features_third }}
          </div>
        {% endif %}
        <!-- End: Features Third -->

      </div>
    </div>
  </div>

{% endif %}
<!--End: Features -->


<!-- Start: Services widgets -->
{% if page.services_first or page.services_second or page.services_third %}

  <div class=\"services\" id=\"services\">    
    <div class=\"container\">

      {% if page.services_title %}
        <h2 class=\"custom-block-title\" >
          {{ page.services_title }}
        </h2>
      {% endif %}

      <div class=\"row services-list\">

        <!-- Start: Bottom First -->          
        {% if page.services_first %}
          <div class = {{ services_class }}>
            {{ page.services_first }}
          </div>
        {% endif %}          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        {% if page.services_second %}
          <div class = {{ services_class }}>
            {{ page.services_second }}
          </div>
        {% endif %}          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        {% if page.services_third %}
          <div class = {{ services_class }}>
            {{ page.services_third }}
          </div>
        {% endif %}          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        {% if page.services_forth %}
          <div class = {{ services_class }}>
            {{ page.services_forth }}
          </div>
        {% endif %}          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

{% endif %}
<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->
{% if page.bottom_first or page.bottom_second or page.bottom_third or page.bottom_forth %}

  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      {% if page.bottom_title %}
        <h2 class=\"custom-block-title\" >
          {{ page.bottom_title }}
        </h2>
      {% endif %}

      <div class=\"row\">

        <!-- Start: Bottom First -->          
        {% if page.bottom_first %}
          <div class = {{ bottom_class }}>
            {{ page.bottom_first }}
          </div>
        {% endif %}          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        {% if page.bottom_second %}
          <div class = {{ bottom_class }}>
            {{ page.bottom_second }}
          </div>
        {% endif %}          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        {% if page.bottom_third %}
          <div class = {{ bottom_class }}>
            {{ page.bottom_third }}
          </div>
        {% endif %}          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        {% if page.bottom_forth %}
          <div class = {{ bottom_class }}>
            {{ page.bottom_forth }}
          </div>
        {% endif %}
        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

{% endif %}
<!--End: Bottom widgets -->


<!-- Start: Updates widgets -->
{% if page.updates_first or page.updates_second or page.updates_third or page.updates_forth %}

  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      {% if page.updates_title %}
        <h2 class=\"custom-block-title\" >
          {{ page.updates_title }}
        </h2>
      {% endif %}


      <div class=\"row updates-list\">

        <!-- Start: Bottom First -->          
        {% if page.updates_first %}
          <div class = {{ updates_class }}>
            {{ page.updates_first }}
          </div>
        {% endif %}          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        {% if page.updates_second %}
          <div class = {{ updates_class }}>
            {{ page.updates_second }}
          </div>
        {% endif %}          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        {% if page.updates_third %}
          <div class = {{ updates_class }}>
            {{ page.updates_third }}
          </div>
        {% endif %}          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        {% if page.updates_forth %}
          <div class = {{ updates_class }}>
            {{ page.updates_forth }}
          </div>
        {% endif %}
        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

{% endif %}
<!--End: Team widgets -->


<!-- Start: Footer widgets -->
{% if page.footer_first or page.footer_second or page.footer_third %}

  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      {% if page.footer_title %}
        <h2 class=\"custom-block-title\" >
          {{ page.footer_title }}
        </h2>
      {% endif %}

      <div class=\"row\">

        <!-- Start: Footer First -->
        {% if page.footer_first %}
          <div class = {{ footer_class }}>
            {{ page.footer_first }}
          </div>
        {% endif %}
        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        {% if page.footer_second %}
          <div class = {{ footer_class }}>
            {{ page.footer_second }}
          </div>
        {% endif %}
        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        {% if page.footer_third %}
          <div class = {{ footer_class }}>
            {{ page.footer_third }}
          </div>
        {% endif %}
        <!-- End: Footer Third -->

      </div>
    </div>
  </div>

{% endif %}
<!--End: Footer widgets -->

<!-- Start: Copyright -->
<div class=\"copyright\">

    <div class=\"container\">

      <span>Copyright © {{ \"now\"|date(\"Y\") }}. All rights reserved.</span>

      {% if show_credit_link %}
        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      {% endif %}

      <p class=\"social-media\">
        {% if facebook_url %}
          <a href=\"{{ facebook_url }}\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
        {% endif %}
        {% if google_plus_url %}
          <a href=\"{{ google_plus_url }}\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
        {% endif %}
        {% if twitter_url %}
          <a href=\"{{ twitter_url }}\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
        {% endif %}
        {% if linkedin_url %}
          <a href=\"{{ linkedin_url }}\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
        {% endif %}
        {% if pinterest_url %}
          <a href=\"{{ pinterest_url }}\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
        {% endif %}
        {% if rss_url %}
          <a href=\"{{ rss_url }}\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
        {% endif %}
      </p>

  </div>
</div>
<!-- End: Copyright -->





", "themes/charity_zymphonies_theme/templates/layout/page.html.twig", "/Users/ludovic/Desktop/Code/Drupal/Test/themes/charity_zymphonies_theme/templates/layout/page.html.twig");
    }
}
