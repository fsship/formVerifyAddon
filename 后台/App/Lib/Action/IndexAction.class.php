<?php

class IndexAction extends Action {

    public function index() {
        $this->display();
    }

    public function addData() {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type:application/json; charset=utf-8');
        $db = M('test');
        $data['content'] = $_POST['text'];
        $data['text2'] = $_POST['text2'];
        $db->add($data);
        $result['state'] = "0";
        exit(json_encode($result));
    }
    
    public function showData() {
        header('Access-Control-Allow-Origin:*');
        header('Content-Type:application/json; charset=utf-8');
        $db = M('test');
        $data = $db->select();
        $js = json_encode($data);
        echo $js;
        //exit(json_encode($data,JSON_UNESCAPED_UNICODE));
    }
}

?>
