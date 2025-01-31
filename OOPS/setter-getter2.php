<?php
    class Test{
        public $name;
        public function demo($name1){
            echo $this->name=$name1."<br/>"; //setter
            echo "Hello Demo";
        }

        public function hello(){
            echo $this->name;
        }
    }

    $data = new Test;
    // $data->name="vansh";

    $data->demo("Vansh Tiwari"); 
   echo $data->name."<br/>";//getter
    $data->hello();
?>