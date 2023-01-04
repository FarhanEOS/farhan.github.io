$(window).scroll(function () {
  var wScrool = $(this).scrollTop();

  // jumbotron
  if (wScrool > 5) {
    $(".jumbotron .card").each(function (i) {
      setTimeout(function () {
        $(".jumbotron .card").eq(i).addClass("muncul");
      }, 300 * i);
    });
  }
});
