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
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/f6dce9b617.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
<style>
    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    body {
        background-color: #fff;
    }
    .box-category {
        width: 100%;
        float: left;
        margin-bottom: 20px;
    }
    .title-box-category {
        display: block;
        position: relative;
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 12px;
        font-family: "Merriweather",serif !important;
        color: #222;
        font-weight: bold;
    }
    .box-xemnhieu .title-box-category {
        border-bottom: 1px solid #e5e5e5;
        padding-bottom: 0;
        color: #757575;
    }
    .title-box-category .parent-cate {
        float: left;
    }
    .box-xemnhieu .title-box-category .parent-cate {
        margin-right: 20px;
    }
    .box-xemnhieu .title-box-category .parent-cate.active {
        color: #222;
        line-height: inherit;
        font-size: inherit;
        font-weight: inherit;
    }
    .title-box-category a.inner-title:hover {
        color: #B52759;
        text-decoration: none;
    }
    .title-box-category a.inner-title:focus {
        color: #B52759;
        text-decoration: none !important;
        outline: none !important;
    }
    .title-news a {
        color: inherit;
        text-decoration: none;
        outline: 1;
    }
    .title-news a:hover {
        color: #087cce;
    }
    .title-news a:focus {
        color: #087cce;
        text-decoration: none !important;
        outline: none !important;
        border: none;
    }
    .title-box-category .inner-title {
        position: relative;
        display: inline-block;
    }
    .title-box-category .inner-title:before {
        content: "";
        width: 100%;
        height: 1px;
        background: #9f224e;
        position: absolute;
        left: 0;
        bottom: 0;
    }
    .box-xemnhieu .title-box-category .inner-title:before {
        display: none;
    }
    .box-xemnhieu .title-box-category .parent-cate.active .inner-title:before {
        display: block;
    }
    .width_common {
        width: 100%;
        float: left;
    }
    .box-xemnhieu .list-top-view {
        display: -moz-flex;
        display: -ms-flex;
        display: -o-flex;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
    .box-xemnhieu .list-top-view {
        position: relative;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }
    .box-xemnhieu .list-top-view:before {
        content: "";
        width: 1px;
        height: 100%;
        position: absolute;
        top: 0;
        left: 50%;
        background: #e5e5e5;
    }
    .item-news {
        width: 100%;
        float: left;
        padding-bottom: 15px;
        margin-bottom: 15px;
        border-bottom: 1px solid #e5e5e5;
    }
    .box-xemnhieu .list-top-view .item-news {
        position: relative;
        padding-left: 45px;
        padding-right: 15px;
        padding-bottom: 15px;
        margin-bottom: 15px;
        width: 50%;
    }
    .box-xemnhieu .list-top-view .item-news:nth-child(1) {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
    }
    .box-xemnhieu .list-top-view .item-news:nth-child(2) {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3;
    }
    .box-xemnhieu .list-top-view .item-news:nth-child(3) {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5;
    }
    .box-xemnhieu .list-top-view .item-news:nth-child(4) {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7;
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }
    .box-xemnhieu .list-top-view .item-news:nth-child(5) {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2;
        padding-left: 65px;
        padding-right: 0;
    }
    .box-xemnhieu .list-top-view .item-news:nth-child(6) {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4;
        padding-left: 65px;
        padding-right: 0;
    }
    .box-xemnhieu .list-top-view .item-news:nth-child(7) {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6;
        padding-left: 65px;
        padding-right: 0;
    }
    .box-xemnhieu .list-top-view .item-news:nth-child(8) {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8;
        padding-left: 65px;
        padding-right: 0;
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }
    .box-xemnhieu .list-top-view .number-top-view {
        font-family: "Merriweather",serif !important;
        font-size: 48px;
        color: #222;
        font-weight: bold;
        position: absolute;
        top: -8px;
        left: 0;
        -webkit-font-feature-settings: "pnum" on,"lnum" on;
        font-feature-settings: "pnum" on,"lnum" on;
    }
    .item-news .title-news, .list-sub-feature li .title_news, .title-folder, .wrapper-topstory-folder .list-sub-feature li .title_news, .info-author .meta-news .cat {
        font-feature-settings: 'pnum' on , 'lnum' on;
        -webkit-font-feature-settings: 'pnum' on , 'lnum' on;
        -moz-font-feature-settings: 'pnum' on , 'lnum' on;
        -ms-font-feature-settings: 'pnum' on , 'lnum' on;
    }
    .item-news .title-news {
        font-family: "Merriweather",serif !important;
        font-size: 14px;
        line-height: 160%;
        margin-bottom: 4px;
    }
    .has_transition, .title-news a {
        -webkit-transition-duration: 200ms;
        transition-duration: 200ms;
        -webkit-transition-property: all;
        transition-property: all;
        -webkit-transition-timing-function: cubic-bezier(.7,1,.7,1);
        transition-timing-function: cubic-bezier(.7,1,.7,1);
    }
    .meta-news {
        color: #757575;
        font-size: 12px;
        line-height: 14px;
        font-weight: 400!important;
        font-family: Arial !important;
    }
    .item-news .title-news .meta-news {
        float: none;
        display: inline-block;
        vertical-align: middle;
        margin-left: 8px;
        font-family: arial !important;
    }
    .meta-news .count_cmt, .meta-news .icon_commend {
        font-size: 12px;
        color: #076db6;
        display: inline-block;
        text-decoration: none!important;
    }
    .ic {
        width: 16px;
        height: 16px;
        fill: #757575;
        display: inline-block;
        vertical-align: middle;
    }
    .title_news i, .title-news i {
        margin: -2px 5px 0 0;
    }
    .meta-news .count_cmt .ic {
        color: #bdbdbd;
        width: 12px;
        height: 12px;
        margin-right: 1px;
    }
    .meta-news .count_cmt .ic:hover {
        color: #757575;
    }
    .box-xemnhieu .list-top-view .item-news:nth-child(5) .number-top-view,
    .box-xemnhieu .list-top-view .item-news:nth-child(6) .number-top-view,
    .box-xemnhieu .list-top-view .item-news:nth-child(7) .number-top-view,
    .box-xemnhieu .list-top-view .item-news:nth-child(8) .number-top-view {
        left: 20px;
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
    <div class="main container-fluid"  style="position: relative;">
        <div class="col-md-4 archive"style="position: absolute;left: 0;">
            <div class="box-category box-xemnhieu">
                <?php
                    if (is_home() || is_front_page()) {
                        echo '<hgroup class="width_common title-box-category">
                            <h2 class="parent-cate active">
                                <a data-itm-source="#vn_source=Home&amp;vn_campaign=Box-XemNhieuNhat&amp;vn_medium=TitleBoxXemNhieuNhat&amp;vn_term=Desktop" title="Xem nhiều" href="/nhom-h-cms-2023" class="inner-title" data-itm-added="1">Xem nhiều</a>
                            </h2>
                        </hgroup>';
                    }
                ?>
                <div class="width_common list-top-view">
                        <?php
                            if (is_home() || is_front_page()) { // Kiểm tra xem bạn đang ở trang chủ

                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 8
                                );

                                // Tạo một truy vấn WP_Query
                                $query = new WP_Query($args);

                                // kiểm tra có bài viết
                                if ($query->have_posts()) :
                                    $index = 0; // Khởi tạo biến index
                                    while ($query->have_posts()) : $query->the_post();
                                    $index++; // Tăng giá trị index sau mỗi lần lặp
                                    $comments_number = get_comments_number();
                                    ?>
                                    <article class="item-news">
                                        <span class="number-top-view"><?php echo  $index ?></span>
                                        <h3 class="title-news">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                <?php the_title(); ?>
                                                <!-- a -->
                                            </a>
                                            <span class="meta-news">
                                                <a class="count_cmt" href="<?php the_permalink(); ?>" style="white-space: nowrap; display: inline-block;">
                                                    <i class="fa-solid fa-message ic ic-comment"></i>
                                                    <span class="font_icon widget-comment-4669644-1"><?php echo $comments_number ?></span>
                                                </a>
                                            </span>
                                        </h3>
                                    </article>
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
