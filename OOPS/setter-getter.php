<?php
    class Test{
        public $name;
        public function demo(){
            echo $this->name;
            echo "Hello Demo";
        }
    }

    $data = new Test;
    $data->name="vansh";
    $data->demo();
?>