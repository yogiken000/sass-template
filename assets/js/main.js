jQuery(function ($) {
    // 電話番号をPC無効化
    (function () {
        var ua = navigator.userAgent.toLowerCase();
        var isMobile = /iphone/.test(ua) || /android(.+)?mobile/.test(ua);

        if (!isMobile) {
            $('a[href^="tel:"]').on('click', function (e) {
                e.preventDefault();
            });
        }
    })();

    // svgをインラインで読み込む
    deSVG('.svg', true);

    /*―――――――――――――――――――――――――――――――――――――――――――――
    /* 374px以下はviewportを固定
    ――――――――――――――――――――――――――――――――――――――――――――――*/
    !(function () {
        const viewport = document.querySelector('meta[name="viewport"]');
        function switchViewport() {
            const value =
                window.outerWidth > 374
                    ? 'width=device-width,initial-scale=1'
                    : 'width=360';
            if (viewport.getAttribute('content') !== value) {
                viewport.setAttribute('content', value);
            }
        }
        addEventListener('resize', switchViewport, false);
        switchViewport();
    })();

    /*―――――――――――――――――――――――――――――――――――――――――――――
    /* widthFit
    ――――――――――――――――――――――――――――――――――――――――――――――*/
    const widthFit = ($el) => {
        let prev_w = '';
        let max_w = '';
        $($el).each(function () {
            const this_w = $(this).width();

            if (!prev_w) {
                prev_w = this_w;
                max_w = this_w;
                return true;
            }

            if (this_w > max_w) {
                max_w = this_w;
            }

            prev_w = this_w;

        });
        $($el).width(max_w);
    }
});
