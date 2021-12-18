<?php
class Subscription {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getSubscriptions(){
        $this->db->query('SELECT * from plan where user_id = :id');
        $this->db->bind(':id', $_SESSION['id']);
        $result = $this->db->resultSetArray();

        return $result;
    }

    public function getSubById($id){
        $this->db->query('SELECT * FROM plan WHERE user_id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    //create new subscription
    public function register($data){
        $this->db->query('INSERT INTO plan (type, start_date, end_date, created_on, user_id) VALUES (:type, :start_date, :end_date, now(), :user_id)');
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':start_date', $data['start_date']);
        $this->db->bind(':end_date', $data['end_date']);
        $this->db->bind(':user_id', $_SESSION['id']);

        if($this->db->execute()){
            return true;
            //exit;
        }else{
            return false;
        }
    }

    public function update($data, $id){
        $this->db->query('UPDATE plan SET type = :type, start_date = :start_date, end_date = :end_date WHERE id = :id');
        $this->db->bind(':type', $data['type']);
        $this->db->bind(':start_date', $data['start_date']);
        $this->db->bind(':end_date', $data['end_date']);
        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
            //exit;
        }else{
            return false;
        }
    }

    //Delete pet by id
    public function deleteSub($id){  
        var_dump($id);
        $this->db->query('DELETE FROM plan WHERE id = :id');
        $this->db->bind(':id', $id);
       
        if($this->db->execute()){
            return true;
            //exit;
        }else{
            return false;
        }
    }

   


}