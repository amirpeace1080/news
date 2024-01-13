<?php
namespace application\controller;

class panel extends Controller {
    public function index() {
        return $this->view('panel.index');
    }
}

?>