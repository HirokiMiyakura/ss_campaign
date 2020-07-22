<footer class="section section-primary" style="padding: 70px 0; background-color: #25ab9d; color: #fff; letter-spacing: 0.1em;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>シングルサポート株式会社</h3>
			</div>
			<div class="col-md-5">
				<p style="font-family: 'Noto Sans Japanese', sans-serif; font-weight: normal; fotn-size: 16px; line-height: 1.42857143;">〒150-0002<br>
					東京都渋谷区渋谷1-3-18　ビラモデルナA210<br>
					TEL:03-3498-9231 FAX:03-3498-9281<br>
					旅行業　東京都知事登録旅行業第3-7669号<br>
					宅地建物取引業　東京都知事（１）第102662号
				</p>
			</div>
			<div class="col-md-7 text-right">
				<a style="margin: 0 0 15px 5px; border-radius: 16px; background-color: #333; border-color: #444; padding:5px 20px; font-size: 14px; line-height: 1.5;" target="_blank" href="https://singlesupport.co.jp//privacy/" class="btn btn-danger btn-sm btn-round btn-hover mb15">プライバシーポリシー</a><br class="visible-xs-block">
				<a style="margin: 0 0 15px 5px; border-radius: 16px; background-color: #333; border-color: #444; padding:5px 20px; font-size: 14px; line-height: 1.5;" target="_blank" href="https://singlesupport.co.jp//terms/" class="btn btn-danger btn-sm btn-round btn-hover mb15">旅行業約款</a><br class="visible-xs-block">
			</div>
			<div class="col-md-7 text-right">
				<a style="margin: 0 0 15px 5px; border-radius: 16px; background-color: #333; border-color: #444; padding:5px 20px; font-size: 14px; line-height: 1.5;" target="_blank" href="https://singlesupport.co.jp//licence/" class="btn btn-danger btn-sm btn-round btn-hover mb15">標識 旅行業登録 宅地建物取引業免許</a><br class="visible-xs-block">
				<a style="margin: 0 0 15px 5px; border-radius: 16px; background-color: #333; border-color: #444; padding:5px 20px; font-size: 14px; line-height: 1.5;" target="_blank" href="https://singlesupport.co.jp//sitemap/" class="btn btn-danger btn-sm btn-round btn-hover">サイトマップ</a> </div>
		</div>
	</div>
</footer>
<div class="copyright" style="text-align: center;padding: 10px 0;color: #fff;background: #333;line-height: 12px;font-family: 'Noto Sans Japanese', sans-serif;font-size: 12px;">Copyright Single support Co.Ltd. All Rights Reserved.</div>
<style>
@media screen and (max-width: 767px) {
  footer {
    text-align: center;
  }
  .text-right {
    text-align: center;
  }
}
</style>
<?php wp_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173117633-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-173117633-1');
</script>
<script>
(function($) {
  var $nav   = $('#navArea');
  var $btn   = $('.toggle_btn');
  var $mask  = $('#mask');
  var open   = 'open'; // class
  // menu open close
  $btn.on( 'click', function() {
    if ( ! $nav.hasClass( open ) ) {
      $nav.addClass( open );
    } else {
      $nav.removeClass( open );
    }
  });
  // mask close
  $mask.on('click', function() {
    $nav.removeClass( open );
  });
} )(jQuery);

/* acordion */

jQuery(function($){
$(".accordion-wrap").on("click", function(){   
    $(this).children().eq(1).slideToggle(300);  
    $(this).children().eq(0).toggleClass("accordion-no-bar");
    $(this).siblings().find(".accordion-header").removeClass("accordion-gold");
    $(this).siblings().find(".accordion-header i").removeClass("rotate-fa");
    $(this).find(".accordion-header").toggleClass("accordion-gold");
    $(this).find(".fa").toggleClass("rotate-fa");

    $(".accordion-wrap .accordion-text").not($(this).children().eq(1)).slideUp(300);
});
});

document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '<?php echo home_url(); ?>/thanks-page/';
}, false );

// ページ内リンクをゆったりと
jQuery(function($){
  jQuery(function(){
   jQuery('a[href^="#"]').click(function() {
      var speed = 1200;
      var href= jQuery(this).attr("href");
      var target = jQuery(href == "#" || href == "" ? 'html' : href);
      var position = target.offset().top;
      jQuery('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});
});

</script>
</body>
</html>
