<?php
echo $this->Form->control('PostMetas.scholars',[
    'type'=>'select',
    'class'=>'select2 form-control',
    'label'=>'پدیدآورندگان - افراد مرتبط',
    'multiple' =>'multiple',
    'default' => (isset($post_meta_list['scholars'])?$post_meta_list['scholars']:''),
    'options'=> $this->Query->post('scholars',['field'=>['id','title'],'limit'=>0, 'find_type'=>'list']) ]).'<br>';