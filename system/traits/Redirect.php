<?php
namespace system\traits;

trait Redirect{
    public function redirect($url){
        $protocol = stripos($_SERVER['SERVER_PROTOCOL'], "https") === true ? "https://":"http://";
        header("location:". $protocol . $_SERVER['HTTP_HOST'] . "/news/". $url);

    }

    public function back(){
        $http_refere = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] :null;
        if($http_refere != null){
            header('location:'. $http_refere);
        }else{
            echo "route not found";
        }
    }
}

?>