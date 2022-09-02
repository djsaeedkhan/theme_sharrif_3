<?php $this->Func->getSiteSetting();?>
<div class="box">
    <div class="card-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="data-tab-fill" data-toggle="tab" href="#data-fill" 
                    role="tab" aria-controls="data-fill" aria-selected="true">ورود اطلاعات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#home-fill" 
                    role="tab" aria-controls="home-fill" aria-selected="true">مشخصات زمینه ای</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#profile-fill" 
                    role="tab" aria-controls="profile-fill" aria-selected="false">اسناد مرتبط</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="social-tab-fill" data-toggle="tab" href="#social-fill" 
                    role="tab" aria-controls="social-fill" aria-selected="false">پیوند ها</a>
            </li>
        </ul>

        <div class="tab-content pt-1">
            <div class="tab-pane" id="data-fill" role="tabpanel" aria-labelledby="data-tab-fill">
                <?php include_once('dataform.php')?>
            </div>
            <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                <?php
                echo $this->Form->control('PostMetas.en_title',[
                    'class'=>'form-control ltr',
                    'label'=>'نام پروژه به انگلیسی',
                    'default'=>(isset($post_meta_list['en_title'])?$post_meta_list['en_title']:'') ]).'<br>';
                    
                echo $this->Form->control('PostMetas.en_url',[
                    'class'=>'form-control ltr','placeholder'=>'https://',
                    'label'=>'لینک به سایت دیگر',
                    'default'=>(isset($post_meta_list['en_url'])?$post_meta_list['en_title']:'') ]).'<br>';
                    
                echo $this->Form->control('PostMetas.year',[
                    'class'=>'form-control',
                    'label'=>'سال آغاز و پایان',
                    'default'=>(isset($post_meta_list['year'])?$post_meta_list['year']:'') ]).'<br>';

                include_once('_centers.php');
                include_once('_topics.php');
                    
                echo $this->Form->control('PostMetas.employer',[
                    'class'=>'form-control',
                    'label'=>'کارفرما',
                    'default'=>(isset($post_meta_list['employer'])?$post_meta_list['employer']:'') ]).'<br>';

                /* echo $this->Form->control('PostMetas.year',[
                    'class'=>'form-control',
                    'label'=>'سال آغاز و پایان',
                    'default'=>(isset($post_meta_list['year'])?$post_meta_list['year']:'') ]).'<br>'; */
                ?>
            </div>
            <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                
                <?php for($ii=0;$ii<10;$ii++):?>
                    <div class="row">
                        <div class="col-sm-3">
                            <?= $this->Form->control('PostMetas.scholars_id'.$ii,[
                                'type'=>'select',
                                'class'=>'select2 form-control',
                                'label'=>'پدیدآورندگان',
                                'empty' =>'--',
                                'default' => (isset($post_meta_list['scholars_id'.$ii])?$post_meta_list['scholars_id'.$ii]:''),
                                'options'=> $this->Query->post('scholars',['field'=>['id','title'],'limit'=>0, 'find_type'=>'list']) ])?>
                        </div>
                        <div class="col-sm-1"><br><br>یا</div>
                        <div class="col-sm-3">
                            <?= $this->Form->control('PostMetas.scholars_fm'.$ii,[
                                'class'=>'form-control',
                                'label'=>'نام و نام خانوادگی',
                                'default' => (isset($post_meta_list['scholars_fm'.$ii])?$post_meta_list['scholars_fm'.$ii]:'')
                                ])?>
                        </div>

                        <div class="col-sm-5">
                            <?= $this->Form->control('PostMetas.scholars_semat'.$ii,[
                                'class'=>'form-control',
                                'type'=>'select',
                                'options'=> $this->Func->toarr(setting['default_semat'],';'),
                                'label'=>'سِِمت',
                                'empty'=>' -- ',
                                'default' => (isset($post_meta_list['scholars_semat'.$ii])?$post_meta_list['scholars_semat'.$ii]:'')  ])?>
                        </div>
                        <div class="col-sm-12"><hr></div>
                    </div>

                <?php endfor;?>
                
                <?php
                include_once('_sources.php');
                include_once('_events.php');
                include_once('_projects.php');
                ?>
            </div>
            <div class="tab-pane" id="social-fill" role="tabpanel" aria-labelledby="social-tab-fill">
                <?php include_once('_boxsocial.php')?>
            </div>
        </div>
    </div>
</div>