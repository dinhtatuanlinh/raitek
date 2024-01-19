<div id="main">
      <div id="closeMobileMenu" class="hide-desktop hide-tablet" onclick='closemenu()'></div>
      </div>
      <nav id="m-menu">
        <div class="close" onclick='closemenu()'><i class="fa fa-times" aria-hidden="true"></i></div>
        <?php
            if(has_nav_menu('mobile_menu')){
                $args = array(
                    'menu'                 => '',
                    'container'            => '',
                    'container_class'      => '',
                    'container_id'         => '',
                    'container_aria_label' => '',
                    'menu_class'           => '',
                    'menu_id'              => '',
                    'echo'                 => true,
                    'fallback_cb'          => 'wp_page_menu',
                    'before'               => '',
                    'after'                => '',
                    'link_before'          => '',
                    'link_after'           => '',
                    'items_wrap'           => '<ul>%3$s</ul>',//%3$s tương ứng với giá trị trong cặp thẻ li đưa vào
                    'item_spacing'         => 'preserve',
                    'depth'                => 3,// cho phép menu hiện 2 cấp nếu bằng 0 thì hiện tất cả các cấp bằng 1 thì chỉ hiện menu cha
                    'walker'               => '',
                    'theme_location'       => 'mobile_menu',
                );
                wp_nav_menu( $args );
            }
        ?>
        <div>
          <img src="<?php echo DTTL_THEME_URL_ICON; ?>\image 22.png" alt="viet nam" />
          <img src="<?php echo DTTL_THEME_URL_ICON; ?>\image 23.png" alt="" />
        </div>
        <div class="close2" onclick='closemenu()'><i class="fa fa-times" aria-hidden="true"></i></div>
        <!-- <ul>
          <li>Về chúng tôi</li>
          <li>Dịch vụ</li>
          <li>Dự án</li>
          <li>Đối tác</li>
          <li>Tin Tức</li>
        </ul> -->
        
      </nav>
      <div id="top">
        <div id="logo">
          <a href="<?php echo get_home_url(); ?>">
            <img src="<?php echo DTTL_THEME_URL_IMG; ?>/LOGO-RAITEK bo canh-05 3.png" alt="raitex" />
          </a>
        </div>
        <div class="center"></div>
        <!-- <nav id="l-menu">
          <ul>
            <li>Về chúng tôi</li>
            <li>Dịch vụ</li>
            <li>Dự án</li>
            <li>Đôi tác</li>
            <li>Tin Tức</li>
          </ul>
        </nav> -->
        <?php
            if(has_nav_menu('main_menu')){
                $args = array(
                    'menu'                 => '',
                    'container'            => 'nav',
                    'container_class'      => '',
                    'container_id'         => 'l-menu',
                    'container_aria_label' => '',
                    'menu_class'           => '',
                    'menu_id'              => '',
                    'echo'                 => true,
                    'fallback_cb'          => 'wp_page_menu',
                    'before'               => '',
                    'after'                => '',
                    'link_before'          => '',
                    'link_after'           => '',
                    'items_wrap'           => '<ul>%3$s<hr/></ul>',//%3$s tương ứng với giá trị trong cặp thẻ li đưa vào
                    'item_spacing'         => 'preserve',
                    'depth'                => 3,// cho phép menu hiện 2 cấp nếu bằng 0 thì hiện tất cả các cấp bằng 1 thì chỉ hiện menu cha
                    'walker'               => '',
                    'theme_location'       => 'main_menu',
                );
                wp_nav_menu( $args );
            }
        ?>
        <div id="language">
          <img src="<?php echo DTTL_THEME_URL_ICON; ?>\image 22.png" alt="viet nam" />
          <img src="<?php echo DTTL_THEME_URL_ICON; ?>\image 23.png" alt="" />
        </div>
        <div
          id="mobile-icon-menu"
          class="hide-desktop hide-tablet"
          onclick="openmenu()"
        >
          <i class="fa fa-bars" aria-hidden="true"></i>

        </div>
      </div>