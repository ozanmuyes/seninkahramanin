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

(function ($) {
  $('.spinner .btn:first-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
  });
  $('.spinner .btn:last-of-type').on('click', function() {
    var val = parseInt($('.spinner input').val(), 10);
    if (val > 1) {
        $('.spinner input').val( val - 1);
    }
  });
})(jQuery);
