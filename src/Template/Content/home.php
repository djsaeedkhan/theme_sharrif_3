<?= $this->element('header');$maxrow = 12?>
<section id="content">
	<div class="content-wrap p-0">
		<!-- Slider
		============================================= -->
		<div class="section mt-31 mb-01 m-0 center dark parallax min-vh-50" 
			style="background: url('<?=setting['slider__fiximg']?>') bottom center  / cover; ">
			<div class="container">
				<!-- <h3 class="h1 mb-5 pt-5">More than 100,000<br>Travellers Visit Our Hostels.</h3> -->
				<!-- <a href="demo-hostel-tour.html" class="button button-xlarge fw-semibold bg-color nott ls0 px-5">Book Now</a> -->
			</div>
		</div>
		
		<section class="Mayor-video-msg">
			<div class="container pt-3">
				<div id="slider-services" class="owl-carousel owl-rtl carousel-widget" data-margin="20" data-loop="true" data-nav="false" data-pagi="true" data-autoplay="5000" data-items-sm="1" data-items-xs="1" data-items="1" data-items-md="1" data-items-xl="1">
					<?php for($i=($maxrow-1);$i>=0;$i--): if(setting['slider__title'.$i] != ''):?>
					<div class="oc-item">
						<div class="container">
							<div class="row">
								<div class="col-md-4 col-sm-5"> 
									<!-- Msg Start-->
									<div class="city-tour gallery"> 
										<strong><?=setting['slider__tag'.$i]?></strong> 
										<a href="<?=setting['slider__link'.$i]?>" data-rel="prettyPhoto" title="<?=setting['slider__title'.$i]?>">
											<!-- <?= $this->html->image('/template/images/playicon.png')?> -->
										</a> 
										<img src="<?=setting['slider__img'.$i]?>" alt="<?=setting['slider__title'.$i]?>"> 
									</div>
									<!-- Msg End--> 
								</div>
								<div class="col-md-8 col-sm-7">
									<div class="Mayor-welcome">
										<h5>
											<a href="<?=setting['slider__link'.$i]?>" class="text-white">
												<?=setting['slider__title'.$i]?>
											</a>
										</h5>
										<p class="text-justify">
											<?=setting['slider__desc'.$i]?>
										</p>
										<!-- <h6></h6>
										<strong></strong>  -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endif; endfor?>

				</div>
				
			</div>
		</section>

		<section class="wf100 p80 h2-news-articles">
			<div class="container">
				<div class="row">
					<div class="title-style-2 wf100">
						<div class="row">
							<div class="col-md-5">
								<h2><?=setting['b1_title']?></h2>
							</div>
							<div class="col-md-7">
								<p><?=setting['b1_desc']?></p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-8 col-sm-12 box1">
						<div class="event-post-full">
							<div class="row">
								<div class="col-sm-6">
									<div class="thumb">
										<a href="<?=setting['bx1__link0']?>"><?=setting['bx1__linkt0']?></a>
										<img src="<?= setting['bx1__img0'];?>" alt="<?=setting['bx1__title0']?>">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="event-post-content">
										<div class="event-post-txt news-box"> 
											<a href="<?= setting['bx1__link0'];?>">
												<span class="ecat c1"><?=setting['bx1__title0']?></span>
											</a>
											<?=setting['bx1__desc0']?>
											<?php /*
												<h5><a href="#">ماهنامه تخصصی مطالعات پارلمان</a></h5>
												<h5><a href="#">نشریه تنظیم گفتار</a></h5>
												<h5><a href="#">ماهنامه مطالعات دولت</a></h5>

												<!-- <ul class="event-meta">
													<li><i class="icon-line-help"></i> 3-5 March, 2019</li>
													<li><i class="icon-line-help"></i> 09:00am - 06:00pm</li>
												</ul> -->
											*/?>
											
											<div class="news-box-f" style="left: 12px;">
												<a href="<?= setting['bx1__link0'];?>"><i class="icon-line-arrow-left"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--News Post-->
					<div class="col-md-4 col-sm-6 box2">
						<div class="news-post image-post">
							<div class="thumb">
								<img src="<?=setting['bx1__img1']?>" alt="<?=setting['bx1__title1']?>">
							</div>
							<div class="news-post-txt news-box">
								<a href="<?= setting['bx1__link1'];?>">
									<span class="ecat c2"><?=setting['bx1__title1']?></span>
								</a>
								<h5><a href="<?=setting['bx1__link1']?>">
									<?=setting['bx1__desc1']?>
								</a></h5>
								<div class="news-box-f">
									<a href="<?= setting['bx1__link1'];?>"><i class="icon-line-arrow-left"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!--News Post End--> 
					
					<!--News Post-->
					<div class="col-md-4 col-sm-6 box3">
						<div class="news-post">
						<div class="news-post-txt news-box pt-3">
							<a href="<?=setting['bx1__link2']?>">
								<span class="ecat c3"><?=setting['bx1__title2']?></span>
							</a>
							<?= setting['bx1__desc2']?>
							<?php /*
								<h5><a href="#">جمع سپاری و پایداری شهری</a></h5>
								<h5><a href="#">آیا شفافیت آراء به نفع عملکرد مجلس است؟</a></h5>
								<h5><a href="#">گزارش ارزیابی عملکرد دوره دهم مجلس</a></h5>
							*/?>
							<div class="news-box-f">
								<a href="<?=setting['bx1__link2']?>"><i class="icon-line-arrow-left"></i></a>
							</div>
						</div>
						</div>
					</div>
					<!--News Post End--> 
					
					<!--News Post-->
					<div class="col-md-4 col-sm-6 box4">
						<div class="news-post small-img-post">
							<div class="thumb">
								<span class="ecat c4"><?=setting['bx1__title3']?></span>
								<img src="<?=setting['bx1__img3']?>" alt="<?=setting['bx1__title3']?>" style="height:160px;">
							</div>
							<div class="news-post-txt news-box pt-3">
								<h5>
									<?=setting['bx1__desc3']?>
								</h5>
								
								<div class="news-box-f">
									<a href="<?=setting['bx1__link3']?>"><i class="icon-line-arrow-left"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!--News Post End--> 
					
					<!--News Post-->
					<div class="col-md-4 col-sm-6 box5">
						<div class="news-post">
							<div class="news-post-txt news-box pt-3">
								<a href="<?=setting['bx1__link4']?>">
									<span class="ecat c5"><?=setting['bx1__title4']?></span>
								</a>
								<?= setting['bx1__desc4']?>
								<?php /*
									<h5><a href="#">نگاهی دقیق‌تر به تنظیم‌گری خدمات دیجیتال در اتحادیه اروپا</a></h5>
									<h5><a href="#">چالش شفافیت حقوق و مزایای مدیران دولتی </a></h5>
									<h5><a href="#"> خدمات دیجیتال در اتحادیه اروپا</a></h5>
								*/?>
								<div class="news-box-f">
									<a href="<?=setting['bx1__link4']?>"><i class="icon-line-arrow-left"></i></a>
								</div>
							</div>
						</div>
					</div>
					<!--News Post End--> 
				
				</div>
			</div>
		</section>


		


		<!--Recent Events Start-->
		<section class="wf100 recent-events">
			<div class="bg2 p75">

			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h3><?=setting['bx2_title_r']?></h3>

						<div class="fslider flex-thumb-grid grid-5 bottommargin-lg1" data-pagi="false" data-arrows="false" data-thumbs="true">
							<div class="flexslider">
								<div class="slider-wrap">
									<?php for($i=0;$i<$maxrow;$i++):if(setting['bx21_title'.$i] != ''):?>
									<div class="slide" data-thumb="<?=setting['bx21_img'.$i]?>">
										<a href="<?=setting['bx21_link'.$i]?>"><div class="event-big">
											<div class="event-cap">
												<h5><?=setting['bx21_title'.$i]?></h5>
												<ul>
												<li><i class="icon-line-help"></i> <?=setting['bx21_date'.$i]?></li>
												<li><i class="icon-line-help"></i> <?=setting['bx21_loc'.$i]?></li>
												</ul>
												<p><?=setting['bx21_desc'.$i]?></p>
											</div>
											<img src="<?=setting['bx21_img'.$i]?>" alt="<?=setting['bx21_title'.$i]?>"> 
										</div></a>
									</div>
									<?php endif;endfor?>
								</div>
							</div>
						</div>

						<div class="clearfix clear"></div>
						<div class="pt-5 team-heading mt-3" style="text-align: left;">
							<a href="<?=setting['bx2_link_r']?>" class="btn-type1"><?=setting['bx2_linkt_r']?></a>
						</div>

					</div>
					<div class="col-md-7">
						<h3><?=setting['bx2_title_l']?></h3>
						<div class="tabs clearfix" id="tab-1">
							<ul class="nav nav-tabs tab-nav">
								<?php for($i=0;$i<$maxrow;$i++):if(setting['bx22_title'.$i] != ''):?>
									<li><a href="#tabs-<?=$i?>"><?= setting['bx22_title'.$i]?></a></li>
								<?php endif;endfor?>
							</ul>
							<div class="tab-container">
								<?php for($i=0;$i<$maxrow;$i++):if(setting['bx22_title'.$i] != ''):?>
								<div class="tab-content" id="tabs-<?=$i?>">

									<?php for($j=6;$j>0;$j--):if(isset(setting['bx22_titles'.$j.$i]) and setting['bx22_titles'.$j.$i] != ''):?>
									<!--Event List Start-->
									<ul class="event-list">
										<li><img src="<?=setting['bx22_img'.$j.$i]?>" alt="<?=setting['bx22_titles'.$j.$i]?>"></li>
										<li class="el-title">
											<h6><a href="<?=setting['bx22_link'.$j.$i]?>"><?=setting['bx22_titles'.$j.$i]?></a></h6>
										</li>
										<li>
											<strong class="edate"><?=setting['bx22_date'.$j.$i]?></strong>
											<strong class="etime"><?=setting['bx22_year'.$j.$i]?></strong>
										</li>
									</ul>
									<!--Event List End--> 
									<?php endif;endfor?>
									
								</div>
								<?php endif;endfor?>

							</div>
						</div>

						<div class="clearfix clear"></div>
						<div class="pt-4 team-heading"style="text-align: left;">
							<a href="<?=setting['bx2_link_l']?>" class="btn-type1"><?=setting['bx2_linkt_l']?></a>
						</div>
						
					</div>
				</div>
			</div>
			</div>
		</section>

		<!--Recent Events End--> 
		<!-- ------------------------------------------------------------------------- -->
		<!-- ------------------------------------------------------------------------- -->		
		<section class="wf100 emergency-numbers">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="wf100 department-links col2">
							<h5><?=setting['bx3_title_r']?></h5>
							<ul>
								<?php for($i=0;$i<$maxrow;$i++):if(setting['bx31_title'.$i] != ''):?>
								<li><a class="c1" href="<?=setting['bx31_link'.$i]?>">
									<span><?=setting['bx31_title'.$i]?></span>
								</a></li>
								<?php endif;endfor?>
								<?php /*
									<li><a class="c2" href="#"><span>تنظیم گری</span></a></li>
									<li><a class="c3" href="#"><span>حکمرانی ارتباطات و رسانه</span></a></li>
									<li><a class="c4" href="#"><span>سیاست‌گذاری اقتصادی</span></a></li>
									<li><a class="c5" href="#"><span>دولت و بخش عمومی</span></a></li>
									<li><a class="c6" href="#"><span>حکمرانی عصر دیجیتال</span></a></li>
								*/?>
							</ul>
						</div>
						<div class="clearfix clear"></div>
						<div class="pt-4 team-heading text-center">
							<a href="<?=setting['bx3_link_r']?>" class="btn-type1"><?=setting['bx3_linkt_r']?></a>
						</div>

					</div>
					<div class="col-md-6">
						<div  class="e-numbers">
							<h5><?=setting['bx3_title_l']?></h5>

							<?php /*
							<!-- <p>Dial these numbers in case of any emergency</p> -->
							<!-- <div class="info-num">
								<strong>For any Information</strong>
								<h3>(08)00 9876</h3>
							</div> -->*/?>

							<ul class="row">
								<?php for($i=0;$i<$maxrow;$i++):if(setting['bx32_title'.$i] != ''):?>
								<li class="col-md-4 col-sm-4">
									<div class="em-box"> 
										<div class="f_style2">
											<!-- <i class="icon-line-users"></i> -->
											<?=setting['bx32_icon'.$i]?>
											<strong class="em-num px-2"><?=setting['bx32_num'.$i]?></strong> 
										</div>
										<strong class="em-deprt"> <?=setting['bx32_title'.$i]?></strong> 
									</div>
								</li>
								<?php endif;endfor?>
							</ul>
						</div>

						<div class="clearfix clear"></div>
						<div class="pt-4 team-heading text-center">
							<a href="<?=setting['bx3_link_l']?>" class="btn-type1">
								<?=setting['bx3_linkt_l']?>
							</a>
						</div>
						

					</div>
				</div>
			</div>
		</section>
		<!-- ------------------------------------------------------------------------- -->
		<!-- ------------------------------------------------------------------------- -->
		<section class="wf100 p80 city-highlights" style="<?= setting['bx4_img'] != ''?'background-image:url("'.setting['bx4_img'].'");':''?>">
			<div class="container">
				<div class="title-style-1 text-center white-text">
					<h2><?=setting['bx4_title']?></h2>
					<p><?=setting['bx4_desc']?></p><br>
				</div>
			</div>
			<div class="container-fluid news-wrapper news-grid">
					<div id="highlight-slider" class="owl-carousel image-carousel carousel-widget posts-md" data-margin="30" data-nav="true" data-items-xs="1" data-items-sm="2" data-items-md="3"  data-autoplay="3000" data-loop="true" data-speed="500" data-items-xl="4">

						<?php for($i=0;$i<$maxrow;$i++):if(setting['bs4_title'.$i] != ''):?>
						<!--Item Start-->
						<div class="oc-item"><div class="">
							<div class="news-box">
								<div class="new-thumb">
									<span class="cat c1"><?=setting['bs4_tag'.$i]?></span>
									<img src="<?=setting['bs4_img'.$i]?>" alt="<?=setting['bs4_title'.$i]?>"> 
								</div>
								<div class="new-txt">
									<h6><a href="<?=setting['bs4_link'.$i]?>"><?=setting['bs4_title'.$i]?></a></h6>
									<p></p>
								</div>
								<div class="news-box-f  mb--30"> 
									<a href="<?=setting['bs4_link'.$i]?>"><i class="icon-line-arrow-left"></i></a>
								</div>
							</div>
						</div></div>
						<!--Item end-->
						<?php endif;endfor?>
				</div>
			</div>
		</section>

		<!-- ------------------------------------------------------------------------- -->
		<!-- ------------------------------------------------------------------------- -->		

		<section class="wf100 p80 official-members bg-white">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="team-heading">
							<h2><?=setting['bx5_title']?></h2>
							<p class="text-justify"><?=setting['bx5_desc']?></p>
							<div class="text-center mb-4 mb-sm-1">
								<a href="<?=setting['bx5_link']?>"><?=setting['bx5_linkt']?></a>
							</div>
						</div>
					</div>

					<?php for($i=0;$i<$maxrow;$i++):if(setting['bs5_title'.$i] != ''):?>
					<!--Team Box Start-->
					<div class="col-md-3 col-sm-4">
						<div class="team-box">
							<div class="team-thumb">
								<a href="<?=setting['bs5_link'.$i]?>"><i class="icon-line-link"></i></a>
								<img src="<?=setting['bs5_img'.$i]?>" alt="<?=setting['bs5_title'.$i]?>">
							</div>
							<div class="team-txt">
								<h5><?=setting['bs5_title'.$i]?></h5>
								<strong class="dep"><?=setting['bs5_desc'.$i]?></strong>
								<p></p>
							</div>
						</div>
					</div>
					<!--Team Box End--> 
					<?php endif;endfor?>
				</div>
			</div>
		</section>

		<!-- ------------------------------------------------------------------------- -->
		<!-- ------------------------------------------------------------------------- -->			
	</div>
</section>
<?= $this->element('footer')?>