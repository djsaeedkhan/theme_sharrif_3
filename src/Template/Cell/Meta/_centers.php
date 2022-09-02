<?php
echo $this->Form->control('PostMetas.centers',[
    'type'=>'select',
    'class'=>'select2 form-control',
    'label'=>'زیرمجموعه (مراکز)',
    'multiple' =>'multiple',
    'default' => (isset($post_meta_list['centers'])?$post_meta_list['centers']:''),
    'options'=> $this->Query->post('centers',['field'=>['id','title'],'limit'=>0, 'find_type'=>'list']) ]).'<br>';