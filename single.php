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

<div id="blog">
    <div class="wrapper">
        <h1><?php the_title(); ?></h1>
        <img id="featured-image" src="<?php echo get_post_meta( get_the_ID(), "banner" )[0]; ?>" alt="">
        <div id="content">
            <?php 
                the_content(); 
            ?>
        </div>
    </div>

</div>

<div id="news">
        <h2>TIN TỨC VÀ SỰ KIỆN</h2>

        <div id="news-slide" class="wrapper swiper w3-row">
          <div class="swiper-wrapper">
            <?php
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    // 'number' => '8',
                    'numberposts'      =>8 ,
                    'category'         => 0,
                    'orderby'          => 'rand',
                    'order' => 'DESC',
                );
                $blogs = get_posts($args);
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                    while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn  
                /* get the WC_Product Object */ 
                $except = get_the_excerpt();
                // echo $except;
                
            ?>
            <div class="item w3-col">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
              <div class="box">
                <h3><?php the_title(); ?></h3>
                <p>Published on: </br> <?php the_date() ; ?></p>
                <a href="<?php the_permalink(); ?>">Readmore</a>
              </div>
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
      </div>




<?php 

get_footer(); 
?>