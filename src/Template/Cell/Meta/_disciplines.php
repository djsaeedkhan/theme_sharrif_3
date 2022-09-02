<?php
echo $this->Form->control('PostMetas.disciplines',[
    'type'=>'select',
    'class'=>'select2 form-control',
    'label'=>'رشته دانشگاهی ',
    'multiple' =>'multiple',
    'default' => (isset($post_meta_list['disciplines'])?$post_meta_list['disciplines']:''),
    'options'=> $this->Query->post('disciplines',['field'=>['id','title'],'limit'=>0, 'find_type'=>'list']) ]).'<br>';?>