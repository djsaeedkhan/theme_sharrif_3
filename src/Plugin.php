<?php
namespace Template;
use Cake\Core\BasePlugin;
use Cake\Core\PluginApplicationInterface;
use Admin\View\Helper\FuncHelper;
use Cake\Routing\Router;

class Plugin extends BasePlugin
{
    public $name= 'Template';
    function post_type(){
        return [
            /* 'blog'=>array(
                'name'=>array(
                    'title'=>'وبلاگ',
                    'index_header'=>'وبلاگ','index_add'=>'ثبت جدید',
                    'single_add'=>'ثبت اطلاعات جدید','single_edit'=>'ویرایش اطلاعات',
                    'cat_header'=>'دسته بندی اطلاعات','cat_add'=>'ثبت دسته اطلاعات',
                    'tag_header'=>'برچسب',
                ),
                'title'=>true,'editor'=>true,'excerpt'=>true,'author'=>true,'thumbnail'=>true,
                'comments'=>true,'tag'=>true,'category'=>true,'show_in_menu'=>true,
                'position'=>101,
            ), */
            /* 'video'=>array(
                'name'=>array(
                    'title'=>'ویدئو',
                    'index_header'=>'ویدئو','index_add'=>'ثبت جدید',
                    'single_add'=>'ثبت اطلاعات جدید','single_edit'=>'ویرایش اطلاعات',
                    'cat_header'=>'دسته بندی اطلاعات','cat_add'=>'ثبت دسته اطلاعات',
                    'tag_header'=>'برچسب',
                ),
                'title'=>true,'editor'=>true,'excerpt'=>true,'author'=>true,'thumbnail'=>true,
                'comments'=>true,'tag'=>true,'category'=>true,'show_in_menu'=>true,
                'position'=>102,
            ), */
            'projects'=>array(
                'name'=>array(
                    'title'=>'پروژه ها',
                    'index_header'=>'پروژه ها','index_add'=>'ثبت جدید',
                    'single_add'=>'ثبت اطلاعات جدید','single_edit'=>'ویرایش اطلاعات',
                    'cat_header'=>'دسته بندی اطلاعات','cat_add'=>'ثبت دسته اطلاعات',
                    'tag_header'=>'برچسب',
                ),
                'title'=>true,'editor'=>true,'excerpt'=> true,'author'=>true,'thumbnail'=>true,
                'comments'=>true,'tag'=>true,'category'=>true,'show_in_menu'=>true,
                'position'=>103,
            ),
            'scholars'=>array(
                'name'=>array(
                    'title'=>'افراد',
                    'index_header'=>'افراد','index_add'=>'ثبت جدید',
                    'single_add'=>'ثبت اطلاعات جدید','single_edit'=>'ویرایش اطلاعات',
                    'cat_header'=>'دسته بندی اطلاعات','cat_add'=>'ثبت دسته اطلاعات',
                    'tag_header'=>'برچسب',
                ),
                'title'=>true,'editor'=>true,'excerpt'=>true,'author'=>true,'thumbnail'=>true,
                'comments'=>true,'tag'=>true,'category'=>true,'show_in_menu'=>true,
                'position'=>104,
            ),
            'disciplines'=>array(
                'name'=>array(
                    'title'=>'رشته ها',
                    'index_header'=>'رشته ها','index_add'=>'ثبت جدید',
                    'single_add'=>'ثبت اطلاعات جدید','single_edit'=>'ویرایش اطلاعات',
                    'cat_header'=>'دسته بندی اطلاعات','cat_add'=>'ثبت دسته اطلاعات',
                    'tag_header'=>'برچسب',
                ),
                'title'=>true,'editor'=>true,'excerpt'=>true,'author'=>true,'thumbnail'=>true,
                'comments'=>true,'tag'=>true,'category'=>true,'show_in_menu'=>true,
                'position'=>105,
            ),
            'events'=>array(
                'name'=>array(
                    'title'=>'رویدادها',
                    'index_header'=>'رویدادها','index_add'=>'ثبت جدید',
                    'single_add'=>'ثبت اطلاعات جدید','single_edit'=>'ویرایش اطلاعات',
                    'cat_header'=>'دسته بندی اطلاعات','cat_add'=>'ثبت دسته اطلاعات',
                    'tag_header'=>'برچسب',
                ),
                'title'=>true,'editor'=>true,'excerpt'=>true,'author'=>true,'thumbnail'=>true,
                'comments'=>true,'tag'=>true,'category'=>true,'show_in_menu'=>true,
                'position'=>106,
            ),
            'centers'=>array(
                'name'=>array(
                    'title'=>'مراکز',
                    'index_header'=>'مراکز','index_add'=>'ثبت جدید',
                    'single_add'=>'ثبت اطلاعات جدید','single_edit'=>'ویرایش اطلاعات',
                    'cat_header'=>'دسته بندی اطلاعات','cat_add'=>'ثبت دسته اطلاعات',
                    'tag_header'=>'برچسب',
                ),
                'title'=>true,'editor'=>true,'excerpt'=>true,'author'=>true,'thumbnail'=>true,
                'comments'=>true,'tag'=>true,'category'=>true,'show_in_menu'=>true,
                'position'=>107,
            ),
            'topics'=>array(
                'name'=>array(
                    'title'=>'حوزه ها',
                    'index_header'=>'حوزه ها','index_add'=>'ثبت جدید',
                    'single_add'=>'ثبت اطلاعات جدید','single_edit'=>'ویرایش اطلاعات',
                    'cat_header'=>'دسته بندی اطلاعات','cat_add'=>'ثبت دسته اطلاعات',
                    'tag_header'=>'برچسب',
                ),
                'title'=>true,'editor'=>true,'excerpt'=>true,'author'=>true,'thumbnail'=>true,
                'comments'=>true,'tag'=>true,'category'=>true,'show_in_menu'=>true,
                'position'=>108,
            ),
            'sources'=>array(
                'name'=>array(
                    'title'=>'منابع',
                    'index_header'=>'منابع','index_add'=>'ثبت جدید',
                    'single_add'=>'ثبت اطلاعات جدید','single_edit'=>'ویرایش اطلاعات',
                    'cat_header'=>'دسته بندی اطلاعات','cat_add'=>'ثبت دسته اطلاعات',
                    'tag_header'=>'برچسب',
                ),
                'title'=>true,'editor'=>true,'excerpt'=>true,'author'=>true,'thumbnail'=>true,
                'comments'=>true,'tag'=>true,'category'=>true,'show_in_menu'=>true,
                'position'=>109,
            ),
        ];
    }
    function post_widget( $menu_type = 'post'){
        switch ($menu_type) {
            case 'dashboard':break;
            case 'sidebar':break;
            case 'widget':break;
            case 'category':break;
            default:
                return [
                    ['page' => 'Template.Meta::page'],
                    ['scholars' => 'Template.Meta::scholars'],
                    ['centers' => 'Template.Meta::centers'],
                    ['projects' => 'Template.Meta::projects'],
                    ['sources' => 'Template.Meta::sources'],
                    ['events' => 'Template.Meta::events'],
                    ['topics' => 'Template.Meta::topics'],
                ]; break;
        }
        return [];
    }
    function posttype_adminmenu(){
        $menu = [];
        foreach($this->post_type() as $post_type => $value ){
            $data = [
                $value['position']=>[
                    'title'=>$value['name']['title'],
                    'post_type'=> $post_type,
                    'link'=>[
                        'plugin'=>'admin',
                        'controller'=>'Posts',
                        'action'=>'index',
                        '?'=>['post_type'=>$post_type]],
                    'has_sub'=>true,
                    'icon'=>'chevron-right',
                    'show_in_menu'=>$value['show_in_menu'],
                    'sub_menu'=>[],
                ],
            ];

            if($value['name']['index_header'] != ''){
                $data[$value['position']]['sub_menu'][1] =[
                    'title'=>$value['name']['title'],
                    'link'=>[
                        'plugin'=>'admin',
                        'controller'=>'Posts',
                        'action'=>'index',
                        '?'=>['post_type'=>$post_type]],
                ];
            }

            if($value['name']['single_add'] != ''){
                $data[$value['position']]['sub_menu'][2] =[
                    'title'=>$value['name']['single_add'],
                    'link'=>[
                        'plugin'=>'admin',
                        'controller'=>'Posts',
                        'action'=>'add',
                        '?'=>['post_type'=>$post_type]],
                ];
            }
            if($value['category']){
                $data[$value['position']]['sub_menu'][3] = [
                    'title'=>$value['name']['cat_header'],
                    'link'=>[
                        'plugin'=>'admin',
                        'controller'=>'Categories',
                        'action'=>'index',
                        '?'=>['post_type'=>$post_type]],
                ];
            }
            if($value['tag']){
                $data[$value['position']]['sub_menu'][4] = [
                    'title'=>$value['name']['tag_header'],
                    'link'=>[
                        'plugin'=>'admin',
                        'controller'=>'Tags',
                        'action'=>'index',
                        '?'=>['post_type'=>$post_type]],
                ];
            }
            $menu += $data;
        }
        return $menu;
    }

    public function preload(){
        define('template_slug','sharrif_gptt');
        FuncHelper::do_action('excplgn', ['Challenge','Lms','Shop']);
        FuncHelper::do_action('post_type',self::post_type());
        FuncHelper::do_action('admin_sidemenu', self::posttype_adminmenu());
        FuncHelper::do_action('admin_postwidget', self::post_widget('post'));
    }
    public function activation(){
        //ALTER TABLE `tmp_persons` ADD `semat` VARCHAR(200) NULL AFTER `file`;
    }
    public function deactivation( $drop = false){}
    public function config(){
        return [
            'name'=>'Template',
            'title'=>'وبسایت شریف GPTT',
            'icon'=>'fa fa-item',
            'description'=>'',
            'author'=>'Mahan',
            'version'=>'1.0',
            'path' =>[
                'index' =>'',
                'admin' =>'',
                'setting' =>'/admin/Themes/template/',
            ],
            'template'=>[
                'slug'=>'Template',
                'image'=> Router::url('/template/images/template1.png'),
                'name'=>'شریف',
                'info'=>'شریف',
                'version'=>'1.2',
                'author'=>'ماهان',
            ],
            'image_size'=> [    //(options: exact, portrait, landscape, auto, crop)
                'book'=>['width'=>'210','height'=>'300','mode'=>'auto'],
            ]
        ];
    }
}