<?php
namespace application\controller;

use application\model\Post;
use application\model\Category;

class Home extends Controller {
    public function index() {
        $category = new Category();
        $categories = $category->all();

        $post = new Post();
        $posts = $post->all();

        return $this->view("app.index", compact("categories","posts"));
    }

    public function category($id){
        $ob_category = new Category();
        $categories = $ob_category->all();

        $ob_category = new Category();
        $category= $ob_category->find($id);

        $ob_category = new Category();
        $posts = $ob_category->posts($id);
        
        
       
        return $this->view("app.category", compact("categories", "category" ,"posts"));
    }

    public function show($id){
        $category = new Category();
        $categories = $category->all();

        $post = new Post();
        $posts = $post->find($id);

        return $this->view("app.show", compact("categories","posts"));
    }
}

?>