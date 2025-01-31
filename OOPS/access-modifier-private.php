<?php
// this is private access modifier
    class Test{
        private $a=10;
        private $b=40;

        public function test(){
            echo "Hello word";
            echo $this->a+$this->b;
        }
    }

    $data = new Test;
    $data->test();

    
    // class Test1 extends Test{
    //     public function mydemo(){
    //         echo "Hello bye";
    //     }
    // }

 
?>