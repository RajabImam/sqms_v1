<?php
class Profiles extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->profileModel = $this->model('Profile');
    }

    public function index()
    {
        $profiles = $this->profileModel->getProfiles();
        $data = $profiles;

        $this->view('profiles/index', $data);
    }

    //change password
    public function change_password()
    {
        $profiles = $this->profileModel->getProfiles();
        $data = $profiles;

        $this->view('profiles/change_password', $data);
    }

       //update profile 
       public function update()
       {
   
           if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
               $id = $_POST['id'] ?? null;
   
               if (!$id) {
                   $this->index();
                   exit;
               }
               // process form
               $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
               $data = [
                   'first_name' => trim($_POST['first_name']),
                   'last_name' => trim($_POST['last_name']),
                   'phone' => trim($_POST['phone']),
                   'first_name_err' => '',
                   'last_name_err' => '',
                   'phone_err' => ''
               ];
   
               //valide first name
               if (empty($data['first_name'])) {
                   $data['first_name_err'] = "Enter first name";
               }
   
               //valide last_name
               if (empty($data['last_name'])) {
                   $data['last_name_err'] = "Enter last_name";
               }
   
               //validate phone
               if (empty($data['phone'])) {
                   $data['phone_err'] = "Enter phone number";
               }
   
               //make sure error are empty
               if (empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['phone_err'])) {
                   if ($this->profileModel->update($data, $id)) {
                       flash('update_success', 'profile details updated successfully');
                       redirect('profiles/index');
                   }
               } else {
                   $this->view('profiles/index', $data);
               }
           } else {
               $id = $_GET['id'] ?? null;
   
               if (!$id) {
                   $this->index();
                   exit;
               }
   
               $result = $this->profileModel->getProfileById($id);
   
               //init data
               $data = [
                   'id' => $result->id,
                   'first_name' => $result->first_name,
                   'last_name' => $result->last_name,
                   'email' => $result->email,
                   'phone' => $result->phone,
                   'first_name_err' => '',
                   'last_name_err' => '',
                   'email_err' => '',
                   'phone_err' => ''
               ];
   
               //load view
               $this->view('profiles/update', $data);
           }
       }

   
}
