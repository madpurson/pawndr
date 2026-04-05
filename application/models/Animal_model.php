<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Animal_model extends CI_Model {

        public function __construct() {
            parent::__construct();
        }

        public function get_all_animals() {
            // return $this->db->get('animals')->result_array();
            return [
                ['id' => 1, 'name' => 'Dog'],
                ['id' => 2, 'name' => 'Cow'],
            ];
        }

        public function get_animal($id) {
            return $this->db->get_where('animals', ['id' => $id])->row_array();
        }

        public function insert_animal($data) {
            return $this->db->insert('animals', $data);
        }

        public function update_animal($id, $data) {
            return $this->db->update('animals', $data, ['id' => $id]);
        }

        public function delete_animal($id) {
            return $this->db->delete('animals', ['id' => $id]);
        }
    }
?>