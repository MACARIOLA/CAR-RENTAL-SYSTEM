<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Register Page </title>

      <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
   <form action="#" method="POST" class="asm-form" id="frmRegister" novalidate onsubmit="return validateForm(this)">
   <div class="asm-form__header">
     <br><br>
      <h1><center>Register Page</center></h1>
   </div>
   <div class="asm-form__body">
        <div class="asm-form__linkbox">
            Already member? <button type="button" class="asm-form__link" data-target="#frmSignIn"><a href="login.php">Login</a></button>
        </div>
         <div class="asm-form__inputbox">
                <!-- New input boxes for first name, last name, and middle initial -->
                <input class="asm-form__input" type="text" name="First_name" id="registerFirstName" required placeholder="First Name">
                <label class="asm-form__inputlabel" for="registerFirstName">First Name</label>
            </div>
            
            <div class="asm-form__inputbox">
                <input class="asm-form__input" type="text" name="Last_name" id="registerLastName" required placeholder="Last Name">
                <label class="asm-form__inputlabel" for="registerLastName">Last Name</label>
            </div>
            
            <div class="asm-form__inputbox">
                <input class="asm-form__input" type="text" name="MI" id="registerMI" placeholder="MI (Optional)">
                <label class="asm-form__inputlabel" for="registerMI">MI (Optional)</label>
            </div>
        <div class="asm-form__inputbox">
          <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 64H48C21.49 64 0 85.49 0 112v288c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V112c0-26.51-21.49-48-48-48zm0 48v40.805c-22.422 18.259-58.168 46.651-134.587 106.49-16.841 13.247-50.201 45.072-73.413 44.701-23.208.375-56.579-31.459-73.413-44.701C106.18 199.465 70.425 171.067 48 152.805V112h416zM48 400V214.398c22.914 18.251 55.409 43.862 104.938 82.646 21.857 17.205 60.134 55.186 103.062 54.955 42.717.231 80.509-37.199 103.053-54.947 49.528-38.783 82.032-64.401 104.947-82.653V400H48z"/></svg>
            <input class="asm-form__input validate" data-validation="regex" data-regex="^\S+@\S+\.\S+$" type="email" name="email" id="registerEmail" required placeholder="email" required>
            <label class="asm-form__inputlabel" for="registerEmail">Email</label>
            <div class="asm-form__error">Invalid Email</div>
        </div>
        <div class="asm-form__inputbox">
          <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M476.5 22.9L382.3 1.2c-21.6-5-43.6 6.2-52.3 26.6l-43.5 101.5c-8 18.6-2.6 40.6 13.1 53.4l40 32.7C311 267.8 267.8 311 215.4 339.5l-32.7-40c-12.8-15.7-34.8-21.1-53.4-13.1L27.7 329.9c-20.4 8.7-31.5 30.7-26.6 52.3l21.7 94.2c4.8 20.9 23.2 35.5 44.6 35.5C312.3 512 512 313.7 512 67.5c0-21.4-14.6-39.8-35.5-44.6zM69.3 464l-20.9-90.7 98.2-42.1 55.7 68.1c98.8-46.4 150.6-98 197-197l-68.1-55.7 42.1-98.2L464 69.3C463 286.9 286.9 463 69.3 464z"/></svg>
          <input class="asm-form__input validate" data-validation="regex" data-regex="^[+]{1}[0-9]{9,12}" type="tel" name="phone" id="registerPhone" required placeholder="phone" required>
          <label class="asm-form__inputlabel" for="registerPhone">Phone</label>
          <div class="asm-form__error">Please enter phone in valid international format +XXXXXXXXXXXX</div>
        </div>
        <div class="asm-form__inputbox">
          <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M320 48c79.529 0 144 64.471 144 144s-64.471 144-144 144c-18.968 0-37.076-3.675-53.66-10.339L224 368h-32v48h-48v48H48v-96l134.177-134.177A143.96 143.96 0 0 1 176 192c0-79.529 64.471-144 144-144m0-48C213.965 0 128 85.954 128 192c0 8.832.602 17.623 1.799 26.318L7.029 341.088A24.005 24.005 0 0 0 0 358.059V488c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24v-24h24c13.255 0 24-10.745 24-24v-20l40.049-40.167C293.106 382.604 306.461 384 320 384c106.035 0 192-85.954 192-192C512 85.965 426.046 0 320 0zm0 144c0 26.51 21.49 48 48 48s48-21.49 48-48-21.49-48-48-48-48 21.49-48 48z"/></svg>
          <input class="asm-form__input validate" data-validation="regex" data-regex=".{6,}" type="password" name="password" id="registerPassword" required placeholder="password" required>
          <label class="asm-form__inputlabel" for="registerPassword">Password</label>
          <svg class="asm-form__icon append" data-action="toggle-show-password" data-input="#registerPassword" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"/></svg>
          <div class="asm-form__error">Password must be more than 6 symbols</div>
        </div>
        <div class="asm-form__inputbox">
          <svg class="asm-form__icon prepend" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M320 48c79.529 0 144 64.471 144 144s-64.471 144-144 144c-18.968 0-37.076-3.675-53.66-10.339L224 368h-32v48h-48v48H48v-96l134.177-134.177A143.96 143.96 0 0 1 176 192c0-79.529 64.471-144 144-144m0-48C213.965 0 128 85.954 128 192c0 8.832.602 17.623 1.799 26.318L7.029 341.088A24.005 24.005 0 0 0 0 358.059V488c0 13.255 10.745 24 24 24h144c13.255 0 24-10.745 24-24v-24h24c13.255 0 24-10.745 24-24v-20l40.049-40.167C293.106 382.604 306.461 384 320 384c106.035 0 192-85.954 192-192C512 85.965 426.046 0 320 0zm0 144c0 26.51 21.49 48 48 48s48-21.49 48-48-21.49-48-48-48-48 21.49-48 48z"/></svg>
          <input class="asm-form__input validate" data-validation="match" data-target="#registerPassword" type="password" name="password" id="registerPasswordRetry" required placeholder="repeat password" required>
          <label class="asm-form__inputlabel" for="registerPasswordRetry">Repeat Password</label>
          <svg class="asm-form__icon append" data-action="toggle-show-password" data-input="#registerPasswordRetry" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 144a110.94 110.94 0 0 0-31.24 5 55.4 55.4 0 0 1 7.24 27 56 56 0 0 1-56 56 55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z"/></svg>
          <div class="asm-form__error">Passwords are mismatch</div>
        </div>
    
        </div> 
        <?php
include('con_db.php');

if (isset($_POST['Button'])) {
    // Get the values from the form
    $passw = $_POST['password'];
    $Fname = $_POST['First_name'];
    $Lname = $_POST['Last_name'];
    $MI = $_POST['MI'];
    $Email = $_POST['email'];
    $Cont = $_POST['phone'];

    // Check if the Email already exists in customers_tbl
    $check_query = "SELECT * FROM customers_tbl WHERE Email = '$Email'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // User already exists
        echo "Error: User with Email $Email already exists.";
    } else {
        // User does not exist, proceed to insert the data
        // Create the SQL query
        $sql = "INSERT INTO customers_tbl ( First_name, Last_name, MI, Email, Contact_number, Password) VALUES ( '$Fname', '$Lname', '$MI', '$Email', '$Cont', '$passw')";

        // Execute the query
        $result = mysqli_query($conn, $sql);

        // Check if the query was successful
        if ($result) {
            echo "Data inserted successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    echo "Form not submitted.";
}
?>
    </div>

    
    <div class="asm-form__footer">
            <button class="asm-form__btn" id="registerSubmit" name="Button" type="submit">Register</button>
            <br>
        </div>
    </div>
 </form>
 <script src="./js/script2.js"></script>
 
  </body>
</html>