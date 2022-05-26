<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ItemCRUD extends CI_Controller {


   public $itemCRUD;


   /**
    * Get All Data from this method.
    *
    * @return Response
   */
   public function __construct() {
      parent::__construct(); 


      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('ItemCRUDModel');


      $this->itemCRUD = new ItemCRUDModel;
   }


   /**
    * Display Data this method.
    *
    * @return Response
   */
   public function index()
   {
       $data['data'] = $this->itemCRUD->get_itemCRUD();


       $this->load->view('theme/header');       
       $this->load->view('itemCRUD/list',$data);
       $this->load->view('theme/footer');
   }


   /**
    * Show Details this method.
    *
    * @return Response
   */
   public function show($User_ID)
   {
      $item = $this->itemCRUD->find_item($User_ID);


      $this->load->view('theme/header');
      $this->load->view('itemCRUD/show',array('Name'=>$item));
      $this->load->view('itemCRUD/show',array('Email'=>$item));
      $this->load->view('itemCRUD/show',array('Number'=>$item));
      $this->load->view('theme/footer');
   }


   /**
    * Create from display on this method.
    *
    * @return Response
   */
   public function create()
   {
      $this->load->view('theme/header');
      $this->load->view('itemCRUD/create');
      $this->load->view('theme/footer');   
   }


   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');
        $this->form_validation->set_rules('Number', 'Number', 'required');


        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(site_url('itemCRUD/create'));
        }else{
           $this->itemCRUD->insert_item();
           redirect(site_url('itemCRUD'));
        }
    }


   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($User_ID)
   {
       $item = $this->itemCRUD->find_item($User_ID);


       $this->load->view('theme/header');
       $this->load->view('itemCRUD/edit',array('item'=>$item));
       $this->load->view('theme/footer');
   }


   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($User_ID)
   {
        $this->form_validation->set_rules('Name', 'Name', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');
        $this->form_validation->set_rules('Number', 'Number', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(site_url('itemCRUD/edit/'.$User_ID));
        }else{ 
          $this->itemCRUD->update_item($User_ID);
          redirect(site_url('itemCRUD'));
        }
   }


   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($User_ID)
   {
       $item = $this->itemCRUD->delete_item($User_ID);
       redirect(site_url('itemCRUD'));
   }
}