<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data entry</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Merriweather&family=Pacifico&family=Poppins:wght@100&family=Rubik:wght@300;400&family=Tilt+Prism&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include "connection.php";
    include "index.php";
    ?>
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