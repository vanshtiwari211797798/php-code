<?php

    // // array_push -> add element of the last index
    // $arr = [1,2,3,54,6,5,6,"vansh"];
    // array_push($arr,[29,30,21,32]);
    // print_r($arr);

       // array_pop -> remove element of the last index
    //    $arr = [1,2,3,54,6,5,6,"vansh"];
    //    array_pop($arr);
    //    echo "<pre>";
    //    print_r($arr);

        // array_unshift -> add element of the first index
    //    $arr = [1,2,3,54,6,5,6,"vansh"];
    //    array_unshift($arr, "papa of rajeev");
    //    echo "<pre>";
    //    print_r($arr);

               // array_unshift -> remove element of the first index
            //    $arr = [1,2,3,54,6,5,6,"vansh"];
            //    array_shift($arr);
            //    echo "<pre>";
            //    print_r($arr);


            // Merge two array using using merge method of array
            // $ar = [1,2,3,4];
            // $ar2 = [5,6,7,8];
            // echo "<pre>";
            // print_r(array_merge($ar, $ar2));

            // convert vriable to array
            // $a  = "5";
            // $b = "21";
            // $c = 'vansh';
            // print_r(compact('a','b','c'));


            // sorting array into assending order
                // $ar = [1,3,8,9,5,6,5];
                // sort($ar);
                // print_r($ar);

                // sorting array into desending order
                // $ar = [1,6,9,5];
                // rsort($ar);
                // print_r($ar);

                // combine the array -> two array is required - > first array is key and second array is value type
                $key = range('a', 'f');
                $value = range(0,5);
                print_r(array_combine($key, $value));


?>  