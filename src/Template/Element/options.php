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
                    ['name'=>'slider__title', 'title'=>'عنوان', 'col'=> 8] ,
                    ['name'=>'slider__tag', 'title'=>'متن لیبل', 'col'=> 4] ,
                    ['name'=>'slider__desc', 'title'=>'توضیحات', 'col'=> 12,'type'=>'textarea'],
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
                    ['name'=>'bx1__img', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr','style'=>'text-align: left;', 'col'=> 12, 'select_img'=> true] ,
                    ['name'=>'bx1__linkt', 'title'=>'عنوان لینک', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,
                    ['name'=>'bx1__link', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,
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
                    ['name'=>'bx22_lists', 'title'=>'لیست پست ها', 'col'=> 12,'type'=>'select',
                    'class'=>'select2','multiple'=>'multiple','data'=>
                    $this->Query->post("events",['field'=>['id','title'],'limit'=>0, 'find_type'=>'list'])
                    ] ,
                    /* ['name'=>'bx22_titles1', 'title'=>'مطلب 1: '.'عنوان', 'col'=> 12] ,
                    ['name'=>'bx22_date1', 'title'=>'تاریخ (روز و ماه)', 'col'=> 6] ,
                    ['name'=>'bx22_year1', 'title'=>'تاریخ (سال)', 'col'=> 6] ,
                    ['name'=>'bx22_img1', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'bx22_link1', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,
                    
                    ['name'=>'bx22_titles2', 'title'=>'مطلب 2: '.'عنوان', 'col'=> 12] ,
                    ['name'=>'bx22_date2', 'title'=>'تاریخ (روز و ماه)', 'col'=> 6] ,
                    ['name'=>'bx22_year2', 'title'=>'تاریخ (سال)', 'col'=> 6] ,
                    ['name'=>'bx22_img2', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'bx22_link2', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,

                    ['name'=>'bx22_titles3', 'title'=>'مطلب 3: '.'عنوان', 'col'=> 12] ,
                    ['name'=>'bx22_date3', 'title'=>'تاریخ (روز و ماه)', 'col'=> 6] ,
                    ['name'=>'bx22_year3', 'title'=>'تاریخ (سال)', 'col'=> 6] ,
                    ['name'=>'bx22_img3', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'bx22_link3', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,

                    ['name'=>'bx22_titles4', 'title'=>'مطلب 4: '.'عنوان', 'col'=> 12] ,
                    ['name'=>'bx22_date4', 'title'=>'تاریخ (روز و ماه)', 'col'=> 6] ,
                    ['name'=>'bx22_year4', 'title'=>'تاریخ (سال)', 'col'=> 6] ,
                    ['name'=>'bx22_img4', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'bx22_link4', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,

                    ['name'=>'bx22_titles5', 'title'=>'مطلب 5: '.'عنوان', 'col'=> 12] ,
                    ['name'=>'bx22_date5', 'title'=>'تاریخ (روز و ماه)', 'col'=> 6] ,
                    ['name'=>'bx22_year5', 'title'=>'تاریخ (سال)', 'col'=> 6] ,
                    ['name'=>'bx22_img5', 'title'=>'آدرس تصویر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6, 'select_img'=> true] ,
                    ['name'=>'bx22_link5', 'title'=>'لینک مقصد', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 6] ,
 */
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
    'box8'=>['name'=>'box8' , 'title'=>'سایدبار کناری', 
        'submenu'=>[
            [
                'title'=>'-',
                'fields'=>[
                    ['name'=>'sidebar1_title', 'title'=>'عنوان سایدبار 1', 'col'=> 12] ,
                    ['name'=>'sidebar2_title', 'title'=>'عنوان سایدبار 2', 'col'=> 12] ,
                ]
            ],

            [
                'repeat'=>true,
                'title'=>'سایدبار اول',
                'fields'=>[
                    ['name'=>'side1_title', 'title'=>'عنوان مطلب', 'col'=> 12] ,
                    ['name'=>'side1_date', 'title'=>'تاریخ', 'col'=> 6],
                    ['name'=>'side1_loc', 'title'=>'آدرس', 'col'=> 6],
                    ['name'=>'side1_link', 'title'=>' لینک', 'col'=> 12, 'pholder'=>'http://', 'class'=>'ltr'],
                ]
            ],

            [
                'repeat'=>true,
                'title'=>'سایدبار دوم',
                'fields'=>[
                    ['name'=>'side2_title', 'title'=>'عنوان مطلب', 'col'=> 12] ,
                    ['name'=>'side2_date', 'title'=>'تاریخ', 'col'=> 12],
                    ['name'=>'side2_img', 'title'=>'آدرس تصویر', 'col'=> 6, 'pholder'=>'http://', 'class'=>'ltr','select_img'=> true ],
                    ['name'=>'side2_link', 'title'=>' لینک', 'col'=> 6, 'pholder'=>'http://', 'class'=>'ltr'],
                ]
            ],
        ],
    ],
    //------------------------------------
    'extra'=>['name'=>'extra' , 'title'=>'سایر ویژگی ها', 
        'submenu'=>[
            [
                'title'=>'استایل اضافه',
                'fields'=>[
                    ['type'=>'textarea', 'name'=>'morecss','style'=>'height:300px;','title'=>'More CSS','class'=>'ltr','col'=>12],
                ]
            ],
            [
                'title'=>'رنگ بندی',
                'fields'=>[
                    ['name'=>'color_all', 'title'=>'رنگ کلی سایت', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                    ['name'=>'color_bgall', 'title'=>'رنگ پس زمینه سایت', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                    [],
                    ['name'=>'color_footer', 'title'=>'رنگ پس زمینه فوتر', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                    ['name'=>'color_lifooter', 'title'=>'رنگ لینک فوتر', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                    ['name'=>'color_ftitle', 'title'=>'رنگ هدر تایتل فوتر', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                    [],
                    ['name'=>'color_btnmore', 'title'=>'رنگ کلید Home', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                    ['name'=>'color_hr', 'title'=>'رنگ تگ < hr > ', 'pholder'=>'#CCC', 'class'=>'ltr', 'col'=> 4],
                
                ]
            ],
            [
                'title'=>'اطلاعات پیشفرض',
                'fields'=>[
                    ['name'=>'default_image', 'title'=>'تصویر پیشفرض', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'default_semat', 'title'=>'سمت های پیش فرض', 'col'=> 12,'data-role'=>true],
                    [],
                    ['name'=>'default_lang', 'title'=>'زبان پیشفرض سایت','type'=>'select','data'=>[
                        'fa'=>'فارسی',
                        'en'=>'انگلیسی'
                    ], 'col'=> 5],
                    ['name'=>'default_langurl', 'title'=>'آدرس سایت زبان دیگر','pholder'=> 'http://', 'class'=>'ltr','col'=> 5],
                    [],
                ]
            ],
            [
                'title'=>'ترجمه ها',
                'fields'=>[
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
                ]
            ],
            [
                'title'=>'تصاویر پس زمینه',
                'fields'=>[
                    ['break'=>'تصاویر صفحه index'],
                    ['name'=>'bgindex_scholars', 'title'=>'تصویر افراد', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'bgindex_centers', 'title'=>'تصویر مراکز', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'bgindex_projects', 'title'=>'تصویر پروژه', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'bgindex_sources', 'title'=>'تصویر منابع', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'bgindex_events', 'title'=>'تصویر رویدادها', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'bgindex_topics', 'title'=>'تصویر حوزه', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'bgindex_disciplines', 'title'=>'تصویر رشته', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    
                    ['break'=>'تصاویر صفحه Single'],
                    ['name'=>'bgsingle_scholars', 'title'=>'تصویر افراد', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'bgsingle_centers', 'title'=>'تصویر مراکز', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'bgsingle_projects', 'title'=>'تصویر پروژه', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'bgsingle_sources', 'title'=>'تصویر منابع', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'bgsingle_events', 'title'=>'تصویر رویدادها', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'bgsingle_topics', 'title'=>'تصویر حوزه', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
                    ['name'=>'bgsingle_disciplines', 'title'=>'تصویر رشته', 'pholder'=> 'http://', 'class'=>'ltr', 'select_img'=> true, 'col'=> 12],
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
                    
                    ['name'=>'footer_img', 'title'=>'لوگو فوتر', 'col'=> 12, 'pholder'=>'http://', 'class'=>'ltr','select_img'=> true ],
                    ['name'=>'footer_desc', 'title'=>'متن توضیحات فوتر', 'col'=> 12],
                    [],
                    ['name'=>'footer_title1', 'title'=>'عنوان باکس وسط', 'col'=> 6],
                    ['name'=>'footer_menu1','title'=>'انتخاب منو وسط', 'col'=> 6,'type'=>'select', 'data'=> $AllMenu ],
                    [],
                    ['name'=>'footer_address', 'type'=>'textarea','title'=>'باکس آدرس', 'col'=> 12,'dir'=>'ltr','col'=>12],
                ],
            ],
            [
                'title'=>'شبکه اجتماعی',
                'fields'=>[
                    //['name'=>'footer_soc_instat', 'title'=>'عنوان اینستاگرام','class'=>'ltr', 'col'=> 5],
                    ['name'=>'footer_soc_insta', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7],

                    //['name'=>'footer_soc_twittt', 'title'=>'عنوان توییتر','class'=>'ltr', 'col'=> 5],
                    ['name'=>'footer_soc_twitt', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7],

                    //['name'=>'footer_soc_facebt', 'title'=>'عنوان فیسبوک','class'=>'ltr', 'col'=> 5],
                    ['name'=>'footer_soc_faceb', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7],
                    
                    //['name'=>'footer_soc_telegt', 'title'=>'عنوان تلگرام','class'=>'ltr', 'col'=> 5],
                    ['name'=>'footer_soc_teleg', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7],

                    //['name'=>'footer_soc_linkedt', 'title'=>'عنوان لینکدین','class'=>'ltr', 'col'=> 5],
                    ['name'=>'footer_soc_linked', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7],

                    //['name'=>'footer_soc_ytt', 'title'=>'عنوان یوتیوب','class'=>'ltr', 'col'=> 5],
                    ['name'=>'footer_soc_yt', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7], 

                    //['name'=>'footer_soc_aprtt', 'title'=>'عنوان اپارات', 'class'=>'ltr', 'col'=> 5],
                    //['name'=>'footer_soc_aprt', 'title'=>'لینک','pholder'=> 'http://', 'class'=>'ltr', 'col'=> 7],
                ],
            ],
            [
                'title'=>'کپی رایت',
                'fields'=>[
                    ['name'=>'footer_copyt', 'title'=>'متن کپی رایت', 'col'=> 12 ] ,
                    //['name'=>'footer_img', 'title'=>'تصویر فوتر', 'pholder'=>'http://', 'class'=>'ltr', 'col'=> 12, 'select_img'=> true] ,
                    //['type'=>'select', 'name'=>'footer_cpmenu','title'=>'منو کپی رایت', 'data'=> $AllMenu ,'col'=> 6],
                    
                ],
            ],
        ],
    ],

];
    
?>