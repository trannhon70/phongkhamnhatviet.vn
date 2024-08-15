<section id="slider" class="slider">
    <div class="slide_show w-100">
        <div style="display: flex;" class="list_image">
            <img height="100%" width="100%" src="<?php echo $local ?>/images/banner/bg_carousell0.webp" alt="...">
            <img height="100%" width="100%" src="<?php echo $local ?>/images/banner/bg_carousell01.webp" alt="...">
            <img height="100%" width="100%" src="<?php echo $local ?>/images/banner/bg_carousell02.webp" alt="...">
        </div>
        <div class="btns">
            <div class="btn-left btn"><img width="40px" height="40px" src="<?php echo $local ?>/images/icons/icon_prev.webp" alt="..."></div>
            <div class="btn-right btn"><img width="40px" height="40px" src="<?php echo $local ?>/images/icons/icon_next.webp" alt="..."></i></div>
        </div>
        <div class="index-images">
            <div class="index-item index-item-0 active"></div>
            <div class="index-item index-item-1"></div>
            <div class="index-item index-item-2"></div>
        </div>
    </div>

    <div class="slider__chat">
        <div id="form-chatPc" class="slider__chat-body">
            <div class="slider__chat-title">
                DẶT LỊCH KHÁM
            </div>
            <div class="slider__chat-input">
                <input name="hoten" type="text" placeholder="Nhập họ tên">
            </div>
            <div class="slider__chat-input">
                <input name="ngaysinh" type="number" placeholder="Nhập năm sinh">
            </div>
            <div class="slider__chat-input">
                <input name="sdt" type="number" placeholder="Nhập số điện thoại">
            </div>
            <div class="slider__chat-input">
                <input name="trieuchung" type="text" placeholder="Mô tả triệu chứng">
            </div>
            <div class="slider__chat-row">
                <div class="slider__chat-row-input">
                    <input name="ngaykham" type="date" placeholder="Ngày khám">
                </div>
                <div class="slider__chat-row-input">
                    <input name="giokham" type="number" placeholder="Giờ khám">
                </div>
            </div>
            <div class="slider__chat-button">
                <button name="submit" >
                    GỬI
                </button>
            </div>
        </div>

    </div>
</section>

<script>
    function formatPhoneNumber(phoneNumber) {
        let cleaned = ('' + phoneNumber).replace(/\D/g, '');
        let match = cleaned.match(/^(\d{4})(\d{3})(\d{3})$/);
        if (match) {
            return '(' + match[1] + ') ' + match[2] + '-' + match[3];
        }
        return null;
    }
    document.querySelector('button[name="submit"]').addEventListener('click', function(event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của nút submit

        let form = document.getElementById('form-chatPc');
        let inputs = form.getElementsByTagName('input');
        let formData = {};

        for (let i = 0; i < inputs.length; i++) {
            let input = inputs[i];
            formData[input.name] = input.value;
        }
        formData['url'] = window.location.href;
        if (formData.giokham !== '' && formData.hoten !== '' && formData.ngaykham !== '' && formData.ngaysinh !== '' && formData.sdt !== '' && formData.trieuchung !== '') {
            if (formatPhoneNumber(formData.sdt)) {
                if(formData.hoten.length > 100){
                   return toastr.error("Họ và tên không được vượt quá 100 ký tự");
                }
                if(formData.trieuchung.length > 500){
                   return toastr.error("Mô tả triệu chứng không được vượt quá 500 ký tự");
                }
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "<?php echo $local ?>/classes/khach_hang_ajax.php", true);
                xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {

                        let response = JSON.parse(xhr.responseText);
                        if (response.status === 'success') {
                            toastr.success(response.message);
                            for (let i = 0; i < inputs.length; i++) {
                                let input = inputs[i];
                                input.value = '';
                            }

                        } else {
                            toastr.error(response.message);
                        }
                    }
                };

                xhr.send(JSON.stringify(formData));
            } else {
                toastr.error("Số điện thoại không hợp lệ!");
            }

        } else {
            toastr.error("Tất cả các trường không được bỏ trống!");
        }


    });
</script>