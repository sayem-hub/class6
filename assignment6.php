<?php 
    /*  Question 01:
        You have purchased some items from a supershop. Purchase product array is given below-

        $purchased_products = array(
        		array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
        		array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
        		array('name' => 'orange',  'qty' => 7,    'total_price' => 600),
    	);
            How much product quantity you have purchased (total purchased qty = 67)
            Calculate the total amount of all purchased items (total amount = 2650 tk). */

              echo "<h3>Question-1: Finding total purchased products and total amount from multidimensional array </h3>"; //HTML Headline
              echo "<hr/>"; //HTML horizontal line

            $purchased_products = array(
                array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
                array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
                array('name' => 'orange',  'qty' => 7,    'total_price' => 600),
                );

                    $total_qty  =  0;
                    $total_amount  = 0;

                foreach($purchased_products as $key => $qty) {
   
                        $total_qty += $qty ['qty'];
                    }
                        echo "Total purchased qty = ". $total_qty . " Pcs". "<br>";

                        foreach ($purchased_products as $key => $price) {
                            $total_amount += $price ['total_price'];
                        }

                        echo "Total amount = " .$total_amount. " Tk.";
                        /*Output 
                        Total purchased qty = 67 Pcs
                        Total amount = 2650 Tk.*/


                         /*  Question 02: 
            You have two array of emails, these are given below-
            $first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
            $second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];
            You have to make a single array from this two arrays
            And don’t keep any value in multiple time */

              echo "<h3>Question-2: Making single and unique array from multiple arrays </h3>"; //HTML Headline
              echo "<hr/>"; //HTML horizontal line

             $first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
             $second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];

            $single_array = array_merge ($first_email_array, $second_email_array);

            $unique_array = array_unique($single_array);

            echo "<pre>";
            print_r ($unique_array);
            echo "</pre>";

            /* Output: Array
                            (
                                [0] => abc@gmail.com
                                [1] => xyz@gmail.com
                                [2] => demo@gmail.com
                                [3] => efg@gmail.com
                                [5] => dummy@gmail.com
                            )*/


                              /*  Question 03:
	                                $citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );
                                    Split this given array into chunks 4 */

                                     echo "<h3>Question-3: Split given array into chunks 4 </h3>"; //HTML Headline
                                     echo "<hr/>"; //HTML horizontal line

                                    $citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );

                                    echo "<pre>";
                                    print_r(array_chunk($citylist, 4, true));
                                    echo "</pre>";

            /* Output: Array
                                    (
                                        [0] => Array
                                            (
                                                [0] => Black Canyon City
                                                [1] => Chandler
                                                [2] => Flagstaff
                                                [3] => Gilbert
                                            )

                                        [1] => Array
                                            (
                                                [4] => Glendale
                                                [5] => Globe
                                                [6] => Mesa
                                                [7] => Miami
                                            )

                                        [2] => Array
                                            (
                                                [8] => Phoenix
                                                [9] => Peoria
                                                [10] => Prescott
                                                [11] => Scottsdale
                                            )

                                        [3] => Array
                                            (
                                                [12] => Sun City
                                                [13] => Surprise
                                                [14] => Tempe
                                                [15] => Tucson
                                            )

                                        [4] => Array
                                            (
                                                [16] => Wickenburg
                                            )

                                    )*/
?>