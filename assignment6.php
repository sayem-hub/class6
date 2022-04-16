<?php 
    /* 
        Question 01:
        You have purchased some items from a supershop. Purchase product array is given below-

        $purchased_products = array(
        		array('name' => 'banana',  'qty' => 10, 'total_price' => 550),
        		array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),
        		array('name' => 'orange',  'qty' => 7,    'total_price' => 600),
    	);
            How much product quantity you have purchased (total purchased qty = 67)
            Calculate the total amount of all purchased items (total amount = 2650 tk).
    */

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

?>