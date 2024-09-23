<?php
ob_start();
session_start();
include 'lib/session.php';
Session::init();

include_once 'classes/khoa.php';
include_once 'classes/benh.php';
include_once 'classes/bai_viet.php';
include_once 'classes/tin_tuc.php';

spl_autoload_register(function ($className) {
    include_once "classes/" . $className . ".php";
});

$khoas = new Khoa();
$post = new post();
$benh = new Benh();
$tin_tuc = new news();

$getAllChiTietKhoaAndBenh = $khoas->getAllChiTietKhoaAndBenh();
$getMenuMobile = $benh->getMenuMobile();
// var_dump($getMenuMobile);
?>


<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: max-age=2592000");

$local = 'http://localhost/_nhatvietnew/phongkhamdakhoanhatviet.vn/';
// $local ='https://phongkhamdakhoanhatviet.vn'
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Phòng khám đa khoa chuyên điều trị bệnh nam khoa, bệnh xã hội, da liễu, hậu môn - trực tràng uy tính tại thành phố Hồ Chí Minh">
    <title>Phòng khám đa khoa</title>
    <link rel="icon" href="<?php echo $local ?>/images/icons/icon_logo.png" type="image/x-icon">
    <link rel="preload" href="<?php echo $local ?>/css/index.min.css" as="style" onload='this.onload=null,this.rel="stylesheet"'>
    <link rel="preload" href="<?php echo $local ?>/css/toastr.min.css" as="style" onload='this.onload=null,this.rel="stylesheet"'>

    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }
    </style>
    <noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
        <link rel="stylesheet" href="<?php echo $local ?>/css/index.min.css">
        <link rel="stylesheet" href="<?php echo $local ?>/css/toastr.min.css">
    </noscript>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            function updateHeaderStylesheet() {
                // Xóa các stylesheet cũ nếu có
                const existingMobile = document.querySelectorAll('link[id^="mobile-"]');
                const existingDesktop = document.querySelectorAll('link[id^="desktop-"]');
                existingMobile.forEach(mobile => mobile.remove());
                existingDesktop.forEach(desktop => desktop.remove());

                // Thêm stylesheet mới dựa trên kích thước cửa sổ
                if (window.innerWidth < 1000) {
                    const mobileLink = [
                        {
                            href: '<?php echo $local ?>/css/header-mobile.min.css',
                            id: 'mobile-0'
                        },
                        {
                            href: '<?php echo $local ?>/css/appointment-mobile.min.css',
                            id: 'mobile-1'
                        },
                        {
                            href: '<?php echo $local ?>/css/footer-mobile.min.css',
                            id: 'mobile-2'
                        },

                    ];
                    mobileLink.forEach(({
                        href,
                        id
                    }) => {
                        const link = document.createElement('link');
                        link.rel = 'stylesheet';
                        link.href = href;
                        link.id = id;
                        document.head.appendChild(link);
                    });

                } else {
                    const desktopLink = [
                        {
                            href: '<?php echo $local ?>/css/header.min.css',
                            id: 'desktop-0'
                        },
                        {
                            href: '<?php echo $local ?>/css/footer.min.css',
                            id: 'desktop-1'
                        },
                        // {
                        //     href: 'css/footerPC.min.css',
                        //     id: 'desktop-2'
                        // },

                    ];
                    desktopLink.forEach(({
                        href,
                        id
                    }) => {
                        const link = document.createElement('link');
                        link.rel = 'stylesheet';
                        link.href = href;
                        link.id = id;
                        document.head.appendChild(link);
                    });
                }
            }

            updateHeaderStylesheet();

          

            
            window.addEventListener('resize', () => {
                console.log('Window resized to:', window.innerWidth);
                updateHeaderStylesheet();
              
            });
        });
    </script>