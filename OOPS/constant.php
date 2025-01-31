<?php
        class Test{
            const test = "Hello my name is vansh tiwari";
            function demo(){
                // self key is use inside of the class dont use outside of the class;
                echo self::test; //(we can use className or self keyword);
            }
        }

        // if web wants to use contast value the use scope resoulation operator (::);
        // Example -> className::constantName3
        $data = new Test;
        echo Test::test;
        echo "<br/>";
        $data->demo();
?>