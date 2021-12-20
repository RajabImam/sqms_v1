<?php
class Pet {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPets(){
        $this->db->query('SELECT * from pets where user_id = :id');
        $this->db->bind(':id', $_SESSION['id']);
        $result = $this->db->resultSetArray();

        return $result;
    }

    public function getPetsCount(){
        $this->db->query('SELECT COUNT(*) as count from pets where user_id = :id');
        $this->db->bind(':id', $_SESSION['id']);
        $result = $this->db->resultSetArray();
        
        return $result;
    }

    public function getPetById($id){
        $this->db->query('SELECT * FROM pets WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    //register new user
    public function register($data){
        $this->db->query('INSERT INTO pets (name, classification, age, user_id) VALUES (:name, :classification, :age, :user_id)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':classification', $data['classification']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':user_id', $_SESSION['id']);

        if($this->db->execute()){
            return true;
            //exit;
        }else{
            return false;
        }
    }

    public function update($data, $id){
        $this->db->query('UPDATE pets SET name = :name, classification = :classification, age = :age WHERE id = :id');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':classification', $data['classification']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
            //exit;
        }else{
            return false;
        }
    }

    //Delete pet by id
    public function deletePet($id){  
        var_dump($id);
        $this->db->query('DELETE FROM pets WHERE id = :id');
        $this->db->bind(':id', $id);
       
        if($this->db->execute()){
            return true;
            //exit;
        }else{
            return false;
        }
    }
}