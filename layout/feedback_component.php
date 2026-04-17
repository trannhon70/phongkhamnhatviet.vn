<section class="feedback" id="feedback">
    <div class="feedback__container">
        <div class="feedback__container-title">
            Phản hồi từ khách hàng
        </div>
        <div class="feedback__container-row">
            <div class="feedback__container-row-card activeFeedback">
                <div class="feedback__container-row-card-top">
                    <img loading="lazy" src="<?php echo $local ?>/images/users/user_kimOanh.webp" alt="">
                    <div class="feedback__container-row-card-top-right">
                        <div class="feedback__container-row-card-top-right-title">
                            Kim Oanh
                        </div>
                        <div class="feedback__container-row-card-top-right-text">
                            Nhân viên văn phòng - Tân Phú
                        </div>
                        <hr>
                        <div class="feedback__container-row-card-top-right-content">
                            <img loading="lazy" src="<?php echo $local ?>/images/icons/icon_start.webp" alt="">
                            <div>
                                2 ngày trước
                            </div>
                            <button>Mới</button>
                        </div>
                    </div>
                </div>
                <div class="feedback__container-row-card-bottom">
                    “Mình bị viêm da cũng khá nặng, đã chữa trị nhiều nơi nhưng không khỏi. Mình biết đến Phòng
                    khám Nhật Việt qua một người bạn. Khi mình đến khám, bác sĩ và nhân viên phòng khám hướng
                    dẫn mình rất chi tiết trong từng hạng mục.”
                </div>
            </div>

            <div class="feedback__container-row-card ">
                <div class="feedback__container-row-card-top">
                    <img loading="lazy" src="<?php echo $local ?>/images/users/user_khai.webp" alt="">
                    <div class="feedback__container-row-card-top-right">
                        <div class="feedback__container-row-card-top-right-title">
                            Minh Hải
                        </div>
                        <div class="feedback__container-row-card-top-right-text">
                            Kiến trúc sư công trình - Bà Rịa Vũng Tàu
                        </div>
                        <hr>
                        <div class="feedback__container-row-card-top-right-content">
                            <img loading="lazy" src="<?php echo $local ?>/images/icons/icon_start.webp" alt="">
                            <div>
                                3 ngày trước
                            </div>
                            <button>Mới</button>
                        </div>
                    </div>
                </div>
                <div class="feedback__container-row-card-bottom">
                    “Theo Hải thì chất lượng phòng khám là khỏi chê, đội ngũ nhân viên y, bác sĩ rất thân thiện
                    và nhiệt tình. Thời gian trả kết quả cũng rất nhanh, cái chính là an toàn và bảo mật. Đây là
                    điều mà Hải cảm thấy hài lòng nhất, xin cám ơn Phòng khám Nhật Việt!”
                </div>
            </div>

            <div class="feedback__container-row-card ">
                <div class="feedback__container-row-card-top">
                    <img loading="lazy" src="<?php echo $local ?>/images/users/user_hieu.webp" alt="">
                    <div class="feedback__container-row-card-top-right">
                        <div class="feedback__container-row-card-top-right-title">
                            Trung Hiếu
                        </div>
                        <div class="feedback__container-row-card-top-right-text">
                            Hướng dẫn viên du lịch - Bình Dương
                        </div>
                        <hr>
                        <div class="feedback__container-row-card-top-right-content">
                            <img loading="lazy" src="<?php echo $local ?>/images/icons/icon_start.webp" alt="">
                            <div>
                                2 tuần trước
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback__container-row-card-bottom">
                    “Công việc của Hiếu khá bận nên thời gian rảnh rất ít. Do đó Hiếu đã chọn thăm khám nam khoa
                    tại Phòng khám Nhật Việt qua Đặt hẹn Online.”
                </div>
            </div>
        </div>
        <div class="index-feedbacks">
            <div class="feedback-item feedback-item-0"></div>
            <div class="feedback-item feedback-item-1 activeFeedback"></div>
            <div class="feedback-item feedback-item-2"></div>
        </div>
    </div>
</section>

<style>
    .feedback {}

    .feedback__container {
        max-width: var(--container);
        margin: var(--margin-auto);
        padding: 10px 0px;
    }

    .feedback__container-title {
        color: var(--color-01969A);
        font-size: var(--font-size-20);
        font-weight: var(--font-weight-700);
        text-transform: var(--text-tranform-uppercase);
        margin-top: 10px;
    }

    .feedback__container-row-card {
        margin-top: 10px;
        border: 2px solid #00d8d8;
        box-shadow: 4px 4px 4px 0px #00000040;
        border-radius: 10px;
        width: 93%;
        padding: 3%;
        display: none;
        min-height: 235px;
    }

    .activeFeedback {
        display: var(--display-block);
    }

    .feedback__container-row-card-top {
        display: var(--display-flex);
        align-items: var(--align-item-center);
        width: var(--width-100);
    }

    .feedback__container-row-card-top>img {
        width: 175px;
        height: 175px;
    }

    .feedback__container-row-card-top-right {
        padding-left: 15px;
    }

    .feedback__container-row-card-top-right-title {
        font-size: var(--font-size-16);
        color: var(--color-black);
        font-weight: var(--font-weight-700);
    }

    .feedback__container-row-card-top-right-text {
        margin-top: 5px;
        font-size: var(--font-size-16);
        color: var(--color-black);
        font-weight: var(--font-weight-400);
    }

    .feedback__container-row-card-top-right>hr {
        border: 0px;
        height: 3px;
        background: linear-gradient(270deg, #00d8d8 0%, #01969a 100%);
        margin-top: 0px;
        width: 200px;
        margin-left: 0px;
    }

    .feedback__container-row-card-top-right-content {
        display: var(--display-flex);
        align-items: var(--align-item-center);
        gap: 20px;
        margin-top: 10px;
    }

    .feedback__container-row-card-top-right-content>img {
        width: 200px;
    }

    .feedback__container-row-card-top-right-content>div {
        font-style: italic;
        font-size: var(--font-size-14);
        color: var(--color-black);
    }

    .feedback__container-row-card-top-right-content>button {
        box-shadow: 2px 2px 2px 0px #0000001a;
        border: 1px solid var(--color-01969A);
        outline: none;
        border-radius: 8px;
        padding: 5px 15px;
        background-color: var(--background-color-white);
        font-size: 16px;
        color: var(--color-00D8D8);
    }

    .feedback__container-row-card-bottom {
        font-size: var(--font-size-16);
        text-align: var(--text-justify);
        color: var(--color-black);
        margin-top: 10px;
        line-height: 23px;
    }

    .index-feedbacks {
        display: var(--display-flex);
        align-items: var(--align-item-center);
        justify-content: var(--justify-content-center);
        margin-top: 10px;
    }

    .index-feedbacks .feedback-item {
        display: inline-block;
        width: 10px;
        height: 10px;
        background-color: var(--background-color-00D8D8);
        margin: 0 5px;
        border-radius: 50%;
        cursor: var(--cursor-pointer);
    }

    .index-feedbacks .feedback-item.activeFeedback {
        background-color: var(--background-color-01969A);
        width: 14px;
        height: 14px;
    }
</style>

<script defer>
    const feedbacks = document.querySelectorAll('.feedback__container-row-card');
    const listItems = document.querySelectorAll('.feedback-item');
    let currentIndex = 0;

    const showFeedback = (index) => {
        feedbacks.forEach((feedback, idx) => {
            feedback.classList.toggle('activeFeedback', idx === index);
        });
        listItems.forEach((listItem, idx) => {
            listItem.classList.toggle('activeFeedback', idx === index);
        });
    };

    const handleChangeSlideFeedback = () => {
        currentIndex = (currentIndex + 1) % feedbacks.length;
        showFeedback(currentIndex);
    };
    showFeedback(currentIndex); // Initialize the first feedback as active
    setInterval(handleChangeSlideFeedback, 4000);
</script>