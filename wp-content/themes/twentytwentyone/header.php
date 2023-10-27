<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
    <style>
      ol, ul {
        list-style: none;
    }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site ">
    <a class="skip-link screen-reader-text" href="#content">
        <?php
        /* translators: Hidden accessibility text. */
        esc_html_e('Skip to content', 'twentytwentyone');
        ?>
    </a>

    <?php get_template_part('template-parts/header/site-header'); ?>
    <div class="main"  style="position: relative;">
        <div class="col-md-3 archive"style="position: absolute;left: 0;display: flex;
        justify-content: end;">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="wpb_text_column wpb_content_element">
                        <div class="wpb_wrapper">
                            <?php
                            if (is_home() || is_front_page()) { // Kiểm tra xem bạn đang ở trang chủ
                                // // Sử dụng hàm get_archives để lấy danh sách các bài viết theo thời gian
                                // $args = array(
                                //     'type' => 'monthly', // Loại archive (có thể là 'monthly', 'yearly', 'daily', và nhiều loại khác)
                                // );
                                // $archives = wp_get_archives( $args );
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 8
                                );

                                // Tạo một truy vấn WP_Query
                                $query = new WP_Query($args);

                                // kiểm tra có bài viết
                                if ($query->have_posts()) :
                                    while ($query->have_posts()) : $query->the_post();
                                    ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                                <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo 'No posts found.';
                                endif;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
