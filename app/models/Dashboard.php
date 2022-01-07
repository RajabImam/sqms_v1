<?php

class Dashboard {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDashboards($userId){

        /*$this->db->query('select (SELECT count(*) from pets where user_id = :userid) as petCount, 
                            u.id as userId, p.type as planType from user as u 
                            inner join plan as p on u.id = :userid');

        $this->db->bind(':userid', $userId);

        $result = $this->db->resultSet();

        return $result;*/

        // $this->db->query('SELECT *,
        //                     posts.id as postId,
        //                     user.id as userId,
        //                     posts.created_at as postCreated,
        //                     user.created_at as userCreated
        //                     FROM posts
        //                     INNER JOIN user
        //                     ON posts.user_id = user.id
        //                     ORDER BY posts.created_at DESC');
        // $result = $this->db->resultSet();

        // return $result;
    }

   
   /* public function addPost($data){
        $this->db->query('INSERT INTO posts(user_id, title, body) VALUES (:user_id, :title, :body)');
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        
        //execute 
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getPostById($id){
        $this->db->query('SELECT * FROM posts WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();

        return $row;
    }

    public function updatePost($data){
        $this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);
        
        //execute 
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //delete a post
    public function deletePost($id){
        $this->db->query('DELETE FROM posts WHERE id = :id');
        $this->db->bind(':id', $id);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }*/
}