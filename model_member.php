<?php

class model_member {
    private $nim;
    private $name;
    
    private $email;
    private $number;

    public function __construct($nim, $name, $email, $number) {
        $this->nim = $nim;
        $this->name = $name;
        $this->email = $email;
        $this->number = $number;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNumber() {
        return $this->number;
    }
}
?>