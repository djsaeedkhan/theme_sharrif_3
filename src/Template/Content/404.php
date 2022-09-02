<?php 
use Cake\Routing\Router;
echo $this->element('header');
?>
<section id="page-title" class="page-title-center" 
	style="background-image: url('<?= Router::url('/template/img/g1.jpg')?>'); background-size: cover; padding: 120px 0;" 
	data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
	<div class="container clearfix text-center">
		<h1 class="pb-3">404</h1>
		<p class="pb-3 ltr"dir="ltr">Sorry Page Not Found ...</p>
	</div>
</section>


<?= $this->element('footer')?>