<?php
class Users extends Controller{
    public function __construct()
    {
        $this->userModel = $this->model('User');
        $this->petModel = $this->model('Pet');
        $this->profileModel = $this->model('Profile');
        $this->subscriptionModel = $this->model('Subscription');
 
    }

    
    public function register(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
           // process form
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'email' => trim($_POST['email']),
                'phone' => trim($_POST['phone']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'first_name_err' => '',
                'last_name_err' => '',
                'email_err' => '',
                'phone_err' => '',
                'password_err' => '',
                'confirmPassword_err' => '' 
            ];

            //valide first name
            if(empty($data['first_name'])){
                $data['first_name_err'] = 'Enter first name';
            }

             //valide last name
             if(empty($data['last_name'])){
                $data['last_name_err'] = 'Enter last name';
            }

            //validate email
            if(empty($data['email'])){
                $data['email_err'] = 'Enter email';
            }else{
                //check for email
                if($this->userModel->findUserByEmail($data['email'])){
                    $data['email_err'] = 'Email already exist';
                }
            }

             //valide name
             if(empty($data['phone'])){
                $data['phone_err'] = 'Enter phone number';
            }

            //validate password 
            if(empty($data['password'])){
                $data['password_err'] = 'Enter your password';
            }elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be at least six characters';
            }

            //validate confirm password
            if(empty($data['confirmPassword'])){
                $data['confirmPassword_err'] = 'Confirm password';
            }else{
                if($data['password'] != $data['confirmPassword'])
                {
                    $data['confirmPassword_err'] = 'Password does not match';
                }
            }

            //make sure error are empty
            if(empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['email_err']) && empty($data['phone_err']) && empty($data['password_err']) && empty($data['confirmPassword_err'])){
                //$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if($this->userModel->register($data)){
                    flash('register_success', 'you are registerd you can login now');
                    redirect('users/login');
                }
            }else{
                $this->view('users/register', $data);
            }
        }else{
            //init data
            $data = [
                'first_name' => '',
                'last_name' => '',
                'email' => '',
                'phone' => '',
                'password' => '',
                'confirmPassword' => '',
                'first_name_err' => '',
                'last_name_err' => '',
                'email_err' => '',
                'phone_err' => '',
                'password_err' => '',
                'confirmPassword_err' => '' 
            ];
            //load view
            $this->view('users/register', $data);          
        }
    }

    public function login(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
           // process form
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
           $data = [
               'email' => trim($_POST['email']),
               'password' => trim($_POST['password']),
               'email_err' => '',
               'password_err' => ''
           ];

            //validate email
            if(empty($data['email'])){
                $data['email_err'] = 'Enter email';
            }else{
                if($this->userModel->findUserByEmail($data['email'])){
                    //user found
                }else{
                    $data['email_err'] = 'User not found';
                }
            }

            //validate password 
            if(empty($data['password'])){
                $data['password_err'] = 'Enter your password';
            }elseif(strlen($data['password']) < 6){
                $data['password_err'] = 'Password must be atleast six characters';
            }
            
            //make sure error are empty
            if(empty($data['email_err']) && empty($data['password_err'])){
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);
                if($loggedInUser){
                    //create session
                    $this->createUserSession($loggedInUser);
                }else{
                    $data['password_err'] = 'Password incorrect';
                    $this->view('users/login', $data);
                }
            }else{
                $this->view('users/login', $data);
            }

        }else{
            //init data f f
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => ''
            ];
            //load view
            $this->view('users/login', $data);          
        }
    }

    //setting user section variable
    public function createUserSession($user){
        $_SESSION['id'] = $user->id;
        $_SESSION['first_name'] = $user->first_name;
        $_SESSION['email'] = $user->email;

        $data = $this->petModel->getPetsCount();
        
        redirect('dashboards/index', $data);
    }

    //Display profile page
    /*public function profile($id = null) {
       //init data 
       $user = $this->userModel->getUserById($id);
       $data = [
        'user' => $user
    ];
    //load view
    $this->view('users/profile', $data);
    }*/

    //logout and destroy user session
    public function logout(){
        unset($_SESSION['id']);
        unset($_SESSION['first_name']);
        unset($_SESSION['email']);
        session_destroy();
        redirect('users/login');
    }
}