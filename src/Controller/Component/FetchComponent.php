<?php
namespace Template\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\ORM\TableRegistry;

class FetchComponent extends Component {
    protected $_defaultConfig = [];
    public $components = ['Paginator'];
    public function initialize(array $config){}
    public function home($id = null){
        global $compact;
        $compact['tmpProblems'] = TableRegistry::get('Template.tmpProblems')->newEntity();
    }
    
    public function index() {
        global $is_status;
        global $id ;
        global $category;
        global $post_type;
        global $cond;
        global $results;
        global $model;
        $param = $this->request->getparam('?');
        $j = 1;
        
        if(isset($param['cattype']) and $param['cattype'] != ''){
            $ids = $param['cattype'];
            $results->matching('Categories',
                function ($q) use ($ids){
                return $q->where(['Categories.id IN' => $ids ]);
            });
        }

        ++$j;
        if(isset($param['disciplines']) and $param['disciplines'] != ''){
            $results->join([
                'table' => 'post_metas','alias' => "pm{$j}",'type' => 'LEFT',
                'conditions' => ["pm{$j}.post_id = Posts.id"] ]);
            $results->where([
                "pm{$j}.meta_key"=>'disciplines', 
                "pm{$j}.meta_value LIKE "=>  '%"'.$param['disciplines'].'"%' ]);
            ++$j;
        }
            
        ++$j;
        if(isset($param['topics']) and $param['topics'] != ''){
            $results->join([
                'table' => 'post_metas','alias' => "pm{$j}",'type' => 'LEFT',
                'conditions' => ["pm{$j}.post_id = Posts.id"] ]);
            $results->where([
                "pm{$j}.meta_key"=>'topics', 
                "pm{$j}.meta_value LIKE "=>  '%"'. $param['topics'].'"%' ]);
            ++$j;
        }
        
        ++$j;
        if(isset($param['center_name']) and $param['center_name'] != ''){
            $results->join([
                'table' => 'post_metas','alias' => "pm{$j}",'type' => 'LEFT',
                'conditions' => ["pm{$j}.post_id = Posts.id"] ]);
            $results->where([
                "pm{$j}.meta_key"=>'workplace', 
                "pm{$j}.meta_value LIKE "=> "%".$param['center_name']."%" ]);
        }

        ++$j;
        if(isset($param['centers']) and $param['centers'] != ''){
            $results->join([
                'table' => 'post_metas','alias' => "pm{$j}",'type' => 'LEFT',
                'conditions' => ["pm{$j}.post_id = Posts.id"] ]);
            $results->where([
                "pm{$j}.meta_key"=>'centers', 
                "pm{$j}.meta_value LIKE "=> '%"'. $param['centers'].'"%']);
        }

        $results->order(['Posts.created'=>'desc']);
        
    }

    public function archive($id = null)
    {
    }

    public function category($id = null , $post_type = [])
    {
        /* $id = $this->request->getParam('catid')?$this->request->getParam('catid'):$id;
        $slug = $this->request->getParam('catslug')?$this->request->getParam('catslug'):'';
        $post_type = $this->request->getParam('posttype')?$this->request->getParam('posttype'):'post';
        $param = $this->request->getParam('?'); */
    }

    public function category_single($id = null , $post_type = [])
    {
        /* $id = $this->request->getParam('catid')?$this->request->getParam('catid'):$id;
        $slug = $this->request->getParam('catslug')?$this->request->getParam('catslug'):'';
        $post_type = $this->request->getParam('posttype')?$this->request->getParam('posttype'):'post'; */
        $param = $this->request->getParam('?');


        $model = TableRegistry::get('Admin.Categories');
        $result = $model
            ->find('all')
            ->order(['Categories.created'=>'desc'])
            ->enablehydration(false)
            ->contain(['CategorieMetas'])
            ;
        //--
        if(is_array($post_type)){
            $result->where(['Categories.post_type IN' => $post_type]);
        }
        elseif($post_type != null){
            $result->where(['Categories.post_type' => $post_type]);
        }
        //--
        if($id != null){
            $result->where(['Categories.id' => $id]);
        }
        //--
        return $result;
    }

    public function single($id = null)
    {
        /* $result = TableRegistry::get('Admin.Posts')->get($id,[
            'contain'=>['Categories','Tags','Users','PostMetas']]);
        return $result; */
    }

    public function tag($slug = null)
    {
        /* $result = TableRegistry::get('Admin.Posts')->find('all')
            ->contain(['Categories','Tags','PostMetas'])//,'Users'
            ->order(['Posts.created'=>'desc'])
            ->matching('Tags',
                function ($q) use ($slug){
                return $q->where(['Tags.slug' => $slug]);
            });
        return $result; */
    }

    public function search($slug = null)
    {
        /* $model = TableRegistry::get('Admin.Posts');
        $result = $model->find('all')
            ->order(['Posts.created'=>'desc'])
            ->contain(['Categories','Tags','PostMetas'])
            ->where(['OR' => [
                $model->translationField('title').' LIKE' => "%$slug%",
                $model->translationField('content').' LIKE' => "%$slug%"],
                ]);  
        if($this->request->getParam('?')['post_type'] and $this->request->getParam('?')['post_type'] != ''){
            $result->where(['AND'=>['post_type'=>$this->request->getParam('?')['post_type']]]);
        }
        return $result; */
    }
}