<?php class pg extends CI_Model {
    
    private function construct(){
        parent::__construct();

    }

    private function destruct(){
        $this->db->close();
    }
   
    public function test_connection(){
        $this->db->query("
        
        CREATE TABLE `admin` (
            `id` int(3) NOT NULL,
            `first_name` varchar(25) NOT NULL,
            `last_name` varchar(25) NOT NULL,
            `email` varchar(255) NOT NULL,
            `mobile1` varchar(15) NOT NULL,
            `mobile2` varchar(15) NOT NULL,
            `password` char(60) NOT NULL,
            `role` char(5) NOT NULL,
            `created_on` datetime NOT NULL,
            `last_login` datetime NOT NULL,
            `last_seen` datetime NOT NULL,
            `last_edited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            `account_status` char(1) NOT NULL DEFAULT '1',
            `deleted` char(1) NOT NULL DEFAULT '0'
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        ");
    }

    
}   
 ?>