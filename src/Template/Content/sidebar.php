<?php $maxrow = 12;?>
<div class="sidebar col-lg-3 pt-4" style="background: #40407e;margin-top: -10px;">
	<div class="sidebar-widgets-wrap">

		<?php if(setting['sidebar1_title'] != ''){?>
		<div class="widgets">
			<div class="fancy-title title-border pt-2">
				<h4 class="text-white">
				<?= setting['sidebar1_title']?>
			</h4>
			</div>
			<div class="upcoming-events inner">
				<ul>
					<?php for($i=0;$i<$maxrow;$i++):if(setting['side1_title'.$i] != ''):?>
					<li>
						<div class="edate">
							<!-- <strong>15</strong> فروردین <span class="year">1390</span>  -->
							<?=setting['side1_date'.$i]?>
						</div>
						<h6><a href="<?=setting['side1_link'.$i]?>">
							<?=setting['side1_title'.$i]?>
						</a></h6>
						<span class="loc"><?=setting['side1_loc'.$i]?></span> 
					</li>
					<?php endif;endfor?>
				</ul>
			</div>
		</div>
		<?php }?>

		<?php if (setting['sidebar2_title'] != '') {?>
		<div class="widgets">
			<div class="fancy-title title-border pt-2">
				<h4 class="text-white">
					<?= setting['sidebar2_title']?>
				</h4>
			</div>
			<div class="recent-posts inner">
				<ul>
					<?php for($i=0;$i<$maxrow;$i++):if(setting['side2_title'.$i] != ''):?>
					<li>
						<img src="<?=setting['side2_img'.$i]?>" alt="<?=setting['side2_title'.$i]?>"> 
						<strong><?=setting['side2_date'.$i]?></strong>
						<h6><a href="<?=setting['side2_link'.$i]?>">
							<?=setting['side2_title'.$i]?>
						</a></h6>
					</li>
					<?php endif;endfor?>
				</ul>
			</div>
		</div>
		<?php } ?>
	</div>
</div>