<?php
class Pets extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->petModel = $this->model('Pet');
    }

    public function index()
    {

        $pets = $this->petModel->getPets();
        $data = $pets;

        $this->view('pets/index', $data);
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'device_code' => trim($_POST['device_code']),
                'name' => trim($_POST['name']),
                'classification' => trim($_POST['classification']),
                'age' => trim($_POST['age']),
                'device_code_err' => '',
                'name_err' => '',
                'classification_err' => '',
                'age_err' => ''
            ];

            //validate device_code
            if (empty($data['device_code'])) {
                $data['device_code_err'] = "Enter pet's device code";
            }

            //validate pets name
            if (empty($data['name'])) {
                $data['name_err'] = "Enter pet's name";
            }

            //valide classification
            if (empty($data['classification'])) {
                $data['classification_err'] = "Enter pet's Classification";
            }

            //validate age
            if (empty($data['age'])) {
                $data['age_err'] = "Enter pet's age";
            }

            //make sure error are empty
            if (empty($data['name_err']) && empty($data['classification_err']) && empty($data['age_err'])) {
                //$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if ($this->petModel->register($data)) {
                    flash('register_success', 'Pet details added');
                    redirect('pets/index');
                }
            } else {
                $this->view('pets/register', $data);
            }
        } else {
            //init data
            $data = [
                'device_code' => '',
                'name' => '',
                'classification' => '',
                'age' => '',
                'device_code_err' => '',
                'name_err' => '',
                'classification_err' => '',
                'age_err' => ''
            ];
            //load view
            $this->view('pets/register', $data);
        }
    }

    //update pet details
    public function update()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $device_code = $_POST['device_code'] ?? null;

            if (!$device_code) {
                $this->index();
                exit;
            }
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'device_code' => trim($_POST['device_code']),
                'name' => trim($_POST['name']),
                'classification' => trim($_POST['classification']),
                'age' => trim($_POST['age']),
                'device_code_err' => '',
                'name_err' => '',
                'classification_err' => '',
                'age_err' => ''
            ];


             //validate device code
             if (empty($data['device_code'])) {
                $data['device_code_err'] = "Enter pet's device code";
            }

            //validate name
            if (empty($data['name'])) {
                $data['name_err'] = "Enter pet's name";
            }

            //validate classification
            if (empty($data['classification'])) {
                $data['classification_err'] = "Enter pet's Classification";
            }

            //validate age
            if (empty($data['age'])) {
                $data['age_err'] = "Enter pet's age";
            }

            //make sure error are empty
            if (empty($data['name_err']) && empty($data['classification_err']) && empty($data['age_err'])) {
                //$data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if ($this->petModel->update($data, $id)) {
                    flash('update_success', 'pet details updated successfully');
                    redirect('pets/index');
                }
            } else {
                $this->view('pets/register', $data);
            }
        } else {
            $device_code = $_GET['device_code'] ?? null;

            if (!$device_code) {
                $this->index();
                exit;
            }

            $result = $this->petModel->getPetById($device_code);

            //init data
            $data = [
                'device_code' => $result->device_code,
                'name' => $result->name,
                'classification' => $result->classification,
                'age' => $result->age,
                'device_code_err' => '',
                'name_err' => '',
                'classification_err' => '',
                'age_err' => ''
            ];

            //load view
            $this->view('pets/update', $data);
        }
    }

    public function delete()
    {
        $device_code = $_POST['device_code'] ?? null;
        if (!$device_code) {
            $this->index();
            exit;
        }

        $result = $this->petModel->deletePet($device_code);
        $this->index();
    }

    public function report()
    {
        $this->view('pets/report');
    }
}
