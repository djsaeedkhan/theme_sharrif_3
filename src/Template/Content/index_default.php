<?= $this->element('header');
include_once('functions.php');
use Cake\Routing\Router;
?>
<section id="page-title" class="page-title-center page-title1" 
	style="background-image: url('<?= 
	(isset(setting['bgindex_'.$post_type]) and setting['bgindex_'.$post_type] !='')?
		setting['bgindex_'.$post_type]:Router::url('/template/img/g1.jpg')?>'); background-size: cover; padding: 120px 0;" 
	data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
		<div class="bg1"></div>
		<div class="container clearfix text-center">
			<h1 class="pb-3"><?= $this->Query->the_category2()?></h1>
			<?= isset($category['description'])?'<div class="cls8">'.$category['description'].'</div>':''?>
		</div>
</section>


<div id="page-menu" data-mobile-sticky="true">
	<div id="page-menu-wrap">
		<div class="container">
			<div class="page-menu-row py-1">
				
				<nav class="page-menu-nav">
					<?= $this->form->create(null,['class'=>'m-0','type'=>'get'])?>
					<ul class="page-menu-container">
						<li class="page-menu-item ml-2">
							<?php switch ($post_type) {
								case 'scholars':
									echo $this->Form->control('disciplines',['label'=>false,'empty'=>'-- '.setting['t_reshte_uni'].' --',
										'style'=>'max-width: 150px;','type'=>'select','class'=>'form-control valid fs-13',
										'default'=>$this->request->getQuery('disciplines')?$this->request->getQuery('disciplines'):false,
										'options'=> $this->Query->post('disciplines',['field'=>['id','title'],'order'=>'title','limit'=>0,'find_type'=>'list'])
										]);
									break;
								case 'sources':
									echo $this->Form->control('cattype',['label'=>false,'class'=>'form-control valid fs-13',
										'type'=>'select','empty'=>'-- '.setting['t_manabe_type'].' --','style'=>'max-width: 150px;',
										'default'=>$this->request->getQuery('cattype')?$this->request->getQuery('cattype'):false,
										'options'=> $this->Query->category('sources',['field'=>['id','title'],'limit'=>0,'find_type'=>'treeList'])
										]);
									break;
								case 'events':
									echo $this->Form->control('cattype',['label'=>false,'style'=>'max-width: 150px;',
										'type'=>'select','class'=>'form-control valid fs-13','empty'=>'-- '.setting['t_event_type'].' --',
										'default'=>$this->request->getQuery('cattype')?$this->request->getQuery('cattype'):false,
										'options'=> $this->Query->category('events',['field'=>['id','title'],'limit'=>0,'find_type'=>'treeList'])
										]);
									break;

								default:
									echo $this->Form->control('cattype',['label'=>false,'style'=>'max-width: 150px;',
										'type'=>'select','class'=>'form-control valid fs-13','empty'=>'--',
										'default'=>$this->request->getQuery('cattype')?$this->request->getQuery('cattype'):false,
										'options'=> $this->Query->category($post_type,['field'=>['id','title'],'limit'=>0,'find_type'=>'treeList'])
										]);
									break;
							}?>
						</li>

						<?php if(in_array($post_type,['scholars','sources','events','disciplines'])):?>
						<li class="page-menu-item ml-2">
							<?= $this->Form->control('topics',['label'=>false,'style'=>'max-width: 150px;',
								'type'=>'select','class'=>'form-control valid fs-13','empty'=>'-- '.setting['t_houzes'].' --',
								'default'=>$this->request->getQuery('topics')?$this->request->getQuery('topics'):false,
								'options'=> $this->Query->post('topics',['field'=>['id','title'],'limit'=>0,'find_type'=>'list'])
								]);?>
						</li>
						<li class="page-menu-item ml-2">
							<?= $this->Form->control('centers',['label'=>false,'style'=>'max-width: 150px;',
								'type'=>'select','class'=>'form-control valid fs-13','empty'=>'-- '.setting['t_andishkade'].' --',
								'default'=>$this->request->getQuery('centers')?$this->request->getQuery('centers'):false,
								'options'=> $this->Query->post('centers',['field'=>['id','title'],'limit'=>0,'find_type'=>'list'])
								]);?>
						</li>
						<?php endif?>

						<li class="page-menu-item ml-2">
							<?php switch ($post_type) {
								case 'scholars':
									echo $this->Form->control('sort',['label'=>false,'style'=>'max-width: 150px;',
										'type'=>'select','class'=>'form-control valid fs-13','empty'=>'-- '.setting['t_order'].' --',
										'default'=>$this->request->getQuery('sort')?$this->request->getQuery('sort'):false,
										'options'=>[
											'last'=>setting['t_lastpost'],
											'alphabet'=>setting['t_alphabet']],
										]);
									break;
								case 'sources':
									echo $this->Form->control('sort',['label'=>false,'style'=>'max-width: 150px;',
										'type'=>'select','class'=>'form-control valid fs-13','empty'=>'-- '.setting['t_order'].' --',
										'default'=>$this->request->getQuery('sort')?$this->request->getQuery('sort'):false,
										'options'=>[
											'last'=>setting['t_lastpost'],
											'year' =>setting['t_salnashr']
										],]);
									break;
								case 'events':
									echo $this->Form->control('sort',['label'=>false,'style'=>'max-width: 150px;',
										'type'=>'select','class'=>'form-control valid fs-13','empty'=>'-- '.setting['t_order'].' --',
										'default'=>$this->request->getQuery('sort')?$this->request->getQuery('sort'):false,
										'options'=>[
											'last'=> setting['t_lastpost'],
											'year' => setting['t_eventlast']
										],]);
									break;
							}?>
						</li>
						<li class="page-menu-item ml-2">
							<?= $this->form->submit(setting['t_filter_app'],['class'=>'btn btn-sm btn-secondary'])?>
						</li>
					</ul>
					
				</nav>

				<div class="page-menu-title" style="<?=((lang=='fa')?'margin-right: auto;margin-left: 0;':'margin-right: 0;margin-left:auto;')?>">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<button style="border: 0;padding: 0;height: inherit;display: inherit;"><i class="icon-line-search"></i></button>
							</span>
						</div>
						<?=  $this->Form->control('s',['label'=>false,
							'class'=>'form-control valid fs-13','placeholder'=>setting['t_searchin'],
							'style'=>'height: 38px;border-right: 0;border-top-right-radius: 0px;border-bottom-right-radius: 0px;',
							'default'=>($this->request->getQuery('s') and $this->request->getQuery('s')!='')?$this->request->getQuery('s'):false,]);?>
					</div>
				</div>

				<?=$this->form->end()?>

				<div id="page-menu-trigger"><i class="icon-reorder"></i></div>
			</div>
		</div>
	</div>
</div><!-- #page-menu end -->

<style>
@media (min-width: 576px){
	.col-sm-3 {-ms-flex: 0 0 24.9%;flex: 0 0 24.9%;max-width: 24.9%;}
	.portfolio-item .portfolio-image img{min-height: 200px;}
}
</style>
<!-- Content
============================================= -->
<section id="content">
	<div class="content-wrap index_default pt-01 pb-0" style="background: #f5f5f5;">
		<div class="container-fluid bottommargin-lg1 clearfix">
			<div class="row">
				<?php include_once('sidebar.php')?>
				<div class="col-lg-9 pt-4 pb-5" style1="background:<?=setting['color_bgall']?>;">
				
					<div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">
						<?php
						global $result;
						foreach($data as $result):
							$metalist = $this->Func->MetaList($result);
							$img = $this->Query->the_image(['size'=>'medium']);
							$img2 = $this->Query->the_image(['size'=>'full']);
						?>
						<article class="portfolio-item col-12 news-box col-sm-<?= in_array($post_type,['scholars','projects'])?'3 tip1':'6 tip2'?>">
							<?= (in_array($post_type,['sources','events','page']))?
								'<div class="grid-inner row1 align-items-center1 no-gutters bg-white br-0 cls99" ><div class="row">':
								'<div class="grid-inner bg-white br-0" >';?>

								<?=  (in_array($post_type,['sources','events','page']))?'<div class="col-lg-4">':'';?>
									<div class="portfolio-image">
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
								<?=  (in_array($post_type,['sources','events','page']))?'</div>':'';?>

								<?= (in_array($post_type,['sources','events','page']))?
									'<div class="col-lg-8">':
									'<div class="pt-1 px-1" style="padding-left:15px;padding-right:15px;">';?>

								<?= (in_array($post_type,['sources','events','page']))?
									'<div class="cls999 pt-3 pb-0 px-lg-1">':
									'<div class="pt-1 px-1" style="padding-left:15px;padding-right:15px;">';?>
										<div class="portfolio-desc ">
											<div class="cls98">
												<div class="small text-center">
													<?php
													echo $p = $this->Query->the_category($result,['link'=>false]);

													if(isset($metalist['topics']) and isset($metalist['topics'][0])){
														$temps = $this->Query->post('scholars',['contain'=>['PostMetas'],
															'get_type'=>'first',
															'id' => $metalist['topics'][0],
															'order' => false]);
														if($p != '' and (isset($temps['title']) and $temps['title'] !=''))
															echo ' <strong>|</strong> ';
														echo (isset($temps['title']))?$temps['title']:'';
													}?>
												</div>

												<h4 class="mb-1 pt-2 pb-1 text-center cls3 px-2 px-sm-1">
													<a href="<?= $this->Query->the_permalink();?>">
														<strong><?= $this->Query->the_mexcerpt($this->Query->the_title(),35);?></strong>
													</a>
												</h4>

												<div class="fs-13" style="width:100%;margin-top:10px;">
													<?php
													global $text_trim;
													$text_trim = true;
													echo author_list($metalist)?>
												</div>
											</div>
										</div>

										<?php if($this->Query->is_tags($result) and $post_type != 'page'){?>
										<div class="cls9 px-2 px-sm-0">
											<hr class="hr1" />
											<div class="tagcloud clearfix bottommargin1">
												<?= $this->Query->tags('',$result,['limit'=>2,'split'=>'','limit_text'=>8]);?>
											</div>
										</div>
										<?php }?>

										<div class="news-box-f">
											<a href="<?= $this->Query->the_permalink();?>"><i class="icon-line-arrow-left"></i></a>
										</div>


									</div>
								</div>
							</div>
							<?= (in_array($post_type,['sources','events','page']))?'</div>':'';?>

						</article>
						<?php endforeach;?>
					</div>
					<ul class="pagination pagination-rounded pagination mt-4">
  						<?php
						  if(!$this->request->getQuery('page')):
							$this->Paginator->options([
								'url' => [
									'plugin'=>'Website',
									'controller' =>$post_type   ,
									'action' =>'index' ,
									$this->request->getParam('catid'),
									$this->request->getParam('catslug'),
									//'?'=>$this->request->getQuery()
								]
							]);
						/* else
							$this->Paginator->options([
								'url' => [
									'controller' => $this->request->getParam('action'),
									'action' => $post_type ]
							]); */
						endif;
						
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