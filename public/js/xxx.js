$(function() {
    const height=$("header").height();
    $("#wrapper").css("padding-top", height + 20);
}); /*取得した高さ＋20pxさげた場合*/

$(function() {
    const height=$("footer").height();
    $("#wrapper").css("padding-bottom", height + 20);
}); /*取得した高さ＋20px上げた場合*/

function disableScroll(event) {
  event.preventDefault();
}

// イベントと関数を紐付け
document.addEventListener('touchmove', disableScroll, { passive: false });
