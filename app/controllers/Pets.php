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
                'name' => trim($_POST['name']),
                'classification' => trim($_POST['classification']),
                'age' => trim($_POST['age']),
                'name_err' => '',
                'classification_err' => '',
                'age_err' => ''
            ];

            //valide name
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
                    flash('register_success', 'you are registerd you can login now');
                    redirect('pets/index');
                }
            } else {
                $this->view('pets/register', $data);
            }
        } else {
            //init data
            $data = [
                'name' => '',
                'classification' => '',
                'age' => '',
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

            $id = $_POST['id'] ?? null;

            if (!$id) {
                $this->index();
                exit;
            }
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'name' => trim($_POST['name']),
                'classification' => trim($_POST['classification']),
                'age' => trim($_POST['age']),
                'name_err' => '',
                'classification_err' => '',
                'age_err' => ''
            ];

            //valide name
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
                if ($this->petModel->update($data, $id)) {
                    flash('update_success', 'pet details updated successfully');
                    redirect('pets/index');
                }
            } else {
                $this->view('pets/register', $data);
            }
        } else {
            $id = $_GET['id'] ?? null;

            if (!$id) {
                $this->index();
                exit;
            }

            $result = $this->petModel->getPetById($id);

            //init data
            $data = [
                'id' => $result->id,
                'name' => $result->name,
                'classification' => $result->classification,
                'age' => $result->age,
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
        $id = $_POST['id'] ?? null;

        if (!$id) {
            $this->index();
            exit;
        }

        $result = $this->petModel->deletePet($id);
        $this->index();
    }

    public function report()
    {
        $this->view('pets/report');
    }
}
