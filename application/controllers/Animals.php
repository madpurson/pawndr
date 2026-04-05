<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Animals extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('Animal_model');
        }

        public function index() {
            $data['animals'] = $this->Animal_model->get_all_animals();
            $this->load->view('animals', $data);
        }
   
        public function view($id) {
            $data['animal'] = $this->Animal_model->get_animal($id);
            if (empty($data['animal'])) {
                show_404();
            }
            $this->load->view('animals/view', $data);
        }

    //     public function create() {
    //         if ($this->input->post()) {
    //             $this->Animal_model->insert_animal($this->input->post());
    //             redirect('animals');
    //         }
    //         $this->load->view('animals/create');
    //     }

    //     public function edit($id) {
    //         $data['animal'] = $this->Animal_model->get_animal($id);
    //         if (empty($data['animal'])) {
    //             show_404();
    //         }
    //         if ($this->input->post()) {
    //             $this->Animal_model->update_animal($id, $this->input->post());
    //             redirect('animals');
    //         }
    //         $this->load->view('animals/edit', $data);
    //     }

    //     public function delete($id) {
    //         $this->Animal_model->delete_animal($id);
    //         redirect('animals');
    //     }
    }
?>