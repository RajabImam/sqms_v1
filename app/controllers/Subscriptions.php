<?php
class Subscriptions extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->subscriptionModel = $this->model('Subscription');
    }

    public function index()
    {
        $subscriptions = $this->subscriptionModel->getSubscriptions();
        $data = $subscriptions;

        $this->view('subscriptions/index', $data);
    }

    /*
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'type' => trim($_POST['type']),
                'start_date' => trim($_POST['start_date']),
                'end_date' => trim($_POST['end_date']),
                'type_err' => '',
                'start_date_err' => '',
                'end_date_err' => ''
            ];

            //valide type
            if (empty($data['type'])) {
                $data['type_err'] = "Enter subscription type";
            }

            //valide start_date
            if (empty($data['start_date'])) {
                $data['start_date_err'] = "Enter sub start_date";
            }

            //validate end_date
            if (empty($data['end_date'])) {
                $data['end_date_err'] = "Enter sub end_date";
            }

            //make sure error are empty
            if (empty($data['type_err']) && empty($data['start_date_err']) && empty($data['end_date_err'])) {
                if ($this->subscriptionModel->register($data)) {
                    flash('register_success', 'subscription created');
                    redirect('subscriptions/index');
                }
            } else {
                $this->view('subscriptions/register', $data);
            }
        } else {
            //init data
            $data = [
                'type' => '',
                'start_date' => '',
                'end_date' => '',
                'type_err' => '',
                'start_date_err' => '',
                'end_date_err' => ''
            ];
            //load view
            $this->view('subscriptions/register', $data);
        }
    }
    */

    //update subscription
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
                'subscription' => trim($_POST['subscription']),
                'subscription_err' => ''
            ];

            //validation sub
            if (empty($data['subscription'])) {
                $data['subscription_err'] = "Enter sub";
            }

            
            //make sure error are empty
            if (empty($data['subscription_err'])) {
                if ($this->subscriptionModel->update($data, $id)) {
                    flash('update_success', 'sub updated successfully');
                    redirect('subscriptions/index');
                }
            } else {
                $this->view('subscriptions/register', $data);
            }
        } else {
            $id = $_GET['id'] ?? null;

            if (!$id) {
                $this->index();
                exit;
            }

            $result = $this->subscriptionModel->getSubById($id);

            //init data
            $data = [
                'id' => $result->id,
                'subscription' => $result->subscription,
                'start_date' => $result->start_date,
                'end_date' => $result->end_date,
                'subscription_err' => '',
                'start_date_err' => '',
                'end_date_err' => ''
            ];

            //load view
            $this->view('subscriptions/update', $data);
        }
    }

 /*   public function delete()
    {
        $id = $_POST['id'] ?? null;

        if (!$id) {
            $this->index();
            exit;
        }

        $result = $this->subscriptionModel->deleteSub($id);
        $this->index();
    }*/

    public function report()
    {
        $this->view('subscriptions/report');
    }

   
}
