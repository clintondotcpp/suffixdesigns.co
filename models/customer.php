<?php
    class Customer{
        private $db;

        public function __construct(){
            //This is a constructor, in php to create a constructor you do a double underscore like so"__" 
             //we instantiate our database
             $this->db = new Database;
        }

        public function addCustomer($data){
            //Prepare query
            $this->db->query('INSERT INTO customers(id, first_name, last_name, email) VALUES(:id, : first_name, :last_name, :email)');

            //Bind values
            $this->db->bind(':id', $data['id']);
            $this->db->bind(':first_name', $data['first_name']);
            $this->db->bind(':last_name', $data['last_name']);
            $this->db->bind(':email', $data['email']);

            //Execute it
            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function getCustomers(){
            $this->db->query('SELECT * FROM customers ORDER BY created_at DESC');
            
            $results = $this->db->resultset();

            return $results;
        }
    }

?>