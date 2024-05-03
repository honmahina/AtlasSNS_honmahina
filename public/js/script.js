// jQuery(function ($) {
//   $('.inn').on('click', function () {
//     $(this).next().slideToggle(200);
//     //矢印向き変更
//     $(this).toggleClass('open', 200);
//   }).next();
// });
jQuery(function ($) {
  $(this).toggleClass('is-open');
  $(this).siblings('.menu').toggleClass('is-open');
});
