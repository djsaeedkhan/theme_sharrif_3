<div class="alert alert-warning">در صورت خالی بودن باکس ها،آن متن در سایت نمایش داده نخواهد شد</div>
<?php
$list = [
    'sc_address'=>'آدرس',
    'sc_phone'=>'شماره تلفن',
    'sc_email'=>'آدرس ایمیل',
    'sc_personal'=>'صفحه شخصی',
    'sc_instagram'=>'اینستاگرام',
    'sc_twitter'=>'توییتر',
    'sc_facebook'=>'فیسبوک',
    'sc_telegram'=>'تلگرام',
    'sc_linkedin'=>'لینکدین',
    'sc_youtube'=>'یوتیوب',
    'sc_aparat'=>'آپارات',
    'sc_bale'=>'بله',
    'sc_rg'=>'ریسرچ گیت',
    'sc_orc'=>'ارکید',
    'sc_gosc'=>'گوگل اسکالر',

    'sc_wos'=>'WOS',
    'sc_scop'=>'Scopus',
];
foreach($list as $ks=> $ls){
    echo $this->Form->control('PostMetas.'.$ks,[
        'type'=>'text','class'=>'form-control ltr mb-1','label'=>$ls ,'placeholder'=>'http://',
        'default'=>(isset($post_meta_list[$ks])?$post_meta_list[$ks]:'') ]);
}  
?>