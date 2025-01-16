<?php 
use Cake\Routing\Router;
echo $this->element('header');
$metalist = $this->Func->MetaList($result);
include_once('functions.php');
global $result;
$results = $result;
?>
<style>
@media (min-width: 768px){
	.portfolio .col-md-3 {
		-ms-flex: 0 0 20% !important;
		flex: 0 0 20% !important;
		max-width: 20% !important;
	}
}
</style>
<section id="page-title" class="page-title-center single_bank"
	style="background-image: url('<?= 
	(isset(setting['bgsingle_'.$post_type]) and setting['bgsingle_'.$post_type] !='')?
		setting['bgsingle_'.$post_type]:
		Router::url('/template/img/g1.jpg')?>');
		background-size: cover; padding: 100px 0;" 
	data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

	<div class="bg1"></div>
	<div class="container col-md-12 col-sm-12 clearfix text-right">
		<h1 class="pb-3"><?= $this->Query->the_title()?></h1>
		<?php
		switch ($post_type) {
			case 'projects':
				echo '<div style="color:#1F1E5A">'.
					$this->Query->the_category($result,['link'=>false]).
					'</div>';

				echo '<br>';
				if(isset($metalist['centers']) and $metalist['centers']!=''){
					//echo 'مراکز وابسته : ';
					$temps = $this->Query->post('centers',['contain'=>false,'get_type'=>'all','id' => $metalist['centers'],'order' => false]);
					foreach($temps as $tmp) echo $tmp['title'].' ';
				}
				echo '<hr class="hr1" />';
				echo (isset($metalist['employer']) and $metalist['employer'] != '')?
					'<font class="color-orange">'.setting['t_karfarma'].' : </font>'.$metalist['employer'].'<br>':'';
				echo (isset($metalist['year']) and $metalist['year'] != '')?
					'<font class="color-orange">'.setting['t_years_end'].' : </font>'.$metalist['year'].'<br>':'';
				if($this->Query->is_tags($result)){
					echo '<hr class="hr1" />';
					echo '<div class="tagcloud clearfix bottommargin1" style="margin:0 auto;display: inline-block;">';
					echo $this->Query->tags('',$result,['split'=>'']);
					echo '</div><div class="clearfix clearfloat"></div>';
				}
				break;
		}?>
		<?php include_once('part-social.php')?>
	</div>
</section>

<div id="page-menu" data-mobile-sticky="true">
<div id="page-menu-wrap">
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div><div class="col-sm-10">
				<div class="page-menu-row py-1">
					<nav class="page-menu-nav one-page-menu one-page-menus">
						<ul class="page-menu-container">
							<li class="page-menu-item ml-2" >
								<a href="#" class="text-dark text-center" style="min-width: 100px;" data-href="#section-1"><?=setting['t_moarefi']?></a>
							</li>

							<?php for($i=1;$i<7;$i++):if(isset($metalist['data_title'.$i]) and $metalist['data_title'.$i] != ''):?>
							<li class="page-menu-item ml-2" >
								<a href="#" class="text-dark text-center" style="min-width: 100px;" data-href="#section-1<?=$i?>">
									<?=$metalist['data_title'.$i]?>
								</a>
							</li>
							<?php endif;endfor?>

							<?php if(isset($metalist['scholars_id0']) and ($metalist['scholars_id0'] != '' or $metalist['scholars_fm0'] != '') ):?>
							<li class="page-menu-item ml-2">
								<a href="#" class="text-dark text-center" style="min-width: 100px;" data-href="#section-2"><?=setting['t_hamkaran']?></a>
							</li>
							<?php endif?>
							
							<?php if($metalist['topics'] != ''):?>
							<li class="page-menu-item ml-2">
								<a href="#" class="text-dark text-center" style="min-width: 100px;" data-href="#section-3"><?=setting['t_houzetakh']?></a>
							</li>
							<?php endif?>

							<?php if(count($this->Query->post('sources',[
								'contain'=>['PostMetas'],'contain_where' => ['meta_key' => 'centers','meta_value_like' => '"'.$results['id'].'"'],
								'get_type'=>'all','order' => false,'limit'=>0]))):?>
							<li class="page-menu-item ml-2">
								<a href="#" class="text-dark text-center" style="min-width: 100px;" data-href="#section-4"><?=setting['t_manabe']?></a>
							</li>
							<?php endif?>

							<?php if(count($this->Query->post('projects',[
								'contain'=>['PostMetas'],'contain_where' => ['meta_key' => 'centers','meta_value_like' => '"'.$results['id'].'"'],
								'get_type'=>'all','order' => false,'limit'=>0]))):?>
							<li class="page-menu-item ml-2">
								<a href="#" class="text-dark text-center" style="min-width: 100px;" data-href="#section-5"><?=setting['t_projects']?></a>
							</li>
							<?php endif?>

							<?php if(count($this->Query->post('events',['contain'=>['PostMetas'],
								'contain_where' => ['meta_key' => 'centers','meta_value_like' => '"'.$results['id'].'"'],
								'get_type'=>'all','order' => false,'limit'=>0]))):?>
							<li class="page-menu-item ml-2">
								<a href="#" class="text-dark text-center" style="min-width: 100px;" data-href="#section-6"><?=setting['t_events']?></a>
							</li>
							<?php endif?>

							<?php if(isset($metalist['gallery_img1']) and $metalist['gallery_img1'] != ''):?>
							<li class="page-menu-item ml-2">
								<a href="#" class="text-dark text-center" style="min-width: 100px;" data-href="#section-7"><?=setting['t_gallery']?></a>
							</li>
							<?php endif?>

						</ul>
					</nav>
					<div id="page-menu-trigger"><i class="icon-reorder"></i></div>
				</div>
			</div>
		</div>

		
	</div>
</div>
</div>

<section id="content">
<div class="content-wrap single_bank pt-01 pb-0 mb-0">
	<section class="posts row1 col-mb-30 py-5" style="background-color: #FFF;" >
		<div class="container bottommargin-lg1 clearfix">
			<div class="entry col-12 pt-sm-51">
				<div class="grid-inner row no-gutters">
					
					<div class="col-sm-12 pl-3">
						<div class="entry-title text-justify">
							<div class="title-block" id="section-1">
								<h2>
									<i class="icon-edit"></i>
									<?=setting['t_moarefi']?></h2>
							</div>

							<div class="entry-image mt-3">
								<?php 
								$img = $this->Query->postimage('medium',$result);
								echo $this->html->image($img !=''?$img:setting['default_image'], [
									'alt'=>$result['title'], 
									'title'=>$result['title'],
									'class'=>'br-15 '.(lang=='fa')?'mr-3':'ml-3',
									'style'=>'width: 220px;margin-right: 30px;'.((lang=='fa')?'float: left;':'float: right;')]);
								?>
							</div>

							<?php $count = preg_match_all ('<br>',$this->Query->the_content());
							if($count > 30):?>
							<div data-readmore="true" data-readmore-trigger-open="<?=setting['t_seeall']?> <i class='icon-angle-down'></i>" 
								data-readmore-trigger-close="<?=setting['t_seeless']?> <i class='icon-angle-up'></i>"  data-readmore-size="20rem"
								class="text-justify">
									<?= strip_tags(trim($this->Query->the_content()),strip_tags_list) ?>
								<a href="#" class="btn btn-link text-primary read-more-trigger"></a>
							</div>
							<?php else:?>
								<?= strip_tags(trim($this->Query->the_content()),strip_tags_list) ?>
							<?php endif?>
						</div>
					</div>
				</div>
			</div>

			<?php for($i=1;$i<7;$i++):if(isset($metalist['data_title'.$i]) and $metalist['data_title'.$i] != ''):?>
			<div class="entry col-12">
				<div class="grid-inner row no-gutters">
					<div class="col-sm-12 pl-3">
						<div class="entry-title text-justify">
							<div class="title-block" id="section-1<?=$i?>">
								<h2>
									<i class="icon-edit"></i>
									<?=$metalist['data_title'.$i]?></h2>
							</div>

							<?php $count = preg_match_all ('<br>',$metalist['data_text'.$i]);
							if($count > 30):?>
								<div data-readmore="true" data-readmore-trigger-open="<?=setting['t_seeall']?> <i class='icon-angle-down'></i>" 
									data-readmore-trigger-close="<?=setting['t_seeless']?> <i class='icon-angle-up'></i>"  data-readmore-size="10rem"
									class="text-justify">
										<div class="text-justify">
											<?= strip_tags(trim($metalist['data_text'.$i]),strip_tags_list) ?>
										</div>
									<a href="#" class="btn btn-link text-primary read-more-trigger"></a>
								</div>
							<?php else:
								echo strip_tags(trim($metalist['data_text'.$i]),strip_tags_list);
							endif?>
						</div>
					</div>
				</div>
			</div>
			<?php endif;endfor?>

		</div>
	</section><div class="clear clearfix"></div>
	<!-- ------------------------------------------------------------------------- -->
	
	<?php if(isset($metalist['scholars_id0']) and ($metalist['scholars_id0'] != '' or $metalist['scholars_fm0'] != '') ):?>
	<section class="posts row1 col-mb-30" >
		<div class="container bottommargin-lg clearfix">
			<div class="title-block" id="section-2">
				<h2>
					<i class="icon-edit"></i>
					<?=setting['t_hamkaran']?></h2>
			</div>

			<div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">
			<?php
			for($i=0;$i<10;$i++):
				if(isset($metalist['scholars_id'.$i]) and $metalist['scholars_id'.$i] != ''):		
					$tmp =$this->Query->post('scholars',['contain'=>['PostMetas'],
						'get_type'=>'first',
						'id' => $metalist['scholars_id'.$i],
						'order' => false]);
					$result = $tmp;
					$metalist2 = $this->Func->MetaList($result);
					$img2 = $this->Query->the_image(['size'=>'full']);?>

					<article class="portfolio-item col-sm-3 col-md-3">
						<div class="grid-inner bg-white news-box br-151 f_style1" >
							<div class="portfolio-image">
								<a href="<?= $this->Query->the_permalink(['id'=>$tmp['id']])?>">
									<?php
									$img = $this->Query->postimage('medium',$tmp);
									echo $this->html->image($img != ''?$img:setting['default_image'],
									['alt'=> $this->Query->the_title() ])?>
								</a>
								<div class="bg-overlay">
									<div class="bg-overlay-content dark" data-hover-animate="fadeIn">
										<a href="<?=Router::url($img2)?>" class="overlay-trigger-icon bg-light text-dark" 
											data-hover-animate="fadeInDownSmall" 
											data-hover-animate-out="fadeOutUpSmall" 
											data-hover-speed="350" data-lightbox="image" 
											title="<?= $this->Query->the_title()?>"><i class="icon-line-plus"></i></a>
										<a href="<?= $this->Query->the_permalink(['id'=>$tmp['id']])?>" 
											class="overlay-trigger-icon bg-light text-dark" 
											data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" 
											data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
									</div>
									<div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
								</div>
							</div>
							<div class="portfolio-desc pt-1" style="padding-left:15px;padding-right:15px;">
								<h4 class="mb-1 pb-0 pt-3 text-center cls3">
									<strong><a href="<?= $this->Query->the_permalink(['id'=>$tmp['id']])?>">
										<?= $tmp['title']?>
									</a></strong>
									
									<?= isset($metalist['scholars_semat'.$i])?'<div class="text-center mt-1">'.$metalist['scholars_semat'.$i].'</div>':''?>
								</h4><hr class="hr1">
								<?= author_list($metalist2)?>
								<span>
									<div class="news-box-f">
											<a href="<?= $this->Query->the_permalink();?>"><i class="icon-line-arrow-left"></i></a>
										</div>
									<div class="tagcloud clearfix bottommargin1" style="min-height: 40px;">
										<?= $this->Query->the_tags();?>
									</div>

								</span>
							</div>
						</div>
					</article>
				<?php endif;

				if(isset($metalist['scholars_fm'.$i]) and $metalist['scholars_fm'.$i] != ''):?>

					<article class="portfolio-item col-sm-3 col-md-3">
						<div class="grid-inner bg-white br-151 f_style1">
							<div class="portfolio-image">
								<?= $this->html->image(setting['default_image'],
									['alt'=> $metalist['scholars_fm'.$i] ])?>
							</div>
							<div class="portfolio-desc pt-1" style="padding-left:15px;padding-right:15px;">
								<h4 class="mb-1 pb-0 pt-3 text-center cls3">
									<?=  $metalist['scholars_fm'.$i]?>
								</h4>
								<?= isset($metalist['scholars_semat'.$i])?'<div class="text-center mt-1">'.$metalist['scholars_semat'.$i].'</div>':''?>
							</div>
						</div>
					</article>
				<?php endif;
				
			endfor;?>
			</div><br>

			<div class="clear clearfix"></div>
			<div class="text-center">
				<a href="<?= Router::url('/scholars/index/')?>?centers=<?=$results['id']?>" class="btn btn-sm btn-primary sbtn1"><?=setting['t_all']?></a>
			</div>

		</div>
	</section>
	<?php endif;?>

	<!-- ------------------------------------------------------------------------- -->
	<?php if($metalist['topics'] != ''):?>
	<section class="posts row1 col-mb-30" >
		<div class="container bottommargin-lg clearfix">
			<div class="title-block bottommargin-lg1" id="section-3">
				<h2>
					<i class="icon-edit"></i>
					<?=setting['t_houzetakh']?></h2>
			</div>

			<div class="posts-sm row col-mb-301" >
				<?php
				$temps =$this->Query->post('topics',['contain'=>['PostMetas'],
					'get_type'=>'all',
					'id' => $metalist['topics'],
					'order' => false]);
				$i=1;
            	foreach($temps as $tmp)://if($i<10):
					$i++;
					$result = $tmp;?>

					<div class="col-md-3 col-6 mb-2">
						<div class="feature-box fbox-center fbox-plain px-0 py-1 rounded-lg bg-light1 border1 mx-0" 
							style="background: #05899e !important;border: 0 !important;border-radius: 0px !important;">
							<div class="fbox-icon mt-2 mb-0" style="width: inherit;">
								<a href="<?= $this->Query->the_permalink(['id'=>$tmp['id']])?>" title="<?= $tmp['title']?>">
									<?= $this->html->image($this->Query->postimage('thumbnail',$tmp),['alt'=> $tmp['title'] ])?>
								</a>
							</div>
							<div class="fbox-content py-2">
								<a href="<?= $this->Query->the_permalink(['id'=>$tmp['id']])?>" title="<?= $tmp['title']?>">
									<h3 class="fw-n text-white"><?= $tmp['title']?></h3>
								</a>
							</div>
						</div>
					</div>
				<?php //endif;
				endforeach?>
			</div>

			<div class="clear clearfix"></div>
			<?php /* if(count($temps) > 10):?>
				<div class="text-center">
					<a href="<?= setting['box5_moreall']?>" class="btn btn-sm btn-primary sbtn1"><?=setting['t_all']?></a>
				</div>
			<?php endif */?>
		</div>
	</section>
	<?php endif;?>
	<!-- ------------------------------------------------------------------------- -->

	<?php 
	global $result;
	$temps = $this->Query->post('sources',[
		'contain'=>['PostMetas'],
		'contain_where' => [
			'meta_key' => 'centers',
			'meta_value_like' => '"'.$results['id'].'"'],
		'get_type'=>'all','order' => false,'limit'=>0]);
	if(count($temps)):?>
	<section class="posts row1 col-mb-30" >
		<div class="container bottommargin-lg clearfix">
			<div class="title-block bottommargin-lg1" id="section-4">
				<h2>
					<i class="icon-edit"></i>
					<?=setting['t_manabe']?></h2>
			</div>

			<div class="posts-sm row col-mb-301" >
				<?php 
				$i=1;
				foreach($temps as $tmp):if($i<10):
					$i++;
					$result = $tmp;
					$img = $this->Query->postimage('thumbnail',$tmp);
					?>
					<div class="entry col-6 col-sm-4 pb-0 mb-2">
						<div class="grid-inner row no-gutters cls6">
							<div class="col-auto">
								<div class="entry-image" style="width: 85px;">
									<?= $img != ''?$this->html->image($img,['alt'=> $tmp['title'] ]):''?>
								</div>
							</div>
							<div class="col <?=(lang=='fa')?'pr-3':'pl-3';?>">
								<div class="entry-title bg-white" style="min-height: 85px;">
									<h4 class="fs-18 py-2 px-2 fw-n">
										<a href="<?= $this->Query->the_permalink(['id'=>$tmp['id']])?>" alt="<?= $tmp['title']?>">
											<?= $tmp['title']?>
									</a></h4>
								</div>
							</div>
						</div>
					</div>
				<?php endif;endforeach;?>
			</div>

			<div class="clear clearfix" style="display: inline-block;margin-top: 50px;"></div>
			<?php if(count($temps) > 9):?>
				<div class="text-center">
					<a href="<?= Router::url('/sources/index/')?>?centers=<?=$results['id']?>" class="btn btn-sm btn-primary sbtn1"><?=setting['t_all']?></a>
				</div>
			<?php endif?>
		</div>
	</section>
	<?php endif;?>

	<!-- ------------------------------------------------------------------------- -->	
	<?php 
	
	$temps = $this->Query->post('projects',[
		'contain'=>['PostMetas'],
		'contain_where' => [
			'meta_key' => 'centers',
			'meta_value_like' => '"'.$results['id'].'"'],
		'get_type'=>'all','order' => false,'limit'=>0]);
	
	if(count($temps)):?>
	<section class="posts row1 col-mb-30" >
		<div class="container bottommargin-lg clearfix">
			<div class="title-block bottommargin-lg" id="section-5">
				<h2>
					<i class="icon-edit"></i>
					<?=setting['t_projects']?></h2>
			</div><br>
			<div class=" news-wrapper news-grid">
			<div id="oc-images" dir="ltr" class="owl-carousel news-carousel bottommargin-lg clearfix header-stick carousel-widget" 
				data-margin="3" data-loop="true" 
				data-stage-padding="50" data-autoplay="5000" data-pagi="false" data-items-sm="1" data-items-xl="4">
				<?php
				global $result;
				$i=1;
            	foreach($temps as $tmp)://if($i<10):
					$i++;
					$result = $tmp;?>
				<div class="oc-item">
					<!-- <a href="<?= $this->Query->get_permalink($tmp)?>">
						<?= $this->html->image($this->Query->postimage('thumbnail',$tmp))?>
					</a>
					<div class="bg-overlay">
						<div class="bg-overlay-content text-overlay-mask dark desc-sm align-items-end justify-content-start p-4">
							<div>
								<div class="portfolio-desc px-0">
									<h3><a href="<?= $this->Query->the_permalink(['id'=>$tmp['id']])?>" title="<?= $tmp['title']?>">
										<?= $tmp['title']?>
									</a></h3>
								</div>
							</div>
						</div>
					</div> -->

					<div class="news-post image-post">
						<div class="thumb">
							<?= $this->html->image($this->Query->postimage('large',$tmp))?>
						</div>
						<div class="news-post-txt">
							<!-- <span class="ecat c3">Business</span>  -->
							<h5>
								<a href="<?= $this->Query->get_permalink($tmp)?>" title="<?= $tmp['title']?>">
									<?= $tmp['title']?>
								</a>
							</h5>
							<!-- <ul class="news-meta">
								<li class="post-user"></li>
								<li></li>
							</ul> -->
						</div>
					</div>
				</div>
				<?php //endif;
				endforeach;?>
			</div>
			</div>
			
			<div class="clear clearfix"></div>
			<?php /* if(count($temps) > 9):?>
				<div class="text-center">
					<a href="<?= Router::url('/events/index/')?>?centers=<?=$results['id']?>" class="btn btn-sm btn-primary sbtn1"><?=setting['t_all']?></a>
				</div>
			<?php endif */?>

		</div>
	</section>
	<?php endif;?>
	<!-- ------------------------------------------------------------------------- -->
	<?php 
	$temps = $this->Query->post('events',[
		'contain'=>['PostMetas'],
		'contain_where' => [
			'meta_key' => 'centers',
			'meta_value_like' => '"'.$results['id'].'"'],
		'get_type'=>'all','order'=>['Posts.id'=>'desc'],'limit'=>9]);
	if(count($temps)):?>

	<section class="posts row1 col-mb-30">
		<div class="container bottommargin-lg clearfix">
			<div class="title-block bottommargin-lg1" id="section-6">
				<h2>
					<i class="icon-edit"></i>
					<?=setting['t_events']?></h2>
			</div>

			<div class="posts-sm row col-mb-301" >
				<?php 
				$i=1;
				foreach($temps as $tmp):if($i<10):
					$i++;
					$result = $tmp;
					$metalist2 = $this->Func->MetaList($result);
					?>
					<div class="entry col-6 col-sm-4 pb-0 mb-2">
						<!-- <div class="grid-inner row no-gutters cls7">
							<div class="col-auto p-0">
								<div class="entry-image pt-3" style="width: 110px;">
									<?= (isset($metalist2['year']) and $metalist2['year'] != '')?
										$metalist2['year']:''?>
								</div>
							</div>
							<div class="col <?=(lang=='fa')?'pr-3':'pl-3';?>">
								<div class="entry-title" style="min-height: 85px;">
									<h4 class="fs-18 pt-4 fw-n">
										<a href="<?= $this->Query->the_permalink(['id'=>$tmp['id']])?>" alt="<?= $tmp['title']?>">
											<?= $this->Query->the_mexcerpt($tmp['title'],35)?>
									</a></h4>
								</div>
							</div>
						</div> -->

						<div class="news-post">
                           	<div class="news-post-txt news-post-txt2">
								<span class="ecat c1">
									<?= (isset($metalist2['year']) and $metalist2['year'] != '')? $metalist2['year']:''?>
								</span> 
								<h5>
									<a href="<?= $this->Query->the_permalink(['id'=>$tmp['id']])?>" alt="<?= $tmp['title']?>">
										<?= $this->Query->the_mexcerpt($tmp['title'],35)?></a>
								</h5>
								<!-- <p></p> -->
							</div>
                        </div>

					</div>
				<?php endif;endforeach;?>
			</div>

			<div class="clear clearfix"></div>
			<?php if(count($temps) > 9):?>
				<div class="text-center">
					<a href="<?= Router::url('/events/index/')?>?centers=<?=$results['id']?>" class="btn btn-sm btn-primary sbtn1"><?=setting['t_all']?></a>
				</div>
			<?php endif?>

		</div>
	</section>
	<?php endif;?>

	<?php if(isset($metalist['gallery_img1']) and $metalist['gallery_img1'] != ''):?>
		<?php $cnt = 0;
		for($i=1;$i<50;$i++):if(isset($metalist['gallery_img'.$i]) and $metalist['gallery_img'.$i]!= ''):$cnt+=1;endif;endfor;
		?>
		<section class="posts row1 col-mb-30">
		<div class="container bottommargin-lg clearfix">
			<div class="title-block bottommargin-lg1" id="section-7">
				<h2>
					<i class="icon-edit"></i>
					<?=setting['t_gallery']?></h2>
			</div>
			<div class="container">
				<?php if($cnt >20):?>
				<div data-readmore="false" data-readmore-trigger-close="<?=setting['t_seeless']?> <i class='icon-angle-up'></i>" data-readmore-size="30rem"  
					data-readmore-trigger-open="<?=setting['t_seeall']?> <i class='icon-angle-down'></i>" >
				<?php endif;?>	

					<div class="masonry-thumbs grid-container grid-5" data-big="<?=$metalist['gallery_order']?>" data-lightbox="gallery">
						<?php for($i=1;$i<50;$i++):if(isset($metalist['gallery_img'.$i]) and $metalist['gallery_img'.$i]!= ''):?>
							<a class="grid-item" target="_blank" 
								title="<?=$metalist['gallery_title'.$i]?>"
								data-toggle="tooltip" 
								data-placement="top"
								href="<?=$metalist['gallery_link'.$i]!=''?$metalist['gallery_link'.$i]:$metalist['gallery_img'.$i]?>" 
								<?=$metalist['gallery_link'.$i] ==''?'data-lightbox="gallery-item"':''?> >

								<img src="<?=$metalist['gallery_img'.$i]?>" alt="<?=$metalist['gallery_title'.$i]?>"></a>
						<?php endif;endfor?>
					</div>
				<?php if($cnt >20):?>
					<a href="#" class="btn btn-link text-primary read-more-trigger"></a>
				</div>
				<?php endif?>
			</div>
		</div>
	</section>
	<?php endif?>
	<!-- ------------------------------------------------------------------------- -->
</div>
</section>
<style>
.entry-title h4 {
	display: flex;
	align-items: center;
	justify-content: center;
	flex-flow: column;
	height: 87px;
}
</style>
<?= $this->element('footer')?>