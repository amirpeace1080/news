<?php
namespace application\controller;

use application\model\Post as PostModel;

class Post extends Controller {
    public function index() {
        $post = new PostModel();
        $categories = $post->all();
        return $this->view("panel.post.index", compact("categories"));
    }
     
    public function create() {
        return $this->view("panel.post.create");

    }

    public function show($id) {
        return $this->view("panel.post.show");
    }

    public function store() {
        $post = new PostModel();
        $post->insert($_POST);
        return $this->redirect("post");

    }
    public function edit($id) {
        $ob_post = new PostModel();
        $post = $ob_post->find($id);
        return $this->view("panel.post.edit", compact('post'));
    }

    public function update($id) {
        $post = new PostModel();
        $post->update($id, $_POST);
        return $this->redirect('post');
    }

    public function destroy($id) {
        $post = new PostModel();
        $post->delete($id);
        return $this->back();
    }


}


?>