

<footer>
    footer
</footer>


<script async src="<?php echo $local ?>/js/cdn_image.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        function updateHeaderScripts() {
            // Xóa các script cũ nếu có
            const existingMobileScripts = document.querySelectorAll('script[id^="mobile-"]');
            const existingDesktopScripts = document.querySelectorAll('script[id^="desktop-"]');
            existingMobileScripts.forEach(script => script.remove());
            existingDesktopScripts.forEach(script => script.remove());

            if (window.innerWidth < 999) {
                const mobileScripts = [
                    // {
                    //     src: 'js/slider_feedback.min.js',
                    //     id: 'mobile-0'
                    // },
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
                        src: 'js/slider.min.js',
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