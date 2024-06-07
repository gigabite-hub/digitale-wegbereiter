<!DOCTYPE html>
<html <?php language_attributes(); ?>  >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Digitale Wegbereiter<?php wp_title('|', true, 'left'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="container">
            <div class="header__row">
                <div class="header__logo-wrapper">
                    <?php
                        if (!empty(the_custom_logo())) :
                            the_custom_logo();
                        endif;
                    ?>
                </div>
                <div class="header__menu-wrapper">
                    <div class="menu__nav-wrapper main-menu">
                        <?php
                            if (has_nav_menu('main_menu')) {
                                wp_nav_menu(array(
                                    'container' => false,
                                    'theme_location' => 'main_menu',
                                    'walker' => new Custom_Nav_Walker()
                                ));
                            }
                            class Custom_Nav_Walker extends Walker_Nav_Menu
                            {
                                public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
                                {
                                    $classes = array();
                                    if (in_array('current-menu-item', $item->classes) || ($item->url === get_permalink())) {
                                        $classes[] = 'active';
                                    }
                                    // $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
                                    $output .= sprintf(
                                        '<li><a href="%s" class="%s">%s</a>',
                                        esc_url($item->url),
                                        esc_attr(implode(' ', $classes)),
                                        esc_html($item->title)
                                    );
                                }
                            }
                        ?>
                        <div class="header__action-btn">
                            <ul>
                                <li>
                                    <button class="search__icon" id="searchIcon">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.5975 19.6581L17.3395 15.3983C20.5256 11.1406 19.6568 5.10614 15.3991 1.92007C11.1414 -1.26601 5.107 -0.397272 1.92092 3.86044C-1.26516 8.11815 -0.396418 14.1526 3.86129 17.3386C7.28144 19.898 11.9789 19.898 15.3991 17.3386L19.659 21.5985C20.1943 22.1338 21.0622 22.1338 21.5975 21.5985C22.1328 21.0632 22.1328 20.1952 21.5975 19.66L21.5975 19.6581ZM9.66571 16.5164C5.88166 16.5164 2.81411 13.4489 2.81411 9.66485C2.81411 5.8808 5.88166 2.81326 9.66571 2.81326C13.4498 2.81326 16.5173 5.8808 16.5173 9.66485C16.5133 13.4472 13.4481 16.5124 9.66571 16.5164Z" fill="#11111F"/>
                                        </svg>
                                    </button>
                                    <!-- Search Block -->
                                    <div class="search__wrapper" id="searchWrapper">
                                        <div class="search__field-wrapper">
                                            <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                                <label>
                                                    <span class="screen-reader-text"><?php echo _x( 'Search for:', 'diditale' ); ?></span>
                                                    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'diditale' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                                                </label>
                                                <button type="submit" class="search-submit"><?php echo _x( 'Search', 'diditale' ); ?></button>
                                            </form>

                                            <!-- <input type="text" name="search" id="search" placeholder="Search">
                                            <button>Search</button> -->
                                        </div>
                                    </div>
                                </li>

                                <li class="menu-item-gtranslate">
                                    <div class="gglobe">
                                        <div class="gsatelites">
                                            <a href="#" data-gt-lang="en">
                                              </a>
                                            <a href="#" data-gt-lang="de">
                                             </a>
                                            <a href="#" data-gt-lang="ar">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="side__menu-icon">
                            <button id="openSideBarButton" aria-label="Hamburger icon">
                                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><g data-name="1" id="_1"><path d="M441.13,166.52h-372a15,15,0,1,1,0-30h372a15,15,0,0,1,0,30Z"/><path d="M441.13,279.72h-372a15,15,0,1,1,0-30h372a15,15,0,0,1,0,30Z"/><path d="M441.13,392.92h-372a15,15,0,1,1,0-30h372a15,15,0,0,1,0,30Z"/></g></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="menu__sidebar-wrapper">
        <div class="menu__layer-wrapper" ></div>
        <div class="menu__main-wrapper">
            <div class="flyout-header">
                <button class="search__icon" id="flyout-search">
                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.5975 19.6581L17.3395 15.3983C20.5256 11.1406 19.6568 5.10614 15.3991 1.92007C11.1414 -1.26601 5.107 -0.397272 1.92092 3.86044C-1.26516 8.11815 -0.396418 14.1526 3.86129 17.3386C7.28144 19.898 11.9789 19.898 15.3991 17.3386L19.659 21.5985C20.1943 22.1338 21.0622 22.1338 21.5975 21.5985C22.1328 21.0632 22.1328 20.1952 21.5975 19.66L21.5975 19.6581ZM9.66571 16.5164C5.88166 16.5164 2.81411 13.4489 2.81411 9.66485C2.81411 5.8808 5.88166 2.81326 9.66571 2.81326C13.4498 2.81326 16.5173 5.8808 16.5173 9.66485C16.5133 13.4472 13.4481 16.5124 9.66571 16.5164Z" fill="#11111F"/>
                    </svg>
                </button>
                <div class="search__wrapper" id="flyoutWrapper">
                    <div class="search__field-wrapper">
                        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <label>
                                <span class="screen-reader-text"><?php echo _x( 'Search for:', 'diditale' ); ?></span>
                                <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'diditale' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                            </label>
                            <button type="submit" class="search-submit"><?php echo _x( 'Search', 'diditale' ); ?></button>
                        </form>
                    </div>
                </div>
            </div>
            <button class="menu__sidebar-close--btn" >
                    <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M38 12.83l-2.83-2.83-11.17 11.17-11.17-11.17-2.83 2.83 11.17 11.17-11.17 11.17 2.83 2.83 11.17-11.17 11.17 11.17 2.83-2.83-11.17-11.17z"/><path d="M0 0h48v48h-48z" fill="none"/></svg>
                </button>
            <div class="menu__title">
                <h2>Menu</h2>
            </div>
            <div class="side__menu-list">
                <?php
                    if (has_nav_menu('main_menu')) {
                        wp_nav_menu(array(
                            'container' => false,
                            'theme_location' => 'main_menu',
                            'walker' => new Custom_Nav_Walker_sidebar()
                        ));
                    }
                    class Custom_Nav_Walker_sidebar extends Walker_Nav_Menu
                    {
                        public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
                        {
                            $classes = array();
                            if (in_array('current-menu-item', $item->classes) || ($item->url === get_permalink())) {
                                $classes[] = 'active';
                            }
                            // $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
                            $output .= sprintf(
                                '<li><a href="%s" class="%s">%s</a>',
                                esc_url($item->url),
                                esc_attr(implode(' ', $classes)),
                                esc_html($item->title)
                            );
                        }
                    }
                ?>
            </div>
        </div>
    </div>