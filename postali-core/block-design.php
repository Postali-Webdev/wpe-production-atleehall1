<?php 
    
    $GLOBALS['font_primary'] = get_field('font_primary','options');
    $GLOBALS['font_secondary'] = get_field('font_secondary','options');

    if(get_field('font_H1','options') == 'primary') {
        $GLOBALS['font_H1'] = $GLOBALS['font_primary'];
    } else {
        $GLOBALS['font_H1'] = $GLOBALS['font_secondary'];
    }

    if(get_field('font_H2','options') == 'primary') {
        $GLOBALS['font_H2'] = $GLOBALS['font_primary'];
    } else {
        $GLOBALS['font_H2'] = $GLOBALS['font_secondary'];
    }

    if(get_field('font_H3','options') == 'primary') {
        $GLOBALS['font_H3'] = $GLOBALS['font_primary'];
    } else {
        $GLOBALS['font_H3'] = $GLOBALS['font_secondary'];
    }

    if(get_field('font_H4','options') == 'primary') {
        $GLOBALS['font_H4'] = $GLOBALS['font_primary'];
    } else {
        $GLOBALS['font_H4'] = $GLOBALS['font_secondary'];
    }

    if(get_field('font_paragraph','options') == 'primary') {
        $GLOBALS['font_paragraph'] = $GLOBALS['font_primary'];
    } else {
        $GLOBALS['font_paragraph'] = $GLOBALS['font_secondary'];
    }

    // set base value for rems
    $global_rems_base = get_field('paragraph_font_size','options');

    // typography specs
    $body_font_color = get_field('body_font_color','options');
    $h1_font_size = 0.0625 * get_field('h1_font_size','options');
    $h2_font_color = get_field('h2_font_color','options');
    $h2_font_size = 0.0625 * get_field('h2_font_size','options');
    $h3_font_color = get_field('h3_font_color','options');
    $h3_font_size = 0.0625 * get_field('h3_font_size','options');
    $h4_font_color = get_field('h4_font_color','options');
    $h4_font_size = 0.0625 * get_field('h4_font_size','options');
    $paragraph_font_size = 0.0625 * get_field('paragraph_font_size','options');

    // primary navigation colors
    $color_header_background = get_field('color_header_background','options');
    $color_primary_menu_item = get_field('color_primary_menu_item','options');
    $color_primary_menu_item_hover = get_field('color_primary_menu_item_hover','options');
    $color_submenu_bg = get_field('color_submenu_bg','options');
    $color_submenu_child_color = get_field('color_submenu_child_color','options');
    $color_submenu_child_hover_color = get_field('color_submenu_child_hover_color','options');
    $color_submenu_child_hover_bg = get_field('color_submenu_child_hover_bg','options');
    $color_primary_menu_contact_bg = get_field('color_primary_menu_contact_bg','options');
    $color_primary_menu_contact_bg_hover = get_field('color_primary_menu_contact_bg_hover','options');
    $color_primary_menu_contact = get_field('color_primary_menu_contact','options');
    $color_primary_menu_contact_hover = get_field('color_primary_menu_contact_hover','options');

    // misc color values
    $color_primary_1 = get_field('color_primary_1','options');
    $color_primary_2 = get_field('color_primary_2','options');
    $color_secondary_1 = get_field('color_secondary_1','options');
    $color_secondary_2 = get_field('color_secondary_2','options');
    $color_page_bg = get_field('color_page_bg','options');
    $color_awards_bg = get_field('color_awards_bg','options');

    // footer colors
    $color_footer_bg = get_field('color_footer_bg','options');
    $color_footer_social = get_field('color_footer_social','options');
    $color_footer_social_hover = get_field('color_footer_social_hover','options');
    $color_footer_social_bg = get_field('color_footer_social_bg','options');
    $color_footer_social_bg_hover = get_field('color_footer_social_bg_hover','options');
    $color_footer_text = get_field('color_footer_text','options');
    $color_footer_link = get_field('color_footer_link','options');
    $color_footer_link_hover = get_field('color_footer_link_hover','options');

    // banner styles
    $color_banner_gradient = get_field('color_banner_gradient','options');
    $color_banner_gradient_opacity = get_field('color_banner_gradient_opacity','options');
    $color_banner_fonts = get_field('color_banner_fonts','options');
    
    // button styles
    $primary_button_style = get_field('primary_button_style','options');
    $primary_button_background_color = get_field('primary_button_background_color','options');
    $primary_button_text_color = get_field('primary_button_text_color','options');
    $primary_button_background_color_hover = get_field('primary_button_background_color_hover','options');
    $primary_button_text_color_hover = get_field('primary_button_text_color_hover','options');
    $primary_button_border_color = get_field('primary_button_border_color','options');
    $primary_button_border_weight = get_field('primary_button_border_weight','options');
    $primary_button_border_radius = get_field('primary_button_border_radius','options');

    $secondary_button_style = get_field('secondary_button_style','options');
    $secondary_button_background_color = get_field('secondary_button_background_color','options');
    $secondary_button_text_color = get_field('secondary_button_text_color','options');
    $secondary_button_background_color_hover = get_field('secondary_button_background_color_hover','options');
    $secondary_button_text_color_hover = get_field('secondary_button_text_color_hover','options');
    $secondary_button_border_color = get_field('secondary_button_border_color','options');
    $secondary_button_border_weight = get_field('secondary_button_border_weight','options');
    $secondary_button_border_radius = get_field('secondary_button_border_radius','options');

    // sidebar styles
    $sidebar_testimonials_block_bg = get_field('color_testimonial_bg','options');
    $color_sidebar_header_bg = get_field('color_sidebar_header_bg','options');

    if (get_field('include_gradient_overlay','optiions')) {
    // rgba value of primary color for gradient //
    list($r, $g, $b) = array_map(
        function ($c) {
          return hexdec(str_pad($c, 2, $c));
        },
        str_split(ltrim($color_banner_gradient, '#'), strlen($color_banner_gradient) > 4 ? 2 : 1)
      );

      // rgba value for header background when scrolled
      list($r2, $g2, $b2) = array_map(
        function ($c2) {
          return hexdec(str_pad($c2, 2, $c2));
        },
        str_split(ltrim($color_header_background, '#'), strlen($color_header_background) > 4 ? 2 : 1)
      );

    }
?>

<style type="text/css">  
    /* global */
    html { font-size: <?php echo $global_rems_base; ?>px; }
    .btn { color:<?php echo $color_primary_1; ?> }

    /* header */
    header { background:<?php echo $color_header_background; ?> !important; }
    header.scrolled { background:<?php echo "rgba(" . $r2 . ", " . $g2 . ", " . $b2 . ",.95)"; ?> !important; }
    header #header-top #header-top_right #header-top_right_menu .menu li a { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; color:<?php echo $color_primary_menu_item; ?>; }
    header #header-top #header-top_right #header-top_right_menu .menu li a:hover { color:<?php echo $color_primary_menu_item_hover; ?>; }

    header #header-top #header-top_right #header-top_right_menu .menu li a::before { background:<?php echo $color_secondary_1; ?>; }
    header #header-top #header-top_right #header-top_right_menu .menu li.nav-contact a { background: <?php echo $color_primary_menu_contact_bg; ?>; color: <?php echo $color_primary_menu_contact; ?>; }
    header #header-top #header-top_right #header-top_right_menu .menu li.nav-contact a:hover { background: <?php echo $color_primary_menu_contact_bg_hover; ?>; color: <?php echo $color_primary_menu_contact_hover; ?>; }
    header #header-top #header-top_right .navbar-form-search .search-form-container.hdn .search-input-group .btn { background: <?php echo $color_secondary_1; ?>; }
    header .navbar-form-search .form-control { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; }
    header .navbar-form-search .icon-search-icon:before { color: $dkblue; }

    header #header-top #header-top_right #header-top_right_menu .menu li .sub-menu { background:<?php echo $color_submenu_bg; ?>; }


    /* body */
    .body-container { background:<?php echo $color_page_bg; ?> !important; }
    .body-container p, ul li, ol li { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; color:<?php echo $body_font_color; ?>; font-size:<?php echo $paragraph_font_size; ?>rem; }
    .body-container h1 { font-family: <?php echo $GLOBALS['font_H1']; ?> !important; color:white; font-size:<?php echo $h1_font_size; ?>rem; font-weight:300; text-transform:uppercase; }
    .body-container h2 { font-family: <?php echo $GLOBALS['font_H2']; ?>; color:<?php echo $h2_font_color; ?>; font-size:<?php echo $h2_font_size; ?>rem; font-weight:300; }

    .body-container h2 strong { font-weight:300; }

    .body-container h3 { font-family: <?php echo $GLOBALS['font_H3']; ?>; color:<?php echo $h3_font_color; ?>; font-size:<?php echo $h3_font_size; ?>rem; font-weight:400;  }
    .body-container h3 strong { font-weight:400; }
    
    .body-container h4 { font-family: <?php echo $GLOBALS['font_H4']; ?>; color:<?php echo $h4_font_color; ?>; font-size:<?php echo $h4_font_size; ?>rem;  }
    .body-container ul li { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; color:<?php echo $body_font_color; ?>; }

    <?php if ($secondary_button_style == 'bordered') { ?>
    .body-container .btn { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $secondary_button_background_color; ?>; border:<?php echo $secondary_button_border_weight; ?>px solid <?php echo $secondary_button_border_color; ?>; color:<?php echo $secondary_button_text_color; ?>; border-radius:<?php echo $secondary_button_border_radius; ?>px; box-sizing:border-box; }
    <?php } else { ?>
    .body-container .btn { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $secondary_button_background_color; ?>; color:<?php echo $secondary_button_text_color; ?>; box-sizing:border-box; }
    <?php } ?>

    <?php if ($secondary_button_style == 'bordered') { ?>
    .body-container .btn:hover { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $secondary_button_background_color_hover; ?>; border:<?php echo $secondary_button_border_weight; ?>px solid <?php echo $secondary_button_border_color; ?>; color:<?php echo $secondary_button_text_color_hover; ?> !important; border-radius:<?php echo $secondary_button_border_radius; ?>px; box-sizing:border-box; }
    <?php } else { ?>
    .body-container .btn:hover { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; background:<?php echo $secondary_button_background_color_hover; ?>; color:<?php echo $secondary_button_text_color_hover; ?> !important; box-sizing:border-box; }
    <?php } ?>

    /* blocks */
    .awards { background:<?php echo $color_awards_bg; ?> !important; }
    .banner .banner-gradient { background:linear-gradient(0deg, <?php echo "rgba(" . $r . ", " . $g . ", " . $b . ",1)"; ?> 0%, <?php echo "rgba(" . $r . ", " . $g . ", " . $b . ",.9)"; ?> 100%); opacity:.<?php echo $color_banner_gradient_opacity; ?> }
    .banner h1 { font-family: <?php echo $GLOBALS['font_H1']; ?> !important; color:<?php echo $color_banner_fonts; ?> !important; }
    
    .banner .main-contact .contact-block-right a:hover { color:<?php echo $color_primary_2; ?> }

    /* sidebar */
    .sidebar-block .testimonial-block { background:<?php echo $sidebar_testimonials_block_bg; ?> !important; }
    .sidebar-block .sidebar-more a { font-family: <?php echo $GLOBALS['font_primary']; ?>;  }
    .sidebar-block .sidebar-header { background: <?php echo $color_sidebar_header_bg; ?>; color: white; letter-spacing:2px; }
    .sidebar-block .result-block p.large { font-family: <?php echo $GLOBALS['font_secondary']; ?>; font-size:22px; line-height:140%; }

    /* homepage */
    .home #hp-banner .subhead { font-family: <?php echo $GLOBALS['font_primary']; ?>; }

    /* case results archive */
    .post-type-archive-results .banner .column-50.result .result-main { background: white; }
    .post-type-archive-results .banner .column-50.result .accordions { background: <?php echo $color_secondary_2; ?>; }

    /* landing box */
    .post-type-archive-results .main-content .column-full .landing-box-container { background: <?php echo $color_primary_1; ?>; }
    .post-type-archive-results .main-content .column-full .landing-box-container .accordions { background: <?php echo $color_secondary_1; ?>; }

    .page-template-page-landing ul.landing-box li { background: <?php echo $color_primary_1; ?>; }
    .page-template-page-landing ul.landing-box li .all-pages { background: <?php echo $color_secondary_1; ?>; }
    .page-template-page-landing ul.landing-box li .children { background: <?php echo $color_secondary_1; ?>; }


    /* testimonials block */
    #testimonial { background: <?php echo $color_primary_1; ?>; }
    #testimonial h2, #testimonial h3, #testimonial h4, #testimonial p { color: white; }
    #testimonial p.testimonial-callout { color: <?php echo $color_primary_2; ?>; }


    /* footer */
    .footer { background:<?php echo $color_footer_bg; ?> !important; } 
    .footer p { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; color: <?php echo $color_footer_text; ?>; }
    .footer p a { color: <?php echo $color_footer_link; ?>; }
    .footer p a:hover { color: <?php echo $color_footer_link_hover; ?>; }
    .footer ul li a { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; color: <?php echo $color_footer_link; ?>; }
    .footer #menu-footer-menu li a:hover { color: <?php echo $color_footer_link_hover; ?>; text-decoration:none !important; }
    .footer .container .columns a.social-link span { background-color: <?php echo $color_footer_social_bg; ?> !important; color: <?php echo $color_footer_social; ?> !important; }
    .footer .container .columns a.social-link span:hover { background-color: <?php echo $color_footer_social_bg_hover; ?> !important; color: <?php echo $color_footer_social_hover; ?> !important; }
    .footer .footer-utility .utility a { font-family: <?php echo $GLOBALS['font_paragraph']; ?>; }
    .footer .footer-utility .utility a :hover { color: <?php echo $color_primary_2; ?>; }

    @media screen and (max-width:1024px) {
        header #header-top #header-top_right #header-top_menu .menu { background:<?php echo $color_primary_1; ?>; }
        header #header-top #header-top_right #header-top_menu .menu li:hover ul.sub-menu { background:<?php echo $color_secondary_1; ?>; }
    }

</style>
