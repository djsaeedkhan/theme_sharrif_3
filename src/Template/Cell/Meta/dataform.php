<?php for($j=1;$j<7;$j++):?>
<div class="div<?=$j?>">
    <?= $this->Form->control('PostMetas.data_title'.$j,[
        'class'=>'form-control',
        'label'=>'عنوان باکس '.$j,
        'default'=>(isset($post_meta_list['data_title'.$j])?$post_meta_list['data_title'.$j]:'') ]);?>
   
   <?= $this->Form->control('PostMetas.data_text'.$j,[
        'class'=>'form-control',
        'label'=>false,
        'id'=>'edittextarea'.$j,
        'type'=>'textarea',
        'default'=>(isset($post_meta_list['data_text'.$j])?$post_meta_list['data_text'.$j]:'') ]);?>
    <br><hr><br>
</div>
<?php endfor;?>