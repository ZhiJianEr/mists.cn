var gw2_regression = null
$('.wpsm-content').addClass('wpsm-content-hide')
function gw2_Obj() {
    $('.wpsm-show').on('click', function (e) {
        var gw2_regression = document.body.scrollTop
        $(this).next('.wpsm-content').show(1000)
        $(this).hide()
        e.preventDefault();
        (function () {
            gw2_one(gw2_regression)
        })()
    });
    function gw2_one(num) {
        gw2_regression = num
        return gw2_regression
    }

    $('.wpsm-hide').on('click', function (e) {
        var wpsm = $(this).parent('.wpsm-content');
        wpsm.hide(1000)
        wpsm.prev('.wpsm-show').show()
        document.body.scrollTop = gw2_regression
        e.preventDefault();
    });
}
gw2_Obj()