<?php
namespace Template\View\Cell;
use Cake\View\Cell;
class MetaCell extends Cell{
    protected $_validCellOptions = [];
    public function initialize(){}

    public function scholars($posttype = null, $post_meta_list = null){
        $this->set([
            'post_meta_list' =>$post_meta_list,
            'posttype'=>$posttype,
        ]);
    }
    public function centers($posttype = null, $post_meta_list = null){
        $this->set([
            'post_meta_list' =>$post_meta_list,
            'posttype'=>$posttype,
        ]);
    }
    public function projects($posttype = null, $post_meta_list = null){
        $this->set([
            'post_meta_list' =>$post_meta_list,
            'posttype'=>$posttype,
        ]);
    }
    public function sources($posttype = null, $post_meta_list = null){
        $this->set([
            'post_meta_list' =>$post_meta_list,
            'posttype'=>$posttype,
        ]);
    }
    public function events($posttype = null, $post_meta_list = null){
        $this->set([
            'post_meta_list' =>$post_meta_list,
            'posttype'=>$posttype,
        ]);
    }
    public function topics($posttype = null, $post_meta_list = null){
        $this->set([
            'post_meta_list' =>$post_meta_list,
            'posttype'=>$posttype,
        ]);
    }
    public function page($posttype = null, $post_meta_list = null){
        $this->set([
            'post_meta_list' =>$post_meta_list,
            'posttype'=>$posttype,
        ]);
    }
}