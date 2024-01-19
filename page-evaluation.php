<?php 
get_header(); 
get_header('top');
$upload_dir = wp_upload_dir();

// echo '<pre style="color: #fff">';
// print_r($upload_dir['url']);
// echo '</pre>';
?>

<div id="banner">
      <!-- <video src=""></video> -->
      <img class="hide-mobile" src="<?php echo DTTL_THEME_URL_IMG; ?>/Home.jpg" alt="" />
      <img class="hide-tablet" src="<?php echo DTTL_THEME_URL_IMG; ?>/mobile_Home.jpg" alt="">
      <h1>
        CHUYÊN GIA TƯ VẤN & ĐÁNH GIÁ DỰ ÁN ĐIỆN MẶT TRỜI HÀNG ĐẦU VIỆT NAM
      </h1>
    </div>
    <div id="when">
      <h2>KHI NÀO CẦN ĐẾN </br> DỊCH VỤ ĐÁNH GIÁ DỰ ÁN?</h2>
      <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Community.jpg" alt="" />
      <div class="wrapper">
        <div class="item">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 792.jpg" alt="" />
          <p>Đầu tư và mua bán (M&A)</p>
        </div>
        <div class="item">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 789.jpg" alt="" />
          <p>Tầm soát sức khỏe toàn hệ thống</p>
        </div>
        <div class="item">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 790.jpg" alt="" />
          <p>Hoàn thiện hồ sơ ngân hàng</p>
        </div>
        <div class="item">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 791.jpg" alt="" />
          <p>Đánh giá lại chất lượng dự án</p>
        </div>
        <div class="item">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 729.jpg" alt="" />
          <p>Thẩm định giá trị dự án</p>
        </div>
      </div>
    </div>
    <div id="conclusion" >
      <div class="inner" style="background-image: url(<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle\ 737.png)">
        <h2>KẾT QUẢ NHẬN LẠI SAU KHI ĐÁNH GIÁ </h2>
        <div class="wrapper w3-row">
          <div class="item w3-col l3 m3 s12">
            <div>
              <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Group 238.png" alt="" />
              <p>
                Phát hiện được tất cả cả lỗi đang xảy ra, biết nguyên nhân và
                được tư vấn cách khắc phục.
              </p>
            </div>
          </div>
          <div class="item w3-col l3 m3 s12">
            <div>
              <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Group 239.png" alt="" />
              <p>
                Đánh giá được hiện trạng của tài sản, công năng & tuổi thọ thực
                tế sau thời gian sử dụng.
              </p>
            </div>
          </div>
          <div class="item w3-col l3 m3 s12">
            <div>
              <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Group(1).png" alt="" />
              <p>
                Báo cáo đạt tiêu chuẩn ngân hàng yêu cầu để thực hiện các hồ sơ
                liên quan.
              </p>
            </div>
          </div>
          <div class="item w3-col l3 m3 s12">
            <div>
              <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Group.png" alt="" />
              <p>
                Định giá chính xác giá trị đầu tư của dự án, phân tích và dự
                đoán được sức khỏe tài chính của dự án trong tương lai.
              </p>
            </div>
          </div>
        </div>
      </div>
      <h3 class="hide-mobile">HÃY TRẢI NGHIỆM DỊCH VỤ ĐÁNH GIÁ KỸ THUẬT CHUYÊN NGHIỆP CỦA RAITEK</h3>
    </div>
    <div id="commitment-consultance">
      <h2>CAM KẾT VỀ DỊCH VỤ</h2>
      <div class="wrapper w3-row-padding">
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 816.jpg" alt="">
          <p>Sử dụng đúng thiết bị cam kết</p>
        </div>
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 817.jpg" alt="">
          <p>Báo cáo chuẩn xác, chi tiết và bám sát yêu cầu của khách hàng</p>
        </div>
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 818.jpg" alt="">
          <p>Tốc độ xử lý nhanh chóng </p>
        </div>
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 819.jpg" alt="">
          <p>Tư vấn hướng xử lý cho từng trường hợp </p>
        </div>
      </div>
    </div>
    <div id="projects">
        <h2>CÁC DỰ ÁN TIÊU BIỂU</h2>
        <div class="wrapper w3-row-padding">
          <?php
            $args = array(
              'posts_per_page' => 3,
              'category_name' => 'du-an'
            );
            $posts = new WP_Query( $args );
            if ( $posts->have_posts() ) :
              while ($posts->have_posts()) : $posts->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
              $except = get_the_excerpt();
          ?>
          <div class="item w3-col l4 s12">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
            <div class="box">
              <p><?php echo wp_trim_words( $except, 20, '' ); ?></p>
              <a href="<?php the_permalink(); ?>">Xem Thêm</a>
            </div>
          </div>

          <?php
                endwhile;
            endif;
            wp_reset_postdata();// reset lại đối tương wp_query
          ?>
          

        </div>
    </div>
    <div id="device">
      <h2>THIẾT BỊ HIỆN ĐẠI</h2>
      <div class="wrapper w3-row-padding">
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 752.png" alt="" />
          <p>Drone</p>
        </div>
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 753.png" alt="" />
          <p>Máy nhiệt cầm tay</p>
        </div>
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 754.png" alt="" />
          <p>Máy đo IV</p>
        </div>
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 755.png" alt="" />
          <p>Máy đo EL</p>
        </div>
      </div>
    </div>
    <div id="partner">
      <h2>ĐỐI TÁC - KHÁCH HÀNG</h2>
      <p>
        Đối tác đồng hành với chúng tôi trong lĩnh vực năng lượng tái tạo là
        những doanh nghiệp lớn trong và ngoài nước. Cùng nhau thực hiện nhiều dự
        án, điều này khẳng định được năng lực và kinh nghiệm của chúng tôi khi
        nhận được sự tin tưởng của Quý đối tác.
      </p>
      <div id="partner-slide" class="wrapper swiper w3-row">
        <div class="swiper-wrapper">
        <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (1).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (2).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (3).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (4).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (5).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (6).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (7).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (8).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (9).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (10).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (11).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (12).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (13).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (14).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (15).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (16).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (17).jpg"
              alt=""
            />
            <img
              class="item w3-col"
              src="<?php echo DTTL_THEME_URL_IMG; ?>/partner (18).jpg"
              alt=""
            />
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div id="safety">
      <h2>AN TOÀN LAO ĐỘNG (HSE)</h2>
      <div class="wrapper w3-row-padding">
        <div class="item w3-col l4 m4 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 756.jpg" alt="" />
        </div>
        <div class="item w3-col l4 m4 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 757.jpg" alt="" />
        </div>
        <div class="item w3-col l4 m4 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 758.jpg" alt="" />
        </div>
      </div>
    </div>

<?php 

get_footer(); 
?>