<?php
/**
 * The footer template
 *
 * Contains the closing of <div id="main"> and all content after.
 *
 * @package Starter_Theme
 */
?>
 
	</div><!-- #main -->
 
</div><!-- #page -->
 
<footer id="colophon" role="contentinfo">


<?php get_template_part ('inc/social-media-fields') // grabs theme's social media content - [TO DO] update icon assets in final theme?>

	<div id="copyright">
		&copy; <?php echo date("Y"); ?> <?php echo bloginfo( "name" ); ?><br>
		<a href="http://melissajclark.ca" rel="nofollow">theme by Melissa</a>
	</div>

</footer><!-- #colophon -->
	
    <?php if ( is_page_template( 'page-slider.php' ) ) : ?>   
    
    <script>     
        wooSlider(); // calls slider function in theme.js for wooSlider
    </script>

    <script>     
        sliderBX(); // calls slider function in theme.js for BX Slider
    </script>

    <!-- <script>var slider = new WallopSlider('.wallop-slider');</script>    -->

    <script>
      // Create new instance of WallopSlider
      var slider = new WallopSlider('.wallop-slider', {
        wSBtnPreviousClass: 'wallop-slider__btn--previous',
        wSBtnNextClass: 'wallop-slider__btn--next',
        wSItemClass: 'wallop-slider__item',
        wSCurrentItemClass: 'wallop-slider item--current',
        wSShowPreviousClass: 'wallop-slider__item--show-previous',
        wSShowNextClass: 'wallop-slider__item--show-next',
        wSHidePreviousClass: 'wallop-slider__item--hide-previous',
        wSHideNextClass: 'wallop-slider__item--hide-next',
        wSCarousel: false
      });
    </script>

    <?php endif; ?>
 
<?php wp_footer(); ?> 
</body>
</html>