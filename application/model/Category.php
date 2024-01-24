<?php
namespace application\model;

class Category extends Model{
    public function all(){
        $query = 'select * from categories';        
        $result = $this->query($query)->fetchAll();        
        $this->closeConnection();
        return $result;
    }

    public function posts($cat_id) {
        $query = 'select * from post where cat_id = ?' ;
        $result = $this->query($query, [$cat_id])->fetchAll();
        $this->closeConnection();
        return $result;
    }

    public function find($id){
        $query = 'select * from post where id = ?' ;
        $result = $this->query($query, [$id])->fetchAll();
        $this->closeConnection();
        return $result;
    }


    public function insert($values){
        $query = 'insert into categories (name, description, created_at) values(?,?,now())';
        $this->execute($query, array_values($values));
        $this->closeConnection();
    }

    public function update($id, $values){
        $query = 'update categories set name =? ,description =?, updated_at =now() where id = ?';
        $this->execute($query, array_merge(array_values($values), [$id]));
        $this->closeConnection();
    }


    public function delete($id){
        $query = 'delete from categories where id = ?';
        $this->execute($query, [$id]);
        $this->closeConnection();
    }
}


?>