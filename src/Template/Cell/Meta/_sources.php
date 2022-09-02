<?php
echo $this->Form->control('PostMetas.sources',[
    'type'=>'select',
    'class'=>'select2 form-control',
    'label'=>'منابع مرتبط',
    'multiple' =>'multiple',
    'default' => (isset($post_meta_list['sources'])?$post_meta_list['sources']:''),
    'options'=> $this->Query->post('sources',['field'=>['id','title'],'limit'=>0, 'find_type'=>'list']) ]).'<br>';