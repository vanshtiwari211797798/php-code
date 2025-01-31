<?php

    // this is protected access modifier;

    class Test{
        protected $name = 'vansh';
        protected function demo(){
            echo "this is protected";
        }
        public function all(){
            echo $this->name."<br/>";
            echo $this->demo();
        }
    }

    // $data = new Test;
    // $data->all();

    class childCls extends Test{
        function hello(){
            echo "Hii";
            echo $this->all();
        }
    }
    $data = new childCls;
    $data->hello();
?>  