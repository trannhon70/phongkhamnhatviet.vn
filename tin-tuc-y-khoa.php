<?php include 'inc/header.php' ?>
<link rel="stylesheet" href="<?php echo $local ?>/css/tin-tuc-y-khoa.min.css">
</head>

<?php
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$current_url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$parsed_url = parse_url($current_url);

$path = parse_url($parsed_url['path'], PHP_URL_PATH); // Lấy phần path từ URL
$filename = basename($path, ".html"); // Lấy tên file và loại bỏ .html

$get_post_detail = null;
if ($filename === 'tin-tuc-y-khoa') {
    $get_post_detail = $tin_tuc->getOneLimitTinTuc();
} else {
    $get_post_detail = $tin_tuc->getByslug_tintuc($filename);
}

?>

<body>
    <?php include 'layout/header_component.php' ?>
    <main>
        <?php include 'layout/slider_component.php' ?>
        <div class="danhmuc">
            <div class="danhmuc__left">

                <div class="danhmuc__left-div">

                    <div class="danhmuc__left-banner">
                        <img loading="lazy" class="danhmuc__left-banner-img"
                            src="<?php echo $local ?>/images/banner/banner_khuyen_mai.webp" height="380px" width="250px"
                            alt="..."></img>
                    </div>
                </div>

            </div>
            <div class="danhmuc__right">
                <div>
                    Trang chủ > Tin Tức
                </div>
                <?php if (Session::get('role') === '1' || Session::get('role') === '2') {
                ?>

                    <a class="chinh-sua"
                        href="<?php echo $local ?>/admin/tin-tuc-edit.php?edit=<?php echo $get_post_detail['id'] ?>"><i
                            style="font-size:19px" class="bx bxs-pencil"></i>chỉnh sửa</a>

                <?php } ?>
                <div class="danhmuc__right-title"><?php echo $get_post_detail['tieu_de'] ?></div>
                <div id="cardbs">
                    <div
                        style="padding: 10px; display: flex; align-items: center; justify-content: space-between; background-color: aliceblue; ">
                        <div style="display: flex; align-items: center; gap: 2px; ">
                            <img loading="lazy" src="<?php echo $local ?>/images/icons/icon_star.webp" alt="..."
                                style="width: 15px; height: 15px;">
                            <img loading="lazy" src="<?php echo $local ?>/images/icons/icon_star.webp" alt="..."
                                style="width: 15px; height: 15px;">
                            <img loading="lazy" src="<?php echo $local ?>/images/icons/icon_star.webp" alt="..."
                                style="width: 15px; height: 15px;">
                            <img loading="lazy" src="<?php echo $local ?>/images/icons/icon_star.webp" alt="..."
                                style="width: 15px; height: 15px;">
                            <img loading="lazy" src="<?php echo $local ?>/images/icons/icon_star.webp" alt="..."
                                style="width: 15px; height: 15px;">
                            <div style="color: #ff9900; font-weight: 700;">
                                9.5/10 <span style="color: #999999; font-weight: 500;"> điểm</span>
                            </div>
                        </div>
                        <div id="views" style="color: #999999; font-weight: 700;">
                            Lượt xem: ...
                        </div>
                    </div>

                </div>
                <a href="javascript:void(0)" onclick="openZoosUrl('chatwin'); return false;" id="bg_mobile_km">
                    <img width="100%" height="auto" src="<?php echo $local ?>/images/logo_mobile/bg_mobile_km.gif"
                        alt="...">
                </a>
                <hr>
                <div class="danhmuc__right-content" id="bai-viet">
                    <!-- <?php echo htmlspecialchars_decode($get_post_detail['content']); ?>  -->
                </div>

            </div>
        </div>
        <!-- <div class="post_connection">
            <div class="post_connection_title">Danh sách bài viết liên quan :</div>
            <a class="post_connection_item" href="su-that-ve-tac-dung-cua-rocket-1h-nam-gioi-can-luu-y-87.html"><span>1. </span>Sự thật về tác dụng của Rocket 1h nam giới cần lưu ý!</a>
            <a class="post_connection_item" href="tong-dai-tu-van-suc-khoe-sinh-ly-nam-gioi-mien-phi-86.html"><span>2. </span>Tổng đài Tư Vấn sức khỏe sinh lý nam giới Miễn Phí</a>
            <a class="post_connection_item" href="benh-vien-nam-khoa-tphcm-dia-chi-uy-tin-cham-soc-suc-khoe-phai-manh-85.html"><span>3. </span>Bệnh viện nam khoa Tphcm - Địa chỉ uy tín chăm sóc sức khỏe phái mạnh</a>
            <a class="post_connection_item" href="tu-van-online-mien-phi-cung-bac-si-chuyen-khoa-phong-kham-nhat-viet-84.html"><span>4. </span>Tư vấn Online miễn phí cùng Bác Sĩ Chuyên Khoa Phòng Khám Nhật Việt</a>
            <a class="post_connection_item" href="phong-kham-nam-khoa-uy-tin-hcm-dia-chi-vang-cham-soc-suc-khoe-phai-manh-83.html"><span>5. </span>Phòng khám Nam khoa uy tín HCM – Địa chỉ vàng chăm sóc sức khỏe phái mạnh</a>
        </div> -->
        <?php include_once "layout/feedback_component.php" ?>
    </main>

    <script>
        function applyCSSandJS() {
            //images gây shock
            const shockElements = document.querySelectorAll('.shock_img');
            shockElements.forEach(shockElement => {

                shockElement.classList = 'hiden_img'
                const viewdiv = document.createElement('div');
                viewdiv.id = 'viewdiv';
                viewdiv.className = 'view';
                viewdiv.textContent = 'Hình ảnh có nội dung gây shock !! cân nhất trước khi xem';

                const viewbutton = document.createElement('button');
                viewbutton.id = 'viewbutton';
                viewbutton.className = 'view_button';
                viewbutton.textContent = 'click vào xem';
                // Append the button to the parent of the shockElement (image-container)
                shockElement.appendChild(viewdiv);
                shockElement.appendChild(viewbutton);

                // Add click event listener to the button
                viewbutton.addEventListener('click', () => {
                    // Remove the blur effect
                    shockElement.classList.remove('blurred');
                    shockElement.classList.remove('hiden_img');
                    // Hide the button
                    viewdiv.classList.add('hidden');
                    viewbutton.classList.add('hidden');
                });
            })

            let baiVietElement = document.getElementById('bai-viet');
            if (baiVietElement) {
                let pElements = baiVietElement.getElementsByTagName('p');
                for (let i = 0; i < pElements.length; i++) {
                    pElements[i].style.color = '#000000'; // Ghi đè CSS trước đó
                    pElements[i].style.fontWeight = 400;
                    pElements[i].style.fontSize = '14px';
                    pElements[i].style.lineHeight = '27px';
                }

                let h2Elements = baiVietElement.getElementsByTagName('h2');
                for (let i = 0; i < h2Elements?.length; i++) {
                    h2Elements[i].style.color = '#0060A7';
                    h2Elements[i].style.fontWeight = '700';
                    h2Elements[i].style.fontSize = '23px';
                    h2Elements[i].style.textTransform = 'capitalize';
                    h2Elements[i].style.background =
                        'url("<?php echo $local ?>/images/icons/icon_cong.webp") no-repeat left center';
                    h2Elements[i].style.backgroundSize = '23px 23px';
                    h2Elements[i].style.paddingLeft = '25px';
                    h2Elements[i].style.margin = '7px 0px';

                }

                let h3Element = baiVietElement.getElementsByTagName('h3');

                for (let i = 0; i < h3Element.length; i++) {
                    h3Element[i].style.color = '#00D8D8';
                    h3Element[i].style.fontWeight = '700';
                    h3Element[i].style.fontSize = '21px';
                    h3Element[i].style.textTransform = 'capitalize';
                    h3Element[i].style.background =
                        'url("<?php echo $local ?>/images/icons/icon_mui.gif") no-repeat left center';
                    h3Element[i].style.backgroundSize = '21px 21px';
                    h3Element[i].style.paddingLeft = '25px';
                    h3Element[i].style.display = 'flex';
                    h3Element[i].style.alignItems = 'center';
                    h3Element[i].style.height = '25px';
                    h3Element[i].style.margin = '7px 0px';
                }
            }

            let imgElements = baiVietElement.getElementsByTagName('img');
            if (imgElements) {
                for (let i = 0; i < imgElements.length; i++) {
                    // convert link img
                    if (imgElements[i].src.startsWith('<?php echo $local ?>/ckeditor/uploads/') == true) {
                        let urlParts = imgElements[i].src.split('/');
                        let fileName = urlParts[urlParts.length - 1];
                        imgElements[i].src = '<?php echo $local ?>/admin/ckeditor/uploads/' + fileName;
                    }

                    //hiển thị css img chatbox
                    if (imgElements[i].src.startsWith(
                            '<?php echo $local ?>/ckfinder/userfiles/images/Chat/Chat-Dakhoa.gif') ==
                        // if (imgElements[i].src.startsWith(
                        //         'http://localhost/ckfinder/userfiles/images/Chat/Chat-Dakhoa.gif') ==
                        true) {
                        imgElements[i].style.borderRadius = '8px';
                        imgElements[i].style.setProperty('display', 'block', 'important');
                        let divWrapper = document.createElement('a');
                        divWrapper.className = 'glow-on-hover';
                        divWrapper.href = "javascript:void(0)";
                        divWrapper.addEventListener("click", function() {
                            openZoosUrl('chatwin');
                        });
                        divWrapper.setAttribute("aria-label", "Chat da khoa");
                        imgElements[i].parentNode.insertBefore(divWrapper, imgElements[i]);
                        divWrapper.appendChild(imgElements[i])
                    }
                }

            }

            //xử lý menu left scroll
            var rightBottom = document.querySelector('.danhmuc__left-div');
            var containerRow = document.querySelector('.danhmuc');
            var rightColumn = document.querySelector('.danhmuc__right');
            var rightCenter = document.querySelector('.danhmuc__left-div');
            var baiViet = document.getElementById('bai-viet');

            if (rightBottom && containerRow && rightColumn && rightCenter && baiViet) {
                window.addEventListener('scroll', function() {
                    var containerRowRect = containerRow.getBoundingClientRect();
                    var rightColumnRect = rightColumn.getBoundingClientRect();
                    var rightBottomHeight = rightBottom.offsetHeight;
                    var rightCenterRect = rightCenter.getBoundingClientRect();
                    var baiVietRect = baiViet.getBoundingClientRect();

                    // Kiểm tra khi scroll đến hết nội dung của id="bai-viet"
                    if (baiVietRect.bottom > window.innerHeight) {
                        if (containerRowRect.bottom - (rightBottomHeight - 700) <= window.innerHeight) {
                            rightBottom.style.position = 'absolute';
                            rightBottom.style.bottom = '0';
                            rightBottom.style.top = 'unset';
                        } else if (rightColumnRect.top + rightCenterRect.height <= 0) {
                            rightBottom.style.position = 'fixed';
                            rightBottom.style.top = '20px';
                            rightBottom.style.bottom = 'unset';
                            rightBottom.style.width = '250px';
                        } else {
                            rightBottom.style.position = 'relative';
                            rightBottom.style.top = 'unset';
                            rightBottom.style.bottom = 'unset';
                        }
                    } else {
                        rightBottom.style.position = 'relative';
                        rightBottom.style.top = 'unset';
                        rightBottom.style.bottom = 'unset';
                    }
                });
            } else {
                console.warn("One or more elements were not found in the DOM.");
            }
        }
    </script>
    <script>
        const bodyPlaceholder = document.getElementById("bai-viet");

        const loadBody = () => {
            let content = `<?php echo htmlspecialchars_decode($get_post_detail['content']); ?>`;
            // Gán tạm nội dung vào DOM ẩn để xử lý
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = content;

            // Duyệt tất cả text node
            const walker = document.createTreeWalker(tempDiv, NodeFilter.SHOW_TEXT, null, false);
            while (walker.nextNode()) {
                const node = walker.currentNode;
                // Thay số điện thoại
                node.nodeValue = node.nodeValue.replace(/\(028\)\s*7776\s*7777/g, '0901 869 945');
            }

            // Gán ra DOM chính
            bodyPlaceholder.innerHTML = tempDiv.innerHTML;
            bodyPlaceholder.classList.add("loaded");
        };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    loadBody();
                    applyCSSandJS();
                    checkImgMobile()
                }
            });
        });

        // Khởi tạo tải content ban đầu và bắt đầu quan sát bodyPlaceholder

        observer.observe(bodyPlaceholder);
    </script>

    <?php include 'inc/footer.php' ?>