<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      if(isLoggedIn()){
        redirect('dashboards');
      }

      $data = [
        'title' => 'Welcome to Dream Guardian Online Platform',
        'description' => 'We offer variety of plans that are suitable for your pets',
        'info' => 'Get the most valuable metrics of your pet to keep them healthy always',
        'tag' => 'Sleeping Quality is key for all'
    ];
     
     
      $this->view('pages/index', $data);
    }

    public function about(){
    
      $data = [
        'title' => 'About Dream Guardia',
        'description' => 'Dream Guardian School Project for Dream Guardian to monitor the quality of sleep of pet to be submitted at ISEP Software Engineering Masters program. Paris, France. The instruction from the APP document is to use MVC (Model, View, Controller) methodology to develop the application. View - HTML, CSS, JS, and I add Bootstrap to make the work more easier and faster in terms of styling i.e doing the entire css ourselves. So all codes that deals with User Interface or presentation to the users resides here.

        Model - Database, MySQL and codes that connect us to the DB
        
        Controller - PHP core functionality of the system'
      ];

      $this->view('pages/about', $data);
    }

    public function services(){

      $data = [
        'title' => 'Services',
        'description' => '',
        'one' => '',
        'two' => '',
        'three' => '',
        'four' => ''
    ];
    

      $this->view('pages/services', $data);
    }

    public function contact(){

      $data = [
        'title' => 'Contact Us',
        'description' => 'Connect with us',
        'info' => 'For more information on our products and services',
        'name' => 'Dream Guardian',
        'location' => 'Paris, France',
        'contact' => '+33 75626171',
        'mail' => 'dummy@eleve.isep.fr'
    ];
    

      $this->view('pages/contact', $data);
    }
  }