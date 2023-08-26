<footer id="footer" class="dark1" style="background: #000">
<div class="container px-sm-5">
	<!-- Footer Widgets
	============================================= -->
	<div class="footer-widgets-wrap pt-4 pb-0">
		<div class="row"> 
			<!--Footer Widget Start-->
			<div class="col-md-5 col-sm-6 pt-5 pb-5">
				<div class="textwidget text-white" style="text-align:justify">
					<img src="<?=setting['footer_img']?>" style="filter: brightness(0) invert(1);height: 100px;">
					<br><br>
					<?=setting['footer_desc']?>
					<br><br>
					
					<?php if(setting['footer_soc_insta'] != ''):?>
					<a href="<?=setting['footer_soc_insta']?>" target="_blank">
						<i class="icon-instagram px-2 text-white"></i>
						<!-- اینستاگرام -->
					</a>
					<?php endif?>

					<?php if(setting['footer_soc_faceb'] != ''):?>
					<a href="<?=setting['footer_soc_faceb']?>" target="_blank">
						<i class="icon-facebook px-2 text-white"></i>
						<!-- فیسبوک -->
					</a>
					<?php endif?>

					<?php if(setting['footer_soc_twitt'] != ''):?>
					<a href="<?=setting['footer_soc_twitt']?>" target="_blank">
						<i class="icon-twitter px-2 text-white"></i>
						<!-- توییتر -->
					</a>
					<?php endif?>
				
					<?php if(setting['footer_soc_teleg'] != ''):?>
					<a href="<?=setting['footer_soc_teleg']?>" target="_blank">
						<i class="icon-telegram px-2 text-white"></i>
						<!-- تلگرام -->
					</a>
					<?php endif?>
				
					<?php if(setting['footer_soc_linked'] != ''):?>
					<a href="<?=setting['footer_soc_linked']?>" target="_blank">
						<i class="icon-linkedin px-2 text-white"></i>
						<!-- لینکدین -->
					</a>
					<?php endif?>
				
					<?php if(setting['footer_soc_yt'] != ''):?>
					<a href="<?=setting['footer_soc_yt']?>" target="_blank">
						<i class="icon-youtube px-2 text-white"></i>
						<!-- یوتیوب -->
					</a>
					<?php endif?>
				
				</div>
			</div>
			<!--Footer Widget End--> 

			<!--Footer Widget Start-->
			<div class="col-md-4 col-sm-6 pt-5 pb-5">
				<div class="footer-widget">
					<h6><?=setting['footer_title1']?></h6>
					<?= $this->Query->Navmenu(setting['footer_menu1'],[
						'div'=>false,
						'nav'=>false,
						'ul'=> true,
						'li_class'=>'',
						'a_class'=>'text-white2',
					]);?>
				</div>
			</div>
			<!--Footer Widget End--> 

			<!--Footer Widget Start-->
			<div class="col-md-3 col-sm-6 pt-5 pb-5">
				<div class="textwidget text-white">
					<address>
						<ul>
							<?=setting['footer_address']?>
						</ul>
					</address>
				</div>
			</div>
			<!--Footer Widget End--> 
		</div>
	</div><!-- .footer-widgets-wrap end -->
</div>
<!-- Copyrights
============================================= -->
<?php if(setting['footer_copyt'] != ''):?>
<br>
<div id="copyrights">
	<div class="container">
		<div class="row col-mb-20">
			<div class="col-md-12 text-center text-md-center">
				<?=setting['footer_copyt']?>
			</div>
		</div>
	</div>
</div><!-- #copyrights end -->
<?php endif?>
</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<div id="gotoTop" class="icon-angle-up"></div>
<?php $this->Func->footer();?>
<?= $this->html->script([
	'/template/js/plugins.min.js',
	'/template/js/functions.js',
	]);?>

<script nonce="<?=get_nonce?>">

//http://pure-essence.net/2013/10/25/how-i-made-tiny-carousel-swipeable/
(function ($) {
var opts = {
viewport: '.viewport'
, selected: '.dateCarouselSelected'
, prev: '.prev'
, next: '.next'
, defaultScrollDistance: 10
, scrollAnimationDuration: 500 // ms
, itemSelector: 'a'
, offset: 50
, firstClass: 'first'
, lastClass: 'last'
};

$.fn.carouselSwipeable = function (options) {
var options = $.extend({}, opts, options);
this.each(function () {
new CarouselSwipeable($(this), options);
});
return this;
};

function CarouselSwipeable(root, options) {
/* init date carousel */
var $wrapper = root.find(options.viewport);
var $selectedElement = root.find(options.selected);

var $minItem = $wrapper.find(options.itemSelector).first();
var $maxItem = $wrapper.find(options.itemSelector).last();
root.removeClass(options.firstClass + ' ' + options.lastClass);

if ($selectedElement && $selectedElement.length === 1) {
if ($minItem[0] !== $selectedElement[0]) {
var childPos = $selectedElement.offset();
var parentPos = $wrapper.offset();
var childOffset = {
left: childPos.left - parentPos.left
};

var startPos = childOffset.left;
if ($maxItem[0] !== $selectedElement[0]) {
startPos = startPos - options.offset;
}
else {
root.addClass(options.lastClass);
}
scroll('right', $wrapper, startPos);
}
else {
root.addClass(options.firstClass);
}
}

var scrollDone;
$wrapper.on('scroll', function() {
clearTimeout(scrollDone);
scrollDone = setTimeout(checkEnds, 100);
});

var resizeDone;
$(window).on('resize', function() {
clearTimeout(resizeDone);
resizeDone = setTimeout(checkEnds, 500);
});

root.find(options.prev).on('click', function (e) {
e.preventDefault();
e.stopPropagation();
scroll('left', $wrapper, getDistance());
});
root.find(options.next).on('click', function (e) {
e.preventDefault();
e.stopPropagation();
scroll('right', $wrapper, getDistance());
});

function scroll(direction, $innerWrapper, distance) {
if (distance === undefined) {
distance = options.defaultScrollDistance;
}
var leftPos = $innerWrapper.scrollLeft();

if ('left' === direction) {
leftPos = leftPos - distance;
} else {
leftPos = leftPos + distance;
}
$innerWrapper.animate({scrollLeft: leftPos},
options.scrollAnimationDuration, checkEnds);
}

function checkEnds() {
root.removeClass(options.firstClass + ' ' + options.lastClass);
markFirst();
markLast();
}

function markFirst() {
var $wrapper = root.find(options.viewport);
var minItemOffsetLeft = $minItem.offset().left;
var minItemPositionLeft = minItemOffsetLeft - $wrapper.offset().left;
if (minItemPositionLeft >= 0) {
root.addClass(options.firstClass);
}
}

function markLast() {
var $wrapper = root.find(options.viewport);
var maxItemOffsetLeft = $maxItem.offset().left;
var maxItemPositionLeft = maxItemOffsetLeft - $wrapper.offset().left;
if (maxItemPositionLeft <= $wrapper.outerWidth()) {
root.addClass(options.lastClass);
}
}

function getDistance() {
var $wrapper = root.find(options.viewport);
return $wrapper.outerWidth() - options.offset;
}
}
})(jQuery);

$('#dateCarousel').carouselSwipeable();
</script>

<script nonce="<?=get_nonce?>">
// Owl Carousel Scripts
jQuery(window).on( 'pluginCarouselReady', function(){
$('#oc-teachers').owlCarousel({
	items: 1,
	margin: 30,
	nav: true,
	navText: ['<i class="icon-line-arrow-left"></i>','<i class="icon-line-arrow-right"></i>'],
	dots: false,
	smartSpeed: 300,
	stagePadding: 60,
	responsive:{
		768: { stagePadding: 100, margin: 30, items: 1 },
		991: { stagePadding: 100, margin: 40, smartSpeed: 400, items: 2 },
		1200: { stagePadding: 100, margin: 40, smartSpeed: 400, items: 2}
	},
});
});
//Current Week
Date.prototype.getWeek = function(start) {
//Calcing the starting point
start = start || 0;
var today = new Date(this.setHours(0, 0, 0, 0));
var day = today.getDay() - start;
var date = today.getDate() - day;

// Grabbing Start/End Dates
var StartDate = new Date(today.setDate(date));
var EndDate = new Date(today.setDate(date + 6));
return [StartDate, EndDate];
}
var Dates = new Date().getWeek();
$("#week-details").text(Dates[0].toLocaleDateString() + ' - '+ Dates[1].toLocaleDateString());
</script>
<style>

<?php 
if(setting['color_all'] != '') $color = setting['color_all'] ;
else $color = "#f05952";
?>
:root{
--master-color: #3b3b79;<?php //echo $color; ?>
}
#page-menu .page-menu-wrap-clone{height:0 !important}

.col-lg-9 .section ul{
margin-right:40px;
}
/* .footer-widgets-wrap li a{
color: <?= setting['color_lifooter'] != ''?setting['color_lifooter']:'#FFF';?>;
} */
/* .widget_links h2, .widget_links  h2{
color:<?= setting['color_ftitle'] != ''?setting['color_ftitle']:'#FFF'?> !important;
} */
<?= setting['color_hr'] != ''?'.hr1{background-color: '.setting['color_hr'].' !important;}':''?>
/* .cls8{border-top-color:var(--master-color) !important;} */
/* #copyrights{background-color: var(--master-color);} */
.sub-title .menu-container > .menu-item:not(:first-child) > .menu-link::before {background-color: var(--master-color);}
.rows1 .col-sm-6:first-child .row{border-<?=(lang=='fa')?'left':'right'?>: 2px solid var(--master-color);}
/* #page-menu-wrap .current a {
border-bottom: 5px solid var(--master-color) !important;
color: var(--master-color) !important;} */
.tabs-alt .custom-filter a:hover{color: var(--master-color);}
#top-search a i{color:var(--master-color);}
.fancy-title::before, .fancy-title::after {border-top: 2px double var(--master-color);}
.tagcloud a{background: var(--master-color);letter-spacing: -0.4px!important;;border: 0!important;;}
.tagcloud a:hover{border-color:var(--master-color) !important;/* color:#FFF !important */;}
a {color: var(--master-color);}
/* .sbtn1{background:var(--master-color);} */
.sbtn1{background:<?php echo setting['color_btnmore']; ?>;    border-radius: 100px;
padding-right: 20px;
padding-left: 20px;}

</style>
</body>
</html>