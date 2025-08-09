$(document).ready(function() {
    $(".left-menu-item").on("click", function(e) {
        e.preventDefault();
        var value = $(this).attr("value");
        if (e.target.className == 'fa fa-chevron-down') {
            var i = $(this).find(".left-menu-item-more i");
            showMoreLeftMenu(i, value);
            return;
        } else if (e.target.className == 'fa fa-chevron-up') {
            var i = $(this).find(".left-menu-item-more i");
            $($(i).parent()).html(
                "<i class='fa fa-chevron-down' aria-hidden='true'></i>"
            );
            $(".left-menu-item-child").css("max-height", "0px");
            return;
        }
        var target = $(this).attr("target");
        var i = $(this).find(".left-menu-item-more i");
        if (i.length != 0) {
            showMoreLeftMenu(i, value);
        }
        $(".left-menu-item").removeClass("left-menu-item-active");
        $(this).addClass("left-menu-item-active");
        var title = $($(this).find(".left-menu-item-text")).text().trim();
        if (title === 'Trang chủ') {
            title = 'TaigameKP - Tải Game Offline Hay Cho PC Miễn Phí (Khiphach v2.0)';
        } else {
            title = "Tải Game " + capitalizeEachWord(title) + " Offline Cho PC Miễn Phí - TaigameKP";
        }
        $("#page-title").html(title);
        if (window.location.pathname !== value || window.location.href.includes('?')) {
            window.history.pushState("", "", value);
            if (!value.includes("?")) {
                window.history.replaceState("", '', window.location.pathname);
            }
        }
        if (target == "/") {
            showHomePage();
        }
        if (target == "games") {
            showGames(value);
        }
        if ($('.container-cover').css('display') != 'none') {
            $('.left-menu').animate({
                width: '0px'
            }, 100, function() {
                $('.left-menu').removeAttr('style');
            });
            $('.container-cover').hide();
        }
        e.stopPropagation();
    });
});

function showMoreLeftMenu(i, value) {

    $($(i).parent()).html(
        "<i class='fa fa-chevron-up' aria-hidden='true'></i>"
    );

    $(".left-menu-item-child[for='" + value + "']").css(
        "max-height",
        "512px"
    );
}