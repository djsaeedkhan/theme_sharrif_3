<?php
global $menu;
global $version;
global $maxrow;
$maxrow = 12;
$version = 2;

$menu = [
    'header'=>['name'=>'header' , 'title'=>'هدر', 
        'submenu'=>[
            [
                'title'=>'',
                'fields'=>[
                    
                    ['name'=>'header_logo','col'=> 6, 'title'=>'تصویر لوگو', 'class'=>'ltr', 'pholder'=> 'http://', 'select_img'=> true] ,
                    ['name'=>'header_logod','col'=> 6, 'title'=>'تصویر لوگو-دارک', 'class'=>'ltr', 'pholder'=> 'http://', 'select_img'=> true] ,
                    [],
                    //['name'=>'sitebg','col'=> 12, 'title'=>'تصویر پس زمینه سایت', 'class'=>'ltr', 'pholder'=> 'http://', 'select_img'=> true] ,
                    //[],
                    ['type'=>'select', 'name'=>'topmenu','title'=>'منوی هدر', 'data'=> $AllMenu ,'col'=> 6],
                    [],
                    
                ],
            ],
        ],
    ],
    //------------------------------------
    //------------------------------------
    'slider'=>['name'=>'slider' , 'title'=>'اسلایدر', 
        'submenu'=>[
            [
                'title'=>'-',
                'fields'=>[
                    ['name'=>'slider__fiximg', 'title'=>'تصویر ثابت اسلایدر', 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=>true, 'col'=> 12],
                ]
            ],
            [
                'repeat'=>true,
                'title'=>'لیست اسلاید ها',
                'fields'=>[
                    ['name'=>'slider__title', 'title'=>'عنوان', 'col'=> 6] ,
                    ['name'=>'slider__desc', 'title'=>'توضیحات', 'col'=> 6],
                    ['name'=>'slider__img', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'slider__link', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,
                ]
            ],
        ],
    ],
    //------------------------------------
    'box1'=>['name'=>'box1' , 'title'=>'نخست  - باکس 5 تایی ', 
        'submenu'=>[
            [
                //'repeat'=>true,
                'title'=>'-',
                'fields'=>[
                    ['name'=>'b1_title', 'title'=>'عنوان باکس ', 'col'=> 12] ,
                    ['name'=>'b1_desc', 'title'=>'توضیحات ', 'col'=> 12,'type'=>'textarea'] ,
                ]
            ],
            [
                'repeat'=>true,
                'title'=>'لیست آیتم ها',
                'fields'=>[
                    ['name'=>'bx1__title', 'title'=>'عنوان', 'col'=> 5] ,
                    ['name'=>'bx1__desc', 'title'=>'توضیحات', 'col'=> 7,'type'=>'textarea'],
                    ['name'=>'bx1__img', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 12, 'select_img'=> true] ,
                    ['name'=>'bx1__linkt', 'title'=>'عنوان لینک', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 4] ,
                    ['name'=>'bx1__link', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 86] ,
                ]
            ],
        ],
    ],
    //------------------------------------
    'box2'=>['name'=>'box2' , 'title'=>'نخست - اخبار چندرسانه', 
        'submenu'=>[
            [
                'title'=>'-',
                'fields'=>[
                    ['name'=>'bx2_title_r', 'title'=>'عنوان باکس راست', 'col'=> 12] ,
                    ['name'=>'bx2_linkt_r', 'title'=>'عنوان لینک', 'col'=> 6] ,
                    ['name'=>'bx2_link_r', 'title'=>'آدرس مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6,] ,

                    ['break'=>'<hr>'],
                    ['name'=>'bx2_title_l', 'title'=>'عنوان باکس چپ', 'col'=> 12] ,
                    ['name'=>'bx2_linkt_l', 'title'=>'عنوان لینک', 'col'=> 6] ,
                    ['name'=>'bx2_link_l', 'title'=>'آدرس مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6,] ,

                ]
            ],
            [
                'repeat'=>true,
                'title'=>'راست - چند رسانه ای',
                'fields'=>[
                    ['name'=>'bx21_title', 'title'=>'عنوان', 'col'=> 12] ,
                    ['name'=>'bx21_desc', 'title'=>'زیرعنوان', 'col'=> 12] ,
                    ['name'=>'bx21_date', 'title'=>'تاریخ', 'col'=> 6,'dir'=>'ltr'],
                    ['name'=>'bx21_loc', 'title'=>'مکان', 'col'=> 6,'dir'=>'ltr'],
                    ['name'=>'bx21_img', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'bx21_link', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6,] ,
                    
                ]
            ],
            [
                'repeat'=>true,
                'title'=>'چپ - تب ها',
                'fields'=>[
                    ['name'=>'bx22_title', 'title'=>'عنوان تب', 'col'=> 12] ,
                    ['break'=>'مطلب 1'],
                    ['name'=>'bx22_title1', 'title'=>'عنوان', 'col'=> 12] ,
                    ['name'=>'bx22_date1', 'title'=>'تاریخ (روز و ماه)', 'col'=> 6] ,
                    ['name'=>'bx22_year1', 'title'=>'تاریخ (سال)', 'col'=> 6] ,
                    ['name'=>'bx22_img1', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'bx22_link1', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,
                    
                    ['break'=>'مطلب 2'],
                    ['name'=>'bx22_title2', 'title'=>'عنوان', 'col'=> 12] ,
                    ['name'=>'bx22_date2', 'title'=>'تاریخ (روز و ماه)', 'col'=> 6] ,
                    ['name'=>'bx22_year2', 'title'=>'تاریخ (سال)', 'col'=> 6] ,
                    ['name'=>'bx22_img2', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'bx22_link2', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,

                    ['break'=>'مطلب 3'],
                    ['name'=>'bx22_title3', 'title'=>'عنوان', 'col'=> 12] ,
                    ['name'=>'bx22_date3', 'title'=>'تاریخ (روز و ماه)', 'col'=> 6] ,
                    ['name'=>'bx22_year3', 'title'=>'تاریخ (سال)', 'col'=> 6] ,
                    ['name'=>'bx22_img3', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'bx22_link3', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,

                    ['break'=>'مطلب 4'],
                    ['name'=>'bx22_title4', 'title'=>'عنوان', 'col'=> 12] ,
                    ['name'=>'bx22_date4', 'title'=>'تاریخ (روز و ماه)', 'col'=> 6] ,
                    ['name'=>'bx22_year4', 'title'=>'تاریخ (سال)', 'col'=> 6] ,
                    ['name'=>'bx22_img4', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'bx22_link4', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,

                    ['break'=>'مطلب 5'],
                    ['name'=>'bx22_title5', 'title'=>'عنوان', 'col'=> 12] ,
                    ['name'=>'bx22_date5', 'title'=>'تاریخ (روز و ماه)', 'col'=> 6] ,
                    ['name'=>'bx22_year5', 'title'=>'تاریخ (سال)', 'col'=> 6] ,
                    ['name'=>'bx22_img5', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'bx22_link5', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,

                ]
            ],
        ],
    ],
    //------------------------------------
    'box3'=>['name'=>'box3' , 'title'=>'نخست - آمار', 
        'submenu'=>[
            [
                'title'=>'-',
                'fields'=>[
                    ['name'=>'bx3_title_r', 'title'=>'عنوان باکس راست', 'col'=> 12] ,
                    ['name'=>'bx3_linkt_r', 'title'=>'عنوان لینک', 'col'=> 6] ,
                    ['name'=>'bx3_link_r', 'title'=>'آدرس مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6,] ,

                    ['break'=>'<hr>'],
                    ['name'=>'bx3_title_l', 'title'=>'عنوان باکس چپ', 'col'=> 12] ,
                    ['name'=>'bx3_linkt_l', 'title'=>'عنوان لینک', 'col'=> 6] ,
                    ['name'=>'bx3_link_l', 'title'=>'آدرس مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6,] ,

                ]
            ],
            [
                'repeat'=>true,
                'title'=>'باکس راست - گروه ها',
                'fields'=>[
                    ['name'=>'bx31_title', 'title'=>'عنوان', 'col'=> 6] ,
                    ['name'=>'bx31_link', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,
                    
                ]
            ],
            [
                'repeat'=>true,
                'title'=>'باکس چپ - آمار',
                'fields'=>[
                    ['name'=>'bx32_title', 'title'=>'عنوان', 'col'=> 6] ,
                    ['name'=>'bx32_icon', 'title'=>'آیکن',  'class'=>'ltr', 'col'=> 3] ,
                    ['name'=>'bx32_num', 'title'=>'عدد','class'=>'ltr', 'col'=> 3] ,
                    
                ]
            ],
        ],
    ],
    //------------------------------------
    'box4'=>['name'=>'box4' , 'title'=>'نخست - اسلایدر افقی', 
        'submenu'=>[
            [
                'title'=>'-',
                'fields'=>[
                    ['name'=>'bx4_title', 'title'=>'عنوان باکس', 'col'=> 12] ,
                    ['name'=>'bx4_desc', 'title'=>'توضیحات', 'col'=> 12,'type'=>'textarea'] ,
                    ['name'=>'bx4_img', 'title'=>'آدرس تصویر پس زمینه', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 12, 'select_img'=> true] ,
                ]
            ],
            [
                'repeat'=>true,
                'title'=>'لیست اسلایدها',
                'fields'=>[
                    ['name'=>'bs4_title', 'title'=>'عنوان', 'col'=> 8] ,
                    ['name'=>'bs4_tag', 'title'=>'عنوان داخلی', 'col'=> 4],
                    ['name'=>'bs4_img', 'title'=>'آدرس تصویر', 'col'=> 6, 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=> true] ,
                    ['name'=>'bs4_link', 'title'=>'آدرس لینک', 'col'=> 6,'pholder'=>'http://', 'class'=>'ltr', ],
                ]
            ],
        ],
    ],
    //------------------------------------
    'box5'=>['name'=>'box5' , 'title'=>'نخست - منتخب ', 
        'submenu'=>[
            [
                'title'=>'-',
                'fields'=>[
                    ['name'=>'bx5_title', 'title'=>'عنوان باکس', 'col'=> 12] ,
                    ['name'=>'bx5_desc', 'title'=>'توضیحات', 'col'=> 12,'type'=>'textarea'] ,
                    ['name'=>'bx5_linkt', 'title'=>'عنوان لینک', 'col'=> 6] ,
                    ['name'=>'bx5_link', 'title'=>'آدرس مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,
                ]
            ],
            [
                'repeat'=>true,
                'title'=>'لیست آیتم ها',
                'fields'=>[
                    ['name'=>'bs5_title', 'title'=>'عنوان', 'col'=> 4] ,
                    ['name'=>'bs5_desc', 'title'=>'توضیحات', 'col'=> 8],
                    ['name'=>'bs5_img', 'title'=>'آدرس تصویر', 'col'=> 6, 'pholder'=>'http://', 'class'=>'ltr', 'select_img'=> true] ,
                    ['name'=>'bs5_link', 'title'=>'آدرس لینک', 'col'=> 6,'pholder'=>'http://', 'class'=>'ltr', ],
                ]
            ],
        ],
    ],
    //------------------------------------
    /* 'box6'=>['name'=>'box6' , 'title'=>'نخست - اخبار', 
        'submenu'=>[
            [
                'title'=>'متن ثابت',
                'fields'=>[
                    ['name'=>'b6_title', 'title'=>'عنوان باکس', 'col'=> 12] ,
                    ['name'=>'b6_linkt', 'title'=>'عنوان لینک', 'col'=> 6] ,
                    ['name'=>'b6_link', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,
                ]
            ],
            [
                'repeat'=>true,
                'title'=>'لیست اسلایدها',
                'fields'=>[
                    ['name'=>'bx6_title', 'title'=>'عنوان', 'col'=> 5] ,
                    ['name'=>'bx6_desc', 'title'=>'توضیحات', 'col'=> 7,'dir'=>'ltr','type'=>'textarea'],
                    ['name'=>'bx6_img', 'title'=>'آدرس تصویر بزرگ', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'bx6_link', 'title'=>'آدرس لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,
                ]
            ],
        ],
    ], */
    //------------------------------------
    'box8'=>['name'=>'box8' , 'title'=>'سایدبار کناری', 
        'submenu'=>[
            [
                'repeat'=>true,
                'title'=>'',
                'fields'=>[
                    ['name'=>'bx8_title', 'title'=>'عنوان تب', 'col'=> 12] ,
                    //['name'=>'bx8_desc', 'title'=>'توضیحات', 'col'=> 6],
                    ['name'=>'bx8_img', 'title'=>'آدرس تصویر راست', 'col'=> 6, 'pholder'=>'http://', 'class'=>'ltr','select_img'=> true ],
                    ['name'=>'bx8_link', 'title'=>'آدرس لینک', 'col'=> 6, 'pholder'=>'http://', 'class'=>'ltr'],
                ]
            ],
        ],
    ],
    //------------------------------------
    'footer'=>['name'=>'footer' , 'title'=>'فوتر', 
        'submenu'=>[
            [
                'title'=>'-',
                'fields'=>[
                    ['name'=>'footer_title1', 'title'=>'عنوان تب راست', 'col'=> 12],
                    ['name'=>'footer_text1','title'=>'متن تب راست', 'col'=> 12,'type'=>'textarea'],
                    [],
                    ['name'=>'footer_title2', 'title'=>'عنوان تب چپ', 'col'=> 12],
                    ['name'=>'footer_text2','title'=>'متن تب چپ', 'col'=> 12,'type'=>'textarea'],
                ],
            ],
            [
                'title'=>'شبکه اجتماعی',
                'fields'=>[
                    ['name'=>'footer_soc_instat', 'title'=>'عنوان اینستاگرام','class'=>'ltr', 'col'=> 5],
                    ['name'=>'footer_soc_insta', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7],

                    ['name'=>'footer_soc_twittt', 'title'=>'عنوان توییتر','class'=>'ltr', 'col'=> 5],
                    ['name'=>'footer_soc_twitt', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7],

                    ['name'=>'footer_soc_facebt', 'title'=>'عنوان فیسبوک','class'=>'ltr', 'col'=> 5],
                    ['name'=>'footer_soc_faceb', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7],
                    
                    ['name'=>'footer_soc_telegt', 'title'=>'عنوان تلگرام','class'=>'ltr', 'col'=> 5],
                    ['name'=>'footer_soc_teleg', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7],

                    ['name'=>'footer_soc_linkedt', 'title'=>'عنوان لینکدین','class'=>'ltr', 'col'=> 5],
                    ['name'=>'footer_soc_linked', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7],

                    ['name'=>'footer_soc_ytt', 'title'=>'عنوان یوتیوب','class'=>'ltr', 'col'=> 5],
                    ['name'=>'footer_soc_yt', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7], 

                    //['name'=>'footer_soc_aprtt', 'title'=>'عنوان اپارات', 'class'=>'ltr', 'col'=> 5],
                    //['name'=>'footer_soc_aprt', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7],
                ],
            ],
            [
                'title'=>'کپی رایت',
                'fields'=>[
                    ['name'=>'footer_copyt', 'title'=>'متن کپی رایت', 'col'=> 12 ] ,
                    ['name'=>'footer_img', 'title'=>'تصویر فوتر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 12, 'select_img'=> true] ,
                    //['type'=>'select', 'name'=>'footer_cpmenu','title'=>'منو کپی رایت', 'data'=> $AllMenu ,'col'=> 6],
                    
                ],
            ],
        ],
    ],

];
    
?>