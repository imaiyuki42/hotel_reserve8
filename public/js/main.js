'use strict';

// トップカルーセル機能
(function($) {
  $(function(){
    $('.carousel').slick({
      dots: true, // ドット状のページネーションを表示するかどうか
      infinite: true, // カルーセルをループするかどうか
      speed: 2000, // スライドの速度
      slidesToShow: 1, // 一度に表示するスライド数
      centerMode: true, // 現在表示しているスライドを中央に表示するかどうか
      variableWidth: true, // スライドの幅を可変にするかどうか
      autoplay: true, // 自動再生するかどうか
      autoplaySpeed: 2000 // 自動再生の速度
    });
  });
})($home)

//検索TOPカレンダー機能
$(function() {
  $("#checkin_datepicker").datepicker({
    dateFormat: "yy/mm/dd",
    minDate: 0
  });
});

$(function() {
  $("#checkout_datepicker").datepicker({
    dateFormat: "yy/mm/dd",
    minDate: 0
  });
});



