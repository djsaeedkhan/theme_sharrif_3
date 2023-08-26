<?php
use Cake\Routing\Router;
echo $this->element('header');
include_once('functions.php');
?>
<section id="page-title" class="page-title-center page-title1" 
	style="background-image: url('<?= 
	(isset(setting['bgindex_'.$post_type]) and setting['bgindex_'.$post_type] !='')?
		setting['bgindex_'.$post_type]:
		Router::url('/template/img/g1.jpg')?>'); background-size: cover; padding: 120px 0;" 
	data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
	<div class="bg1"></div>
	<div class="container clearfix text-center">
		<h1 class="pb-3"><?= $this->Query->the_category2()?></h1>
		<?= isset($category['description'])?'<div class="cls8">'.$category['description'].'</div>':''?>
	</div>
	
</section>

<div id="page-menu" data-mobile-sticky="true">
	<div id="page-menu-wrap"class="page-menu-wrap1">
		<div class="container">
			<div class="page-menu-row py-1">
				<nav class="page-menu-nav page-menu-nav1">
					<ul class="page-menu-container">
						<?php
						foreach($this->Query->category($post_type,[
							'order'=>'created','limit'=>0,
							'parent'=>isset($category['parent_id'])?$category['parent_id']:0 ]) as $res){
							echo '<li class="page-menu-item '.((lang=='fa')?'ml-4 ':'mr-4 ').((isset($category['id']) and $category['id'] == $res['id'])?'current ':'').'">';
								echo $this->Query->permalink(
									$res['title'],
									$res,
									['type' => 'index','class'=>'text-dark link-list-item ']);
							echo '</li>';
						}?>
						
					</ul>
				</nav>
				<div id="page-menu-trigger"><i class="icon-reorder"></i></div>
			</div>
		</div>
	</div>
</div><!-- #page-menu end -->
		<!-- Content
		============================================= -->
<section id="content">
	<div class="content-wrap index_bank pt-01 pb-0" style="background: #f5f5f5;">
		<div class="container-fluid bottommargin-lg1 clearfix">
			<div class="row">
				
				<div class="col-lg-12 pt-4 pb-5" style="background:<?=setting['color_bgall']?>;border-<?=((lang=='fa')?'left':'right')?>: 0px solid #d4616a;">
					<div class="container">
					<div id="portfolio" class="portfolio row grid-container gutter-20" data-layout="fitRows">

						<?php 
						global $result;
						foreach($data as $result):
							$metalist = $this->Func->MetaList($result);
							$img = $this->Query->the_image(['size'=>'medium']);
							$img2 = $this->Query->the_image(['size'=>'full']);
						?>
						<article class="portfolio-item col-sm-3 col-12">

							<div class="event-post">
								<div class="thumb">
									<a href="<?= $this->Query->the_permalink()?>"title="<?= $this->Query->the_title()?>"><i class="icon-line-link"></i></a>
									<?= $this->html->image($img !=''?$img:setting['default_image'],['alt'=>$this->Query->the_title()])?>
								</div>
								<div class="event-post-content">
									<div class="event-post-txt">
										<h5 class="text-center">
											<a href="<?= $this->Query->the_permalink()?>"><?= $this->Query->the_title()?></a>
										</h5>
										
										<div class="pl-2 fs-14 cls2 text-center">
											<?php 
											switch ($post_type) {
												case 'centers':
													echo (isset($metalist['year']) and $metalist['year'] != '')?
														setting['t_saltasis'].' : '.$metalist['year'].'<hr class="hr1">':''; //سال تاسیس
													break;
												case 'projects':
													echo (isset($metalist['year']) and $metalist['year'] != '')?
														setting['t_salejra'].' : '. $metalist['year'].'<hr class="hr1">':''; //سال اجرا
													break;
												case 'topics':
													if(isset($metalist['topics']) and $metalist['topics'] != ''){
														echo setting['t_maraketm'].' : '; //مراکز مرتبط
														$temps =$this->Query->post('topics',['contain'=>['PostMetas'],
															'get_type'=>'all',
															'id' => $metalist['topics'],
															'order' => false]);
														foreach($temps as $tmp):
															echo $tmp['title'];
														endforeach;
														echo '<hr class="hr1" />';
													}
												break;
											}
											?>
										</div>
										<div>
											<div class="tagcloud1 clearfix fs-14 cls2 text-center">
												<?php 
												switch ($post_type) {
													case 'centers':
													case 'topics':
														if(isset($metalist['scholars_id0']) and ($metalist['scholars_id0'] != '' or $metalist['scholars_fm0'] != '') ):
															echo $metalist['scholars_semat0'] .' : ';
															if($metalist['scholars_fm0'] !=''){
																echo $metalist['scholars_fm0'].'<hr1 class="hr1">';
															}
															elseif($metalist['scholars_id0'] != ''){
																$tmp = $this->Query->post('scholars',
																	['get_type'=>'first','id' => $metalist['scholars_id0'],'order' => false]);
																if(isset($tmp['title'])) echo $tmp['title'].'<hr1 class="hr1">';
															}
														endif;
														break;
													case 'projects':
														echo (isset($metalist['employer']) and $metalist['employer']!= '')?
															setting['t_karfarma'].' : '.$metalist['employer'].'<hr1 class="hr1">':''; //کارفرما
														break;
													}
												//echo author_list($metalist);
												?>
											</div>
										</div>

										

									</div>
									<div class="event-post-loc">
										<a href="<?= $this->Query->the_permalink()?>"><i class="icon-arrow-left2"></i></a> 
										<?php if($this->Query->is_tags($result)):?>
										<!-- <span style="padding-left:15px;padding-right:15px;"> -->
											<div class="tagcloud clearfix bottommargin1 pt-1" style="float: right;padding-right:10px">
												<?= $this->Query->tags('',$result,['limit'=>2,'split'=>'','limit_text'=>8]);?>
											</div>
										<!-- </span> -->
										<?php endif?>
									</div>
								</div>
							</div>
						</article>
						<?php endforeach;?>
					</div>
					

					<ul class="pagination pagination-rounded pagination mt-4">
                        <?php
						if(!$this->request->getQuery('page')):
							$this->Paginator->options([
								'url' => [
									'plugin'=>'Website',
									'controller' =>!is_array($post_type )?$post_type :false  ,
									'action' =>'index' ,
									$this->request->getParam('catid'),
									$this->request->getParam('catslug'),
									
									//added 1402/4/21
									'?'=>$this->request->getQuery()
								]
							]);
						else:
							$this->Paginator->options([
								'url' => [
									'plugin'=>'Website',
									'controller' =>!is_array($post_type )?$post_type :false  ,
									'action' =>'index' ,
									$this->request->getParam('catid'),
									$this->request->getParam('catslug'),
									
									//added 1402/4/21
									//'?'=>$this->request->getQuery()
								]
							]);
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
		</div>
		<!-- ------------------------------------------------------------------------- -->
		<!-- ------------------------------------------------------------------------- -->
	</div>
</section>
<?= $this->element('footer')?>