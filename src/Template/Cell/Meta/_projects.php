<?php
echo $this->Form->control('PostMetas.projects',[
    'type'=>'select',
    'class'=>'select2 form-control',
    'label'=>'پروژه ها',
    'multiple' =>'multiple',
    'default' => (isset($post_meta_list['projects'])?$post_meta_list['projects']:''),
    'options'=> $this->Query->post('projects',['field'=>['id','title'],'limit'=>0, 'find_type'=>'list']) ]).'<br>';