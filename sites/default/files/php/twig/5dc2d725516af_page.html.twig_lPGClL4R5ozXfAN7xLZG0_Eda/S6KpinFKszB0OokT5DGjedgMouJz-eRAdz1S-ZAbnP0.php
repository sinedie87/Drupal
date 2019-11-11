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

/* themes/themeperso/templates/layout/page.html.twig */
class __TwigTemplate_2e15f1a1e7b521ed7f4254a32285f6991bfa30e9128f17c32d360bd1fef4a23c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 65, "for" => 136];
        $filters = ["escape" => 70, "raw" => 137, "date" => 561];
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
        echo "        
        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 264
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 265
            echo "          <div class=";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 267
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 271
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Clients -->
";
        // line 283
        if ($this->getAttribute(($context["page"] ?? null), "clients", [])) {
            echo " 

  <div class=\"clients\" id=\"clients\">

    ";
            // line 287
            if ($this->getAttribute(($context["page"] ?? null), "clients_title", [])) {
                // line 288
                echo "      <h2 class=\"custom-block-title\" >
        ";
                // line 289
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients_title", [])), "html", null, true);
                echo "
      </h2>
    ";
            }
            // line 292
            echo "
    <div class=\"container\">
      ";
            // line 294
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "clients", [])), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 299
        echo "<!--End: Clients -->


<!-- Start: Features -->
";
        // line 303
        if ((($this->getAttribute(($context["page"] ?? null), "features_first", []) || $this->getAttribute(($context["page"] ?? null), "features_second", [])) || $this->getAttribute(($context["page"] ?? null), "features_third", []))) {
            // line 304
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 308
            if ($this->getAttribute(($context["page"] ?? null), "features_title", [])) {
                // line 309
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 310
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 313
            echo "
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 317
            if ($this->getAttribute(($context["page"] ?? null), "features_first", [])) {
                // line 318
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 319
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 322
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 325
            if ($this->getAttribute(($context["page"] ?? null), "features_second", [])) {
                // line 326
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 327
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 330
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 333
            if ($this->getAttribute(($context["page"] ?? null), "features_third", [])) {
                // line 334
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 335
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "features_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 338
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 345
        echo "<!--End: Features -->


<!-- Start: Services widgets -->
";
        // line 349
        if ((($this->getAttribute(($context["page"] ?? null), "services_first", []) || $this->getAttribute(($context["page"] ?? null), "services_second", [])) || $this->getAttribute(($context["page"] ?? null), "services_third", []))) {
            // line 350
            echo "
  <div class=\"services\" id=\"services\">    
    <div class=\"container\">

      ";
            // line 354
            if ($this->getAttribute(($context["page"] ?? null), "services_title", [])) {
                // line 355
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 356
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 359
            echo "
      <div class=\"row services-list\">

        <!-- Start: Bottom First -->          
        ";
            // line 363
            if ($this->getAttribute(($context["page"] ?? null), "services_first", [])) {
                // line 364
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 365
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 367
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 371
            if ($this->getAttribute(($context["page"] ?? null), "services_second", [])) {
                // line 372
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 373
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 375
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 379
            if ($this->getAttribute(($context["page"] ?? null), "services_third", [])) {
                // line 380
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 381
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 383
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 387
            if ($this->getAttribute(($context["page"] ?? null), "services_forth", [])) {
                // line 388
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["services_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 389
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "services_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 391
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 399
        echo "<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->
";
        // line 403
        if (((($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_forth", []))) {
            // line 404
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 408
            if ($this->getAttribute(($context["page"] ?? null), "bottom_title", [])) {
                // line 409
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 410
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 413
            echo "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 417
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 418
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 419
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 421
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 425
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 426
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 427
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 429
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 433
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 434
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 435
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 437
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 441
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 442
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 443
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 446
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 453
        echo "<!--End: Bottom widgets -->


<!-- Start: Updates widgets -->
";
        // line 457
        if (((($this->getAttribute(($context["page"] ?? null), "updates_first", []) || $this->getAttribute(($context["page"] ?? null), "updates_second", [])) || $this->getAttribute(($context["page"] ?? null), "updates_third", [])) || $this->getAttribute(($context["page"] ?? null), "updates_forth", []))) {
            // line 458
            echo "
  <div class=\"updates\" id=\"updates\">    
    <div class=\"container\">

      ";
            // line 462
            if ($this->getAttribute(($context["page"] ?? null), "updates_title", [])) {
                // line 463
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 464
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 467
            echo "

      <div class=\"row updates-list\">

        <!-- Start: Bottom First -->          
        ";
            // line 472
            if ($this->getAttribute(($context["page"] ?? null), "updates_first", [])) {
                // line 473
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 474
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 476
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 480
            if ($this->getAttribute(($context["page"] ?? null), "updates_second", [])) {
                // line 481
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 482
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 484
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 488
            if ($this->getAttribute(($context["page"] ?? null), "updates_third", [])) {
                // line 489
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 490
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 492
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 496
            if ($this->getAttribute(($context["page"] ?? null), "updates_forth", [])) {
                // line 497
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["updates_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 498
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "updates_forth", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 501
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 508
        echo "<!--End: Team widgets -->


<!-- Start: Footer widgets -->
";
        // line 512
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", []))) {
            // line 513
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 517
            if ($this->getAttribute(($context["page"] ?? null), "footer_title", [])) {
                // line 518
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 519
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_title", [])), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 522
            echo "
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 526
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 527
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 528
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 531
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 534
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 535
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 536
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 539
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 542
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 543
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 544
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 547
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>

";
        }
        // line 554
        echo "<!--End: Footer widgets -->

<!-- Start: Copyright -->
<div class=\"copyright\">

    <div class=\"container\">

      <span>Copyright © ";
        // line 561
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>

      ";
        // line 563
        if (($context["show_credit_link"] ?? null)) {
            // line 564
            echo "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 566
        echo "
      <p class=\"social-media\">
        ";
        // line 568
        if (($context["facebook_url"] ?? null)) {
            // line 569
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
            echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
        ";
        }
        // line 571
        echo "        ";
        if (($context["google_plus_url"] ?? null)) {
            // line 572
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
            echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
        ";
        }
        // line 574
        echo "        ";
        if (($context["twitter_url"] ?? null)) {
            // line 575
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
            echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
        ";
        }
        // line 577
        echo "        ";
        if (($context["linkedin_url"] ?? null)) {
            // line 578
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
            echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
        ";
        }
        // line 580
        echo "        ";
        if (($context["pinterest_url"] ?? null)) {
            // line 581
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
            echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
        ";
        }
        // line 583
        echo "        ";
        if (($context["rss_url"] ?? null)) {
            // line 584
            echo "          <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
            echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
        ";
        }
        // line 586
        echo "      </p>

  </div>
</div>
<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/themeperso/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1087 => 586,  1081 => 584,  1078 => 583,  1072 => 581,  1069 => 580,  1063 => 578,  1060 => 577,  1054 => 575,  1051 => 574,  1045 => 572,  1042 => 571,  1036 => 569,  1034 => 568,  1030 => 566,  1026 => 564,  1024 => 563,  1019 => 561,  1010 => 554,  1001 => 547,  995 => 544,  990 => 543,  988 => 542,  983 => 539,  977 => 536,  972 => 535,  970 => 534,  965 => 531,  959 => 528,  954 => 527,  952 => 526,  946 => 522,  940 => 519,  937 => 518,  935 => 517,  929 => 513,  927 => 512,  921 => 508,  912 => 501,  906 => 498,  901 => 497,  899 => 496,  893 => 492,  887 => 490,  882 => 489,  880 => 488,  874 => 484,  868 => 482,  863 => 481,  861 => 480,  855 => 476,  849 => 474,  844 => 473,  842 => 472,  835 => 467,  829 => 464,  826 => 463,  824 => 462,  818 => 458,  816 => 457,  810 => 453,  801 => 446,  795 => 443,  790 => 442,  788 => 441,  782 => 437,  776 => 435,  771 => 434,  769 => 433,  763 => 429,  757 => 427,  752 => 426,  750 => 425,  744 => 421,  738 => 419,  733 => 418,  731 => 417,  725 => 413,  719 => 410,  716 => 409,  714 => 408,  708 => 404,  706 => 403,  700 => 399,  690 => 391,  684 => 389,  679 => 388,  677 => 387,  671 => 383,  665 => 381,  660 => 380,  658 => 379,  652 => 375,  646 => 373,  641 => 372,  639 => 371,  633 => 367,  627 => 365,  622 => 364,  620 => 363,  614 => 359,  608 => 356,  605 => 355,  603 => 354,  597 => 350,  595 => 349,  589 => 345,  580 => 338,  574 => 335,  569 => 334,  567 => 333,  562 => 330,  556 => 327,  551 => 326,  549 => 325,  544 => 322,  538 => 319,  533 => 318,  531 => 317,  525 => 313,  519 => 310,  516 => 309,  514 => 308,  508 => 304,  506 => 303,  500 => 299,  492 => 294,  488 => 292,  482 => 289,  479 => 288,  477 => 287,  470 => 283,  456 => 271,  449 => 267,  443 => 265,  441 => 264,  435 => 260,  428 => 256,  422 => 254,  420 => 253,  415 => 250,  408 => 246,  402 => 244,  400 => 243,  392 => 237,  386 => 234,  383 => 233,  381 => 232,  371 => 224,  363 => 219,  358 => 216,  356 => 215,  349 => 210,  342 => 206,  338 => 204,  336 => 203,  328 => 197,  321 => 193,  317 => 191,  315 => 190,  307 => 184,  298 => 177,  290 => 176,  288 => 175,  282 => 171,  274 => 170,  272 => 169,  266 => 165,  258 => 164,  256 => 163,  250 => 159,  244 => 156,  241 => 155,  239 => 154,  233 => 150,  231 => 149,  223 => 143,  217 => 139,  208 => 137,  204 => 136,  199 => 133,  197 => 132,  190 => 127,  185 => 124,  179 => 122,  177 => 121,  174 => 120,  168 => 118,  166 => 117,  162 => 115,  160 => 114,  154 => 110,  148 => 108,  146 => 107,  127 => 90,  122 => 87,  116 => 85,  113 => 84,  107 => 82,  104 => 81,  98 => 79,  95 => 78,  89 => 76,  86 => 75,  80 => 73,  77 => 72,  71 => 70,  69 => 69,  64 => 66,  62 => 65,  55 => 60,);
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





", "themes/themeperso/templates/layout/page.html.twig", "/Users/ludovic/Desktop/Code/Drupal/Test/themes/themeperso/templates/layout/page.html.twig");
    }
}
