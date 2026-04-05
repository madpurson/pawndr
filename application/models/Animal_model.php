<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Animal_model extends CI_Model {

        public function __construct() {
            parent::__construct();
        }

        var $dummyAnimals = [
                ['id' => 1, 
                'name' => 'James',
                'description' => 'A domesticated carnivorous mammal that typically has a long snout, an acute sense of smell, and a barking, howling, or whining voice.',
                'image_url' => 'https://th.bing.com/th/id/R.1769fc946efb589c2d5a8967cc3ce413?rik=5CFGX%2bypFTGEUg&riu=http%3a%2f%2fwww.publicdomainpictures.net%2fpictures%2f50000%2fvelka%2fgolden-retriever-dog-1370773977VyS.jpg&ehk=buPtMWyhKNSLmjFTl0UmLGcrLBvHmBElUWcaOSwrlFs%3d&risl=&pid=ImgRaw&r=0',
                'breed' => 'Labrador Retriever',
                'age' => 3,
                'sex' => 'Male',
                'type' => 'Dog',
                'owner_id' => 1,
                'created_at' => '2024-01-01 12:00:00',
                'updated_at' => '2024-01-01 12:00:00'],
                ['id' => 2, 'name' => 'Cow', 'description' => 'A domesticated bovine animal commonly raised for meat and milk.', 'image_url' => 'https://example.com/cow.jpg', 'breed' => 'Holstein', 'age' => 5, 'sex' => 'Female', 'type' => 'Cow', 'owner_id' => 2, 'created_at' => '2024-01-01 12:00:00', 'updated_at' => '2024-01-01 12:00:00'],
                ['id' => 3,
                 'name' => 'Caroline',
                 'description' => 'A domesticated carnivorous mammal that typically has a long snout, an acute sense of smell, and a barking, howling, or whining voice.',
                 'image_url' => 'https://bestprotectiondogs.org/wp-content/uploads/2020/12/english-cream.jpg',
                 'breed' => 'Golden Retriever',
                 'age' => 4,
                 'sex' => 'Female',
                 'type' => 'Dog',
                 'owner_id' => 3,
                 'created_at' => '2024-01-01 12:00:00',
                 'updated_at' => '2024-01-01 12:00:00']
            ];

        public function get_all_animals() {
            // return $this->db->get('animals')->result_array();
            return $this->dummyAnimals;
        }

        public function get_animal($id) {
            // return $this->db->get_where('animals', ['id' => $id])->row_array();
            foreach ($this->dummyAnimals as $animal) {
                if ($animal['id'] == $id) {
                    return $animal;
                }
            }
            return null;
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