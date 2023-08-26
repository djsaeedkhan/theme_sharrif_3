<?=$this->element('header');?>
<section id="page-title" class="page-title-center" 
	style="background-image: url('<?= Cake\Routing\Router::url('/template/img/g1.jpg')?>'); background-size: cover; padding: 120px 0;" 
	data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
	<div class="container clearfix">
		<div class="row">
			<div class="col-sm-6 text-center text-centers">
				<h1 class="pb-3 text-dark" style="font-size:50px;">404</h1>
				<p class="pb-3 ltr"dir="ltr">متاسفانه صفحه مورد نظر پیدا نشد</p>
			</div>
			<div class="col-sm-6">
				
				<?php
				global $result;
				$text = $texts = ($this->request->getParam('posttype'));
				$list = [];
				
				
				/* if($text != ''){
					$text = str_replace('-',' ',$text);
					foreach($this->Func->posttype_list() as $kpt=>$pt){
						$results = $this->Query->post($kpt,['title_like'=>$text]);
						if($results){
							foreach($results as $result){
								//echo $result['title']!=''?'<li><a style="color: #d94148;" href="'.$this->Query->the_permalink().'">'.$result['title'].'</a></li>':'';
								$list[$result['title']] = $this->Query->the_permalink();
							}
						}

						$results = $this->Query->post($kpt,['content_like'=>$text]);
						if($results){
							foreach($results as $result){
								//echo $result['title']!=''?'<li><a style="color: #d94148;" href="'.$this->Query->the_permalink().'">'.$result['title'].'</a></li>':'';
								$list[$result['title']] = $this->Query->the_permalink();
							}
						}
					}
				} */

				$text = null;
				$text = isset($this->request->getParam('pass')[0])?$this->request->getParam('pass')[0]:'';
				//var_dump($text);
				if($text != ''){
					$text = str_replace('-',' ',$text);
					foreach($this->Func->posttype_list() as $kpt=>$pt){
						$results = $this->Query->post($kpt,['title_like'=>$text]);
						if($results){
							foreach($results as $result){
								//echo $result['title']!=''?'<li><a style="color: #d94148;" href="'.$this->Query->the_permalink().'">'.$result['title'].'</a></li>':'';
								$list[$result['title']] = $this->Query->the_permalink();
							}
						}

						/* $results = $this->Query->post($kpt,['content_like'=>$text]);
						if($results){
							foreach($results as $result){
								//echo $result['title']!=''?'<li><a style="color: #d94148;" href="'.$this->Query->the_permalink().'">'.$result['title'].'</a></li>':'';
								$list[$result['title']] = $this->Query->the_permalink();
							}
						} */
					}
				}

				if(count($list) > 0){
					echo '<h4 class="mb-2">نوشته مورد نظر شما پیدا نشد یا آدرس آن تغییر کرده است.<br>
					<small class="fw-normal">لینک های زیر شاید به شما کمک کند</small></h4>
					<ul>';
					foreach($list as $kst => $lst){
						echo '<li><a style="color: #d94148;" href="?newurl='.$lst.'">'.$kst.'</a></li>';
					}
					echo '</ul>';
				}
				else{
					echo '<script>$(".text-centers").removeClass("col-sm-6").addClass("col-sm-12");</script>';
				}
				?>
				
			</div>
		</div>
	</div>
</section>
<?= $this->element('footer')?>