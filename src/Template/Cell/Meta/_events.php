<?php
echo $this->Form->control('PostMetas.events',[
    'type'=>'select',
    'class'=>'select2 form-control',
    'label'=>'رویدادهای مرتبط',
    'multiple' =>'multiple',
    'default' => (isset($post_meta_list['events'])?$post_meta_list['events']:''),
    'options'=> $this->Query->post('events',['field'=>['id','title'],'limit'=>0, 'find_type'=>'list']) ]).'<br>';