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



<div id="video-banner">
        <video id="video" muted>
          <source src="<?php echo get_post_meta( $page->ID, "video" )[0]; ?>" type="video/mp4" />
        </video>
        <!-- <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Hero Section.png" alt="" /> -->
      </div>
      <div id="slogan">
        <div data-aos="fade-down">
          <h1>CUNG CẤP GIẢI PHÁP NĂNG LƯỢNG TÁI TẠO</h1>
          <p>
            Với nền tảng chuyên môn và nhiều năm kinh nghiệm về năng lượng tái
            tạo giúp Raitek trở nên khác biệt. Chúng tôi có niềm đam mê nghiên
            cứu và phát triển để hoàn thành sứ mệnh mang lại nguồn năng lượng
            sạch cho cuộc sống với tính năng đa dạng, tiện lợi, chất lượng cao,
            độ tin cậy và tối ưu được mọi chi phí cho khách hàng với một thái độ
            chuyên nghiệp nhất.
          </p>
        </div>
      </div>
      <div id="why" style="background-image: url(<?php echo DTTL_THEME_URL_IMG; ?>/Community.jpg)">
        <h2 data-aos="fade-up">
          TẠI SAO SỬ DỤNG ĐIỆN MẶT TRỜI LÀ LỰA CHỌN TỐT NHẤT CHO TƯƠNG LAI?
        </h2>
        <div class="wrapper w3-row">
          <div
            class="item w3-col l3 m3 s6"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <img src="<?php echo DTTL_THEME_URL_ICON; ?>/Icon2.png" alt="bao ve moi truong" />
            <h3>BẢO VỆ MÔI TRƯỜNG</h3>
            <p>
              Sử dụng điện mặt trời sẽ giúp giảm lượng khí thải CO2 gây hiệu ứng
              nhà kính. Đây cũng là một trong những giải pháp hiệu quả nhất
              trong việc chống biến đổi khí hậu được áp dụng trên toàn cầu.
            </p>
          </div>
          <div
            class="item w3-col l3 m3 s6"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <img src="<?php echo DTTL_THEME_URL_ICON; ?>/Icon3.png" alt="phat trien ben vung" />
            <h3>PHÁT TRIỂN BỀN VỮNG</h3>
            <p>
              Các chiến lược tăng trưởng xanh, thân thiện với môi trường đang là
              xu hướng của các doanh nghiệp trên toàn thế giới. Điện mặt trời sẽ
              là phương án hữu hiệu nhất giúp doanh nghiệp đạt được mục tiêu
              phát triển bền vững.
            </p>
          </div>
          <div
            class="item w3-col l3 m3 s6"
            data-aos="fade-up"
            data-aos-delay="500"
          >
            <img src="<?php echo DTTL_THEME_URL_ICON; ?>/Icon4.png" alt="giam chi phi dien" />
            <h3>GIẢM CHI PHÍ ĐIỆN</h3>
            <p>
              Bằng việc sử dụng nguồn điện mặt trời, chủ đầu tư có thể tiết kiệm
              lên đến 85% chi phí điện năng hàng tháng.
            </p>
          </div>
          <div
            class="item w3-col l3 m3 s6"
            data-aos="fade-up"
            data-aos-delay="700"
          >
            <img src="<?php echo DTTL_THEME_URL_ICON; ?>/Icon5.png" alt="chat luong cuoc song" />
            <h3>CHẤT LƯỢNG CUỘC SỐNG</h3>
            <p>
              Việc sử dụng điện mặt trời sẽ giúp cho không khí quanh khu vực lắp
              đặt trong lành hơn. Đặc biệt, toàn cầu đang hướng đến mục tiêu
              giảm phát thải về 0 năm 2050 để đảm bảo môi trường sống tốt nhất
              cho thế hệ tương lai.
            </p>
          </div>
        </div>
      </div>
      <div id="services">
        <h2>Dịch vụ của chúng tôi</h2>
        <div class="wrapper w3-row">
          <div class="item w3-col l6 s12">
            <img
              src="<?php echo DTTL_THEME_URL_IMG; ?>/save money with solar 9.jpg"
              alt="van hanh bao duong"
            />
            <div data-aos="zoom-in" data-aos-duration="2000">
              <h3>VẬN HÀNH BẢO DƯỠNG</h3>
              <p>
                Với phần mềm giám sát năng lượng độc quyền và đội ngũ kỹ sư
                chuyên nghiệp, Raitek cam kết sẽ mang lại cho khách hàng chất
                lượng dịch vụ hàng đầu, đảm bảo duy trì hiệu suất hoạt động tối
                ưu, giảm thiểu các chi phí vận hành bảo trì và tối đa hóa lợi
                nhuận.
              </p>
              <a href="<?php echo get_permalink( get_page_by_title( 'operator' ) ); ?>">TÌM HIỂU THÊM</a>
            </div>
          </div>
          <div class="item w3-col l6 s12">
            <img
              src="<?php echo DTTL_THEME_URL_IMG; ?>/save money with solar 10.jpg"
              alt="danh gia ky thuat"
            />
            <div data-aos="zoom-in" data-aos-duration="2000">
              <h3>ĐÁNH GIÁ KỸ THUẬT</h3>
              <p>
                Chúng tôi có đội ngũ chuyên gia đầy kinh nghiệm với chuyên môn
                và kiến thức sâu trong lĩnh vực năng lượng. Chúng tôi đảm bảo
                quá trình đánh giá kỹ thuật sẽ được thực hiện với độ chính xác
                tối đa, kiểm soát được mọi rủi ro và đưa ra chiến lược đúng đắn
                để giải quyết các vấn đề cấp thiết của khách hàng.
              </p>
              <a href="<?php echo get_permalink( get_page_by_title( 'evaluation' ) ); ?>">TÌM HIỂU THÊM</a>
            </div>
          </div>
          <div class="item w3-col l6 s12">
            <img
              src="<?php echo DTTL_THEME_URL_IMG; ?>/save money with solar 11.jpg"
              alt="lap dat tron goi"
            />
            <div data-aos="zoom-in" data-aos-duration="2000">
              <h3>LẮP ĐẶT TRỌN GÓI</h3>
              <p>
                Đội ngũ thiết kế và chuyên gia tư vấn của chúng tôi đảm bảo hệ
                thống điện mặt trời sẽ hoàn toàn phù hợp với nhu cầu và mục tiêu
                của khách hàng. Chúng tôi cam kết chất lượng thi công đạt chuẩn
                cùng chính sách bảo hành, hậu mãi lâu dài.
              </p>
              <a href="<?php echo get_permalink( get_page_by_title( 'setup' ) ); ?>">TÌM HIỂU THÊM</a>
            </div>
          </div>
          <div class="item w3-col l6 s12">
            <img
              src="<?php echo DTTL_THEME_URL_IMG; ?>/save money with solar 12.jpg"
              alt="quan ly tai san"
            />
            <div data-aos="zoom-in" data-aos-duration="2000">
              <h3>QUẢN LÝ TÀI SẢN</h3>
              <p>
                Chúng tôi cung cấp dịch vụ quản lý tài sản chuyên nghiệp. Với
                đội ngũ đông đảo sẵn có ở tất cả các mảng mà một doanh nghiệp
                cần từ quản lý chuyên môn cao, đội ngũ kỹ sư, nhân công dự án đa
                nhiệm cùng khối văn phòng giải quyết các vấn đề hành chính.
              </p>
              <a href="<?php echo get_permalink( get_page_by_title( 'setup' ) ); ?>">TÌM HIỂU THÊM</a>
            </div>
          </div>
        </div>
      </div>
      <div id="numbers" style="background-image: url(<?php echo DTTL_THEME_URL_IMG; ?>/Unlock.jpg)">
        <h2 data-aos="fade-up">RAITEK VÀ NHỮNG CON SỐ ẤN TƯỢNG</h2>
        <div class="wrapper w3-row">
          <div
            class="item w3-col l6 s12"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <img
              src="<?php echo DTTL_THEME_URL_ICON; ?>/material-symbols_construction-rounded.png"
              alt="20 mwp"
            />
            <div class="box">
              <h3>> 20 MWP</h3>
              <p>THI CÔNG & LẮP ĐẶT</p>
            </div>
          </div>
          <div
            class="item w3-col l6 s12"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <img src="<?php echo DTTL_THEME_URL_ICON; ?>/Icon1.png" alt="100 mwp" />
            <div class="box">
              <h3>> 100 MWP</h3>
              <p>VẬN HÀNH & BẢO DƯỠNG</p>
            </div>
          </div>
          <div
            class="item w3-col l6 s12"
            data-aos="fade-up"
            data-aos-delay="300"
          >
            <img src="<?php echo DTTL_THEME_URL_ICON; ?>/Icon.png" alt="2 gwp" />
            <div class="box">
              <h3>> 2 GWP</h3>
              <p>ĐÁNH GIÁ KỸ THUẬT</p>
            </div>
          </div>
          <div
            class="item w3-col l6 s12"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <img src="<?php echo DTTL_THEME_URL_ICON; ?>/thumb.png" alt="6 nam" />
            <div class="box">
              <h3>> 6 NĂM</h3>
              <p>KINH NGHIỆM</p>
            </div>
          </div>
        </div>
      </div>
      <div id="partner">
        <h2>ĐỐI TÁC - KHÁCH HÀNG</h2>
        <p>
          Đối tác đồng hành với chúng tôi trong lĩnh vực năng lượng tái tạo là
          những doanh nghiệp lớn trong và ngoài nước. Cùng nhau thực hiện nhiều
          dự án, điều này khẳng định được năng lực và kinh nghiệm của chúng tôi
          khi nhận được sự tin tưởng của Quý đối tác.
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
      <div id="news">
        <h2>TIN TỨC VÀ SỰ KIỆN</h2>

        <div id="news-slide" class="wrapper swiper w3-row">
          <div class="swiper-wrapper">

            <?php
              $args = array(
                'category_name' => 'blog'
              );
              $posts = new WP_Query( $args );
              if ( $posts->have_posts() ) :
                while ($posts->have_posts()) : $posts->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                $except = get_the_excerpt();
            ?>
            <div class="item w3-col">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                <div class="box">
                  <h3><?php the_title(); ?></h3>
                  <p>Published on: </br> <?php the_date() ; ?></p>
                  <a href="<?php the_permalink(); ?>">Xem Thêm</a>
                </div>
            </div>

            <?php
                  endwhile;
              endif;
              wp_reset_postdata();// reset lại đối tương wp_query
            ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <?php 

get_footer(); 
?>