<?php
class Profile {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProfiles(){
        $this->db->query('SELECT * from user where id = :id');
        $this->db->bind(':id', $_SESSION['id']);
        $result = $this->db->resultSetArray();

        return $result;
    }

   public function getProfileById($id){
        $this->db->query('SELECT * FROM user WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

 
    public function update($data, $id){
        $this->db->query('UPDATE user SET first_name = :first_name, last_name = :last_name, phone = :phone WHERE id = :id');
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
            //exit;
        }else{
            return false;
        }
    }

    


}