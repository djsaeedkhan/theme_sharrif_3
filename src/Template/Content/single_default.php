<?php 
use Cake\Routing\Router;
echo $this->element('header');
$metalist = $this->Func->MetaList($result);
global $result;
$result_bk = $result;
include_once('functions.php');
?>
<section id="page-title" class="page-title-center single_default"  
	style="background-image: url('<?= 
	(isset(setting['bgsingle_'.$post_type]) and setting['bgsingle_'.$post_type] !='')?
		setting['bgsingle_'.$post_type]:
		Router::url('/template/img/g1.jpg')?>'); 
		background-size: cover; padding: 100px 0;" 
	data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
	<div class="bg1"></div>
	<div class="container clearfix text-right" style="background: rgb(255 255 255 / 85%);
    border-radius: 3px;
    box-shadow: 0 3px 6px rgb(0 0 0 / 12%);
    padding: 30px;">
		<div class="row col-mb-50">
			<div class="col-sm-3 text-center">
				<?php 
				$img = $this->Query->postimage('large',$result);
				switch ($post_type) {
					case 'sources':
						echo $this->html->image($img !=''?$img:setting['default_image'], [
							'alt'=>$result['title'], 
							'title'=>$result['title'],
							'class'=>'br-15',
							'style'=>'widths: 200px;max-height:300px;']);
						break;
					
					default:
						echo $this->html->image($img !=''?$img:setting['default_image'], [
							'alt'=> isset($result['title'])?$result['title']:'', 
							'title'=> isset($result['title'])?$result['title']:'',
							'class'=>'br-15',
							'style'=>'width: 220px;']);
						break;
				}
				?>
			</div>
			<div class="col-sm-6 text-left lh-301 pt-4" style="font-size: 15px;">
				<div class="text-justify float-right" dir="ltr" style="text-align: left;font-weight: bold;padding-top: 10px;text-transform: capitalize;">
					<?= (isset($metalist['en_title']) and $metalist['en_title']!='')?$metalist['en_title']:''?>
				</div>
				<h1 class="fs-231 lh-30 mb-1 pb-1 ls-0 text-justify text-dark"style="font-size: 18px;">
					<?= $this->Query->the_title()?>
				</h1>
				
				<?php
				switch ($post_type) {
					case 'scholars':
						echo $this->Query->the_category($result,['link'=>false]);
						echo '<br>';
						if(isset($metalist['centers']) and $metalist['centers']!=''){
							$temps =$this->Query->post('centers',['contain'=>false,'get_type'=>'all','id' => $metalist['centers'],'order' => false]);
							foreach($temps as $tmp) echo $tmp['title'].' ';
						}
						if(isset($metalist['center_list']) and $metalist['center_list']!=''){
							echo $metalist['center_list'];
						}
						///echo '<hr class="hr1" />';
						echo '<br>';
						if(isset($metalist['disciplines']) and $metalist['disciplines']!=''){
							echo '<font class="color-orange">'.setting['t_reshte_uni'].' : </font>'; //رشته دانشگاهی
							$temps =$this->Query->post('disciplines',['contain'=>false,'get_type'=>'all','id' => $metalist['disciplines'],'order' => false]);
							foreach($temps as $tmp) echo $tmp['title'].' ';
							echo '<br>';
						}
						if(isset($metalist['topics']) and $metalist['topics']!=''){
							echo '<div>';
							echo '<font class="color-orange">'.setting['t_houzes'].' : </font>';//حوزه سیاستی
							$temps =$this->Query->post('topics',['contain'=>false,'get_type'=>'all','id' => $metalist['topics'],'order' => false]);
							foreach($temps as $tmp) 
								echo '<div class="splits" title="'.$tmp['title'].'">'.
									$this->html->link($tmp['title'],'/topics/'.$tmp['slug'] ).
									'</div>';

							if(isset($metalist['topics_text']) and $metalist['topics_text'] != ''){
								echo '<div class="splits" title="'.$metalist['topics_text'].'">'.
										$metalist['topics_text'].
										'</div>';
							}
							echo '</div>';
						}
						if($this->Query->is_tags($result)){
							echo '<hr class="hr1" />';
							echo '<div class="tagcloud clearfix bottommargin1">';
							echo $this->Query->tags('',$result,['split'=>'']);
							echo '</div>';
						}
					break;

					case 'sources':

						if(isset($metalist['scholars_id0']) and ($metalist['scholars_id0'] != '' or $metalist['scholars_fm0'] != '') ){

							for($i=0;$i<10;$i++):
								if(isset($metalist['scholars_id'.$i]) and $metalist['scholars_id'.$i] != ''):		
									$tmp =$this->Query->post('scholars',['contain'=>['PostMetas'],
										'get_type'=>'first',
										'id' => $metalist['scholars_id'.$i],
										'order' => false]);
									$result = $tmp;
									$metalist2 = $this->Func->MetaList($result);
									$img2 = $this->Query->the_image(['size'=>'full']);
									
									echo '<div class="d-inline pl-3">'.
										$this->Query->permalink( $this->html->image( $this->Query->postimage('thumbnail',$tmp),['class'=>'cls1 d-new']).
											$tmp['title'],  $tmp,['style'=>'display: inline-block;','alt'=>$tmp['title']]).
										'</div>';
								endif;
				
								if(isset($metalist['scholars_fm'.$i]) and $metalist['scholars_fm'.$i] != ''):
								
									echo '<div class="d-inline pl-3"><a  class="cls1 d-new">'.
										$this->html->image(setting['default_image'],
											['alt'=> $metalist['scholars_fm'.$i],'class'=>'cls1 d-new' ]).
											$metalist['scholars_fm'.$i].
											'</a></div>';
								endif;
								
							endfor;
						}
						else{
							echo author_list($metalist);
						}

						echo '<hr class="hr1" />';
						echo $this->Query->the_category($result,['link'=>false]);
						echo '<br>';
						if(isset($metalist['centers']) and $metalist['centers']!=''){
							//echo 'مراکز وابسته : ';
							$temps = $this->Query->post('centers',['contain'=>false,'get_type'=>'all','id' => $metalist['centers'],'order' => false]);
							foreach($temps as $tmp) echo $tmp['title'].' ';
							echo '<hr class="hr1" />';
						}
						
						if(isset($metalist['topics']) and $metalist['topics']!=''){
							echo '<font class="color-orange">'.setting['t_houzes'].' : </font>';//حوزه سیاستی
							$temps =$this->Query->post('topics',['contain'=>false,'get_type'=>'all','id' => $metalist['topics'],'order' => false]);
							foreach($temps as $tmp) echo $tmp['title'].' ';
							echo '<br>';
						}
						echo (isset($metalist['publisher']) and $metalist['publisher']!='')?
							'<font class="color-orange">'.(isset(setting['t_nasher'])?setting['t_nasher']:'-').' : </font>'.$metalist['publisher'].'<br>':''; //ناشر
						echo (isset($metalist['year']) and $metalist['year'] != '')?
							'<font class="color-orange">'.setting['t_salnashr'].' : </font>'.$metalist['year'].'<br>':'';//سال نشر

						if($this->Query->is_tags($result)){
							echo '<hr class="hr1" />';
							echo '<div class="tagcloud clearfix bottommargin1">';
							echo $this->Query->tags('',$result,['split'=>'']);
							echo '</div>';
						}
					break;

					case 'events':
						echo $this->Query->the_category($result,['link'=>false]);
						
						$author = author_list($metalist);
						if($author != ''){
							echo '<br>';
							echo $author;
							//echo '<hr class="hr1" />';
						}
						echo '<br>';
						if(isset($metalist['centers']) and $metalist['centers']!=''){
							echo setting['t_marakezv'].' : '; //مراکز وابسته
							$temps =$this->Query->post('centers',['contain'=>false,'get_type'=>'all','id' => $metalist['centers'],'order' => false]);
							foreach($temps as $tmp) echo $tmp['title'].' ';
						}
						echo '<hr class="hr1" />';
						if(isset($metalist['topics']) and $metalist['topics']!=''){
							echo setting['t_houzes'].' : '; //حوزه سیاستی
							$temps =$this->Query->post('topics',['contain'=>false,'get_type'=>'all','id' => $metalist['topics'],'order' => false]);
							foreach($temps as $tmp) echo $tmp['title'].' ';
							echo '<br>';
						}
						echo (isset($metalist['year']) and $metalist['year'] != '')?
							setting['t_tarikh_r'].' '.$metalist['year'].'<br>':''; //تاریخ رویداد:
						if($this->Query->is_tags($result)){
							echo '<hr class="hr1" />';
							echo '<div class="tagcloud clearfix bottommargin1">';
							echo $this->Query->tags('',$result,['split'=>'']);
							echo '</div>';
						}
					break;

					default:
						# code...
						break;
				}
				?>
				<br>
				
				<?php include_once('part-social.php')?>
			</div>
		</div>
	</div>
	<br><br>
</section>

<div id="page-menu" data-mobile-sticky="true">
	<div id="page-menu-wrap">
		<div class="container">
			<div class="row"><div class="col-sm-2"></div>
				<div class="col-sm-10">
					<div class="page-menu-row py-1">
						<nav class="page-menu-nav one-page-menu one-page-menus">
							<ul class="page-menu-container">
								<?php $cnt = false;
								for($i=1;$i<7;$i++):if(isset($metalist['data_title'.$i]) and $metalist['data_title'.$i] != ''):$cnt=true;?>
								<li class="page-menu-item <?=(lang=='fa')?'ml-4':'mr-4'?>">
									<a href="#" class="text-dark" data-href="#section-<?=$i?>">
										<?=$metalist['data_title'.$i]?>
									</a>
								</li>
								<?php endif;endfor?>
								

								<?php if($post_type == 'scholars'):?>

									<?php
									$t_manabe = $this->Query->post('sources',[
										'contain'=>['PostMetas'],
										'limit'=>10000,
										'contain_where' => [
											'meta_key_like' => 'scholars',
											'meta_value_like' => '"'.$result['id'].'"'],
										'get_type'=>'all',
										'order' => 'Posts.id desc'
									]);
									if(count($t_manabe)):?>
									<li class="page-menu-item <?=(lang=='fa')?'ml-4':'mr-4'?>">
										<a href="#" class="text-dark" data-href="#section-41">
											<?=setting['t_manabe']?>
										</a>
									</li>
									<?php endif?>

									<?php
									$t_projects = $this->Query->post('projects',[
										'contain'=>['PostMetas'],
										'limit'=>10000,
										'contain_where' => [
											'meta_key_like' => 'scholars',//$post_type ,
											'meta_value_like' => '"'.$result['id'].'"'],
										'get_type'=>'all',
										'order' => 'Posts.id desc'
									]);
									if(count($t_projects)):?>
									<li class="page-menu-item <?=(lang=='fa')?'ml-4':'mr-4'?>">
										<a href="#" class="text-dark" data-href="#section-42">
											<?=setting['t_projects']?>
										</a>
									</li>
									<?php endif?>

									<?php
									$t_events = $this->Query->post('events',[
										'contain'=>['PostMetas'],
										'order'=>['created'=>'desc'],
										'limit'=>10000,
										'contain_where' => [
											'meta_key_like' => 'scholars',
											'meta_value_like' => '"'.$result['id'].'"'],
										'get_type'=>'all',
										'order' => 'Posts.id desc'
									]);
									if(count($t_events)):?>
									<li class="page-menu-item <?=(lang=='fa')?'ml-4':'mr-4'?>">
										<a href="#" class="text-dark" data-href="#section-43">
											<?=setting['t_events']?>
										</a>
									</li>
									<?php endif?>

								<?php endif?>

								<?php if(isset($metalist['gallery_img1']) and $metalist['gallery_img1'] != ''):?>
								<li class="page-menu-item <?=(lang=='fa')?'ml-4':'mr-4'?>">
									<a href="#" class="text-dark" data-href="#section-44">
										<?=setting['t_gallery']?>
									</a>
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

<?php if($cnt == false):?>
<script nonce="<?=get_nonce?>">
	$('#page-menu-wrap').addClass('d-none');
</script>
<?php endif?>

<section id="content">
	<div class="content-wrap single_default pt-01 pb-0" style="background: #40407e;">
		<div class="container-fluid bottommargin-lg1 clearfix">
			<div class="row">
				<?php include_once('sidebar.php')?>
				<div class="col-lg-9 boxed 1pt-4 1pb-5 px-0 px-sm-5" style="background: #FFF;">

					<?php if($this->Query->the_content() != '' ):?>
						<div id="section-0" 
							class="section m-0 dark1 min-vh-25 min-vh-lg-25 pt-5 px-3 px-md-6 text-justify"
							style="line-height: 30px !important;">
							<?php 
							$txt = $this->Query->the_content();
							$count = preg_match_all ('<br>',$txt);
							if($count > 30 or strlen($txt) > 10000 ):?>
								<div data-readmore="false" data-readmore-trigger-open="<?=setting['t_seeall']?> <i class='icon-angle-down'></i>" 
									data-readmore-trigger-close="<?=setting['t_seeless']?> <i class='icon-angle-up'></i>"  data-readmore-size="35rem"
									class="text-justify">
										<div class="text-justify">
											<?= strip_tags(trim($txt),strip_tags_list);?>
										</div>
									<a href="#" class="btn btn-link text-primary read-more-trigger"></a>
								</div>
							<?php else:?>
								<?= strip_tags(trim($txt),strip_tags_list) ?>
							<?php endif;?>
						</div>
					<?php endif;?>
					
					<?php for($i=1;$i<7;$i++):if(isset($metalist['data_title'.$i]) and $metalist['data_title'.$i] != ''):?>
						<div id="section-<?=$i?>" 
							class="section m-0 dark1 min-vh-25 min-vh-lg-25 pt-5 px-3 px-md-6 text-justify"
							style="line-height: 30px !important;">
							<div class="title-block1 fancy-title title-right title-border mb-4">
								<h4 style="color: #d94148;">
									<i class="icon-edit"></i>
									<?=$metalist['data_title'.$i]?>
								</h4>
							</div>
							<?php 
							$count = preg_match_all ('<br>',$metalist['data_text'.$i]);
							if($count > 30):?>
								<div data-readmore="false" data-readmore-trigger-open="<?=setting['t_seeall']?> <i class='icon-angle-down'></i>" 
									data-readmore-trigger-close="<?=setting['t_seeless']?> <i class='icon-angle-up'></i>"  data-readmore-size="35rem"
									class="text-justify">
										<div class="text-justify">
											<?= strip_tags(trim($metalist['data_text'.$i]),strip_tags_list);?>
										</div>
									<a href="#" class="btn btn-link text-primary read-more-trigger"></a>
								</div>
							<?php else:?>
								<?= strip_tags(trim($metalist['data_text'.$i]),strip_tags_list) ?>
							<?php endif;?>
							
						</div>
					<?php endif;endfor?>

					<?php if($post_type == 'scholars' and count($t_manabe)):?>
					<div class="container bottommargin-lg clearfix">
						<div class="title-block bottommargin-lg1" id="section-41">
							<h2><?=setting['t_manabe']?></h2>
						</div>

						<?php if(count($t_manabe) > 9):?>
							<div data-readmore="false" data-readmore-trigger-open="<br><?=setting['t_seeall']?> <i class='icon-angle-down'></i>" 
									data-readmore-trigger-close="<br><?=setting['t_seeless']?> <i class='icon-angle-up'></i>"  data-readmore-size="25rem"
									class="text-justify">
								<div class="text-justify" style="padding-bottom: 60px;">
						<?php endif?>

						<div class="posts-sm row col-mb-30" id="home-recent-news">
							<?php global $result;foreach($t_manabe as $tmp):
								$result = $tmp;
								$img = $this->Query->postimage('thumbnail',$tmp);
								?>
								<div class="entry col-6 col-sm-4 pb-0 mb-2">
									<div class="grid-inner row no-gutters cls6">
										<div class="col-auto">
											<div class="entry-image" style="width: 85px;">
												<?= $img !=''?$this->html->image($img ,['alt'=> $tmp['title'] ]):''?>
											</div>
										</div>
										<div class="col <?=(lang=='fa')?'pr-3 p-0':'pl-3 p-0';?>">
											<div class="entry-title bg-white" style="min-height: 85px;">
												<h4 class="fs-18 py-2 px-0 fw-n">
													<a href="<?= $this->Query->the_permalink(['id'=>$tmp['id']])?>" alt="<?= $tmp['title']?>">
														<?= $this->Query->the_mexcerpt($tmp['title'],27);?>
												</a></h4>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach;$result = $result_bk;?>
						</div>

						<?php if(count($t_manabe) > 9):?>
							</div>
							<br><br>
								<a href="#" class="btn btn-link text-primary read-more-trigger"></a>
							</div>
						<?php endif?>

					</div>
					<?php endif;?>

					<!-- ------------------------------------------------->
					<?php if($post_type == 'scholars' and count($t_projects)):?>
					<div class="container bottommargin-lg clearfix">
						<div class="title-block bottommargin-lg1" id="section-42">
							<h2><?=setting['t_projects']?></h2>
						</div>

						<?php if(count($t_projects) > 9):?>
							<div data-readmore="false" data-readmore-trigger-open="<br><?=setting['t_seeall']?> <i class='icon-angle-down'></i>" 
									data-readmore-trigger-close="<br><?=setting['t_seeless']?> <i class='icon-angle-up'></i>"  data-readmore-size="25rem"
									class="text-justify">
								<div class="text-justify" style="padding-bottom: 60px;">
						<?php endif?>

						<div class="posts-sm row col-mb-30" id="home-recent-news">
							<?php global $result;foreach($t_projects as $tmp):
								$result = $tmp;?>
								<div class="entry col-6 col-sm-4 pb-0 mb-2">
									<div class="grid-inner row no-gutters cls6">
										<div class="col-auto">
											<div class="entry-image" style="width: 85px;">
												<?= $this->html->image($this->Query->postimage('thumbnail',$tmp),['alt'=> $tmp['title'] ])?>
											</div>
										</div>
										<div class="col <?=(lang=='fa')?'pr-3 p-0':'pl-3 p-0';?>">
											<div class="entry-title bg-white" style="min-height: 85px;">
												<h4 class="fs-18 py-2 px-0 fw-n">
													<a href="<?= $this->Query->the_permalink(['id'=>$tmp['id']])?>" alt="<?= $tmp['title']?>">
														<?= $this->Query->the_mexcerpt($tmp['title'],27);?>
												</a></h4>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach;$result = $result_bk;?>
						</div>

						<?php if(count($t_projects) > 9):?>
							</div>
							<br><br>
								<a href="#" class="btn btn-link text-primary read-more-trigger"></a>
							</div>
						<?php endif?>
						<br><br>
					</div>
					<?php endif;?>

					<!-- ------------------------------------------------->
					<?php if($post_type == 'scholars' and count($t_events)):?>
					<div class="container bottommargin-lg clearfix">
						<div class="title-block bottommargin-lg1" id="section-43">
							<h2><?=setting['t_events']?></h2>
						</div>

						<?php if(count($t_events) > 9):?>
							<div data-readmore="false" data-readmore-trigger-open="<br><?=setting['t_seeall']?> <i class='icon-angle-down'></i>" 
									data-readmore-trigger-close="<br><?=setting['t_seeless']?> <i class='icon-angle-up'></i>"  data-readmore-size="25rem"
									class="text-justify">
								<div class="text-justify" style="padding-bottom: 60px;">
						<?php endif?>
						<div class="posts-sm row col-mb-30" id="home-recent-news">
	
							<?php global $result;foreach($t_events as $tmp):
								$result = $tmp;?>
								<div class="entry col-6 col-sm-4 pb-0 mb-2">
									<div class="grid-inner row no-gutters cls6">
										<div class="col-auto">
											<div class="entry-image" style="width: 85px;">
												<?= $this->html->image($this->Query->postimage('thumbnail',$tmp),['alt'=> $tmp['title'] ])?>
											</div>
										</div>
										<div class="col <?=(lang=='fa')?'pr-3 p-0':'pl-3 p-0';?>">
											<div class="entry-title bg-white" style="min-height: 85px;">
												<h4 class="fs-18 py-2 px-0 fw-n">
													<a href="<?= $this->Query->the_permalink(['id'=>$tmp['id']])?>" alt="<?= $tmp['title']?>">
														<?= $this->Query->the_mexcerpt($tmp['title'],27);?>
												</a></h4>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach;$result = $result_bk;?>
						</div>
						<?php if(count($t_events) > 9):?>
							</div>
							<br><br>
								<a href="#" class="btn btn-link text-primary read-more-trigger"></a>
							</div>
						<?php endif?>

					</div>
					<?php endif;?>

					<?php if(isset($metalist['gallery_img1']) and $metalist['gallery_img1'] != ''):?>
						<?php 
						$cnt = 0;
						for($i=1;$i<50;$i++):if(isset($metalist['gallery_img'.$i]) and $metalist['gallery_img'.$i]!= ''):
							$cnt+=1;endif;
						endfor;
						?>
						<div class="container gg1">

							<div class="title-block bottommargin-lg1" id="section-44">
								<h2><?=setting['t_gallery']?></h2>
							</div>

							<?php if($cnt >20):?>
							<div data-readmore="false" data-readmore-trigger-close="<?=setting['t_seeless']?> <i class='icon-angle-up'></i>" 
								data-readmore-size="30rem"  class=""
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
					<?php endif?>
					
					<!-- ------------------------------------------------->
				</div>
				
			</div>
		</div>
		<!-- ------------------------------------------------------------------------- -->
		<style>
		.read-more-wrap {overflow: hidden !important;}
		.boxed > div:nth-child(odd) .read-more-mask{
			background-image: linear-gradient(rgba(255, 255, 255, 0), rgb(242 242 254)) !important;
		}
		.gg1 .read-more-wrap-open,
		.read-more-wrap-open{
			height:inherit !important;
		}
		.entry-title h4 {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-flow: column;
			height: 87px;
		}
		.section p img{
			width: 100% !important;
			height: 100% !important;
		}
		.read-more-mask{
			height: 40% !important;
		}
		</style>
	</div>
</section>
<?= $this->element('footer')?>