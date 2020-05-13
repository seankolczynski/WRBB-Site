<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display"/>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <?php wp_head(); ?>
    <!-- Inport font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- AJAX-ify all links -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
    <!-- History.js -->
    <script src="http://browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js"></script>

</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">
    <div class="header">
        <div class="head-img">
            <img src="<?php bloginfo('template_url'); ?>/black-w-red.png" id="wrbb-head-logo">
        </div>
        <div class="menu-bar">
            <div class="left-side row">
                <div class="col-xs-4 menu-link"><span class="menu-link-name">on air.</span>
                    <ul class="options">
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>

                    </ul>
                </div>
                <div class="col-xs-4 menu-link"><span class="menu-link-name">reviews.</span>
                    <ul class="options">
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                    </ul>
                </div>
                <div class="col-xs-4 menu-link"><span class="menu-link-name">music.</span>
                    <ul class="options">
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                    </ul>
                </div>
            </div>

            <div class="right-side row">
                <div class="col-xs-4 menu-link"><span class="menu-link-name">photos.</span>
                    <ul class="options">
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>

                    </ul>
                </div>
                <div class="col-xs-4 menu-link"><span class="menu-link-name">podcasts.</span>
                    <ul class="options">
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                    </ul>
                </div>
                <div class="col-xs-4 menu-link"><span class="menu-link-name">more.</span>
                    <ul class="options">
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                        <li>Something</li>
                    </ul>
                </div>
            </div>

        </div> <!-- menu-bar -->
        <!-- ******************* The Navbar Area ******************* -->
        <div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

            <a class="skip-link screen-reader-text sr-only"
               href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

            <nav class="navbar navbar-expand-md navbar-dark bg-primary">

                <?php if ('container' == $container) : ?>
                <div class="container">
                    <?php endif; ?>

                    <!-- Your site title as branding in the menu -->
                    <?php if (!has_custom_logo()) { ?>

                <?php if (is_front_page() && is_home()) : ?>

                    <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                                                     title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                                                     itemprop="url"><?php bloginfo('name'); ?></a></h1>

                <?php else : ?>

                    <a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>"
                       title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
                       itemprop="url"><?php bloginfo('name'); ?></a>

                <?php endif; ?>


                    <?php } else {
                        the_custom_logo();
                    } ?><!-- end custom logo -->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- The WordPress Menu goes here -->
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarNavDropdown',
                            'menu_class' => 'navbar-nav ml-auto',
                            'fallback_cb' => '',
                            'menu_id' => 'main-menu',
                            'depth' => 2,
                            'walker' => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    ); ?>
                    <?php if ('container' == $container) : ?>
                </div><!-- .container -->
            <?php endif; ?>

            </nav><!-- .site-navigation -->

        </div><!-- #wrapper-navbar end -->

        <!--Find slug of current page-->
        <?php
        global $post;
        $post_slug = $post->post_name;
        ?>

        <!--Display slider with images taken from posts in that category if any of these pages indicated by slug-->
        <?php if (is_front_page() || $post_slug == "main-page-menu-selection" || $post_slug == "main-page"
            || $post_slug == "article-main-page" || $post_slug == "music-main-page" || $post_slug == "feature-main-page"
            || $post_slug == "review-main-page") : ?>
            <?php get_template_part('slider', 'slider'); ?>
            <!--Static image otherwise-->
        <?php else: ?>
            <div class="header-image-fullscreen">
                <?php the_post_thumbnail('full'); ?>
            </div>
        <?php endif; ?>

    </div> <!-- header -->
</div>



