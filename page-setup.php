<?php 
get_header(); 
get_header('top');
$upload_dir = wp_upload_dir();

// echo '<pre style="color: #000">';
// print_r("aaaaaaaaaaaaaaaaaaaaaaaaa");
// echo '</pre>';
?>

<div id="banner">
      <!-- <video src=""></video> -->
      <img class="hide-mobile" src="<?php echo DTTL_THEME_URL_IMG; ?>/Home.jpg" alt="" />
      <img class="hide-tablet" src="<?php echo DTTL_THEME_URL_IMG; ?>/mobile_Home.jpg" alt="">
      <h1>CUNG CẤP GIẢI PHÁP LẮP ĐẶT ĐIỆN MẶT TRỜI TỐI ƯU NHẤT</h1>
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
            nhà kính. Đây cũng là một trong những giải pháp hiệu quả nhất trong
            việc chống biến đổi khí hậu được áp dụng trên toàn cầu.
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
            là phương án hữu hiệu nhất giúp doanh nghiệp đạt được mục tiêu phát
            triển bền vững.
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
            đặt trong lành hơn. Đặc biệt, toàn cầu đang hướng đến mục tiêu giảm
            phát thải về 0 năm 2050 để đảm bảo môi trường sống tốt nhất cho thế
            hệ tương lai.
          </p>
        </div>
      </div>
    </div>

    <div id="application">
      <h2>ỨNG DỤNG ĐIỆN MẶT TRỜI TRONG ĐỜI SỐNG</h2>
      <video id="video" muted playsinline>
        <source src="<?php echo DTTL_THEME_URL_VIDEO; ?>/Video đầu trang EPC - Lắp đặt.mp4" type="video/mp4" />
      </video>
    </div>

    <div id="trend">
      <h2>
        XU HƯỚNG THẾ GIỚI VÀ VIỆT NAM TRONG HÀNH TRÌNH THỰC HIỆN NET-ZERO 2050
      </h2>
      <div class="wrapper w3-row">
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 829.png" alt="">
        </div>
        <div class="item w3-col l3 m3 s12">
          <p>CAM KẾT PHÁT THẢI BẰNG 0</p>
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 834.png" alt="">
          
        </div>
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 831.png" alt="">
        </div>
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 832.png" alt="">
          <p>ÁP THUẾ CARBON</p>
        </div>
      </div>
    </div>
    <div id="benefit">
      <h2>LỢI ÍCH CỦA VIỆC SỬ DỤNG HỆ THỐNG ĐIỆN MẶT TRỜI</h2>
      <div class="wrapper w3-row-padding">
        <div class="item w3-col l4 m4 s6">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Ellipse 82.png" alt="" />
          <h3>Giảm chi phí điện</h3>
          <p>
            Bằng việc sử dụng nguồn điện mặt trời, chủ đầu tư có thể tiết kiệm
            lên đến 85% chi phí điện năng hàng tháng.
          </p>
        </div>
        <div class="item w3-col l4 m4 s6">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Ellipse 83.png" alt="" />
          <h3>Lợi ích kinh doanh</h3>
          <p>
            Sử dụng điện với chi phí cực thấp suốt 25 năm, hoàn vốn chỉ sau
            khoảng 3- 5 năm.
          </p>
        </div>
        <div class="item w3-col l4 m4 s6">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Ellipse 84.png" alt="" />
          <h3>Tăng tuổi thọ mái nhà</h3>
          <p>
            Bằng việc sử dụng nguồn điện mặt trời, chủ đầu tư có thể tiết kiệm
            lên đến 85% chi phí điện năng hàng tháng.
          </p>
        </div>
        <div class="item w3-col l4 m4 s6">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Ellipse 85.png" alt="" />
          <h3>Giảm chi phí điện</h3>
          <p>
            Với tiện ích về điện thì hệ thống NLMT còn giúp làm mát mái nhà,
            chống ồn và hạn chế ảnh hưởng của thời tiết lên mái
          </p>
        </div>
        <div class="item w3-col l4 m4 s6">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Ellipse 86.png" alt="" />
          <h3>Nâng cao hình ảnh doanh nghiệp</h3>
          <p></p>
        </div>
        <div class="item w3-col l4 m4 s6">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Ellipse 87.png" alt="" />
          <h3>Đạt chứng chỉ công trình xanh (LEED, LOTUS)</h3>
          <p></p>
        </div>
      </div>
    </div>

    <div id="process" style="background-image:url(<?php echo DTTL_THEME_URL_IMG; ?>/Frame\ 89.png);">
      <h2>QUY TRÌNH LẮP ĐẶT</h2>
      <div id="setup-process" class="wrapper swiper">
          <div class="swiper-wrapper">
            <div class="item">
              <img

                src="<?php echo DTTL_THEME_URL_IMG; ?>/Vector.png"
                alt=""
              />
              <p>Tư vấn, tiếp nhận thông tin</p>
            </div>
            <div class="item">
              <img

                src="<?php echo DTTL_THEME_URL_IMG; ?>/solar_gallery-edit-broken.png"
                alt=""
              />
              <p>Khảo sát, thiết kế</p>
            </div>
            <div class="item">
              <img

                src="<?php echo DTTL_THEME_URL_IMG; ?>/Group 1.png"
                alt=""
              />
              <p>Báo giá</p>
            </div>
            <div class="item">
              <img

                src="<?php echo DTTL_THEME_URL_IMG; ?>/mdi_clipboard-edit-outline.png"
                alt=""
              />
              <p>Ký hợp đồng</p>
            </div>
            <div class="item">
              <img

                src="<?php echo DTTL_THEME_URL_IMG; ?>/Vector(1).png"
                alt=""
              />
              <p>Triển khai</p>
            </div>
            <div class="item">
              <img

                src="<?php echo DTTL_THEME_URL_IMG; ?>/Vector(2).png"
                alt=""
              />
              <p>Nghiệm thu</p>
            </div>
            <div class="item">
              <img

                src="<?php echo DTTL_THEME_URL_IMG; ?>/carbon_license-maintenance.png"
                alt=""
              />
              <p>Vận hành và bảo dưỡng</p>
            </div>
            
          </div>
          <div class="swiper-pagination"></div>
        </div>
    </div>

    <div id="setup-solution">
      <h2>GIẢI PHÁP LẮP ĐẶT</h2>
      <img src="<?php echo DTTL_THEME_URL_IMG; ?>/image 25.png" alt="" />
    </div>

    <div id="product">
      <h2>SẢN PHẨM</h2>
      <div class="wrapper w3-row-padding">
        <div class="item w3-col l4 m4 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 777.png" alt="" />
          <h3>THIẾT KẾ 3D</h3>
          <ul>
            <li>Thiết kế đúng kỹ thuật</li>
            <li>Đáp ứng nhu cầu thẩm mỹ của khách hàng</li>
          </ul>
        </div>
        <div class="item w3-col l4 m4 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 778.png" alt="" />
          <h3>INVERTER</h3>
          <ul>
            <li>Hiệu suất chuyển đổi cao đến 98%</li>
            <li>Nhỏ gọn, thẩm mỹ dễ dàng di chuyển, lắp đặt</li>
            <li>Không gây tiếng ồn</li>
            <li>Bảo hành 5 năm</li>
            <li>Có hệ thống giám sát 24/24</li>
          </ul>
        </div>
        <div class="item w3-col l4 m4 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 779.png" alt="" />
          <h3>PIN</h3>
          <ul>
            <li>Kích thước nhỏ, viền đen tối ưu về thẩm mỹ.</li>
            <li>Tương thích với tất cả biến tần</li>
            <li>Trời nắng ít vẫn hoạt động nên giờ nắng sẽ cao </li>
            <li>Bảo hành sản phẩm 15 năm</li>
            <li>Bảo hành hiệu suất 25 năm</li>
          </ul>
        </div>
      </div>
    </div>
    <div id="commitment-consultance">
      <h2>CAM KẾT VỀ DỊCH VỤ</h2>
      <div class="wrapper w3-row-padding">
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 816.png" alt="" />
          <p>Sử dụng đúng thiết bị cam kết</p>
        </div>
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 817.png" alt="" />
          <p>Báo cáo chuẩn xác, chi tiết và bám sát yêu cầu của khách hàng</p>
        </div>
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 818.png" alt="" />
          <p>Tốc độ xử lý nhanh chóng</p>
        </div>
        <div class="item w3-col l3 m3 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 819.png" alt="" />
          <p>Tư vấn hướng xử lý cho từng trường hợp</p>
        </div>
      </div>
      <h2>CAM KẾT VỀ KẾT QUẢ ĐẠT ĐƯỢC</h2>
      <div class="wrapper w3-row-padding">
        <div class="item w3-col l4 m4 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 7.jpg" alt="" />
          <p>Cam kết mức sản lượng dự kiến tạo ra</p>
        </div>
        <div class="item w3-col l4 m4 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 8.jpg" alt="" />
          <p>Cam kết thời gian hoàn vốn khi đầu tư điện mặt trời</p>
        </div>
        <div class="item w3-col l4 m4 s12">
          <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 9.jpg" alt="" />
          <p>
            Cam kết công suất như thiết kế ( tùy dự án), nếu không đạt sẽ tìm
            cách khắc phục sản lượng.
          </p>
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