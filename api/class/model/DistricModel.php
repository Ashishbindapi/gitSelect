<?php
    class DistricModel
    {
        private $conn;

        public function __construct(PDO $conn)
        {
            $this->conn = $conn;
        }
        
        public function alldistricdata($id)
        {
            $sql = "SELECT * FROM district";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id['state_id']]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function save($data)
        {      
            $sql = "INSERT INTO district(district_name)
                    VALUES(?)";
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$data['distric_name']]); 
        }
    }