<div class="row">
    <div class="col-sm-7">
        <?= $this->Form->control('PostMetas.topics',[
            'type'=>'select',
            'class'=>'select2 form-control',
            'label'=>'حوزه ها',
            'multiple' =>'multiple',
            'default' => (isset($post_meta_list['topics'])?$post_meta_list['topics']:''),
            'options'=> $this->Query->post('topics',['field'=>['id','title'],'limit'=>0, 'find_type'=>'list']) ]);?>
    </div>

    <div class="col-sm-5">
        <?= $this->Form->control('PostMetas.topics_text',[
            'label'=>'حوزه دستی',
            'class'=>' form-control',
            'default' => (isset($post_meta_list['topics_text'])?$post_meta_list['topics_text']:'')
            ])?>
    </div>
</div>
