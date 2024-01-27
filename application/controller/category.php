<?php
namespace application\controller;

use application\model\Category as CategoryModel;

class Category extends Controller {
    public function index() {           
        $categroy = new CategoryModel();        
        $categories = $categroy->all();
        return $this->view("panel.category.index", 0);
    }
     
    public function create() {
        return $this->view("panel.category.create");

    }

    public function show($id) {
        return $this->view("panel.category.show");
    }

    public function store() {
        $category = new CategoryModel();
        $category->insert($_POST);
        return $this->redirect("category");

    }
    public function edit($id) {
        $ob_category = new CategoryModel();
        $category = $ob_category->find($id);
        return $this->view("panel.category.edit", compact('category'));
    }

    public function update($id) {
        $category = new CategoryModel();
        $category->update($id, $_POST);
        return $this->redirect('category');
    }

    public function destroy($id) {
        $category = new CategoryModel();
        $category->delete($id);
        return $this->back();
    }


}


?>