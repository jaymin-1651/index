<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data entry</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Merriweather&family=Pacifico&family=Poppins:wght@100&family=Rubik:wght@300;400&family=Tilt+Prism&display=swap"
        rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: inherit;
            background-color: rgb(219, 174, 174);
            align-items: center;
            background: url('4.jpg');
            background-color: wheat;
            background-repeat: repeat;
            background-attachment: fixed;
            background-size: cover;
            /* height:100vh; */
            width: auto;
            font-family: 'Merriweather', serif;


        }

        label {
            font-size: 26px;
            color: white;
        }

        .text {
            height: 60px;
            width: 100%;
            margin-top: 5px;
            font-size: 37px;
            border-radius: 10px;
            border: 2px solid;
            margin-bottom: 23px;
            filter: brightness();
        }

        .size {
            font-size: 23px;
        }

        .btn {
            height: 67px;
            font-size: 40px;
            width: 100%;
            border: 10px;
            border-radius: 30px;
            background-color: blue;
            color: white;
        }

        .Container {
            /* justify-content: center; */
            align-items: center;
            border: 4px solid white;
            height: 247%;
            padding: 20px;
            padding-left: 18px;
            padding-right: 25px;
            border-radius: 20px;
            margin-left: 3%;
            margin-right: 3%;
            margin-top: 3%;
            margin-bottom: 3%;

        }

        label {
            color: white;
            font-size: 50px;
        }

        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(-45deg, #FF416C,
                    /*#f46b52,*/
                    rgb(102, 193, 242), #FF416C, rgb(102, 193, 242));
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        #checkbox1

        /*,#checkbox2,#carmake,#bikemake */
            {
            size: 70px;
        }
    </style>
    <script>
        //  const scriptURL = 'https://script.google.com/macros/s/AKfycbxdjDw4jDqPkkNtpDiD7tS9PBEy2OVzlLU1QFsHb0eQnx2P0ojkwIebqWI0FIFMcCNE/exec'
        //     const form = document.forms['google-sheet']

        //     form.addEventListener('submit', e => {
        //       e.preventDefault()
        //       fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        //         .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
        //         .catch(error => console.error('Error!', error.message))
        //     })



        // // JavaScript to handle the checkbox event
        document.addEventListener('DOMContentLoaded', function () {
            const checkBox = document.POSTElementById('checkBox');
            const textboxContainer = document.querySelector('.textbox-container');

            checkBox.addEventListener('change', function () {
                if (checkBox.checked) {
                    textboxContainer.style.display = 'block';
                } else {
                    textboxContainer.style.display = 'none';
                }
            });
        });






    </script>
</head>

<body>
    <form class="Container" action="#" method="POST">
        <div>
            <!-- <div>
                <label for="date">Enter Date:</label>
                <br>
                <input type="date" name="date" id="date" class="text">
            </div>
            <br> -->
            <div class="animated-background"></div>
            <div class="content">
            </div>
            <div><label for="name"> Name:</label>
                <br><input type="text" placeholder="Enter name" name="name" id="name" class="text">
            </div>
            <br>
            <div>
                <label for="number">Mobile No.:</label> <br>

                <input type="text" name="mobilenumber" id="number" placeholder="Mobil Number" class="text">
            </div>
            <br>
            <div>
                <label for="pro"> Product: </label><br>
                <label>
                    <input type="checkbox" id="checkBox1" value="Sales" name="product[]" />
                    Sales
                </label>

                <!-- Container for the text boxes -->
                <div class="textbox-container">
                    <input type="text" id="textBox1[]" placeholder="What Did You Sell To The Customer" size="40px"
                        class="text" name="WhatDidYouSellToTheCustomer?" />
                    <br><br>
                    <input type="text" id="textBox2[]" placeholder="Tyre Serial No." class="text" name="tyreserialno" />
                </div>




                <br>
                <input type="checkbox" name="product[]" value="Service" id="checkbox2"><label
                    for="service">Service</label>
                <br>
                <select name="drop_1" class="text">
                    <option value="----">Select</option>
                    <option value="car wash">Car Wash</option>
                    <option value="bike wash">Bike Wash</option>
                    <option value="alignment balence">Alignment Balence</option>
                </select>

            </div>
            <br>
            <DIV>
                <label>Quantity:</label> <br>
                <select name="drop_2" class="text">
                    <option value="----">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </DIV>
            <br>
            <div>

                <label for="vehicle No.">Vehicle No.:</label>
                <br>
                <input type="text" name="vehicleno" placeholder="Vehicle No." class="text">
                <br><br>

                <BR>
                <input type="checkbox" name="make[]" id="carmake" value="carmake"><label for="Car make">Car
                    Make:</label>
                <br>
                <select name="drop_3" id="Car make" class="text">

                    <option name="carmake1[]" value="----">Select</option>
                    <option name="carmake1[]" value="Maruti Suzuki">Maruti</option>
                    <option name="carmake1[]" value="Hyundai">Hyundai</option>
                    <option name="carmake1[]" value="Tata Motors">Tata </option>
                    <option name="carmake1[]" value="Mahindra & Mahindra">Mahindra </option>
                    <option name="carmake1[]" value="Honda">Honda</option>
                    <option name="carmake1[]" value="Toyota">Toyota</option>
                    <option name="carmake1[]" value="Ford">Ford</option>
                    <option name="carmake1[]" value="Volkswagen">Volkswagen</option>
                    <option name="carmake1[]" value="Renault">Renault</option>
                    <option name="carmake1[]" value="Nissan">Nissan</option>
                    <option name="carmake1[]" value="Skoda">Skoda</option>
                    <option name="carmake1[]" value="Kia">Kia</option>
                    <option name="carmake1[]" value="MG Motor">MG Motor</option>
                    <option name="carmake1[]" value="Jeep">Jeep</option>
                    <option name="carmake1[]" value="BMW">BMW</option>
                    <option name="carmake1[]" value="Mercedes-Benz">Mercedes-Benz</option>
                    <option name="carmake1[]" value="Audi">Audi</option>
                    <option name="carmake1[]" value="Volvo">Volvo</option>
                    <option name="carmake1[]" value="Land Rover">Land Rover</option>
                    <option name="carmake1[]" value="Jaguar">Jaguar</option>

                </select>
                <br><br>
                <label for="model">Car Model:</label>
                <BR>
                <input type="text" id="model" placeholder="Car Model" class="text" name="carmodel">
                <br><br>

                <input type="checkbox" name="make[]" id="bikemake" value="bikemake"><label for="bike make">Bike
                    Make:</label>
                <!-- <input type="text" id="make" /> -->
                <br>
                <select name="drop_4" class="text">
                    <option value="-----">Select</option>
                    <option value="Bajaj Auto">Bajaj Auto</option>
                    <option value="Hero MotoCorp">Hero MotoCorp</option>
                    <option value="TVS Motor Company">TVS Motor Company</option>
                    <option value="Honda Motorcycle and Scooter India (HMSI)">Honda Motorcycle and Scooter India (HMSI)
                    </option>
                    <option value="Royal Enfield">Royal Enfield</option>
                    <option value="Yamaha Motor India">Yamaha Motor India</option>
                    <option value="Suzuki Motorcycle India">Suzuki Motorcycle India</option>
                    <option value="KTM India">KTM India</option>
                    <option value="Harley-Davidson India">Harley-Davidson India</option>
                    <option value="Mahindra Two Wheelers">Mahindra Two Wheelers</option>

                </select>

                <br><br>
                <label for="model">Bike Model:</label>
                <BR>
                <input type="text" id="model" placeholder="Bike Model" name="bikemodel" class="text">



            </div>
            <div>
                <br>
                <label for="kms">Kms:</label>
                <br>
                <input type="text" name="kms" placeholder="Kms" class="text">

            </div>
            <div>
                <br>
                <label for="payment methods">Payment Methods</label>
                <br><br>
                <div class="size">
                    <input type="checkbox" name="payment_type[]" name="upi" id="upi" value="UPI">
                    <label for="upi">UPI</label>
                    <br>
                    <input type="checkbox" name="payment_type[]" name="cash" id="cash" value="CASH">
                    <label for="cash">CASH</label>
                    <br><br>
                </div>
            </div>
            <div>
                <br>

                <label for="amount">Amount(₹):</label>
                <br>
                <input type="text" name="amount" id="amount" placeholder="Amount(₹)" class="text">
                <br><br>
                <label>Done By:</label>
                <br>
                <br>
                <div class="size">
                    <input type="checkbox" name="men_name[]" id="ashish" value="ashish">
                    <label for="ashish">Ashish</label>
                    <br>
                    <input type="checkbox" name="men_name[]" id="tushar" value="tushar">
                    <label for="tushar">Tushar</label>

                    <br>
                    <br>
                </div>




            </div>
            <!-- <button type="submit" name="submit" value="submit">submit now
            </button> -->
            <input type="submit" name="submit" value="Submit Now" class="btn">
            <br>
        </div>

    </form>

</body>

</html>
<div style="display:none;" id="php">
    <?php
    // error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database";

    $con = mysqli_connect($servername, $username, $password, $dbname);
    if ($con) {
        echo "connection ok";
    } else {
        echo "connection failed";
    }
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