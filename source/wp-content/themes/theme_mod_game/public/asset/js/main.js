var gamePrice = 1000;
var depositPackages;
var updateBalanceIntervalId;
var updateNotificationIntervalId;
$(document).mouseup(function (e) {
    var container = $(".notification-list");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        container.hide();
    }
});
$(document).ready(function () {
    window.addEventListener('popstate', function (event) {
        location.reload();
    });
    initTopBar();
    userPopUp();
    initAjax();
    $(".logo").on("click", function () {
        goHome();
    });
    $("#rg-btn").on("click", function () {
        ajRegistry();
    });
    $("#lg-btn").on("click", function () {
        ajLogin();
    });
    $("#rg-verify-btn").on("click", function () {
        ajVerify();
    });
    $("#forget-btn").on("click", function () {
        ajForget();
    });
    $("#search-input").on('keydown', function (e) {
        if (e.keyCode === 13 && $(this).val().trim() != '') {
            chooseOfflineMenu();
            window.history.pushState("", "", "/game-offline?search=" + $(this).val().trim());
            showGames();
            $(this).val('');
        }
    });
    $('.kpoint-group').on("click", function () {
        ajShowAccountPopup('.ac-menu-item[for="acc-deposit"]');
    });
    if (isLogin()) {
        $.cookie("kp-token", localStorage.getItem("kpToken"));
        $(".not-login").hide();
        $(".logined").css("display", "flex");
        $("#mini-avatar").attr("src", localStorage.getItem("kpAvatar"));
        $(".my-account-avatar").attr("src", localStorage.getItem("kpAvatar"));
        $(".mimi-name").html(localStorage.getItem("kpDisplayName"));
        $(".user-icon-login").hide();
    } else {
        cleanUpLocalStorage();
        $(".logined").hide();
        $(".not-login").css("display", "flex");
        $(".my-account-avatar").hide();
    }
    $("#lg-password").keypress(function (e) {
        if (e.which == 13) {
            $("#lg-btn").click();
        }
    });
    $(".mimi-name").on("click", function () {
        ajShowAccountPopup('.ac-menu-item[for="acc-info"]');
    });
    $("#mini-avatar").on("click", function () {
        ajShowAccountPopup('.ac-menu-item[for="acc-info"]');
    });
    $(".my-account-avatar").on("click", function () {
        ajShowAccountPopup('.ac-menu-item[for="acc-info"]');
    });
    $(document).keyup(function (e) {
        if (e.key === "Escape") {
            $(".pop-up").hide();
            $(".pop-up-media").hide();
            $(".select-options").hide();
            $('.galleria-frame iframe').remove();
            $('.notification-list').css('display', 'none');
        }
    });
    $.ajax({
        url: apiHost + "/config/public",
        type: "get",
        global: false,
        contentType: "application/json",
        success: function (msg) {
            gamePrice = msg.gamePrice;
            depositPackages = msg.depositPackages;
            if (isLogin()) {
                $.ajax({
                    url: "/account.html?v=" + uiVersion,
                    type: "get",
                    global: false,
                    success: function (msg) {
                        msg = msg.replace('uiVersion', uiVersion);
                        $(".pop-up").html(msg);
                    },
                });
            }
        },
    });
    if (isLogin()) {
        updateBalance();
    }
    if (isLogin()) {
        refreshNewNotification();
        updateNotificationIntervalId = setInterval(function () {
            if (!isLogin()) {
                return;
            }
            refreshNewNotification();
        }, 5000);
    }
    $('#notification').on("click", function () {
        if ($('.notification-list').css('display') == 'none') {
            $('.notification-list').css('display', 'flex');
            $($(".user-notification").find('.new-notification')).hide();
            if ($(".notification-list").attr('count') != "0" || $('.notification-loading').css('display') == 'flex') {
                if ($(".notification-list").attr('count') != "0") {
                    $('.notification-loading').css('display', 'flex');
                }
                $.ajax({
                    url: apiHost + "/notification",
                    type: "get",
                    global: false,
                    contentType: "application/json",
                    success: function (notifications) {
                        $('.notification-loading').hide();
                        $('.notification-container').html('');
                        notifications.content.forEach(notification => {
                            $('.notification-container').append('   <div class="notification" data-id="' + notification.gameId + '" data-url="' + notification.gameUrl + '">' +
                                '<div class="notification-body">' +
                                '<img src="' + notification.avatar + '">' +
                                '<div class="notification-right">' +
                                '<div class="notification-content"><span class="notification-strong">' + notification.content.replace(' đã trả', '</span> đã trả').replace(' đã nhắc', '</span> đã nhắc') + ' trong <span class="notification-strong">' + notification.gameTitle + '</span></div>' +
                                '<div class="nofitication-footer">' + notification.commentedAt + '</div>' +
                                '</div>' +
                                '</div>');
                        });
                        $('.notification').on("click", function () {
                            openGameDetail($(this).attr('data-id'), $(this).attr('data-url'));
                            $('.notification-list').hide();
                        });
                    }
                });
            }
        } else {
            $('.notification-list').css('display', 'none');
        }
    });
    $(".menu-mini").on("click", function () {
        if ($('.container-cover').css('display') == 'none') {
            $('.left-menu').animate({
                width: '248px'
            }, 100);
            $('.container-cover').show();
        } else {
            $('.left-menu').animate({
                width: '0px'
            }, 100, function () {
                $('.left-menu').removeAttr('style');
            });
            $('.container-cover').hide();
        }
    });
});

function refreshNewNotification() {
    $.ajax({
        url: apiHost + "/notification/count-new",
        type: "get",
        global: false,
        contentType: "application/json",
        success: function (count) {
            if (count != 0) {
                const notificationDot = $($(".user-notification").find('.new-notification'));
                notificationDot.show();
                $(".notification-list").attr('count', count);
            }
        }
    });
}

function kpDownload(url) {
    if (url.includes("drive.google")) {
        openInNewTab(url);
        return;
    }
    document.getElementById('dl_iframe').src = url;
};

function openInNewTab(href) {
    Object.assign(document.createElement('a'), {
        target: '_blank',
        rel: 'noopener noreferrer',
        href: href,
    }).click();
}

function updateBalance() {
    $.ajax({
        url: apiHost + "/user/balance",
        type: "get",
        global: false,
        contentType: "application/json",
        success: function (msg) {
            $("#kpoint").html(formatNumber(msg));
        }
    });
    updateBalanceIntervalId = setInterval(function () {
        if (!isLogin()) {
            return;
        }
        $.ajax({
            url: apiHost + "/user/balance",
            type: "get",
            contentType: "application/json",
            global: false,
            success: function (msg) {
                $("#kpoint").html(formatNumber(msg));
            }
        });
    }, 5000);
}

function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function commentPart() {
    return "<div class='comment-area'>\n" +
        "<div class='comment-group'><div class='comment-avatar'>\n" +
        "<img src='" + localStorage.getItem("kpAvatar") + "'>\n" +
        "</div><textarea id='comment-data' placeholder='Viết bình luận...'></textarea></div>\n" +
        "<div class='comment-btn' data-id='0'>Đăng bình luận</div>\n" +
        "</div>";
}

function cleanUpLocalStorage() {
    $.removeCookie('kp-token');
    localStorage.removeItem("kpToken");
    localStorage.removeItem("kpAvatar");
    localStorage.removeItem("kpDisplayName");
    localStorage.removeItem("kpTokenTimeout");
    localStorage.removeItem("kpUserPCInfo");
}

function isLogin() {
    return localStorage.getItem("kpToken") != null && ((parseInt(localStorage.getItem("kpTokenTimeout"), 10) + parseInt(localStorage.getItem("kpTokenLoginTime"), 10)) > Date.now());
}

function ajLogout() {
    $.ajax({
        url: apiHost + "/token/logout",
        type: "post",
        contentType: "application/json",
        success: function () {
            cleanUpLocalStorage();
            clearInterval(updateBalanceIntervalId);
            clearInterval(updateNotificationIntervalId);
            location.reload();
        },
    });
}

function loginComment() {
    $("#login-now-btn").on("click", function () {
        showUserPopLogin();
    });
}

function ajShowAccountPopup(tabSelector) {
    $.ajax({
        url: apiHost + "/user/current",
        type: "get",
        contentType: "application/json",
        success: function (msg) {
            $(".ac-avatar img").attr("src", localStorage.getItem("kpAvatar"));
            $(".ac-name").html(localStorage.getItem("kpDisplayName"));
            $("#display-name").val(localStorage.getItem("kpDisplayName"));
            $("#email").val(msg.email);
            $(".ac-title").html(msg.username);
            $(".momo-code").html("KP 1234");
            $("#ac-game-number").html(msg.totalGames);
            $("#ac-kpoint-number").html(msg.balance);
            $("#ac-archiverment").html(msg.score);
            $(".pop-up").css('display', 'flex');
            $(tabSelector).click();
            resetBankQR();
        },
    });
}

function initAjax() {
    $(document)
        .ajaxStart(function () {
            $(".ajax-loading").css("display", "flex");
        }).ajaxStop(function () {
            $(".ajax-loading").hide();
        }).ajaxError(function (event, xhr, settings, error) {
            // code xử lý khi request thất bại
            $(".ajax-loading").hide();
            if (xhr.responseJSON.code == 'UE_0007') {
                return;
            }
            Swal.fire({
                title: "Đã có lỗi xảy ra!",
                text: xhr.responseJSON.message,
                icon: "error",
                confirmButtonText: "OK",
                allowOutsideClick: true
            });
            if (xhr.status == 401) {
                ajLogout();
            }
        });

    $.ajaxSetup({
        xhrFields: {
            withCredentials: true
        },
        headers: { 'kp-token': (localStorage.getItem("kpToken") === null ? '' : localStorage.getItem("kpToken")) }
    });

}

function openGame(selector) {
    $(".game-a-tag " + selector).unbind("click").bind("click", function (e) {
        e.preventDefault();
        var selectedGame = $(this);
        var gameId = selectedGame.attr("data-id");
        var gameUrl = selectedGame.attr("url");
        openGameDetail(gameId, gameUrl);
    });
}

function openGameDetail(gameId, gameUrl) {
    chooseOfflineMenu();
    invokeReCaptcha((token) => {
        $.ajax({
            url: apiHost + "/game?id=" + gameId + "&url=" + gameUrl,
            type: "get",
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-Recaptcha-Token', token);
            },
            contentType: "application/json",
            success: function (game) {
                if (window.location.pathname !== ("/" + gameUrl)) {
                    window.history.pushState("", "", "/" + gameUrl);
                }
                $(".page-container").html(generateGameDetail(game));
                $(".page-container").scrollTop(0);
                tagClick();
            }
        });
    });
}

function chooseOfflineMenu() {
    $(".left-menu-item").removeClass("left-menu-item-active");
    var gameOffMenu = $(".left-menu-items").find("[value='/game-offline']");
    $(gameOffMenu).addClass("left-menu-item-active");
    var i = $(gameOffMenu).find(".left-menu-item-more i");
    showMoreLeftMenu(i, '/game-offline');
}

function showGameDetail(url) {
    if (url == '' || url.includes('game-offline')) {
        return;
    }
    invokeReCaptcha((token) => {
        $.ajax({
            url: apiHost + "/game/" + url,
            type: "get",
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-Recaptcha-Token', token);
            },
            contentType: "application/json",
            success: function (game) {
                if (game) {
                    $($(".left-menu-items").find("[value='/game-offline']")).addClass("left-menu-item-active");
                    if (!window.location.pathname.includes(url)) {
                        window.history.pushState("", "", url);
                    }
                    $(".page-container").html(generateGameDetail(game));
                    $(".page-container").scrollTop(0);
                    tagClick();
                }
            }
        });
    });
}

function initTopBar() {
    $("#login-btn").on("click", function () {
        showUserPopLogin();
    });
    $(".user-icon-login").on("click", function () {
        showUserPopLogin();
    });
    $("#registry-btn").on("click", function () {
        showUserPopRegister();
    });
}

function userPopUp() {
    $(".user-pop-hint").on("click", function () {
        if ($(this).attr("target") == "login") {
            showUserPopLogin();
        }
        if ($(this).attr("target") == "registry") {
            showUserPopRegister();
        }
        if ($(this).attr("target") == "forget-pass") {
            showUserPopForget();
        }
    });
    $(".user-pop-close").hover(
        function () {
            if ($(this).attr("class").includes("active")) {
                return;
            }
            var img = $($(this).find("img"));
            var src = img.attr("src").replace(".svg", "-active.svg");
            img.attr("src", src);
        },
        function () {
            if ($(this).attr("class").includes("active")) {
                return;
            }
            var img = $($(this).find("img"));
            var src = img.attr("src").replace("-active.svg", ".svg");
            img.attr("src", src);
        }
    );
    $(".user-pop-close").on("click", function () {
        $(".user-pop-up").hide();
    });
}

function showUserPopForget() {
    $(".user-pop-up").css("display", "flex");
    $(".user-pop-title").html("Quên mật khẩu");
    $(".user-login").css("display", "none");
    $(".user-registry").css("display", "none");
    $(".user-forget").css("display", "flex");
}

function showUserPopRegister() {
    $(".user-pop-up").css("display", "flex");
    $(".user-pop-title").html("Đăng Ký");
    $(".user-login").css("display", "none");
    $(".user-registry").css("display", "flex");
    $(".user-verify").css("display", "none");
    $(".user-forget").css("display", "none");
}

function showUserPopLogin() {
    $(".user-pop-up").css("display", "flex");
    $(".user-pop-title").html("ĐĂNG NHẬP");
    $(".user-login").css("display", "flex");
    $(".user-registry").css("display", "none");
    $(".user-verify").css("display", "none");
    $(".user-forget").css("display", "none");
}

function showUserVerify(email, username) {
  //  $("#uv-verify-email").html(email);
  //  $("#uv-username").val(username);
 //   $(".user-pop-up").css("display", "flex");
  //  $(".user-pop-title").html("Nhập mã kích hoạt");
    $(".user-login").css("display", "none");
    $(".user-registry").css("display", "none");
 //   $(".user-verify").css("display", "flex");
    $(".user-forget").css("display", "none");
    Swal.fire({
        title: "Đăng ký thành công!",
        text: "",
        icon: "success",
        confirmButtonText: "OK",
        allowOutsideClick: true
    });
}

function showGames(value) {
    $.ajax({
        url: '/games.html?v=' + uiVersion,
        type: 'GET',
        success: function (data) {
            data = data.replace('uiVersion', uiVersion);
            $(".page-container").html(data);
            $(".page-container").scrollTop(0);
        },
        error: function () {
            console.error('Failed to load games.html');
        }
    });
}

function showHomePage() {
    $.ajax({
        url: '/home.html?v=' + uiVersion,
        type: 'GET',
        success: function (data) {
            data = data.replace('uiVersion', uiVersion);
            $(".page-container").html(data);
        },
        error: function () {
            console.error('Failed to load home.html');
        }
    });
}

function initSelect() {
    $("body").on("click", function (e) {
        if (
            e.target.className !== "select-options" &&
            e.target.className !== "select" &&
            e.target.className !== "select-over" &&
            e.target.className !== "option" &&
            e.target.className !== "fa fa-chevron-down" &&
            e.target.className !== "selected"
        ) {
            $(".select-options").hide();
        }
    });
    $(".select").on("click", function (e) {
        var options = $($(this).find(".select-options"));
        if (options.css("display") == 'grid' && e.target.className !== "option") {
            options.css("display", "none");
            return;
        }
        $(".select-options").hide();
        var numOptions = options.find('.option').length;
        var columnOptions = Math.floor(numOptions / 10);
        if (numOptions % 10 !== 0) { columnOptions++; }
        options.css("display", "grid");
        options.css("grid-template-columns", "repeat(" + columnOptions + ", 1fr)");
        options.css("width", $(this).outerWidth() * columnOptions);
        options.css("top", $(this).outerHeight() + 9);
        var selected = $($(this).find(".selected"));
        var value = selected.attr("value");
        if ($(this).attr("type") == "checkbox") {
            $($(options.find(".option"))).each(function () {
                $(this).find("i").hide();
            });
            if (value != "") {
                value.split(",").forEach((element) => {
                    $($(options.find("[value=" + element + "]")).find("i")).show();
                });
            }
            return;
        }
        $(options.find(".option")).removeClass("option-selected");
        var selectedOption = $(options.find("[value=" + value + "]"));
        selectedOption.addClass("option-selected");
    });
    $(".option").on("click", function () {
        var parent = $($($(this).parent()).parent());
        var selected = parent.find(".selected");
        if (parent.attr("type") == "checkbox") {
            if ($($(this).find("i")).is(":visible")) {
                $($(this).find("i")).hide();
            } else {
                $($(this).find("i")).show();
            }
            var value = "";
            var display = "";
            var dataId = "";
            $($($(this).parent()).find(".option")).each(function () {
                if ($($(this).find("i")).is(":visible")) {
                    value += $(this).attr("value") + ",";
                    display += $(this).text().trim() + ", ";
                    dataId += $(this).attr("data-id") + ",";
                }
            });
            selected.attr("value", value.slice(0, -1));
            selected.attr("data-id", dataId.slice(0, -1));
            if (display == "") {
                selected.html("Thể loại");
            } else {
                selected.html(display.slice(0, -2));
            }
            return;
        }
        selected.attr("value", $(this).attr("value"));
        selected.html($(this).text());
        $($(this).parent()).hide();
    });
    $(window).on("resize", function () {
        $(".select").each(function () {
            var options = $($(this).find(".select-options"));
            options.css("width", $(this).outerWidth());
        });
    });
}

function selectOption(selector, value) {
    $($(selector).find(".selected")).attr("value", value);
    var display = "";
    if ($(selector).attr("type") == "checkbox") {
        $($(selector).find(".option")).each(function () {
            if ($(this).attr("value") == value) {
                display += $(this).text().trim();
                $($(selector).find(".selected")).attr("data-id", $(this).attr("data-id"));
            }
        });
    } else {
        $($(selector).find(".option")).each(function () {
            if ($(this).attr("value") == value) {
                display = $(this).text().trim();
                $($(selector).find(".selected")).attr("data-id", $(this).attr("data-id"));
            }
        });
    }
    $($(selector).find(".selected")).html(display);
}

function sleep(delay) {
    var start = new Date().getTime();
    while (new Date().getTime() < start + delay);
}


Date.prototype.toShortFormat = function () {

    const monthNames = ["Jan", "Feb", "Mar", "Apr",
        "May", "Jun", "Jul", "Aug",
        "Sep", "Oct", "Nov", "Dec"
    ];

    const day = this.getDate();

    const monthIndex = this.getMonth();
    const monthName = monthNames[monthIndex];

    const year = this.getFullYear();

    return `${day}-${monthName}-${year}`;
}

function ajForget() {
    $("#uf-alert").html("");
    invokeReCaptcha((token) => {
        $(".ajax-loading").css("display", "flex");
        $.ajax({
            url: apiHost + "/user/mail-recovery-pass?email=" + $("#uf-forget").val(),
            type: "get",
            global: false,
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-Recaptcha-Token', token);
            },
            contentType: "application/json",
            success: function (msg) {
                $(".ajax-loading").hide();
                $("#uf-alert").html("* Mail khôi phục mật khẩu đã được gửi về email của bạn!");
            },
            error: function (msg) {
                var json = msg.responseJSON;
                $("#uf-alert").show();
                $("#uf-alert").html("* " + json.message);
                $(".ajax-loading").hide();
            }
        });
    });
}

function ajVerify() {
    $("#uv-alert").html("");
    var data = {
        username: $("#uv-username").val(),
        code: $("#uv-code").val()
    };
    invokeReCaptcha((token) => {
        $.ajax({
            url: apiHost + "/user/active",
            type: "post",
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-Recaptcha-Token', token);
            },
            contentType: "application/json",
            success: function (msg) {
                $("#uv-alert").html("* Kích hoạt tài khoản thành công!");
            },
            error: function (msg) {
                var json = msg.responseJSON;
                $("#uv-alert").show();
                $("#uv-alert").html("* " + json.message);
            },
            data: JSON.stringify(data),
        });
    });
}

function ajRegistry() {
    $(".ajax-loading").css("display", "flex");
    $("#rg-alert").html("");
    $("#rg-alert").hide();
    var data = {
        username: $("#rg-username").val(),
        displayName: $("#rg-displayName").val(),
        email: $("#rg-email").val(),
        password: $("#rg-password").val(),
    };
    if ($("#rg-re-password").val() != data.password) {
        $("#rg-alert").show();
        $("#rg-alert").html("* Re-password không khớp với password");
        return;
    }
    invokeReCaptcha((token) => {
        $.ajax({
            url: apiHost + "/user",
            type: "post",
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-Recaptcha-Token', token);
            },
            contentType: "application/json",
            success: function (msg) {
                showUserVerify(data.email, data.username);
            },
            error: function (msg) {
                var json = msg.responseJSON;
                $("#rg-alert").show();
                $("#rg-alert").html("* " + json.message);
            },
            data: JSON.stringify(data),
        });
    });
}

function ajLogin() {
    $("#lg-alert").html("");
    $(".ajax-loading").css("display", "flex");
    var data = {
        username: $("#lg-username").val(),
        password: $("#lg-password").val(),
        rememberMe: $("#remember-me").prop('checked')
    };

    $.ajax({
        url: apiHost + "/token",
        type: "post",
        contentType: "application/json",
        global: false,
        success: function (obj) {
            $.cookie("kp-token", obj.token);
            localStorage.setItem("kpToken", obj.token);
            localStorage.setItem("kpAvatar", obj.avatar);
            localStorage.setItem("kpDisplayName", obj.displayName);
            localStorage.setItem("kpTokenTimeout", obj.timeout);
            localStorage.setItem("kpTokenLoginTime", Date.now());
            localStorage.setItem("kpUserPCInfo", JSON.stringify(obj.userPCInfo));
            location.reload();
        },
        error: function (msg) {
            $("#lg-alert").show();
            var obj = msg.responseJSON;
            $(".ajax-loading").hide();
            $("#lg-alert").html("* " + obj.message);
        },
        data: JSON.stringify(data),
    });

}

function showPCInfo(pcInfo) {
    $(".pc-info-os").html(pcInfo.os);
    $(".pc-info-cpu").html(pcInfo.cpu);
    $(".pc-info-gpu").html(pcInfo.gpu);
    $(".pc-info-ram").html(pcInfo.ram + 'GB');
    $(".pc-power-info").html(pcInfo.configSystem);
    $(".user-pc-info-cover").hide();
    if ($(".game-container").length) {
        $.ajax({
            url: apiHost + "/benchmark/check?gameId=" + $(".game-container").attr("data-id"),
            type: "get",
            global: false,
            contentType: "application/json",
            success: function (msg) {
                var pcSuggest = generatePCSuggest(msg);
                $(".pc-suggest").html(pcSuggest);
            }
        });

    }
}

function showLoginCover() {
    $(".user-pc-info-cover").show();
    $(".user-pc-info-cover-btn").html("Đăng nhập");
    $(".user-pc-info-cover-btn").attr("value", "login");
}

function showUploadDxdiag() {
    $(".user-pc-info-cover").show();
    $(".user-pc-info-cover-btn").html("Upload dxdiag.txt");
    $(".user-pc-info-cover-btn").attr("value", "upload");
}

function generatePCSuggest(canRun) {
    var pcSuggest = "";
    if (canRun == 'HIGH') {
        pcSuggest = "                Cấu hình máy tính của bạn chiến được game này với mức: <span class='pc-high'>High</span>\n";
    }
    if (canRun == 'MEDIUM') {
        pcSuggest = "                Cấu hình máy tính của bạn chiến được game này với mức: <span class='pc-medium'>Medium</span>\n";
    }
    if (canRun == 'LOW') {
        pcSuggest = "                Cấu hình máy tính của bạn chiến được game này với mức: <span class='pc-low'>Low</span>\n";
    }
    if (canRun == 'NO') {
        pcSuggest = "                Rất tiếc máy của bạn khó có thể chơi được game này: <span class='pc-no'>No</span>\n";
    }
    return pcSuggest;
}

function commentBtn() {
    $(".comment-btn").unbind("click").bind("click", function () {
        var contentTemp = $("#comment-data").val();
        const isReply = $(this).hasClass('reply-btn');
        const commentId = $(this).attr("data-id");
        if (isReply) {
            contentTemp = $("#reply-data-" + commentId).val();
        }
        var data = {
            gameId: parseInt($(".game-container").attr("data-id")),
            parentId: parseInt($(this).attr("data-id")),
            content: contentTemp
        };
        invokeReCaptcha((token) => {
            $.ajax({
                url: apiHost + "/comment",
                type: "post",
                beforeSend: function (xhr) {
                    xhr.setRequestHeader('X-Recaptcha-Token', token);
                },
                contentType: "application/json",
                success: function (comment) {
                    if (isReply) {
                        $("#reply-data-" + commentId).val('');
                        $('.reply-body-' + commentId).append(generateComment(comment, true));
                        $('.reply-body-' + commentId).css('display', 'flex');
                    } else {
                        $("#comment-data").val("");
                        $(".comment-body").prepend(generateComment(comment));
                    }
                    likeComment();
                },
                data: JSON.stringify(data)
            });
        });
    });
}


function likeComment() {
    $(".comment-like-count").on("click", function () {
        if (!isLogin()) {
            return;
        }
        const commentLikeI = $($(this).find('.comment-like'));
        const countSpan = $(commentLikeI.parent().find('span'));
        if (commentLikeI.hasClass('fa-heart-o')) {
            commentLikeI.removeClass('fa-heart-o');
            commentLikeI.addClass('fa-heart');
            commentLikeI.css('color', 'red');
            var currentCount = parseInt(countSpan.text());
            currentCount++;
            countSpan.html(currentCount);
        } else {
            commentLikeI.removeClass('fa-heart');
            commentLikeI.addClass('fa-heart-o');
            commentLikeI.css('color', 'inherit');
            var currentCount = parseInt(countSpan.text());
            currentCount--;
            countSpan.html(currentCount);
        }
        $.ajax({
            url: apiHost + "/comment/like?id=" + commentLikeI.attr('data-id'),
            type: "get",
            global: false,
            contentType: "application/json",
            success: function () {

            }
        });
    });
}

function generateComment(comment, isReply = false) {
    var isAvatar = comment.avatar.includes('/images');
    return "                            <div class='" + (comment.pinned ? "comment-pinned" : "") + " comment-container comment-container-" + comment.id + "'>\n" +
        (comment.pinned ? "<div class='pinned'><i class='fa fa-thumb-tack' aria-hidden='true'></i><span>Đã ghim</span></div>" : "") +
        "                                <div class='comment-info'>\n" +
        "                                    <div class='comment-avatar'>\n" +
        (isAvatar ? "<img src='" + comment.avatar + "' />\n" : "<img src='/images" + comment.avatar + "' />\n") +
        "                                    </div>\n" +
        "                                    <div class='comment-info-right'>\n" +
        "                                        <div class='comment-info-user'>\n" +
        (comment.top == 1 ? "<div class='badges'><img class='badge' title='Khí Phách Top 1 Member' src='/images/top_1_kp.webp'></div>" : "") +
        (comment.top == 2 ? "<div class='badges'><img class='badge' title='Khí Phách Top 2 Member' src='/images/top_2_kp.webp'></div>" : "") +
        (comment.top == 3 ? "<div class='badges'><img class='badge' title='Khí Phách Top 3 Member' src='/images/top_3_kp.webp'></div>" : "") +
        "                                            <div>" + comment.displayName + "</div>\n" +
        (comment.buy ? '<div class="open-game"><i class="fa fa-star" aria-hidden="true"></i><div>Đã mở game</div></div>' : '') +
        "                                        </div>\n" +
        "                                        <div class='comment-info-user-more'>\n" +
        "                                            <div class='comment-info-user-more-child'>\n" +
        "                                                <img src='/images/commentgameicon.webp' />\n" +
        "                                                <div>" + comment.totalGames + "</div>\n" +
        "                                            </div>\n" +
        "                                            <div class='comment-info-user-more-child'>\n" +
        "                                                <img src='/images/medal-star2.webp' />\n" +
        "                                                <div>" + comment.score + "</div>\n" +
        "                                            </div>\n" +
        "                                        </div>\n" +
        "                                    </div>\n" +
        "                                </div>\n" +
        "                                <div class='comment-content'>\n" +
        comment.content +
        "                                </div>\n" +
        "                                <div class='comment-bottom'>\n" +
        "                                    <div class='comment-like-count'>\n" +
        (comment.liked ? "<i class='fa fa-heart comment-like' data-id='" + comment.id + "' aria-hidden='true' style='color:red;'></i>\n" : "<i class='fa fa-heart-o comment-like' data-id='" + comment.id + "' aria-hidden='true'></i>\n") +
        "                                        <span>" + comment.likeCount + "</span>\n" +
        "                                    </div>\n" + (isReply ? "                                    <div class='comment-rep-count' type='reply'>\n" +
            "                                        <i class='fa fa-reply comment-reply-icon' data-parent='" + comment.parentId + "' data-user='" + comment.owner + "' data-id='" + comment.id + "' aria-hidden='true'></i>\n" +
            "                                        \n" +
            "                                    </div>\n" : (
            "                                    <div class='comment-rep-count'>\n" +
            "                                        <i class='fa fa-reply comment-reply-icon' data-parent='" + comment.parentId + "' data-user='" + comment.owner + "' data-id='" + comment.id + "' aria-hidden='true'></i>\n" +
            "                                        <span>" + comment.repCount + "</span>\n" +
            "                                    </div>\n")) +
        "                                </div>\n" +
        "                            </div>\n";
}

function goHome() {
    $($(".left-menu-items").find("[value='/']")).click();
    $("#page-title").html("TaigameKP - Tải Game Offline Hay Cho PC Miễn Phí (Khiphach v2.0)");
}

function getCategories(game, max = 2) {
    var categories = "";
    for (j = 0; j <= max && j < game.categories.length; j++) {
        categories += "        <div class='game-thumbnail-type' data-id='" + game.categories[j].categoryId + "' url='" + game.categories[j].url + "'>\n" +
            game.categories[j].categoryName +
            "        </div>\n";
    }
    return categories;
}

function categoryClick() {
    $(".game-thumbnail-type").unbind("click").bind("click", function (e) {
        e.stopPropagation();
        if ($(this).hasClass("game-thumbnail-type-update")) {
            chooseOfflineMenu();
            window.history.pushState("", "", "/game-offline?type=updated");
            showGames();
        } else {
            chooseOfflineMenu();
            var url = $(this).attr("url");
            $("#page-title").html("Tải Game " + capitalizeEachWord($(this).text()) + " Offline Cho PC Miễn Phí - TaigameKP");
            window.history.pushState("", "", "/game-offline/" + url);
            showGames();
        }
        e.preventDefault();
    });
}

function capitalizeEachWord(sentence) {
    let words = sentence.split(' ');
    for (let i = 0; i < words.length; i++) {
        words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
    }
    return words.join(' ');
}

function getYouTubeId(url) {
    var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
    var match = url.match(regExp);
    if (match && match[2].length == 11) {
        return match[2];
    } else {
        return null;
    }
}

function invokeReCaptcha(ajaxFunction, background = false) {
    if (typeof grecaptcha == 'undefined') {
        if (!background) {
            $(".ajax-loading").css("display", "flex");
        }
        var recaptchaScript = document.createElement('script');
        recaptchaScript.src = 'https://www.google.com/recaptcha/api.js?render=6Lfym5glAAAAAH3vvuoHZKVkMHAk2AQ31ifQBQWg';
        recaptchaScript.defer = true;
        recaptchaScript.onload = function() {
            grecaptcha.ready(function () {
                grecaptcha.execute('6Lfym5glAAAAAH3vvuoHZKVkMHAk2AQ31ifQBQWg', { action: 'submit' }).then(function (token) {
                    ajaxFunction(token)
                });
            });
        };
        document.body.appendChild(recaptchaScript);
        fired = true;
    } else {
        grecaptcha.ready(function () {
            grecaptcha.execute('6Lfym5glAAAAAH3vvuoHZKVkMHAk2AQ31ifQBQWg', { action: 'submit' }).then(function (token) {
                ajaxFunction(token)
            });
        });
    }
}

function timestampToString(timestamp) {
    // Tạo đối tượng Date từ timestamp
    const date = new Date(timestamp);

    // Lấy các thành phần ngày, tháng, năm, giờ, phút, giây từ đối tượng Date
    const day = date.getDate().toString().padStart(2, '0');
    const month = (date.getMonth() + 1).toString().padStart(2, '0');
    const year = date.getFullYear();
    const hours = date.getHours().toString().padStart(2, '0');
    const minutes = date.getMinutes().toString().padStart(2, '0');

    // Trả về chuỗi định dạng dd-MM-yyyy hh:mm
    return `${day}-${month}-${year} ${hours}:${minutes}`;
}

function timestampToString01(timestamp) {
    // Tạo đối tượng Date từ timestamp
    const date = new Date(timestamp);

    // Lấy các thành phần ngày, tháng, năm, giờ, phút, giây từ đối tượng Date
    const day = date.getDate().toString().padStart(2, '0');
    const month = (date.getMonth() + 1).toString().padStart(2, '0');
    const year = date.getFullYear();

    // Trả về chuỗi định dạng dd-MM-yyyy hh:mm
    return `${day}-${month}-${year}`;
}

function isResoution(resolution) {
    return window.innerWidth == resolution;
}

function isMobile(resolution = 600) {
    return window.innerWidth <= resolution;
}

function uploadDxdiag() {
    $('#file-input').on('change', function () {
        if ($(this)[0].files === 0) {
            return;
        }
        var formData = new FormData();
        formData.append('file', $(this)[0].files[0]);
        $(this).val(null);
        $.ajax({
            url: apiHost + '/user/pc',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (pcInfo) {
                if (pcInfo) {
                    localStorage.setItem("kpUserPCInfo", JSON.stringify(pcInfo));
                    showPCInfo(pcInfo);
                    return;
                }
                alert("File bạn up không đúng format dxdiag.txt");
            },
            error: function (xhr, status, error) { }
        });
    });
}

function generateCoverlUrl(coverImage) {
    return changeExtensionToWebp(coverImage.replace('media/', 'media/x720/'));
}

function generateThumbnailUrl(coverImage) {
    return changeExtensionToWebp(coverImage.replace('media/', 'media/x450/'));
}

function generateBannerUrl(coverImage) {
    return changeExtensionToWebp(coverImage.replace('media/', 'media/x1280/'));
}

function generateMediaThumbnail(coverImage) {
    return changeExtensionToWebp(coverImage.replace('media/', 'media/x150/'));
}

function tagClick() {
    $('.tag').on("click", function (e) {
        e.stopPropagation();
        var dataId = $(this).attr('data-id');
        window.history.pushState("", "", "/game-offline?tag=" + dataId);
        chooseOfflineMenu();
        showGames();
        e.preventDefault();
    });
}

function urlencode(str) {
    str = (str + '').toString();
    return encodeURIComponent(str)
        .replace('!', '%21')
        .replace('\'', '%27')
        .replace('(', '%28')
        .replace(')', '%29')
        .replace('*', '%2A')
        .replace('%20', '+')
        .replace('\'', '%27');
}

function changeExtensionToWebp(filename) {

    // Tạo tên mới bằng cách thay thế phần mở rộng thành 'webp'
    let newFilename = filename.replace(/\.[^.]+$/, '.webp');

    return newFilename;
}

function showDiscordHint() {
    $(".discord-hint").css("width", "175px");
    $(".discord-hint").css("padding", "5px");
}

function hideDiscordHint() {
    $(".discord-hint").css("width", "0px");
    $(".discord-hint").css("padding", "0px");
}