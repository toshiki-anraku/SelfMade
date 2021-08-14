$(function () {
  $(".dropdown-menu .dropdown-item").click(function () {
    var visibleItem = $(".dropdown-toggle", $(this).closest(".dropdown"));
    visibleItem.text($(this).attr("value"));
  });
});
