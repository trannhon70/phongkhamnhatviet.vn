<!-- <footer class="footer" id="footer_pc">
    <div class="footer__support">
        <div class="footer__support-body">
            <h5>BẠN CẦN HỖ TRỢ?</h5>
            <span>LIÊN HỆ NGAY VỚI CHÚNG TÔI ĐỂ ĐƯỢC TƯ VẤN</span>
            <div class="footer__support-body-icon">
                <amp-img class="footer__support-body-icon-img" src="<?php echo $local ?>/images/icons/icon_dash.webp" height="13px" width="750px" alt="..."></amp-img>
            </div>
            <div class="footer__support-body-row">
                <a href="<?php echo $local ?>" class="footer__support-body-card">
                    <amp-img class="footer__support-body-card-img" src="<?php echo $local ?>/images/icons/icon_group_user.webp" height="54px" width="80px" alt="..."></amp-img>
                    <div class="footer__support-body-text">
                        <h5>028-7776-7777</h5>
                        <div>Tổng đài hỗ trợ khách hàng 24/7</div>
                    </div>
                </a>
                <a href="<?php echo $local ?>" class="footer__support-body-card">
                    <amp-img class="footer__support-body-card-img" src="<?php echo $local ?>/images/icons/icon_group_chat.webp" height="54px" width="80px" alt="..."></amp-img>
                    <div class="footer__support-body-text">
                        <h5>Chat với nhân viên</h5>
                        <div>Giải đáp thắc mắc về quy trình</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="footer__contact" >
        <div class="footer__contact-left" >
            <amp-img class="footer__contact-right-img" src="<?php echo $local ?>/images/logo/logo2.webp" height="72px" width="300px" alt="..."></amp-img>
            <div class="footer__contact-left-title" >
                <span>GIỜ LÀM VIỆC</span>
            </div>
            <div class="footer__contact-left-now" >
                8:00 - 20:00
            </div>
            <div class="" >
                Tất cả các ngày trong tuần, kể cả ngày lễ
            </div>
            <div class="footer__contact-left-title" >
                <span>THÔNG TIN LIÊN HỆ</span>
            </div>
            <div class="footer__contact-left-card" >
                <amp-img class="footer__contact-left-card-img" src="<?php echo $local ?>/images/icons/icon_phone_no.webp" height="34px" width="36px" alt="..."></amp-img>
                <div class="footer__contact-left-card-div" >
                    <h5>HOTLINE</h5>
                    <span>028-7776-7777</span>
                </div>
            </div>
            <div class="footer__contact-left-card" >
                <amp-img class="footer__contact-left-card-img" src="<?php echo $local ?>/images/icons/icon_location.webp" height="34px" width="36px" alt="..."></amp-img>
                <div class="footer__contact-left-card-div" >
                    <h5>ĐỊA CHỈ</h5>
                    <span>73 Kinh Dương Vương, P.12, Q.6, TP.HCM</span>
                </div>
            </div>
            <div class="footer__contact-left-card" >
                <amp-img class="footer__contact-left-card-img" src="<?php echo $local ?>/images/icons/icon_mail.webp" height="34px" width="36px" alt="..."></amp-img>
                <div class="footer__contact-left-card-div" >
                    <h5>MAIL</h5>
                    <span>pknhatviet@gmail.com</span>
                </div>
            </div>
        </div>
        <div class="footer__contact-right" >
        <amp-img class="footer__contact-right-img" src="<?php echo $local ?>/images/banner/Map.webp" height="390px" width="680px" alt="..."></amp-img>
        </div>
    </div>
    <div class="footer__copyRight" >
    <div>Copyright © <?php echo date('Y'); ?> JV Nhật Việt</div>
    </div>
</footer> -->


<script async src="<?php echo $local ?>/js/cdn_image.min.js"></script>
<script src="<?php echo $local ?>/js/jquery-3.7.1.min.js"></script>
<script async src="<?php echo $local ?>/js/toastr.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        function updateHeaderScripts() {
            // Xóa các script cũ nếu có
            const existingMobileScripts = document.querySelectorAll('script[id^="mobile-"]');
            const existingDesktopScripts = document.querySelectorAll('script[id^="desktop-"]');
            existingMobileScripts.forEach(script => script.remove());
            existingDesktopScripts.forEach(script => script.remove());

            if (window.innerWidth < 1000) {
                const mobileScripts = [
                    {
                        src: '<?php echo $local ?>/js/mobile.min.js',
                        id: 'mobile-0'
                    },
                    // {
                    //     src: 'js/siderbar_mobile.min.js',
                    //     id: 'mobile-1'
                    // },

                ];
                mobileScripts.forEach(({
                    src,
                    id
                }) => {
                    const script = document.createElement('script');
                    script.src = src;
                    script.id = id;
                    document.body.appendChild(script);
                });
            } else {
                const desktopScripts = [
                    {
                        src: '<?php echo $local ?>/js/slider.min.js',
                        id: 'desktop-0'
                    },

                ];
                desktopScripts.forEach(({
                    src,
                    id
                }) => {
                    const script = document.createElement('script');
                    script.src = src;
                    script.id = id;
                    document.body.appendChild(script);
                });
            }
        }

        updateHeaderScripts();

        window.addEventListener('resize', () => {
            updateHeaderScripts();
        });
    });
</script>
</body>

</html>