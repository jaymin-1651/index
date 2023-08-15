<div style="display:none;" id="php">

<?php
if (@$_POST['submit']) {
        //     @$date = date($_POST['date']);
// echo $date;
    
        @$name = $_POST['name'];

        @$mobilenumber = $_POST['mobilenumber'];

        @$pro = $_POST['product'];
        // $pro1 = implode(" and ", $pro);
        // echo $pro1;
        foreach ($pro as $pro1) {
            echo $pro1;
        }


        @$WhatDidYouSellToTheCustomer = $_POST['WhatDidYouSellToTheCustomer?'];

        @$tyreserialno = $_POST['tyreserialno'];

        @$drop_1 = $_POST['drop_1'];

        @$drop_2 = $_POST['drop_2'];

        @$vehicleno = $_POST['vehicleno'];


        @$make = $_POST['make'];
        // $carmake1 = implode(" ",$carmake);
        foreach ($make as $make1) {
            echo $make1;
        }

        @$drop_3 = $_POST['drop_3'];

        @$carmodel = $_POST['carmodel'];

        //    
    
        @$drop_4 = $_POST['drop_4'];

        @$bikemodel = $_POST['bikemodel'];

        @$kms = $_POST['kms'];

        @$payment_type = $_POST['payment_type'];
        //     $payment_type1 = implode(" and ",$payment_type);
// echo $payment_type1;
        foreach ($payment_type as $payment_type1) {
            echo $payment_type1;
        }

        @$amount = $_POST['amount'];

        @$men_name = $_POST['men_name'];
        //     $men_name1 = implode(" and ",$men_name);
    
        // echo  $men_name1; 
        foreach ($men_name as $men_name1) {
            echo $men_name1;

        }



        $query = "INSERT INTO form values('$name','$mobilenumber','$pro1','$WhatDidYouSellToTheCustomer','$tyreserialno','$drop_1','$drop_2','$vehicleno','$carmake1','$drop_3','$carmodel','$drop_4','$bikemodel','$kms','$payment_type1','$amount','$men_name1')";


        $data = mysqli_query($con, $query);
        if ($data) {
            echo "data INTO database";
        } else {
            echo "failed";
        }
    } else {
        echo "<script>alert('ERROR:please fill the entire form ')</script>";
    }

    ?>
</div>