
<?php
$productlist = $this->Query->post('product',[
    'find_type'=>'list',
    'order'=>['Posts.id'=>'desc'],
    'field'=>['id','title']]);

$enab = [
    1 =>'عدم نمایش',
];
global $menu;
$menu = [
    'header'=>['name'=>'header' , 'title'=>'باکس هدر', 'fields'=> [
            ['type'=>'text', 'name'=>'header_logo','col'=> 6, 'title'=>'تصویر لوگو', 'class'=>'ltr', 'pholder'=> 'http://', 'select_img'=> true] ,
            ['type'=>'text', 'name'=>'header_logo_mobile','col'=> 6, 'title'=>'تصویر لوگو موبایل', 'class'=>'ltr', 'pholder'=> 'http://', 'select_img'=> true] ,
            ['type'=>'text', 'name'=>'header_logof','col'=> 6, 'title'=>'تصویر لوگو فوتر', 'class'=>'ltr', 'pholder'=> 'http://', 'select_img'=> true] ,
            [],
            ['type'=>'select', 'name'=>'topmenu','title'=>'منو هدر بالا', 'data'=> $AllMenu ,'col'=> 6],
            [],
            ['type'=>'textarea', 'name'=>'modal_text','title'=>'متن مودال','class'=>'ltr','col'=>12],
        ],
    ]];
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'slider'=>['name'=>'slider' , 'title'=>'اسلایدر', 'fields'=> [
        ],
    ]];
    for($i=1;$i<2;$i++):
        $menu['slider']['fields'][] = ['name'=>'slider__title'.$i, 'title'=>'عنوان اسلایدر', 'col'=> 6];
        $menu['slider']['fields'][] = ['name'=>'slider__img'.$i, 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 6];
        $menu['slider']['fields'][] = ['name'=>'slider__link'.$i, 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6];
        $menu['slider']['fields'][] = ['name'=>'slider__text'.$i, 'title'=>'متن اسلایدر','type'=>'textarea', 'col'=> 6];
        //$menu['slider']['fields'][] = [];
    endfor;
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'box1'=>['name'=>'box1' , 'title'=>'باکس یک (اسلایدر)', 'fields'=> [
            //['name'=>'box1_rt1', 'title'=>'تصویر ثابت چپ','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 12 ],
            ['name'=>'box1_color', 'title'=>'رنگ باکس','col'=> 3,'pholder'=> '#CCC','class'=>'ltr'],
            ['name'=>'box1_enable', 'title'=>'وضعیت نمایش','col'=> 3,'type'=>'select','data'=>[0=>'disable',1=>'enable'],
            'class'=>'ltr'],
            [],
        ],
    ]];

    $menu['box1']['fields'][] = ['break' => 'باکس راست اسلایدر'];
    for($i=1;$i<12;$i++): 
        $menu['box1']['fields'][] = ['name'=>'box1__title'.$i, 'title'=>'باکس راست - عنوان '.$i, 'col'=> 12];
        $menu['box1']['fields'][] = ['name'=>'box1__link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6];
        $menu['box1']['fields'][] = ['name'=>'box1__img'.$i, 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 6];
        $menu['box1']['fields'][] = [];
    endfor;

    $menu['box1']['fields'][] = ['name'=>'box1__mtlink', 'title'=>'عنوان لینک بیشتر', 'col'=> 3];
    $menu['box1']['fields'][] = ['name'=>'box1__mtcolor', 'title'=>'کد رنگ ', 'class'=>'ltr', 'pholder'=> '#CCC', 'col'=> 2];
    $menu['box1']['fields'][] = ['name'=>'box1__mlink', 'title'=>'متن لینک بیشتر', 'pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7];
    $menu['box1']['fields'][] = ['break' => 'باکس پایین اسلایدر'];

    for($i=1;$i<15;$i++): 
        $menu['box1']['fields'][] = ['name'=>'box12__title'.$i, 'title'=>'باکس چپ - عنوان '.$i, 'col'=> 8];
        $menu['box1']['fields'][] = ['name'=>'box12__text'.$i, 'title'=>'برچسب ', 'col'=> 4];
        $menu['box1']['fields'][] = ['name'=>'box12__link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6];
        $menu['box1']['fields'][] = ['name'=>'box12__img'.$i, 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 6];
        $menu['box1']['fields'][] = [];
    endfor;
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'box2'=>['name'=>'box2' , 'title'=>'باکس دوم (تب ها)', 'fields'=> [
            ['name'=>'box2_title', 'title'=>'عنوان باکس','col'=> 6],
            ['name'=>'box2_enable', 'title'=>'وضعیت نمایش','col'=> 3,'type'=>'select','data'=> $enab],
            ['name'=>'box2_color', 'title'=>'رنگ باکس','col'=> 3,'pholder'=> '#CCC','class'=>'ltr', ],
            [],
        ],
    ],];
    for($i=1;$i<6;$i++): 
        $menu['box2']['fields'][] = ['name'=>'box2__title'.$i, 'title'=>' عنوان '.$i, 'col'=> 12];
        $menu['box2']['fields'][] = ['name'=>'box2__img'.$i, 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true,'col'=> 6];
        $menu['box2']['fields'][] = ['name'=>'box2__link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6];
        $menu['box2']['fields'][] = ['name'=>'box2__text'.$i, 'title'=>'متن توضیحات', 'col'=> 12,'type'=>'textarea'];
        for($j=1;$j<6;$j++): 
            $menu['box2']['fields'][] = ['name'=>'box2__menut'.$i.$j, 'title'=>'عنوان منو '.$j,'col'=> 6];
            $menu['box2']['fields'][] = ['name'=>'box2__menul'.$i.$j, 'title'=>'لینک منو '.$j, 'class'=>'ltr', 'col'=> 6,'pholder'=> 'http://',];
        endfor;
        $menu['box2']['fields'][] = [];
    endfor;
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'box3'=>['name'=>'box3' , 'title'=>'باکس سوم (پروژه منتخب)', 'fields'=> [
            ['name'=>'box3_title', 'title'=>'عنوان باکس', 'col'=> 6],
            ['name'=>'box3_enable', 'title'=>'وضعیت نمایش','col'=> 3,'type'=>'select','data'=> $enab],
            ['name'=>'box3_color', 'title'=>'رنگ باکس','col'=> 3,'pholder'=> '#CCC','class'=>'ltr'],
            ['name'=>'box3_moreall', 'title'=>'لینک همه موارد', 'col'=> 12, 'pholder'=>'http://', 'class'=>'ltr',],
            [],
        ],
    ]];
    for($i=1;$i<9;$i++):
        if($i<5?$i % 2 != 0:$i % 2 == 0):
            $menu['box3']['fields'][] = ['name'=>'box3__title'.$i, 'title'=>'عنوان '.$i, 'col'=> 12];
            $menu['box3']['fields'][] = ['name'=>'box3__color'.$i, 'title'=>'آدرس تصویر','pholder'=>'#CCC', 'col'=> 6,'class'=>'ltr','dir'=>'ltr','select_img'=>true,];
            $menu['box3']['fields'][] = ['name'=>'box3__link'.$i, 'title'=>'آدرس لینک','pholder'=>'http://', 'class'=>'ltr', 'col'=> 6];
            $menu['box3']['fields'][] = [];
        else:
            $menu['box3']['fields'][] = ['name'=>'box3__title'.$i, 'title'=>'باکس چپ - عنوان '.$i, 'col'=> 12];
            //$menu['box3']['fields'][] = ['name'=>'box3__link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6];
            //$menu['box3']['fields'][] = ['name'=>'box3__text'.$i, 'title'=>'متن توضیحات ', 'col'=> 12,'type'=>'textarea'];

            $menu['box3']['fields'][] = ['name'=>'box3__title1'.$i, 'title'=>'عنوان 1', 'col'=> 2];
            $menu['box3']['fields'][] = ['name'=>'box3__img1'.$i, 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 5 ];
            $menu['box3']['fields'][] = ['name'=>'box3__link1'.$i, 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 5];

            $menu['box3']['fields'][] = ['name'=>'box3__title2'.$i, 'title'=>'عنوان 2', 'col'=> 2];
            $menu['box3']['fields'][] = ['name'=>'box3__img2'.$i, 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 5 ];
            $menu['box3']['fields'][] = ['name'=>'box3__link2'.$i, 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 5];

            $menu['box3']['fields'][] = ['name'=>'box3__title3'.$i, 'title'=>'عنوان 3', 'col'=> 2];
            $menu['box3']['fields'][] = ['name'=>'box3__img3'.$i, 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 5 ];
            $menu['box3']['fields'][] = ['name'=>'box3__link3'.$i, 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 5];

            $menu['box3']['fields'][] = ['name'=>'box3__title4'.$i, 'title'=>'عنوان 4', 'col'=> 2];
            $menu['box3']['fields'][] = ['name'=>'box3__img4'.$i, 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 5 ];
            $menu['box3']['fields'][] = ['name'=>'box3__link4'.$i, 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 5];

            $menu['box3']['fields'][] = [];
        endif;
    endfor;
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'box4'=>['name'=>'box4' , 'title'=>'باکس چهارم (آمار ها)', 'fields'=> [
            ['name'=>'box4_enable', 'title'=>'وضعیت نمایش (کل باکس)','col'=> 6,'type'=>'select','data'=> $enab],
            ['name'=>'box4_color', 'title'=>'رنگ باکس','col'=> 3,'pholder'=> '#CCC','class'=>'ltr'],
            [],
            ['name'=>'box4_titler', 'title'=>'عنوان باکس راست','col'=> 6],
            ['name'=>'box4_morer', 'title'=>'لینک همه موارد','col'=> 6, 'pholder'=> 'http://', 'class'=>'ltr',],
            [],
            ['name'=>'box4_titlel', 'title'=>'عنوان باکس چپ','col'=> 6],
            ['name'=>'box4_morel', 'title'=>'لینک همه موارد','col'=> 6, 'pholder'=> 'http://', 'class'=>'ltr',],
            []
        ],
    ]];

    $menu['box4']['fields'][] = ['break'=>'ستون راست'];
    for($i=1;$i<9;$i++): 
        $menu['box4']['fields'][] = ['name'=>'box4__title'.$i, 'title'=>'باکس راست - عنوان (عدد) '.$i, 'col'=> 4];
        $menu['box4']['fields'][] = ['name'=>'box4__icon'.$i, 'title'=>'آیکن', 'col'=> 4];
        $menu['box4']['fields'][] = ['name'=>'box4__link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr', 'col'=> 4];
        $menu['box4']['fields'][] = [];
    endfor;

    $menu['box4']['fields'][] = ['break'=>'ستون چپ'];

    for($i=1;$i<9;$i++): 
        $menu['box4']['fields'][] = ['name'=>'box42__title'.$i, 'title'=>'باکس چپ - عنوان '.$i, 'col'=> 4];
        $menu['box4']['fields'][] = ['name'=>'box42__icon'.$i, 'title'=>'تصویر آیکن', 'col'=> 4,'pholder'=> 'http://','select_img'=>true, 'class'=>'ltr',];
        $menu['box4']['fields'][] = ['name'=>'box42__link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr','col'=> 4];
        $menu['box4']['fields'][] = [];
    endfor;

    ////////////////////////////////////////////////////////////////////
    $menu += [
        'box5'=>['name'=>'box5' , 'title'=>'باکس پنجم (منابع منتخب)', 'fields'=> [
            ['name'=>'box5_title', 'title'=>'عنوان باکس', 'col'=> 6],
            ['name'=>'box5_enable', 'title'=>'وضعیت نمایش','col'=> 3,'type'=>'select','data'=> $enab],
            ['name'=>'box5_color', 'title'=>'رنگ باکس','col'=> 3,'pholder'=> '#CCC','class'=>'ltr'],
            ['name'=>'box5_moreall', 'title'=>'لینک همه موارد', 'col'=> 12, 'pholder'=>'http://', ],
            [],
        ],
    ]];
    for($i=1;$i<13;$i++):
        if($i<7?$i % 2 != 0:$i % 2 == 0):
            $menu['box5']['fields'][] = ['name'=>'box5__title'.$i, 'title'=>'عنوان '.$i, 'col'=> 12];
            $menu['box5']['fields'][] = ['name'=>'box5__color'.$i, 'title'=>'آدرس تصویر','pholder'=>'http://', 'col'=> 6,'class'=>'ltr','dir'=>'ltr', 'select_img'=>true,];
            $menu['box5']['fields'][] = ['name'=>'box5__link'.$i, 'title'=>'آدرس لینک','pholder'=>'http://', 'class'=>'ltr', 'col'=> 6];
            $menu['box5']['fields'][] = [];
        else:
            $menu['box5']['fields'][] = ['name'=>'box5__title'.$i, 'title'=>'عنوان '.$i, 'col'=> 12];
            //$menu['box5']['fields'][] = ['name'=>'box5__link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6];
            //$menu['box5']['fields'][] = ['name'=>'box5__text'.$i, 'title'=>'متن توضیحات ', 'col'=> 12,'type'=>'textarea'];

            $menu['box5']['fields'][] = ['name'=>'box5__title01'.$i, 'title'=>'عنوان 1', 'col'=> 2];
            $menu['box5']['fields'][] = ['name'=>'box5__img01'.$i, 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 5 ];
            $menu['box5']['fields'][] = ['name'=>'box5__link01'.$i, 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 5];

            $menu['box5']['fields'][] = ['name'=>'box5__title2'.$i, 'title'=>'عنوان 2', 'col'=> 2];
            $menu['box5']['fields'][] = ['name'=>'box5__img2'.$i, 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 5 ];
            $menu['box5']['fields'][] = ['name'=>'box5__link2'.$i, 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 5];

            $menu['box5']['fields'][] = ['name'=>'box5__title3'.$i, 'title'=>'عنوان 3', 'col'=> 2];
            $menu['box5']['fields'][] = ['name'=>'box5__img3'.$i, 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 5 ];
            $menu['box5']['fields'][] = ['name'=>'box5__link3'.$i, 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 5];

            $menu['box5']['fields'][] = ['name'=>'box5__title4'.$i, 'title'=>'عنوان 4', 'col'=> 2];
            $menu['box5']['fields'][] = ['name'=>'box5__img4'.$i, 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 5 ];
            $menu['box5']['fields'][] = ['name'=>'box5__link4'.$i, 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 5];

            $menu['box5']['fields'][] = [];
        endif;
    endfor;
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'box6'=>['name'=>'box6', 'title'=>'باکس ششم (خبر ها)', 'fields'=> [
            ['name'=>'box6_color', 'title'=>'رنگ باکس','col'=> 3,'pholder'=> '#CCC','class'=>'ltr'],
            ['name'=>'box6_enable', 'title'=>'وضعیت نمایش (کل باکس)','col'=> 6,'type'=>'select','data'=> $enab],
            [],
            ['name'=>'box6_titler', 'title'=>'عنوان باکس راست','col'=> 6],
            ['name'=>'box6_morer', 'title'=>'لینک همه موارد','col'=> 6, 'pholder'=> 'http://', 'class'=>'ltr',],
            [],
            ['name'=>'box6_titlel', 'title'=>'عنوان باکس چپ','col'=> 6],
            ['name'=>'box6_morel', 'title'=>'لینک همه موارد','col'=> 6, 'pholder'=> 'http://', 'class'=>'ltr',],
            []
        ],
    ]];

    $menu['box6']['fields'][] = ['break'=>'باکس راست'];

    for($i=1;$i<5;$i++): 
        $menu['box6']['fields'][] = ['name'=>'box6__title'.$i, 'title'=>'عنوان '.$i, 'col'=> 6];
        $menu['box6']['fields'][] = ['name'=>'box6__text'.$i, 'title'=>'متن کوتاه','type'=>'textarea', 'col'=> 6];
        $menu['box6']['fields'][] = ['name'=>'box6__img'.$i, 'title'=>'تصویر ', 'pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6];
        $menu['box6']['fields'][] = ['name'=>'box6__link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6];
        $menu['box6']['fields'][] = [];
    endfor;

    $menu['box6']['fields'][] = ['break'=>'باکس چپ'];
    
    for($i=1;$i<5;$i++): 
        $menu['box6']['fields'][] = ['name'=>'box62__title'.$i, 'title'=>'عنوان '.$i, 'col'=> 6];
        $menu['box6']['fields'][] = ['name'=>'box62__text'.$i, 'title'=>'متن کوتاه','type'=>'textarea', 'col'=> 6];
        $menu['box6']['fields'][] = ['name'=>'box62__img'.$i, 'title'=>'تاریخ  ',  'col'=> 6];
        $menu['box6']['fields'][] = ['name'=>'box62__link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6];
        $menu['box6']['fields'][] = [];
    endfor;
    ////////////////////////////////////////////////////////////////////

    $menu += [
        'box7'=>['name'=>'box7' , 'title'=>'باکس هفت (گالری)', 'fields'=> [
            ['name'=>'box7_title', 'title'=>'عنوان باکس', 'col'=> 6],
            ['name'=>'box7_enable', 'title'=>'وضعیت نمایش','col'=> 3,'type'=>'select','data'=> $enab],
            ['name'=>'box7_color', 'title'=>'رنگ باکس','col'=> 3,'pholder'=> '#CCC','class'=>'ltr', ],
            [],
        ],
    ]];
    for($i=1;$i<10;$i++):
        $menu['box7']['fields'][] = ['name'=>'box7__tit'.$i, 'title'=>'عنوان'.$i, 'col'=> 3 ];
        $menu['box7']['fields'][] = ['name'=>'box7__img'.$i, 'title'=>'آدرس تصویر'.$i, 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 5 ];
        $menu['box7']['fields'][] = ['name'=>'box7__link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr', 'col'=> 4];
        $menu['box7']['fields'][] = [];
    endfor;
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'sidebar'=>['name'=>'sidebar', 'title'=>'سایدبار', 'fields'=> [
            ['name'=>'sidebar1_title', 'title'=>'عنوان باکس اول (مطالب منتخب)','col'=> 12],
        ],
    ]];
    for($i=1;$i<6;$i++): 
        $menu['sidebar']['fields'][] = ['name'=>'sidebar1_title'.$i, 'title'=>'عنوان '.$i, 'col'=> 4,'class'=>'form-control-sm'];
        $menu['sidebar']['fields'][] = ['name'=>'sidebar1_img'.$i, 'title'=>'تصویر ', 'pholder'=> 'http://', 'class'=>'ltr form-control-sm', 'col'=> 4, 'select_img'=> true];
        $menu['sidebar']['fields'][] = ['name'=>'sidebar1_link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr form-control-sm', 'col'=> 4];
    endfor;

    $menu['sidebar']['fields'][] = [];
    $menu['sidebar']['fields'][] = ['name'=>'sidebar2_title', 'title'=>'عنوان باکس دوم (حوزه های تخصصی)','col'=> 12];
    for($i=1;$i<7;$i++): 
        $menu['sidebar']['fields'][] = ['name'=>'sidebar2_title'.$i, 'title'=>'عنوان '.$i, 'col'=> 4,'class'=>'form-control-sm'];
        $menu['sidebar']['fields'][] = ['name'=>'sidebar2_img'.$i, 'title'=>'تصویر ', 'pholder'=> 'http://', 'class'=>'ltr form-control-sm', 'col'=> 4, 'select_img'=> true];
        $menu['sidebar']['fields'][] = ['name'=>'sidebar2_link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr form-control-sm', 'col'=> 4];
    endfor;
    
    $menu['sidebar']['fields'][] = [];
    $menu['sidebar']['fields'][] = ['name'=>'sidebar3_title', 'title'=>'عنوان باکس سوم (آخرین رویدادها)','col'=> 12];
    for($i=1;$i<6;$i++): 
        $menu['sidebar']['fields'][] = ['name'=>'sidebar3_title'.$i, 'title'=>'عنوان '.$i, 'col'=> 3,'class'=>'form-control-sm'];
        $menu['sidebar']['fields'][] = ['name'=>'sidebar3_text'.$i, 'title'=>'متن '.$i, 'col'=> 5,'class'=>'form-control-sm'];
        $menu['sidebar']['fields'][] = ['name'=>'sidebar3_link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr form-control-sm', 'col'=> 4];
    endfor;

    $menu['sidebar']['fields'][] = [];
    $menu['sidebar']['fields'][] = ['name'=>'sidebar4_title', 'title'=>'عنوان باکس چهارم  (موضوعات منتخب)','col'=> 12];
    for($i=1;$i<5;$i++): 
        $menu['sidebar']['fields'][] = ['name'=>'sidebar4_title'.$i, 'title'=>'عنوان '.$i, 'col'=> 6,'class'=>'form-control-sm'];
        $menu['sidebar']['fields'][] = ['name'=>'sidebar4_link'.$i, 'title'=>'لینک مقصد', 'pholder'=> 'http://', 'class'=>'ltr form-control-sm', 'col'=> 6];
    endfor;
    ////////////////////////////////////////////////////////////////////

    $menu += [
        'box8'=>['name'=>'box8' , 'title'=>'باکس هشت (پوستر)', 'fields'=> [
            ['name'=>'box8_col', 'title'=>'col-sm-?', 'col'=> 2],
            [],
            ['name'=>'box8_title1', 'title'=>'عنوان باکس', 'col'=> 2],
            ['name'=>'box8_img1', 'title'=>'آدرس تصویر','col'=> 5,'pholder'=> 'http://', 'class'=>'ltr','select_img'=> true ],
            ['name'=>'box8_link1', 'title'=>'آدرس لینک','col'=> 5,'pholder'=> 'http://', 'class'=>'ltr', ],
            [],
            ['name'=>'box8_title2', 'title'=>'عنوان باکس', 'col'=> 2],
            ['name'=>'box8_img2', 'title'=>'آدرس تصویر','col'=> 5,'pholder'=> 'http://', 'class'=>'ltr','select_img'=> true ],
            ['name'=>'box8_link2', 'title'=>'آدرس لینک','col'=> 5,'pholder'=> 'http://', 'class'=>'ltr', ],
            [],
            ['name'=>'box8_title3', 'title'=>'عنوان باکس', 'col'=> 2],
            ['name'=>'box8_img3', 'title'=>'آدرس تصویر','col'=> 5,'pholder'=> 'http://', 'class'=>'ltr','select_img'=> true ],
            ['name'=>'box8_link3', 'title'=>'آدرس لینک','col'=> 5,'pholder'=> 'http://', 'class'=>'ltr', ],
            [],
            ['name'=>'box8_title4', 'title'=>'عنوان باکس', 'col'=> 2],
            ['name'=>'box8_img4', 'title'=>'آدرس تصویر','col'=> 5,'pholder'=> 'http://', 'class'=>'ltr','select_img'=> true ],
            ['name'=>'box8_link4', 'title'=>'آدرس لینک','col'=> 5,'pholder'=> 'http://', 'class'=>'ltr', ],
        ],
    ]];
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'footer'=>['name'=>'footer' , 'title'=>'فوتر', 'fields'=> [
                ['name'=>'footer_logo', 'title'=>'لوگو فوتر', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                [],
                ['type'=>'textarea', 'name'=>'footer_text', 'title'=>'متن فوتر', 'col'=> 12],
                [],
                /* ['type'=>'textarea', 'name'=>'footer_address', 'title'=>'متن آدرس', 'col'=> 6],
                [], */
                ['name'=>'footer_mtitle1', 'title'=>'عنوان باکس راست', 'col'=> 12],
                ['name'=>'footer_soc_instat', 'title'=>'عنوان اینستاگرام','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],
                ['name'=>'footer_soc_insta', 'title'=>'لینک اینستاگرام','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],

                ['name'=>'footer_soc_twittt', 'title'=>'عنوان توییتر','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],
                ['name'=>'footer_soc_twitt', 'title'=>'لینک توییتر','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],

                ['name'=>'footer_soc_facebt', 'title'=>'عنوان فیسبوک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],
                ['name'=>'footer_soc_faceb', 'title'=>'لینک فیسبوک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],
                
                ['name'=>'footer_soc_telegt', 'title'=>'عنوان تلگرام','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],
                ['name'=>'footer_soc_teleg', 'title'=>'لینک تلگرام','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],

                ['name'=>'footer_soc_linkedt', 'title'=>'عنوان لینکدین','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],
                ['name'=>'footer_soc_linked', 'title'=>'لینک لینکدین','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],

                ['name'=>'footer_soc_ytt', 'title'=>'عنوان یوتیوب','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],
                ['name'=>'footer_soc_yt', 'title'=>'لینک یوتیوب','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6], 

                ['name'=>'footer_soc_aprtt', 'title'=>'عنوان اپارات','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],
                ['name'=>'footer_soc_aprt', 'title'=>'لینک اپارات','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 6],

                [],
                ['name'=>'footer_mtitle2', 'title'=>'عنوان باکس وسط', 'col'=> 6],
                ['name'=>'footer_menu','type'=>'select', 'title'=>'انتخاب منو', 'data'=> $AllMenu ,'col'=> 6],
                [],
                ['name'=>'footer_mtitle3', 'title'=>'عنوان باکس چپ', 'col'=> 4],
                ['name'=>'footer_ftext','type'=>'textarea','class'=>'ltr', 'title'=>'عنوان باکس چپ', 'col'=> 8],
                [],
                ['name'=>'footer_copy', 'title'=>'متن کپی رایت', 'col'=> 12 ],
            ],
        ],
    ];
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'color'=>['name'=>'color' , 'title'=>'رنگ بندی', 'fields'=> [
                ['name'=>'color_all', 'title'=>'رنگ کلی سایت', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                ['name'=>'color_bgall', 'title'=>'رنگ پس زمینه سایت', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                [],
                ['name'=>'color_footer', 'title'=>'رنگ پس زمینه فوتر', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                ['name'=>'color_lifooter', 'title'=>'رنگ لینک فوتر', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                ['name'=>'color_ftitle', 'title'=>'رنگ هدر تایتل فوتر', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                [],
                ['name'=>'color_btnmore', 'title'=>'رنگ کلید Home', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                ['name'=>'color_hr', 'title'=>'رنگ تگ < hr > ', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
            ],
        ],
    ];
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'default'=>['name'=>'default' , 'title'=>'اطلاعات پیشفرض', 'fields'=> [
                ['name'=>'default_image', 'title'=>'تصویر پیشفرض', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                ['name'=>'default_semat', 'title'=>'سمت های پیش فرض', 'col'=> 12,'data-role'=>true],
                [],
                ['name'=>'default_lang', 'title'=>'زبان پیشفرض سایت','type'=>'select','data'=>[
                    'fa'=>'فارسی',
                    'en'=>'انگلیسی'
                ], 'col'=> 5],

                ['name'=>'default_langurl', 'title'=>'آدرس سایت زبان دیگر','pholder'=> 'http://', 'class'=>'ltr','col'=> 5],

                [],
            ],
        ],
    ];
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'trans'=>['name'=>'trans' , 'title'=>'ترجمه ها', 'fields'=> [
                
                ['name'=>'t_maraketm', 'title'=>'مراکز مرتبط', 'col'=> 3],
                ['name'=>'t_marakezv', 'title'=>'مراکز وابسته', 'col'=> 3],
                ['name'=>'t_houzes', 'title'=>'حوزه سیاستی', 'col'=> 3],
                ['name'=>'t_houzetakh', 'title'=>'حوزه های تخصصی', 'col'=> 3],
                [],
                ['name'=>'t_nasher', 'title'=>'ناشر', 'col'=> 3],
                ['name'=>'t_salnashr', 'title'=>'سال نشر', 'col'=> 3],
                ['name'=>'t_saltasis', 'title'=>'سال تاسیس', 'col'=> 3],
                ['name'=>'t_salejra', 'title'=>'سال اجرا', 'col'=> 3],
                ['name'=>'t_years_end', 'title'=>'سال آغاز و پایان', 'col'=> 3],
                [],
                ['name'=>'t_reshte_uni', 'title'=>'رشته دانشگاهی', 'col'=> 3],
                ['name'=>'t_andishkade', 'title'=>'اندیشکده', 'col'=> 3],
                ['name'=>'t_hamkaran', 'title'=>'همکاران', 'col'=> 3],
                ['name'=>'t_karfarma', 'title'=>'کارفرما', 'col'=> 3],
                [],
                ['name'=>'t_manabe', 'title'=>'منابع', 'col'=> 3],
                ['name'=>'t_manabe_type', 'title'=>'نوع منبع', 'col'=> 3],
                ['name'=>'t_projects', 'title'=>'پروژه ها', 'col'=> 3],
                [],
                ['name'=>'t_events', 'title'=>'رویداد ها', 'col'=> 3],
                ['name'=>'t_tarikh_r', 'title'=>'تاریخ رویداد', 'col'=> 3],
                ['name'=>'t_event_type', 'title'=>'نوع رویداد', 'col'=> 3],
                ['name'=>'t_eventlast', 'title'=>'آخرین رویداد', 'col'=> 3],
                [],
                ['name'=>'t_tozihat', 'title'=>'توضیحات', 'col'=> 3],
                ['name'=>'t_moarefi', 'title'=>'معرفی', 'col'=> 3],
                ['name'=>'t_seeless', 'title'=>'نمایش کمتر', 'col'=> 3],
                ['name'=>'t_seeall', 'title'=>'نمایش همه', 'col'=> 3],
                ['name'=>'t_searchin', 'title'=>'جستجو در عنوان', 'col'=> 3],
                ['name'=>'t_filter_app', 'title'=>'اعمال فیلتر', 'col'=> 3],
                ['name'=>'t_order', 'title'=>'مرتب سازی', 'col'=> 3],
                ['name'=>'t_lastpost', 'title'=>'آخرین مطلب', 'col'=> 3],
                ['name'=>'t_alphabet', 'title'=>'حروف الفبا', 'col'=> 3],
                ['name'=>'t_moreinfo', 'title'=>'اطلاعات بیشتر','col'=> 3],
                ['name'=>'t_all', 'title'=>'همه موارد', 'col'=> 3],
                [],
                ['name'=>'t_gallery', 'title'=>'عنوان گالری', 'col'=> 3],
                
            ],
        ],
    ];
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'backimg'=>['name'=>'backimg' , 'title'=>'تصاویر پس زمینه', 'fields'=> [
                ['break'=>'تصاویر صفحه Index']
            ],
        ],
    ];
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'css'=>['name'=>'css' , 'title'=>'استایل اضافی', 'fields'=> [
            ['type'=>'textarea', 'name'=>'morecss','style'=>'height:300px;',
                'title'=>'More CSS','class'=>'ltr','col'=>12],
            ],
        ],
    ];
    ////////////////////////////////////////////////////////////////////
    $menu += [
        'tiser'=>['name'=>'tiser' , 'title'=>'باکس تیزر', 'fields'=> [
            ['name'=>'tiser_title', 'title'=>'عنوان باکس', 'col'=> 9],
            ['name'=>'tiser_enable', 'title'=>'وضعیت نمایش','col'=> 3,'type'=>'select','data'=> $enab],
            ['name'=>'tiser_video', 'title'=>'آدرس فیلم','col'=> 6,'pholder'=> 'http://','class'=>'ltr'],
            ['name'=>'tiser_videoimg', 'title'=>'تصویر فیلم','col'=> 6,'pholder'=> 'http://','class'=>'ltr','select_img'=> true],
            ['name'=>'tiser_text', 'title'=>'توضیحات','col'=>12,'type'=>'textarea'],
        ],
    ]];
    ////////////////////////////////////////////////////////////////////
    $lists = [
        'scholars'=>'افراد',
        'centers'=>'مراکز',
        'projects'=>'پروژه',
        'sources'=>'منابع',
        'events'=>'رویدادها',
        'topics'=>'حوزه',
        'disciplines'=>'رشته',
    ];
    foreach($lists as $lk => $lv): 
        $menu['backimg']['fields'][] = ['name'=>'bgindex_'.$lk, 'title'=>'تصویر '.$lv, 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 6];
    endforeach;
    $menu['backimg']['fields'][] = [];

    $menu['backimg']['fields'][] = ['break'=>'تصاویر صفحه Single'];
    foreach($lists as $lk => $lv): 
        $menu['backimg']['fields'][] = ['name'=>'bgsingle_'.$lk, 'title'=>'تصویر '.$lv, 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 6];
    endforeach;

    ////////////////////////////////////////////////////////////////////

?>



