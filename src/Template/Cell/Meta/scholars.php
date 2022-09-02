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
                <a class="nav-link" id="gallery-tab-fill" data-toggle="tab" href="#gallery-fill" 
                    role="tab" aria-controls="gallery-fill" aria-selected="false">گالری تصاویر</a>
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
                    'label'=>'نام و نام خانوادگی به انگلیسی',
                    'default'=>(isset($post_meta_list['en_title'])?$post_meta_list['en_title']:'') ]).'<br>';

                echo $this->Form->control('PostMetas.en_url',[
                    'class'=>'form-control ltr','placeholder'=>'https://',
                    'label'=>'لینک به سایت دیگر',
                    'default'=>(isset($post_meta_list['en_url'])?$post_meta_list['en_title']:'') ]).'<br>';
               /*  echo $this->Form->control('PostMetas.semat',[
                    'class'=>'form-control',
                    'label'=>' پست سازمانی',
                    'default'=>(isset($post_meta_list['semat'])?$post_meta_list['semat']:'') ]).'<br>'; */
    
                include_once('_disciplines.php');
                include_once('_topics.php');
                ?>
            </div>
            <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                <div class="row">
                    <div class="col-sm-6">
                        <?php include_once('_centers.php');?>
                    </div>
                    <div class="col-sm-6">
                        <?= $this->Form->control('PostMetas.center_list',[
                            'type'=>'textarea',
                            'class'=>'form-control','style'=>'height:80px;',
                            'label'=>'محل فعالیت (دستی)',
                            'default' => (isset($post_meta_list['center_list'])?$post_meta_list['center_list']:'') ])?>
                            <small>موارد را توسط ویرگول " , " انگلیسی از هم جدا کنید</small>
                    </div>
                </div>
            </div>

            <?php include_once('_gallery.php')?>
            
            <div class="tab-pane" id="social-fill" role="tabpanel" aria-labelledby="social-tab-fill">
                <?php include_once('_boxsocial.php')?>
            </div>
        </div>
    </div>
</div>