<?php
namespace Template\Controller;

use Cake\ORM\TableRegistry;
use Template\Controller\AppController;
use Cake\Utility\Text;
use Cake\I18n\Time;
use Cake\I18n\Date;
use Cake\I18n\I18n;


class ContentController extends AppController
{
    public function initialize(){
        parent::initialize();
    }

    public function index(){
        $conn = \Cake\Datasource\ConnectionManager::get('default2');
        $p = $conn->execute("SELECT * From post")->fetchALL("assoc");
        $this->Posts = TableRegistry::getTableLocator()->get('Admin.Posts');

        /* foreach($p as $ps){

            $time = date("Y/m/d H:i",substr($ps['InsertTime'],0,10));
            $ps['Title']= str_replace('ی','ی',$ps['Title']);

            $post = $this->Posts->newEntity();
            $post = $this->Posts->patchEntity($post, [
                'meta_description'=>$ps['Id'] ,
                'title'=> $ps['Title'],
                'content'=>str_replace('/staticfiles/media/','',$ps['Description']),
                'summary'=>$ps['ShortDescription'],
                'user_id'=>2,
                'post_status'=>1,
                'published'=>1,
                'post_type'=>$ps['post_type'],
                'slug'=>$this->checkSlug(['title'=>$ps['Title'],'slug'=>'']),
                'created'=> $time
            ]);

            if ($result = $this->Posts->save($post)) {

                $this->request = $this->request->withData('PostMetas.adpost_password', '');
                $this->request = $this->request->withData('PostMetas.adpost_passtype', '1');
                $this->request = $this->request->withData('PostMetas.pin', '0');
                $this->request = $this->request->withData('PostMetas.post_views', '0');
                $this->request = $this->request->withData('PostMetas.thumbnail', $ps['MediaId']);
                $post_id = $result->id;
                foreach( $this->request->getData('PostMetas') as $key=>$val ){
                    $this->Func->PostMetaSave( $post_id,[
                        'type' => 'meta',
                        'name' => $key,
                        'value' => $val,
                        'action' => 'create']
                    );
                }
                pr("Yes Saved ".$post->id);
            }
            else{
                pr("No ".$ps['Id']);
                pr($result);
            }
        } */
        $this->render(false);
    }


    public function media(){
        $conn = \Cake\Datasource\ConnectionManager::get('default2');
        $p = $conn->execute("SELECT * From media")->fetchALL("assoc");
        $this->Posts = TableRegistry::getTableLocator()->get('Posts');
        $this->PostMetas = TableRegistry::getTableLocator()->get('Admin.PostMetas');

        foreach($p as $ps){

            /* $time = date("Y/m/d H:i",substr($ps['CreateTime'],0,10));
            $ps['Title']= str_replace('ی','ی',$ps['Title']);

            $post = $this->Posts->newEntity();
            $post = $this->Posts->patchEntity($post, [
                'meta_description'=>$ps['Id'] ,
                'title'=> str_replace('staticfiles/media/','',$ps['ImgUrl']),
                'content'=>$ps['Title'],
                'image'=>str_replace('staticfiles/media/','',$ps['ImgUrl']),
                'user_id'=>2,
                'post_status'=>1,
                'published'=>1,
                'post_type'=>'media',
                'created'=> $time
            ]);
            

            if ($result = $this->Posts->save($post)) {
                pr($result->id);
                pr("Yes Media Saved ".$result->id);
                $meta = $this->PostMetas->newEntity();
                $meta = $this->PostMetas->patchEntity($meta, [
                    'post_id'=>$result->id,
                    'meta_type'=> 'url',
                    'meta_key'=>'full',
                    'meta_value'=>str_replace('staticfiles/media/','',$ps['ImgUrl']),
                    
                ]);
                if($mesult = $this->PostMetas->save($meta)){
                    pr("Yes Meta Saved ".$meta['id']);
                }
                else{
                    pr("No Meta Saved ".$result->id);
                    pr($mesult);
                }
            }
            else{
                pr("No ".$ps['Id']);
                pr($result);
            } */
        }
        $this->render(false);
    }

    public function postmedia(){
        $conn = \Cake\Datasource\ConnectionManager::get('default2');
        //$p = $conn->execute("SELECT * From media")->fetchALL("assoc");
        $this->Posts = TableRegistry::getTableLocator()->get('Admin.Posts');
        $this->PostMetas = TableRegistry::getTableLocator()->get('Admin.PostMetas');

        foreach($this->PostMetas->find('all')->where(['meta_key'=>'thumbnail'])
            ->toarray() as $ps){
            
            /* $post = $this->Posts->find('all')->where(['meta_description'=>$ps['meta_value']])->first();
            if($post){
                $p = $this->PostMetas->query()->update()
                    ->set(['meta_value' => $post['id'] ])
                    ->where(['id' => $ps['id'] ])
                    ->execute();
                if($p)
                    pr("execute FOund");
                else
                    pr("execute NOt FOund");
            }
            else{
                pr("Post NOt FOund");
            } */
        }
        $this->render(false);
    }

    public function category(){
        $conn = \Cake\Datasource\ConnectionManager::get('default2');
        $p = $conn->execute("SELECT * From post")->fetchALL("assoc");
        $this->Posts = TableRegistry::getTableLocator()->get('Admin.Posts');
        $this->Categories = TableRegistry::getTableLocator()->get('Admin.PostsCategories');
        $res= $this->Posts->find('all')->toarray();

        /* foreach($res as $rs){

            $p = $conn->execute("SELECT * FROM `grouppost` WHERE `PostId` = '".$rs['meta_description']."'")->fetchALL("assoc");
            if(isset($p[0])){
                $post = $this->Categories->newEntity();
                $post = $this->Categories->patchEntity($post, [
                    'post_id'=>$rs['id'] ,
                    'category_id'=> ($p[0]['GroupId'] +2),
                ]);
    
                if ($result = $this->Categories->save($post)) {
                    pr("Yes ".$post->id);
                }
                else{
                    echo "No ";
                    pr($result);
                }
            }
            else{
            }
        } */
        $this->render(false);
    }

    private function checkSlug($data = null){
        $text = strtolower(Text::excerpt(preg_replace('/\s/u', '-',($data['slug']==''?$data['title']:$data['slug'])),'',50) );
        $p = TableRegistry::getTableLocator()->get('Admin.Posts')->find('all')
            ->where(['slug'=> $text,(isset($data['id'])?['Posts.id !='=>$data['id']]:false)])
            ->toarray();
        if(count($p)){
            return $this->checkSlug([
                'slug'=>$text.'1',
                (isset($data['id'])?['Posts.id !='=>$data['id']]:false)
            ]);
        }
        else{
            return $text;
        }
    }

}
