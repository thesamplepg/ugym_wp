<?php
function theme_support($theme)
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', theme_support);

function ugym_menus()
{
    $locations = [
        'primary' => 'Desktop Primary Top',
        'footer' => 'Footer Menu Items',
    ];

    register_nav_menus($locations);
}

add_action('init', ugym_menus);

function ugym_register_styles()
{
    wp_enqueue_style(
        'ugym-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        filemtime(get_template_directory() . '/assets/css/main.css'), // Version update
    );
    wp_enqueue_style(
        'ugym-wordpress-content',
        get_template_directory_uri() . '/assets/css/fonts.css',
        [],
        filemtime(get_template_directory() . '/assets/css/fonts.css'),
    );
    wp_enqueue_style(
        'ugym-main-header',
        get_template_directory_uri() . '/assets/css/main-header.css',
        [],
        filemtime(get_template_directory() . '/assets/css/main-header.css'),
    );
    wp_enqueue_style(
        'ugym-wordpress-content',
        get_template_directory_uri() . '/assets/css/wordpress-content.css',
        [],
        filemtime(
            get_template_directory() . '/assets/css/wordpress-content.css',
        ),
    );
}

add_action('wp_enqueue_scripts', 'ugym_register_styles');

function ugym_register_scripts()
{
    wp_enqueue_script('jquery');

    wp_enqueue_script(
        'ugym_main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true,
    );
    wp_enqueue_script(
        'ugym_header',
        get_template_directory_uri() . '/assets/js/header.js',
        [],
        filemtime(get_template_directory() . '/assets/js/header.js'),
        true,
    );
    wp_enqueue_script(
        'ugym_welcome-slider',
        get_template_directory_uri() . '/assets/js/welcome-slider.js',
        [],
        filemtime(get_template_directory() . '/assets/js/welcome-slider.js'),
        true,
    );
    wp_enqueue_script(
        'ugym_faq',
        get_template_directory_uri() . '/assets/js/faq.js',
        [],
        filemtime(get_template_directory() . '/assets/js/faq.js'),
        true,
    );
    wp_enqueue_script(
        'ugym_clubs-map',
        get_template_directory_uri() . '/assets/js/clubs-map.js',
        [],
        filemtime(get_template_directory() . '/assets/js/clubs-map.js'),
        true,
    );
    wp_enqueue_script(
        'ugym_clubs-header',
        get_template_directory_uri() . '/assets/js/clubs-header.js',
        [],
        filemtime(get_template_directory() . '/assets/js/clubs-header.js'),
        true,
    );
    wp_enqueue_script(
        'ugym_swiper-components',
        get_template_directory_uri() . '/assets/js/swiper-components.js',
        [],
        filemtime(get_template_directory() . '/assets/js/swiper-components.js'),
        true,
    );
}

add_action('wp_enqueue_scripts', 'ugym_register_scripts');

function filter_blog_by_category($query)
{
    // Only modify the main query on the blog archive page
    if (
        $query->is_main_query() &&
        !is_admin() &&
        is_post_type_archive('blog')
    ) {
        // Check if a category has been selected in the URL
        if (isset($_GET['cat']) && !empty($_GET['cat'])) {
            $category_id = intval($_GET['cat']);
            // Modify the query to filter the 'blog' posts by the selected category
            $query->set('cat', $category_id);
        }
    }
}
add_action('pre_get_posts', 'filter_blog_by_category');

function handle_contacts_form_submission()
{
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $tarrif = sanitize_text_field($_POST['tarrif']);
    $promo = sanitize_text_field($_POST['promo']);
    $partner = sanitize_text_field($_POST['partner']);

    $post_id = wp_insert_post([
        'post_type' => 'form_submission',
        'post_title' => $name,
        'post_status' => 'publish',
    ]);

    if ($post_id) {
        update_post_meta($post_id, 'phone', $phone);
        update_post_meta($post_id, 'tarrif', $tarrif);
        update_post_meta($post_id, 'promo', $promo);
        update_post_meta($post_id, 'partner', $partner);
    }

    wp_redirect(home_url('?submission=success'));
    exit();
}

add_action(
    'admin_post_handle_contacts_form',
    'handle_contacts_form_submission',
);
add_action(
    'admin_post_nopriv_handle_contacts_form',
    'handle_contacts_form_submission',
);

function get_main_page_id()
{
    $main_page = get_page_by_title('Главная');
    return $main_page ? $main_page->ID : null;
}

?>
