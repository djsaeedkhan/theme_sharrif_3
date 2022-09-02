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
                <a class="nav-link" id="scholar2-tab-fill" data-toggle="tab" href="#scholar2-fill" 
                    role="tab" aria-controls="scholar2-fill" aria-selected="true">پدیدآورندگان (*)</a>
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

            <?php include_once('_scholars2.php')?>

            <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                <?php
                echo $this->Form->control('PostMetas.en_title',[
                    'class'=>'form-control ltr',
                    'label'=>'نام منبع به انگلیسی',
                    'default'=>(isset($post_meta_list['en_title'])?$post_meta_list['en_title']:'') ]).'<br>';

                echo $this->Form->control('PostMetas.en_url',[
                        'class'=>'form-control ltr','placeholder'=>'https://',
                        'label'=>'لینک به سایت دیگر',
                        'default'=>(isset($post_meta_list['en_url'])?$post_meta_list['en_url']:'') ]).'<br>';
                include_once('_centers.php');
                include_once('_topics.php');
                include_once('_disciplines.php');
                ?>

                <div class="row">
                    <div class="col-sm-6">
                        <?php include_once('_scholars.php');?>
                    </div>
                    <div class="col-sm-6">
                        <?= $this->Form->control('PostMetas.scholars_list',[
                            'type'=>'textarea',
                            'class'=>'form-control','style'=>'height:80px;',
                            'label'=>'افراد مرتبط (دستی)',
                            'default' => (isset($post_meta_list['scholars_list'])?$post_meta_list['scholars_list']:'') ])?>
                            <small>موارد را توسط ویرگول " , " انگلیسی از هم جدا کنید</small>
                    </div>
                    <div class="col-sm-12"><br></div>

                    <div class="col-sm-6">
                        <?= $this->Form->control('PostMetas.publisher',[
                            'class'=>'form-control',
                            'label'=>'ناشر',
                            'default'=>(isset($post_meta_list['publisher'])?$post_meta_list['publisher']:'') ]);?>
                    </div>
                    <div class="col-sm-6">
                        <?= $this->Form->control('PostMetas.year',[
                            'class'=>'form-control',
                            'label'=>'سال نشر',
                            'default' => (isset($post_meta_list['year'])?$post_meta_list['year']:'') ])?>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="social-fill" role="tabpanel" aria-labelledby="social-tab-fill">
                <?php include_once('_boxsocial.php')?>
            </div>
        </div>
    </div>
</div>