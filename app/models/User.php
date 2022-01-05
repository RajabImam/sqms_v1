<?php
class User {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    //register new user
    public function register($data){
        $this->db->query('INSERT INTO user (first_name, last_name, email, phone, password, created_on, subscription, start_date, end_date) VALUES (:first_name, :last_name, :email, :phone, :password, NOW(), :subscription, NOW(), DATE_ADD(NOW(), INTERVAL 1 YEAR))');
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':subscription', 'FREE');
        //$created_on = date('Y-m-d H:i:s');
        //$this->db->bind(':created_on', $data['created_on']);

        if($this->db->execute()){
            return true;
            //exit;
        }else{
            return false;
        }
    }
    //find user by email
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM user WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //check the row 
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function login($email, $password){
        //$this->db->query('SELECT * FROM user where email = :email');
        $this->db->query('SELECT * FROM user where email = :email AND password = :password');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
       
        $row = $this->db->single();

        if(!empty($row)){
            return $row;
        }
        else{
            return false;
        }

        //$hash_password = $row->password;

       /* if(password_verify($password, $hash_password)){
            return $row;
        }else{
            return false;
        }*/
    }

    public function getUserById($id){
        $this->db->query('SELECT * FROM user WHERE id = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
}