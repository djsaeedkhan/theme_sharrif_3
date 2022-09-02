<div class="box">
    <div class="card-header">تنظیمات</div>
    <div class="card-body">
        <?= $this->Form->control('PostMetas.menu_id',[
            'class'=>'form-control mb-3',
            'type'=>'select',
            'empty'=>'-- انتخاب کنید --',
            'options'=>$this->Func->AllMenu(),
            'label'=>'انتخاب منو نمایشی',
            'default'=>(isset($post_meta_list['menu_id'])?$post_meta_list['menu_id']:''),
            ]);

        echo $this->Form->control('PostMetas.en_url',[
            'class'=>'form-control ltr','placeholder'=>'https://',
            'label'=>'لینک به سایت دیگر',
            'default'=>(isset($post_meta_list['en_url'])?$post_meta_list['en_title']:'') ]).'<br>';
        ?>
    </div>
</div>