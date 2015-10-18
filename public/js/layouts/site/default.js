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

    var waypoint = new Waypoint({
        element: document.getElementById("menu-waypoint"),
        handler: function(direction) {
            console.log("Basic waypoint triggered to direction " + direction);
        }
    });
});
