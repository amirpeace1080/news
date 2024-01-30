<?php
namespace application\model;

class Post extends Model{
    public function all(){
        $query = 'select * from post';
        $result = $this->query($query)->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function find($id){
        $query = 'select * from post where id = ?' ;
        $result = $this->query($query, [$id])->fetch();
        $this->closeConnection();
        return $result;
    }


    public function insert($values){
        $query = 'insert into post (title, cat_id, body, created_at) values(?,?,?,now())';
        $this->execute($query, array_values($values));
        $this->closeConnection();
    }

    public function update($id, $values){
        $query = 'update post set title =? ,cat_id =?, body=?, updated_at = now() where id = ?';
       $this->execute($query, array_merge(array_values($values), [$id]));
        $this->closeConnection();
    }


    public function delete($id){
        $query = 'delete from post where id = ?';
        $this->execute($query, [$id]);
        $this->closeConnection();
    }
}


?>