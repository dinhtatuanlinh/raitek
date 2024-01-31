<div
        id="experience"
        style="background-image: url(<?php echo DTTL_THEME_URL_IMG; ?>/Footer.jpg)"
      >
        <h2>
          NHẬN NGAY TƯ VẤN MIỄN PHÍ CHO CÁC NHU CẦU CỦA BẠN TẠI ĐÂY
        </h2>
        <div class="wrapper">
          <?php echo do_shortcode('[contact-form-7 id="0ae2db5" title="form"]'); ?>
          <div id="brochure">
            <a href="#">
              <img src="<?php echo DTTL_THEME_URL_IMG; ?>/Rectangle 785.png" alt="brochure">
            </a>
            <p>Tài liệu chi tiết</p>
          </div>
        </div>
      </div>
      <div id="footer">
        <div id="info" class="w3-row">
          <div class="wrapper w3-col l6">
            <div class="logo">
              <img
                src="<?php echo DTTL_THEME_URL_IMG; ?>/LOGO-RAITEK bo canh-05 3.png"
                alt="raitex"
              />
            </div>
            <p>Copyright © 2023</p>
            <p>All rights reserved</p>
            <div class="item">
              <img src="<?php echo DTTL_THEME_URL_ICON; ?>/icon footer-01.png" alt="facebook" />
              <img src="<?php echo DTTL_THEME_URL_ICON; ?>/icon footer-02.png" alt="youtube" />
              <img src="<?php echo DTTL_THEME_URL_ICON; ?>/icon footer-03.png" alt="linkedin" />
            </div>
          </div>
          <div class="wrapper w3-col l6 w3-row">
            <div class="item w3-col l3">
              <h3>Về chúng tôi</h3>
              <ul>
                <li><a href="<?php echo get_permalink( get_page_by_title( 'operator' ) ); ?>">Giới thiệu</a></li>
                <li>Thành tựu</li>
              </ul>
            </div>
            <div class="item w3-col l3">
              <h3>Về chúng tôi</h3>
              <ul>
                <li><a href="<?php echo get_permalink( get_page_by_title( 'operator' ) ); ?>">Vận hành bảo dưỡng</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_title( 'evaluation' ) ); ?>">Đánh giá kỹ thuật</a></li>
                <li><a href="<?php echo get_permalink( get_page_by_title( 'setup' ) ); ?>">Lắp đặt trọn gói</a></li>
              </ul>
            </div>
            <div class="item w3-col l6">
              <h3>Thông tin liên hệ</h3>
              <ul>
                <li>Mail: <a href="mailto:marketing@raitek.vn">marketing@raitek.vn</a></li>
                <li>
                  Số điện thoại: <a href="tel:0768682529">076 868 2529</a>
                </li>
                <li>
                  Địa chỉ: C20 ĐS1 số 295 Tân Kỳ Tân Quý, phường Tân Sơn Nhì,
                  quận Tân Phú, TP. HCM
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
    <script>
      AOS.init();

      if (window.innerWidth <= 810) {
        let partners = document.querySelectorAll("#partner .wrapper .item");
        partners.forEach((item) => {
          item.classList.add("swiper-slide");
        });
        var swiper = new Swiper("#partner-slide", {
          slidesPerView: 3,
          spaceBetween: 10,
          freeMode: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });

      }else{
        let partners = document.querySelectorAll("#partner .wrapper .item");
        partners.forEach((item) => {
          item.classList.add("swiper-slide");
        });
        var swiper = new Swiper("#partner-slide", {
          slidesPerView: 5,
          spaceBetween: 30,
          freeMode: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      }
    </script>
  </body>
</html>
