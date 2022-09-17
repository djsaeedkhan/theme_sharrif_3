<?= $this->element('header');
include_once('functions.php');
use Cake\Routing\Router;
?>
<section id="page-title" class="page-title-center page-title1" 
	style="background-image: url('<?= 
	(isset(setting['bgindex_'.$post_type]) and setting['bgindex_'.$post_type] !='')?
		setting['bgindex_'.$post_type]:
		Router::url('/template/img/g1.jpg')?>'); background-size: cover; padding: 120px 0;" 
	data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
	<div class="bg1"></div>
	<div class="container clearfix text-center">
		<h1 class="pb-3">جستجو</h1>
		<?=$this->request->getQuery('s')?'<div class="cls8">'.$this->request->getQuery('s').'</div>':false?>
	</div>
</section>

<style>
@media (min-width: 576px){
	.col-sm-3 {-ms-flex: 0 0 24.9%;flex: 0 0 24.9%;max-width: 24.9%;}
	.portfolio-item .portfolio-image img{min-height: 200px;}
}
</style>
<!-- Content
============================================= -->
<section id="content">
	<div class="content-wrap pt-0 pb-0" style="background: #40407e;">
		<div class="container-fluid index_default bottommargin-lg1 clearfix">
			<div class="row">
				<?php include_once('sidebar.php')?>
				<div class="col-lg-9 pt-4 pb-5" style="background:<?=setting['color_bgall']?>;">
					<div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">
						<?php
						global $result;
						foreach($data as $result):
							$metalist = $this->Func->MetaList($result);
							$img = $this->Query->the_image(['size'=>'medium']);
							$img2 = $this->Query->the_image(['size'=>'full']);
						?>
						<article class="portfolio-item news-box col-12 col-sm-4">
							<?= (in_array($post_type,['sources','events','page']))?
								'<div class="grid-inner row align-items-center1 no-gutters bg-white br-0 cls99" >':
								'<div class="grid-inner bg-white br-0" >';?>

								<?=  (in_array($post_type,['sources','events','page']))?'<div class="portfolio-image col-lg-4">':'<div class="portfolio-image">';?>
									<a href="<?= $this->Query->the_permalink()?>">
										<?= $this->html->image($img !=''?$img:setting['default_image'])?>
									</a>

									<div class="bg-overlay">
										<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
											<a href="<?=Router::url($img2)?>" class="overlay-trigger-icon bg-light text-dark" 
												data-hover-animate="fadeInDownSmall" 
												data-hover-animate-out="fadeOutUpSmall" 
												data-hover-speed="350" data-lightbox="image" 
												title="<?= $this->Query->the_title()?>"><i class="icon-line-plus"></i></a>

											<a href="<?= $this->Query->the_permalink();?>" 
												class="overlay-trigger-icon bg-light text-dark" 
												data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" 
												data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
										</div>
										<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
									</div>
								</div>

								<?= (in_array($post_type,['sources','events','page']))?'<div class="cls999 portfolio-desc col-lg-8 pt-3 pb-0 px-lg-1">':
									'<div class="portfolio-desc pt-1 px-1" style="padding-left:15px;padding-right:15px;">';?>
									<div class="cls98">
										<div class="small text-center">
											<?php
											echo $this->Query->the_category($result,['link'=>false]);
											if(isset($metalist['topics']) and isset($metalist['topics'][0])){
												$temps =$this->Query->post('scholars',['contain'=>['PostMetas'],
													'get_type'=>'first',
													'id' => $metalist['topics'][0],
													'order' => false]);
												echo (isset($temps['title']))?' <strong>|</strong> '.$temps['title']:'';
											}?>
										</div>

										<h4 class="mb-1 pt-2 pb-1 text-center cls3 px-2 px-sm-1">
											<a href="<?= $this->Query->the_permalink();?>">
												<?= $this->Query->the_mexcerpt($this->Query->the_title(),35);?>
											</a>
										</h4>

										<div class="fs-13">
											<?php
											global $text_trim;
											$text_trim = true;
											echo author_list($metalist)?>
										</div>
										
									</div>
									
									<div class="cls9 px-2 px-sm-0">
										<?php if($this->Query->is_tags($result) and $post_type != 'page'){?>
											<hr class="hr1" />
										<?php }?>

										<div class="tagcloud clearfix bottommargin1">
											<?= $this->Query->tags('',$result,['limit'=>2,'split'=>'','limit_text'=>8]);?>
										</div>

										<div class="news-box-f">
											<a href="<?= $this->Query->the_permalink();?>"><i class="icon-line-arrow-left"></i></a>
										</div>

									</div>
								</div>
							</div>
						</article>
						<?php endforeach;?>
					</div>

					<ul class="pagination pagination-rounded pagination mt-4">
  						<?php
                        $this->Paginator->setTemplates([
                            'prevDisabled' => '<li class="page-item disabled"><a class="page-link disabled" href="{{url}}">'.(lang=='fa'?'قبلی':'Prev').'</a></li>',
                            'prevActive' => '<li class="page-item"><a class="page-link" href="{{url}}">'.(lang=='fa'?'قبلی':'Prev').'</a></li>',
                            'nextDisabled' => '<li class="page-item disabled"><a class="page-link disabled">'.(lang=='fa'?'بعدی':'Next').'</a></li>',
                            'nextActive' => '<li class="page-item"><a class="page-link" href="{{url}}">'.(lang=='fa'?'بعدی':'Next').'</a></li>',
                            'first' => '<li class="page-item"><a class="page-link" href="{{url}}">'.(lang=='fa'?'اولین':'First').'</a></li>',
                            'last' => '<li class="page-item"><a class="page-link" href="{{url}}">'.(lang=='fa'?'آخرین':'Last').'</a></li>',
                            'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
                            'current' => '<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>' ]);
                        ?>
                        <?= $this->Paginator->first('<< ' . __('first'),['class'=>'page-link']) ?>
                        <?= $this->Paginator->prev('< ' . __('previous'),['class'=>'page-link']) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >',['class'=>'page-link']) ?>
                        <?= $this->Paginator->last(__('last') . ' >>',['class'=>'page-link']) ?>
                    </ul>
				</div>
				
			</div>
		</div>
		<!-- ------------------------------------------------------------------------- -->
		<!-- ------------------------------------------------------------------------- -->
	</div>
</section>
<style>
	<?php if(in_array($post_type,['page'])):?>
	.cls999 .cls98{
		width: 100%;
		position: absolute;
		left: 5%;
		top: 25%;
		text-align: center;
		padding-right: 10%;
	}
	<?php endif?>
	.gutter-30 > [class*="col-"] {
		padding-right: 7px;
		padding-left: 7px;
	}
</style>
<?= $this->element('footer')?>