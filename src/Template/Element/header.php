<?php 
$this->Func->getSiteSetting();
define('lang', isset(setting['default_lang'])?setting['default_lang']:'fa');
?>
<!DOCTYPE html>
<html dir="<?=(lang=='fa')?'rtl':'ltr';?>" lang="<?=(lang=='fa')?'fa-IR':'en-US';?>" class="htmls">
<head>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Sharif" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?= $this->html->css([
		'/template/css/bootstrap.css',
		(lang == 'fa'?'/template/css/bootstrap-rtl.css':''),
		'/template/style.css',
		(lang == 'fa'?'/template/style-rtl.css':''),
		'/template/css/swiper.css',
		'/template/css/dark.css',
		'/template/css/font-icons.css',
		'/template/css/animate.css',
		'/template/css/magnific-popup.css',
		(lang == 'fa'?'/template/custom.css?'.date('his'):'/template/custom_en.css?'.date('his')),
	])?>
	<?= $this->html->script([
		'/template/js/jquery.js',
	]);?>
	<title><?= $this->Query->info('name');?><?= $this->fetch('title')!=''?' - '. $this->fetch('title'):'' ?></title>
	<?= $this->Func->header()?>

	<?php if(setting['morecss'] != ''):?>
		<style><?=setting['morecss']?></style>
	<?php endif?>
</head>
<body class="stretched <?=(lang=='fa')?'rtl':'ltr';?>">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<header id="header" class="full-header border-0 header-size-custom" data-sticky-shrink="false">
			<div id="header-wrap">
				<div class="container-fluid pe-0">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo" class="col col-sm-auto">
							<a href="/" class="standard-logo" data-dark-logo="https://gptt.ssnet.ir/img/logo.png">
								<img src="https://gptt.ssnet.ir/img/logo.png" alt=" Logo"></a>
							<a href="/" class="retina-logo" data-dark-logo="https://gptt.ssnet.ir/img/logo.png">
								<img src="https://gptt.ssnet.ir/img/logo.png" alt=" Logo"></a>
						</div><!-- #logo end -->

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<div class="header-misc pl-1">
							<a  class="button fw-semibold" style="margin: 0;padding: 17px 10px;cursor: none;background: #d94148;">
								<form class="row gx-3 align-items-center my-0 my-lg-0">
									<div class="col">
										<input class="form-control" 
											type="search" placeholder="عبارت جستجو" aria-label="Search" 
											style="padding-left: 30px;font-size:14px;background: none;border-color: #FFF;color:#FFF;">
									</div>
									<div class="col-auto" style="margin-right: -40px;">
										<i class="icon-line-search text-white"></i>
									</div>
								</form>
							</a>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<?= $this->Query->Navmenu(setting['topmenu'],[
							'div'=>false,
							'nav'=>true,'nav_class'=>'primary-menu',
							'ul'=> true,'ul_class'=>'menu-container border-end-0 me-0',
							'ul2_class'=> 'sub-menu-container',
							'li_class'=>'menu-item',
							'li2_class'=>'menu-item',
							'a_class'=>'menu-link',
							'a2_class'=>'menu-link',
						]);?>
						<!-- <nav class="primary-menu">

							<ul class="menu-container border-end-0 me-0">
								<li class="menu-item current">
									<a class="menu-link" href="demo-hostel.html"><div>خانه</div></a>
								</li>

								<li class="menu-item">
									<a class="menu-link" href="demo-hostel-about.html"><div>درباره ما</div></a>
								</li>

								<li class="menu-item">
									<a class="menu-link" href="demo-hostel-tour.html"><div>آثار علمی</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item">
											<a class="menu-link" href="demo-hostel-single.html"><div>کنفرانس حکمرانی</div></a>
										</li>
									</ul>
								</li>

								<li class="menu-item">
									<a class="menu-link" href="demo-hostel-contact.html"><div>ارتباط با ما</div></a>
								</li>
							</ul>

						</nav> --><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->