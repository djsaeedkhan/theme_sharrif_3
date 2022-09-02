<?php
use Admin\View\Helper\QueryHelper;
use Cake\View\Helper\HtmlHelper;
function author_list($metalist = null){
    $Query = new QueryHelper(new \Cake\View\View());
    $html = new HtmlHelper(new \Cake\View\View());
    $string = '';
    
    if(isset($metalist['author_name']) or isset($metalist['scholars'])){
        global $text_trim;
        global $is_status;
        $breaked= false;
        //$string = '<div class="pl-2 fs-14 cls2">';
        if(isset($metalist['scholars']) and is_array($metalist['scholars'])){
            $temp = $Query->post('scholars',[
                'contain'=>['PostMetas'],
                'get_type'=>'all',
                'id' => $metalist['scholars'],
                'order' => false]);
            $i=0;
            foreach($temp as $tmp):
                if($text_trim == true){
                    if($i >= 2 ){
                        $breaked = true;
                        break;
                    }
                }
                $string .= '<div class="d-inline pl-3">'.
                $Query->permalink( $html->image( $Query->postimage('thumbnail',$tmp),['class'=>'cls1']).
                    $tmp['title'],  $tmp,['style'=>'display: inline-block;']).
                '</div>';
                $i+=1;
            endforeach;
            
            if($text_trim == true and $breaked == true){
                $string .= '...';
            }

        }

        if( $is_status == 'single' and ((isset($metalist['author_name']) and $metalist['author_name']!= '')
            or (isset($metalist['scholars_list']) and $metalist['scholars_list']!= ''))
        ){
            if(isset($metalist['scholars_list']) and $metalist['scholars_list']!= '')
                $metalist['author_name'] = $metalist['scholars_list'];

            $temp = (array) explode('-',$metalist['author_name']);
            foreach($temp as $tmp)
                $string .= '<div class="d-inline pl-3"><a class="cls1">'. 
                    str_replace(',',' - ',$tmp) .'</a></div>';
        }
        
        //$string .= '</div>';
        /* if($hr == true)
            $string = '<hr class="hr1">'.$string; */
    }
    return $string;
}
?>