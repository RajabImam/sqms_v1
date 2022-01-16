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

    public function getPetById($device_code){
        $this->db->query('SELECT * FROM pets WHERE device_code = :device_code');
        $this->db->bind(':device_code', $device_code);

        $row = $this->db->single();

        return $row;
    }

    //register new pet
    public function register($data){
        $this->db->query('INSERT INTO pets (device_code, name, classification, age, user_id) VALUES (:device_code, :name, :classification, :age, :user_id)');
        $this->db->bind(':device_code', $data['device_code']);
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

    public function update($data, $device_code){
        $this->db->query('UPDATE pets SET name = :name, classification = :classification, age = :age WHERE device_code = :device_code');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':classification', $data['classification']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':device_code', $device_code);

        if($this->db->execute()){
            return true;
            //exit;
        }else{
            return false;
        }
    }

    //Delete pet by device_code
    public function deletePet($device_code){  
       
        $this->db->query('DELETE FROM pets WHERE device_code = :device_code');
        $this->db->bind(':device_code', $device_code);
       
        if($this->db->execute()){
            return true;
            //exit;
        }else{
            return false;
        }
    }
}