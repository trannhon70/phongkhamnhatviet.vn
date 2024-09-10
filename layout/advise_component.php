<div id="form-tuvan">
    <div class="danhmuc__left-title">Tư vấn trực tuyến </div>
    <div class="danhmuc__left-input">
        <input name="hoten" type="text" placeholder="Họ tên">
    </div>
    <div class="danhmuc__left-input">
        <input name="ngaysinh" type="number" placeholder="Nhập năm sinh">
    </div>
    <div class="danhmuc__left-input">
        <input name="sdt" type="number" placeholder="Số điện thoại">
    </div>
    <div class="danhmuc__left-input">
        <input name="trieuchung" type="text" placeholder="Mô tả triệu chứng của bạn">
    </div>

    <div style="text-align: center;">
        <button name="submitTuVan" class="danhmuc__left-button">gửi</button>

    </div>
</div>

<script>
function formatPhoneNumber(phoneNumber) {
        let cleaned = ('' + phoneNumber).replace(/\D/g, '');
        let match = cleaned.match(/^(\d{4})(\d{3})(\d{3})$/);
        if (match) {
            return '(' + match[1] + ') ' + match[2] + '-' + match[3];
        }
        return null;
    }
    document.querySelector('button[name="submitTuVan"]').addEventListener('click', function(event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của nút submit

        let form = document.getElementById('form-tuvan');
        let inputs = form.getElementsByTagName('input');
        let formData = {};

        for (let i = 0; i < inputs.length; i++) {
            let input = inputs[i];
            formData[input.name] = input.value;
        }

        formData['url'] = window.location.href;

        if ( formData.hoten !== '' && formData.ngaysinh !== '' && formData.sdt !== '' && formData.trieuchung !== '') {
            if (formatPhoneNumber(formData.sdt)) {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "<?php echo $local ?>/classes/ajax/create_form_tu_van.php", true);
                xhr.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
                xhr.onreadystatechange = function() {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        let response = JSON?.parse(xhr.responseText);
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