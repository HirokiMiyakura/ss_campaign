<!-- <footer class="section section-primary" style="padding: 35px 0; background-color: #25ab9d; color: #fff; letter-spacing: 0.1em;"> -->
<footer class="section section-primary" style="padding: 35px 0 10px 0; background: linear-gradient(90deg, #7eaddf 0%,#7eaddf 50%, #25ab9d 50%, #25ab9d 100%); color: #fff; letter-spacing: 0.1em;">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h4 class="dantaiTitle">加盟団体</h4>
        <ul class="dantaiList">
        <li>一般社団法人全国旅行業協会</li>
        <li>一般社団法人東京都旅行業協会</li>
        <li>公益社団法人全国宅地取引業保証協会</li>
        <li>公益社団法人東京都宅地建物取引業協会</li>
        </ul>
			</div>
			<div class="col-md-6 text-right">
				<a style="margin: 0 0 15px 5px; border-radius: 16px; background-color: #333; border-color: #444; padding:5px 20px; font-size: 14px; line-height: 1.5;" target="_blank" href="https://singlesupport.co.jp//privacy/" class="btn btn-danger btn-sm btn-round btn-hover mb15">プライバシーポリシー</a><br class="visible-xs-block">
				<a style="margin: 0 0 15px 5px; border-radius: 16px; background-color: #333; border-color: #444; padding:5px 20px; font-size: 14px; line-height: 1.5;" target="_blank" href="https://singlesupport.co.jp//terms/" class="btn btn-danger btn-sm btn-round btn-hover mb15">旅行業約款</a><br class="visible-xs-block">
			</div>
			<div class="col-md-6 text-right">
				<a style="margin: 0 0 15px 5px; border-radius: 16px; background-color: #333; border-color: #444; padding:5px 20px; font-size: 14px; line-height: 1.5;" target="_blank" href="https://singlesupport.co.jp//licence/" class="btn btn-danger btn-sm btn-round btn-hover mb15">標識 旅行業登録 宅地建物取引業免許</a><br class="visible-xs-block">
				<a style="margin: 0 0 15px 5px; border-radius: 16px; background-color: #333; border-color: #444; padding:5px 20px; font-size: 14px; line-height: 1.5;" target="_blank" href="https://singlesupport.co.jp//sitemap/" class="btn btn-danger btn-sm btn-round btn-hover">サイトマップ</a> </div>
		</div>
	</div>
  <div class="copyright" style="text-align: center;padding: 10px 0;color: #fff;line-height: 12px;font-family: 'Noto Sans Japanese', sans-serif;font-size: 12px;">Copyright Single support Co.Ltd. All Rights Reserved.</div>
</footer>
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
<!-- analytics -->
<script>
(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
ga('send', 'pageview');

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
