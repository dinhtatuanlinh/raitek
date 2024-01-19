<?php 
get_header(); 
get_header('top');
$upload_dir = wp_upload_dir();

$page = get_page_by_title( 'video banner' ) ;

// echo '<pre style="color: #000">';
// print_r(get_page_by_title( 'video banner' ));
// print_r($page->ID);
// print_r(get_post_meta( $page->ID, "video" )[0]);
// echo '</pre>';
?>
<div id="blog-banner">
    <img src="<?php echo DTTL_THEME_URL_IMG; ?>/1.jpg" alt="">
    <h1 class="cattitle"><?php echo get_the_category()[0]->name; ?></h1>
</div>

<div id="category">
<div class="wrapper">
        <div id="content">
            <div class="post-wrapper w3-row-padding">
                <?php
                    if ( have_posts() ) :
                        while (have_posts()) : the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn  
                        /* get the WC_Product Object */ 
                        $except = get_the_excerpt();
                        // echo $except;

                ?>
                <div class="items w3-col l3 m3 s6">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <div class="infowrapper">
                            <div class="name"><?php the_title(); ?></div>
                            <!-- <div class="date">Đăng vào: <?php the_date() ; ?></div> -->
                            <p><?php echo wp_trim_words( $except, 20, '' ); ?></p>
                        </div>
                    </a>
                </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();// reset lại đối tương wp_query
                ?>
            </div>
			            <?php the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '&larr;',
                'next_text' => '&rarr;',
            )); ?>
            
        </div>

    </div>
</div>

<?php 

get_footer(); 
?>