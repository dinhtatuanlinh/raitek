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
    <img src="<?php echo DTTL_THEME_URL_IMG; ?>/evaluation.png" alt="" />
</div>
<div id="about">

    <div class="wrapper">

        <div class="w3-row-padding">
            <div class="item w3-col l6 m6 s12">
            <h1>GIỚI THIỆU TỔNG QUAN</h1>
            <p>Công ty cổ phần Raitek, được thành lập với tiền thân là Genergy vào năm 2019, một trong những công ty dẫn đầu trong lĩnh vực năng lượng tái tạo tại Việt Nam với nhiều dự án trải dài khắp cả nước lẫn nước ngoài. Tập trung phát triển mảng năng lượng mặt trời cho khu công nghiệp và hộ gia đình. Cung cấp đa dạng các dịch vụ về EPC, Vận hành và bảo dưỡng, các dịch vụ kỹ thuật như thẩm định và đánh giá kỹ thuật năng lượng. Ngoài ra, Raitek còn nhận được sự tín nhiệm của nhiều đối tác khác khi thực hiện các công tác đánh giá công trình, dự án điện gió. Raitek sở hữu đội ngũ nhân viên chuyên nghiệp, quản lý trình độ cao và các kỹ sư giàu kinh nghiệm. Chúng tôi cam kết sẽ đưa ra những giải pháp tối ưu, thực hiện đúng tiến độ, chất lượng cao, đáp ứng các yêu cầu về kỹ thuật, an toàn cũng như các tiêu chuẩn ngày càng cao về môi trường. Phạm vi hoạt động ở khắp cả nước, những thành phố lớn và các tỉnh lân cận.
</p>
                
            </div>
            <div class="item w3-col l6 m6 s12">
            <img src="<?php echo DTTL_THEME_URL_IMG; ?>/pham-vi-hoat-dong-1200x1696.png" alt="GIỚI THIỆU TỔNG QUAN">
            </div>
        </div>
        
    </div>
</div>



<?php 

get_footer(); 
?>