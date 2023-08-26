<?php
global $result;
echo $this->element('header');
$metalist = $this->Func->MetaList($result);
?>
<section id="page-title" class="page-title-center" 
	style="background-image: url('<?= Cake\Routing\Router::url('/template/img/g1.jpg')?>'); background-size: cover; padding: 120px 0;" 
	data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
	<div class="bg1"></div>
	<div class="container clearfix text-right">
		<h1 class="pb-3"><?= $this->Query->the_title()?></h1>
	</div>
</section>

<?php if(isset($metalist['menu_id']) and $metalist['menu_id'] !=''):?>
<div id="page-menu" data-mobile-sticky="true">
	<div id="page-menu-wrap" class="is_page">
		<div class="container">
			<div class="row"><div class="col-sm-2"></div>
				<div class="col-sm-10">
					<div class="page-menu-row py-1">
						<nav class="page-menu-nav one-page-menu one-page-menus">
						<?= $this->Query->Navmenu($metalist['menu_id'],[
							'div'=>false,
							'nav'=>false,
							'ul'=> true,'ul_class'=>'page-menu-container',
							'li_class'=>'page-menu-item ml-2',
							'a_class'=>'text-dark'
						]);?>
						</nav>
						<div id="page-menu-trigger"><i class="icon-reorder"></i></div>
					</div>
				</div>
				
			</div>
			<div class="clear clearfix"></div>
		</div>
		<div class="clear clearfix"></div>

	</div>
	<div class="clear clearfix"></div>

</div>
<?php endif;?>
<div class="clear clearfix"></div>

<section id="content">
<div class="clear clearfix"></div>

	<div class="content-wrap pt-0 pb-0" style="background: #40407e;">
	<div class="clear clearfix"></div>

		<div class="container-fluid bottommargin-lg1 clearfix">
			<div class="row">
				<?php include_once('sidebar.php')?>
				<div class="col-lg-9 pt-4 pb-5" style="background: #FFF;">
					<div class="px-4">
						<?= $this->Query->the_content($result)?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?= $this->element('footer')?>