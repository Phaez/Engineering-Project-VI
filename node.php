<?php
    class node {
        private $status;
        private $info;
        private $date;
        private $time;

        public function getStatus() {
            return $this->$status;
        }
        public function getInfo() {
            return $this->$info;
        }
        public function getDate() {
            return $this->$date;
        }
        public function getTime() {
            return $this->$time;
        }
        public function setStatus($input) {
            $this->$status = $input;
            return;
        }
        public function setInfo($input) {
            $this->$info = $input;
            return;
        }
        public function setDate($input) {
            $this->$date = $input;
            return;
        }
        public function setTime($input) {
            $this->$time = $input;
            return; 
        }

    }
?>