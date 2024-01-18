<?php
include 'config.php';

$id = '';
if(isset($_GET["id"])){
  $id = $_GET["id"];
}
$sql = "SELECT * FROM cars_tbl WHERE car_id = $id";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ImperialDrive | Booking</title>

      <!----------------
            FONTS
      ----------------->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

      <!----------------
          TAB ICON
      ----------------->
    <link rel="icon" href="./images/idlogo.png" type="image/x-icon">

      <!----------------
         BOOTSTRAP CSS
      ----------------->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

      <!----------------
           MAIN CSS
      ----------------->
    <link rel="stylesheet" href="css/style.css">
  </head>

<body>

    <!----------------
          MY CSS
     ----------------->
    <style>
        body {
            margin-top: 50px;
        }

        .site-navbar {
            position: fixed;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            z-index: 1000;
        }

        .transaction-box {
            background-color: white;
            box-shadow: 0px 25px 80px rgba(0, 0, 0, 0.5);
            border: 1px solid Gray;
            padding: 50px;
            border-radius: 5px;
        }

        #custName_row {
            width: 95px;
        }

        .location_row {
            width: 175px;
        }

        .zipcode_row {
            width: 100px;
        }

        .card-information-holder {
            border: 2px solid rgba(0, 0, 0, 0.301);
            padding: 10px;
            border-radius: 10px;
        }

        .cardTitle {
            display: flex;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            font-weight: bolder;
            height: 60px;
            margin-bottom: 10px;
        }

        .qrBox {
            box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
            height: 350px;
            width: 330px;
        }

        .gcashQrCode {
            border: 5px solid #297bfa;
            padding: 10px;
        }

        .mayaQrCode {
            border: 5px solid #459c5d;
            padding: 10px;
        }

        .form-row {
            border-bottom: 2px solid rgb(0, 0, 0, 0.2);
            margin-bottom: 10px;
        }

        .car-list-card {
            box-shadow: 0 0 0 1px gray, rgba(0, 123, 225, 0.65) 0px 4px 30px 2px, rgba(0, 123, 255, 0.08) 0px 1px 0px inset;
            
        }

        .ticket {
            box-shadow: 0 0 0 1px gray, rgba(0, 123, 225, 0.65) 0px 4px 30px 2px, rgba(0, 123, 255, 0.08) 0px 1px 0px inset;
            border-radius: 10px;
            height: 240px;
            padding: 5px;
            background-color: white;
            color: black;
        }

        .ticket-price {
            color: black;
            font-weight: bolder;
        }

        .ticket-title {
            color: black;
            font-style: italic;
            font-weight: bolder;
        }

        .ticket-label-row {
            width: 80px;
        }

        .ticket-label-2 {
            color: black;
            width: 80px;
        }

        .ticketLabel {
            padding-right: 8px;
        }

        .ticket-label,
        .transaction-form-titles {
            color: black;
            font-weight: bolder;
        }

        .zoom-out-image {
            transition: transform 0.3s ease-in-out;
        }

        .zoom-out-image:hover {
            transform: scale(1.02);
        }

        .zoom-out-image2 {
            transition: transform 0.3s ease-in-out;
        }

        .zoom-out-image2:hover {
            transform: scale(1.09);
        }

        .proceedbtn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            width: 5.5rem;
            text-align: center;
        }

        .proceedbtn:hover {
            background-color: #0056b3
        }

        .back-button {
            display: inline-block;
            position: fixed;
            top: 20px;
            left: 20px;
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            width: 5rem;
            text-align: center;
        }

        .back-button:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>



      <!----------------
         TRANSACTIONS
      ----------------->
  <div class="site-wrap" id="home-section">
    <div class="container">
      <div class="site-section">
        <div class="row d-flex">
          <div class="transaction-box col-md-6 col-lg-6">
            <form id="transactionForm">

              <!----------------
                 PERSONAL INFO
              ----------------->
              <div class="form-row">
                <div class="col-12 mb-3">
                  <h3 class="transaction-form-titles">Personal Information</h3>
                </div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" id="fname" placeholder="First Name" oninput="updateName()" required>
                </div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" id="mname" placeholder="Middle Name" oninput="updateName()" required />
                </div>
                <div class="form-group col-md-4">
                  <input type="text" class="form-control" id="lname" placeholder="Last Name"oninput="updateName()" required />
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="email" placeholder="Email" oninput="updateName()" required />
                </div>
                <div class="form-group col-md-6">
                  <input type="tel" class="form-control" id="phoneNo" placeholder="Phone No." oninput="updateName()" required />
                </div>

              <!----------------
                 PICKUP INFO
              ----------------->
                </div>
                  <div class="form-row">
                    <div class="col-12 mt-3 mb-3">
                      <h3 class="transaction-form-titles">Pickup Information</h3>
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" class="form-control" id="p_province" placeholder="Province" oninput="updateName()" required>
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" class="form-control" id="p_city" placeholder="City" oninput="updateName()" required>
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" class="form-control" id="p_zipcode" placeholder="ZipCode" oninput="updateName()" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="returnDateTime">Date/Time</label>
                    <input type="datetime-local" class="form-control" id="p_dateTime" oninput="updateName()" required>
                    </div>
                  </div>

              <!----------------
                 RETURN INFO
              ----------------->
                  <div class="form-row">
                    <div class="col-12 mt-3 mb-3">
                      <h3 class="transaction-form-titles">Return Information</h3>
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" class="form-control" id="r_province" placeholder="Province" oninput="updateName()" required />
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" class="form-control" id="r_city" placeholder="City" oninput="updateName()" required />
                    </div>
                    <div class="form-group col-md-4">
                      <input type="text" class="form-control" id="r_zipcode" placeholder="ZipCode" oninput="updateName()" required />
                    </div>
                    <div class="form-group col-md-6">
                      <label for="returnDateTime">Date/Time</label>
                      <input type="datetime-local" class="form-control" id="r_dateTime" oninput="updateName()" required />
                    </div>
                  </div>



              <!----------------
                PAYMENT METHOD
              ----------------->
                  <div class="form-row">
                    <div class="col-12 mt-3 mb-3">
                      <h3 class="transaction-form-titles">Payment Information</h3>
                    </div>
                    <div class="form-group col-md-12">
                      <label>Payment Method</label><br>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="paymentMethod" id="cash" value="cash" checked>
                            <label class="form-check-label" for="cash">Cash</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard" value="creditCard">
                            <label class="form-check-label" for="creditCard">Credit Card</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="paymentMethod" id="paypal" value="paypal">
                            <label class="form-check-label" for="paypal">Paypal</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="paymentMethod" id="gcash" value="gcash">
                            <label class="form-check-label" for="gcash">GCash</label>
                        </div>
                      </div>

                      <div class="card-information-holder">
                        <div id="creditCardFields" class="row form-group d-none p-1">
                          <div class="col-12 cardTitle">
                            <label for="cardNumber">Card Number</label>
                          </div>
                          <div class="col-3">
                            <input type="text" placeholder="XXXX" class="form-control" id="cardNumber" required />
                          </div>
                          <div class="col-6">
                            <input type="text" placeholder="XXXXXX" class="form-control" id="cardNumber" required />
                          </div>
                          <div class="col-3">
                            <input type="text" placeholder="XXXXX" class="form-control" id="cardNumber" required />
                          </div>
                          <div class="col-8">
                            <label for="expirationDate">Expiration Date</label>
                            <input type="date" class="form-control" id="expirationDate" required />
                          </div>
                          <div class="col-4">
                            <label for="cvc">CVC</label>
                            <input type="text" class="form-control" placeholder="XXXX" id="cvc" required />
                          </div>
                          <div class="col-12">
                            <label for="cardUserName">Name of Card User</label>
                            <input type="text" class="form-control" id="cardUserName" required />
                          </div>
                        </div>
                      </div>

                      <div id="mayaQrCodeFields" class="form-group col-md-12 d-none">
                        <center>
                          <div class="qrBox">
                            <div class="mb-4">
                              <h5><strong>GCash QR Code</strong></h5>
                            </div>
                            <img class="gcashQrCode zoom-out-image2" src="images/transactionsection_gcashQR.png">
                          </div>
                        </center>

                        </div>
                          <div id="gcashQrCodeFields" class="form-group col-md-12 d-none">
                            <center>
                              <div class="qrBox">
                                <div class="mb-4">
                                  <h5><strong>Paymaya QR Code</strong></h5>
                                </div>
                                <img class="mayaQrCode zoom-out-image2" src="images/transactionsection_mayaQR.png">
                              </div>
                            </center>
                          </div>
                        </div>

                        <div class="mt-5">
                          <div class="row">
                            <div class="form-group col-md-12 d-flex justify-content-end">
                              <a href="#"><button type="button" class="btn btn-outline-primary proceedbtn zoom-out-image2">Proceed</button></a>
                            </div>
                          </div>
                        </div>
                      </div>



              <!----------------
                  PICKED CAR
              ----------------->
                      <div class="col-md-6 col-lg-6 ">
                        <div class="position-fixed">
                          <div class="col-md-12 col-lg-12">
                            <div class="car-list-card listing d-block align-items-stretch zoom-out-image">
                              <div class="d-md-flex">
                                <?php
                                if(mysqli_num_rows($result) > 0) {
                                 while($rows = mysqli_fetch_assoc($result)) { ?>
                                <div class="listing-img h-100 mr-4">
                                  <img src="<?php echo $rows['image']; ?>" alt="Image" class="img-fluid">
                                </div>
                                <div class="listing-contents h-100">
                                  <h3><?php echo $rows["name"]; ?></h3>
                                <div class="rent-price">
                                  <strong>₱<?php echo $rows["price"]; ?></strong><span class="mx-1">/</span>day
                                </div>
                                <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                  <div class="listing-feature pr-4">
                                    <span class="caption">Body:</span>
                                    <span class="number"><?php echo $rows["car_type"]; ?></span>
                                  </div>
                                  <div class="listing-feature pr-4">
                                    <span class="caption">Doors:</span>
                                    <span class="number"><?php echo $rows["doors"]; ?></span>
                                  </div>
                                  <div class="listing-feature pr-4">
                                    <span class="caption">Passenger:</span>
                                    <span class="number"><?php echo $rows["capacity"]; ?></span>
                                  </div> 
                                </div>
                                <div>
                                  <p class="text-justify"><?php echo $rows["information1"];?></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

              <!----------------
                    TICKET
              ----------------->
                        <div class="col-md-12 col-lg-12 zoom-out-image">
                          <div class="ticket p-3">
                            <div class="row ">
                              <div class="col-6">
                                <h2 class="ticket-price">PRICE: ₱<?php echo $rows["price"]; ?></h2>
                                <?php
                                  }
                                }
                                ?>
                              </div>
                              <div class="col-6">
                                <h2 class="ticket-title">TICKET</h2>
                              </div>
                            </div>

                            <table>
                              <tr>
                                <td id="custName_row">Customer:</td>
                                <td class="ticket-text" id="cust_name"></div> </td>
                              </tr>
                            </table>

                            <table>
                              <tr>
                                <td class="ticketLabel">Pickup Place:</td>
                                <td class="location_row" id="pickup_province">Province</td>
                                <td class="location_row" id="pickup_city">City</td>
                                <td class="zipcode_row" id="pickup_zipcode">Zipcode</td>
                              </tr>
                              <tr>
                                <td class="ticketLabel">Date/Time:</td>
                                <td class="location_row" id="pickup_dateTime"></td>
                              </tr>
                              <tr>
                                <td class="ticketLabel">Return Place:</td>
                                <td class="location_row" id="return_province">Province</td>
                                <td class="location_row" id="return_city">City</td>
                                <td class="zipcode_row" id="return_zipcode">Zipcode</td>
                              </tr>
                              <tr>
                                <td class="ticketLabel">Date/Time:</td>
                                <td><div id="return_dateTime"></div></td>
                              </tr>
                            </table>
                          </div>
                        </div>

                        <a href="carspage.php" class="back-button zoom-out-image2">Back</a>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>    



      <!----------------
            MY JS
      ----------------->
    <script>
      function updateName() {
        var firstName = document.getElementById("fname").value;
        var middleName = document.getElementById("mname").value;
        var lastName = document.getElementById("lname").value;
        var pprovince = document.getElementById("p_province").value;
        var pcity = document.getElementById("p_city").value;
        var pzipcode = document.getElementById("p_zipcode").value;
        var pdateTime = document.getElementById("p_dateTime").value;
        var rprovince = document.getElementById("r_province").value;
        var rcity = document.getElementById("r_city").value;
        var rzipcode = document.getElementById("r_zipcode").value;
        var rdateTime = document.getElementById("r_dateTime").value;
        var fullName = firstName + " " + (middleName ? middleName + " " : "") + lastName;

        document.getElementById("cust_name").textContent = fullName;
        document.getElementById("pickup_province").textContent = " " + pprovince;
        document.getElementById("pickup_city").textContent = " " + pcity;
        document.getElementById("pickup_zipcode").textContent = " " + pzipcode;
        document.getElementById("return_province").textContent = " " + rprovince;
        document.getElementById("return_city").textContent = " " + rcity;
        document.getElementById("return_zipcode").textContent = " " + rzipcode;
        document.getElementById("pickup_dateTime").textContent = " " + pdateTime;
        document.getElementById("return_dateTime").textContent = " " + rdateTime;
      }

      document.querySelector('.card-information-holder').style.display = 'none';

      document.querySelectorAll('input[name="paymentMethod"]').forEach((radio) => {
        radio.addEventListener('change', () => {
          if (document.getElementById('creditCard').checked) {
            document.getElementById('creditCardFields').classList.remove('d-none');
            document.getElementById('gcashQrCodeFields').classList.add('d-none');
            document.getElementById('mayaQrCodeFields').classList.add('d-none');
            document.querySelector('.card-information-holder').style.display = 'block';
          } else if (document.getElementById('gcash').checked) {
            document.getElementById('mayaQrCodeFields').classList.remove('d-none');
            document.getElementById('creditCardFields').classList.add('d-none');
            document.getElementById('gcashQrCodeFields').classList.add('d-none');
            document.querySelector('.card-information-holder').style.display = 'none';
          } else if (document.getElementById('paypal').checked) {
            document.getElementById('gcashQrCodeFields').classList.remove('d-none');
            document.getElementById('mayaQrCodeFields').classList.add('d-none');
            document.getElementById('creditCardFields').classList.add('d-none');
            document.querySelector('.card-information-holder').style.display = 'none';
          } else {
            document.getElementById('creditCardFields').classList.add('d-none');
            document.getElementById('gcashQrCodeFields').classList.add('d-none');
            document.getElementById('mayaQrCodeFields').classList.add('d-none');
            document.querySelector('.card-information-holder').style.display = 'none';
          }
        });
      });
    </script>



      <!----------------
         BOOTSTRAP JS
      ----------------->
      <script src="js/jquery-3.3.1.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.sticky.js"></script>
      <script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.animateNumber.min.js"></script>
      <script src="js/jquery.fancybox.min.js"></script>
      <script src="js/jquery.easing.1.3.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/aos.js"></script>
  
        <!----------------
             MAIN JS
        ----------------->
      <script src="js/main.js"></script>
    </body>
  </html>
