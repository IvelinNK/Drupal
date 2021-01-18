<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/school_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_dc8fd2d61190a0d606b715f6eded86f604af56919474fd96659ba738b9df6f69 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 60
        echo "
<div class=\"top-nav\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6\">

        ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 66)) {
            // line 67
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "message", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 69
        echo "
        ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "email", [], "any", false, false, true, 70)) {
            // line 71
            echo "          <i class=\"fa fa-envelope\"></i>
          ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "email", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 74
        echo "
      </div>
      
      ";
        // line 77
        if (($context["show_social_icon"] ?? null)) {
            // line 78
            echo "        <div class=\"col-md-6\">
          <p class=\"social-media\">
            ";
            // line 80
            if (($context["facebook_url"] ?? null)) {
                // line 81
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 81, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
            ";
            }
            // line 83
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 84
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 84, $this->source), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
            ";
            }
            // line 86
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 87
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 87, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
            ";
            }
            // line 89
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 90
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 90, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
            ";
            }
            // line 92
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 93
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 93, $this->source), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
            ";
            }
            // line 95
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 96
                echo "              <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 96, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 98
            echo "          </p>
        </div>
      ";
        }
        // line 101
        echo "     
    </div>
  </div>
</div>

<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 116)) {
            // line 117
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 119
        echo "      </div>

      <!-- End: Header -->

      ";
        // line 123
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 123) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 123))) {
            // line 124
            echo "        <div class=\"col-md-9\">

          ";
            // line 126
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 126)) {
                // line 127
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 129
            echo "
          ";
            // line 130
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
            echo "
          
        </div>
      ";
        }
        // line 134
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 142
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 143
            echo "  <div class=\"container\">
    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 147
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 147, $this->source));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "      </ul>
    </div>
  </div>
";
        }
        // line 153
        echo "

<!-- Start: Top widget -->

";
        // line 157
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 157) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 157)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 157))) {
            // line 158
            echo "  <div class=\"topwidget\" id=\"topwidget\">

    <div class=\"container\">

      ";
            // line 162
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 162)) {
                // line 163
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 164
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_title", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 167
            echo "
        <div class=\"row topwidget-list clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 171
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 171)) {
                // line 172
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 172, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 173
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 177
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 177)) {
                // line 178
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 178, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 179
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 183
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 183)) {
                // line 184
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 184, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 184), 184, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 185
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 192
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 198
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 198)) {
            // line 199
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 201
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 205
        echo "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 210
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 210) &&  !($context["is_front"] ?? null))) {
            // line 211
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 214
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 214), 214, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 219
        echo "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 228
        if ( !($context["is_front"] ?? null)) {
            // line 229
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 230
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 230), 230, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 233
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 239
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 239)) {
            // line 240
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 240, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 242
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 246
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 249
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 249)) {
            // line 250
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 250, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 252
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 256
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 259
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 259)) {
            // line 260
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 260, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 262
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 262), 262, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 266
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 279
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 279) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 279)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 279))) {
            // line 280
            echo "
  <div class=\"features\">
    <div class=\"container\">

      ";
            // line 284
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 284)) {
                // line 285
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 286
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_title", [], "any", false, false, true, 286), 286, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 289
            echo "
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 293
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 293)) {
                // line 294
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 294, $this->source), "html", null, true);
                echo ">
            ";
                // line 295
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 295), 295, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 298
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 301
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 301)) {
                // line 302
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 302, $this->source), "html", null, true);
                echo ">
            ";
                // line 303
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 303), 303, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 306
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 309
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 309)) {
                // line 310
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 310, $this->source), "html", null, true);
                echo ">
            ";
                // line 311
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 311), 311, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 314
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 321
        echo "<!--End: Features -->


<!-- Start: Services -->
";
        // line 325
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 325)) {
            // line 326
            echo "
  <div class=\"services\" id=\"services\">
    <div class=\"container\">
      ";
            // line 329
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 329), 329, $this->source), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 334
        echo "<!--End: Services -->



<!-- Start: Services -->
";
        // line 339
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "products", [], "any", false, false, true, 339)) {
            // line 340
            echo "
  <div class=\"products\" id=\"products\">
    <div class=\"container\">
      ";
            // line 343
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "products", [], "any", false, false, true, 343), 343, $this->source), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 348
        echo "<!--End: Services -->


<!-- Start: Price table widgets -->
";
        // line 352
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 352) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 352)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 352))) {
            // line 353
            echo "
  <div class=\"price-table\" id=\"price-table\">    
    <div class=\"container\">

      ";
            // line 357
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_title", [], "any", false, false, true, 357)) {
                // line 358
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 359
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_title", [], "any", false, false, true, 359), 359, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 362
            echo "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 366
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 366)) {
                // line 367
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 367, $this->source), "html", null, true);
                echo ">
            ";
                // line 368
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_first", [], "any", false, false, true, 368), 368, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 370
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 374
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 374)) {
                // line 375
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 375, $this->source), "html", null, true);
                echo ">
            ";
                // line 376
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_second", [], "any", false, false, true, 376), 376, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 378
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 382
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 382)) {
                // line 383
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 383, $this->source), "html", null, true);
                echo ">
            ";
                // line 384
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_third", [], "any", false, false, true, 384), 384, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 386
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom third -->          
        ";
            // line 390
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 390)) {
                // line 391
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pricetable_class"] ?? null), 391, $this->source), "html", null, true);
                echo ">
            ";
                // line 392
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "pricetable_forth", [], "any", false, false, true, 392), 392, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 394
            echo "          
        <!-- End: Bottom Third -->

      </div>
    </div>
  </div>

";
        }
        // line 402
        echo "<!--End: Price table widgets -->


<!-- Start: Bottom widgets -->
";
        // line 406
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 406) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 406)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 406)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 406))) {
            // line 407
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">

      ";
            // line 411
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 411)) {
                // line 412
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 413
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_title", [], "any", false, false, true, 413), 413, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 416
            echo "
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 420
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 420)) {
                // line 421
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 421, $this->source), "html", null, true);
                echo ">
            ";
                // line 422
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 422), 422, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 424
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 428
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 428)) {
                // line 429
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 429, $this->source), "html", null, true);
                echo ">
            ";
                // line 430
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 430), 430, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 432
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 436
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 436)) {
                // line 437
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 437, $this->source), "html", null, true);
                echo ">
            ";
                // line 438
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 438), 438, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 440
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 444
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 444)) {
                // line 445
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 445, $this->source), "html", null, true);
                echo ">
            ";
                // line 446
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 446), 446, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 449
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 456
        echo "<!--End: Bottom widgets -->


<!-- Start: Team widgets -->
";
        // line 460
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 460) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 460)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 460)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 460))) {
            // line 461
            echo "
  <div class=\"team\" id=\"team\">    
    <div class=\"container\">

      ";
            // line 465
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_title", [], "any", false, false, true, 465)) {
                // line 466
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 467
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_title", [], "any", false, false, true, 467), 467, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 470
            echo "

      <div class=\"row team-list\">

        <!-- Start: Bottom First -->          
        ";
            // line 475
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 475)) {
                // line 476
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 476, $this->source), "html", null, true);
                echo ">
            ";
                // line 477
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_first", [], "any", false, false, true, 477), 477, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 479
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 483
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 483)) {
                // line 484
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 484, $this->source), "html", null, true);
                echo ">
            ";
                // line 485
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_second", [], "any", false, false, true, 485), 485, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 487
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 491
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 491)) {
                // line 492
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 492, $this->source), "html", null, true);
                echo ">
            ";
                // line 493
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_third", [], "any", false, false, true, 493), 493, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 495
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 499
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 499)) {
                // line 500
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["team_class"] ?? null), 500, $this->source), "html", null, true);
                echo ">
            ";
                // line 501
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "team_forth", [], "any", false, false, true, 501), 501, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 504
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 511
        echo "<!--End: Team widgets -->


<!-- Start: Footer widgets -->
";
        // line 515
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 515) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 515)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 515))) {
            // line 516
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">

      ";
            // line 520
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 520)) {
                // line 521
                echo "        <h2 class=\"custom-block-title\" >
          ";
                // line 522
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_title", [], "any", false, false, true, 522), 522, $this->source), "html", null, true);
                echo "
        </h2>
      ";
            }
            // line 525
            echo "
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 529
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 529)) {
                // line 530
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 530, $this->source), "html", null, true);
                echo ">
            ";
                // line 531
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 531), 531, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 534
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 537
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 537)) {
                // line 538
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 538, $this->source), "html", null, true);
                echo ">
            ";
                // line 539
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 539), 539, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 542
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 545
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 545)) {
                // line 546
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 546, $this->source), "html", null, true);
                echo ">
            ";
                // line 547
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 547), 547, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 550
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>

";
        }
        // line 557
        echo "<!--End: Footer widgets -->

<!-- Start: Copyright -->
<div class=\"copyright\">

    <div class=\"container\">

      <span>Copyright © ";
        // line 564
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</span>

      ";
        // line 566
        if (($context["show_credit_link"] ?? null)) {
            // line 567
            echo "        <span class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></span>
      ";
        }
        // line 569
        echo "
  </div>
</div>
<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/school_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1020 => 569,  1016 => 567,  1014 => 566,  1009 => 564,  1000 => 557,  991 => 550,  985 => 547,  980 => 546,  978 => 545,  973 => 542,  967 => 539,  962 => 538,  960 => 537,  955 => 534,  949 => 531,  944 => 530,  942 => 529,  936 => 525,  930 => 522,  927 => 521,  925 => 520,  919 => 516,  917 => 515,  911 => 511,  902 => 504,  896 => 501,  891 => 500,  889 => 499,  883 => 495,  877 => 493,  872 => 492,  870 => 491,  864 => 487,  858 => 485,  853 => 484,  851 => 483,  845 => 479,  839 => 477,  834 => 476,  832 => 475,  825 => 470,  819 => 467,  816 => 466,  814 => 465,  808 => 461,  806 => 460,  800 => 456,  791 => 449,  785 => 446,  780 => 445,  778 => 444,  772 => 440,  766 => 438,  761 => 437,  759 => 436,  753 => 432,  747 => 430,  742 => 429,  740 => 428,  734 => 424,  728 => 422,  723 => 421,  721 => 420,  715 => 416,  709 => 413,  706 => 412,  704 => 411,  698 => 407,  696 => 406,  690 => 402,  680 => 394,  674 => 392,  669 => 391,  667 => 390,  661 => 386,  655 => 384,  650 => 383,  648 => 382,  642 => 378,  636 => 376,  631 => 375,  629 => 374,  623 => 370,  617 => 368,  612 => 367,  610 => 366,  604 => 362,  598 => 359,  595 => 358,  593 => 357,  587 => 353,  585 => 352,  579 => 348,  571 => 343,  566 => 340,  564 => 339,  557 => 334,  549 => 329,  544 => 326,  542 => 325,  536 => 321,  527 => 314,  521 => 311,  516 => 310,  514 => 309,  509 => 306,  503 => 303,  498 => 302,  496 => 301,  491 => 298,  485 => 295,  480 => 294,  478 => 293,  472 => 289,  466 => 286,  463 => 285,  461 => 284,  455 => 280,  453 => 279,  438 => 266,  431 => 262,  425 => 260,  423 => 259,  418 => 256,  411 => 252,  405 => 250,  403 => 249,  398 => 246,  391 => 242,  385 => 240,  383 => 239,  375 => 233,  369 => 230,  366 => 229,  364 => 228,  353 => 219,  345 => 214,  340 => 211,  338 => 210,  331 => 205,  324 => 201,  320 => 199,  318 => 198,  310 => 192,  301 => 185,  293 => 184,  291 => 183,  285 => 179,  277 => 178,  275 => 177,  269 => 173,  261 => 172,  259 => 171,  253 => 167,  247 => 164,  244 => 163,  242 => 162,  236 => 158,  234 => 157,  228 => 153,  222 => 149,  213 => 147,  209 => 146,  204 => 143,  202 => 142,  192 => 134,  185 => 130,  182 => 129,  176 => 127,  174 => 126,  170 => 124,  168 => 123,  162 => 119,  156 => 117,  154 => 116,  137 => 101,  132 => 98,  126 => 96,  123 => 95,  117 => 93,  114 => 92,  108 => 90,  105 => 89,  99 => 87,  96 => 86,  90 => 84,  87 => 83,  81 => 81,  79 => 80,  75 => 78,  73 => 77,  68 => 74,  63 => 72,  60 => 71,  58 => 70,  55 => 69,  49 => 67,  47 => 66,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/school_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\Drupal\\web\\themes\\contrib\\school_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 66, "for" => 146);
        static $filters = array("escape" => 67, "raw" => 147, "date" => 564);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
