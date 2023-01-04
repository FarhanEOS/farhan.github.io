// parralax
// about
$(window).scroll(function () {
  $(".lead1kiri").addClass("lmuncul");
  $(".lead1kanan").addClass("lmuncul");
});

$(window).scroll(function () {
  var wScrool = $(this).scrollTop();

  $(".jumbotron img").css({
    transform: "translate(0px, " + wScrool / 4 + "%)",
  });
  $(".jumbotron h1").css({
    transform: "translate(0px, " + wScrool / 2 + "%)",
  });
  $(".jumbotron p").css({
    transform: "translate(0px, " + wScrool / 1.2 + "%)",
  });

  // projects
  if (wScrool > $(".projects").offset().top - 380) {
    $(".projects .card").each(function (i) {
      setTimeout(function () {
        $(".projects .card").eq(i).addClass("muncul");
      }, 300 * i);
    });
  }
});
