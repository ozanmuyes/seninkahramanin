$(function () {
    $("#btn-logout").click(function (e) {
        e.preventDefault();

        $.ajax({
            method: "POST",
            url: "/cikis",
            headers: {
                "X-CSRF-TOKEN": $("meta[name='token']").attr("content")
            },
            cache: false
        }).done(function (msg) {
            window.location.href = "/";
        });
    });
});
