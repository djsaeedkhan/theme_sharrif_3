<div class="tab-pane" id="scholar2-fill" role="tabpanel" aria-labelledby="scholar2-tab-fill">
    <?php for($ii=0;$ii<10;$ii++):?>
        <div class="row">
            <div class="col-sm-5">
                <?= $this->Form->control('PostMetas.scholars_id'.$ii,[
                    'type'=>'select',
                    'class'=>'select2 form-control',
                    'label'=>'پدیدآورندگان',
                    'empty' =>'--',
                    'default' => (isset($post_meta_list['scholars_id'.$ii])?$post_meta_list['scholars_id'.$ii]:''),
                    'options'=> $this->Query->post('scholars',['field'=>['id','title'],'limit'=>0, 'find_type'=>'list']) ])?>
            </div>
            <div class="col-sm-1"><br><br>یا</div>
            <div class="col-sm-5">
                <?= $this->Form->control('PostMetas.scholars_fm'.$ii,[
                    'class'=>'form-control',
                    'label'=>'نام و نام خانوادگی',
                    'default' => (isset($post_meta_list['scholars_fm'.$ii])?$post_meta_list['scholars_fm'.$ii]:'')
                    ])?>
            </div>

            <!-- <div class="col-sm-5">
                <?= $this->Form->control('PostMetas.scholars_semat'.$ii,[
                    'class'=>'form-control',
                    'type'=>'select',
                    'options'=> $this->Func->toarr(setting['default_semat'],';'),
                    'label'=>'سِِمت',
                    'empty'=>' -- ',
                    'default' => (isset($post_meta_list['scholars_semat'.$ii])?$post_meta_list['scholars_semat'.$ii]:'')  ])?>
            </div> -->
            <div class="col-sm-12"><hr></div>
        </div>
    <?php endfor;?>
    <?php
    //include_once('_sources.php');
    //include_once('_events.php');
    //include_once('_projects.php');
    ?>
</div>