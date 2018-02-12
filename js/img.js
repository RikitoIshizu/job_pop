$(function () {
  main_img();
});

function main_img(){
  // アニメーション実行
  $("#first").fadeIn(2000, function(){
    $("#first").fadeOut(2000, function(){
      $("#second").fadeIn(2000, function(){
        $("#second").fadeOut(2000, function(){
          main_img();
        });
      });
    });
  });
}

// アニメーション実行
//
// setTimeout("slide()")

//   setTimeout("slide()");
// });
//
// function slide() {
//   var time =
//
//   $("#first").animate({
//     fadeIn:
//     fadeOut:
//   })
//   $("#second").animate({
//     fadeIn:
//     fadeOut:
//   })
//   setTimeout("slide()");
