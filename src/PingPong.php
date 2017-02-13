<?php

    class PingPonged
    {
        private $input;
        private $countNumbers =[];

        function __construct($input)
        {
            $this->input = $input;
        }

        function get() {
            if (property_exists($this, $property)) {
                return $this->$property;
            } else {
                return "That property does not exist.";
            }
        }

        function set() {
            if (property_exists($this, $property)) {
                $this[$property] = $value;
            } else {
                return "No.";
            }
        }

        function save() {
            array_push($_SESSION['pingpong_array'], $this);
        }

        function pingPongify($input) {
            for($i = 1; $i <=$input; $i++) {
                if ($i%15 == 0) {
                    array_push($this->countNumbers, "ping pong");
                } elseif ($i%5 == 0) {
                    array_push($this->countNumbers, "pong");
                } elseif ($i%3 == 0) {
                    array_push($this->countNumbers, "ping");
                }
                else {
                    array_push($this->countNumbers, $i);
                }

            }
            return $this->countNumbers;
        }

        static function getAll()
        {
            return $_SESSION['pingpong_array'];
        }

    }


 ?>
