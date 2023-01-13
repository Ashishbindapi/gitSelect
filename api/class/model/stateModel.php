<?php
    class stateModel
    {
        private $conn;

        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }
        
        public function allstate()
        {
            $sql = "SELECT * FROM states";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
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