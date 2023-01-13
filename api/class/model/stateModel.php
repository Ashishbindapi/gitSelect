<?php
    class stateModel
    {
        private $conn;

        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }
        
        public function allstate($id)
        {
            $sql = "SELECT * FROM states WHERE country_id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function save($data)
        {      
            $sql = "INSERT INTO states(state_name)
                    VALUES(?)";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$data['state_name']]); 
        }
    }