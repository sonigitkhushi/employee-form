
<?php
$insert = false;
if(isset($_POST['name'])){
    $server = 'localhost';
    $username = 'root';
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("connection to this database failed due to " . mysqli_connect_error());
        echo " connected";


    }
    $fname=$_Post['firstname'];
    $lname=$_Post['lastname'];
    $email=$_Post['email'];
    $mobil=$_Post['mobile'];
    $gende=$_Post['gender'];
    $dob=$_Post['dob'];
    $addre=$_Post['address'];
    $city=$_Post['city'];
    $area=$_Post['pin'];
    $state=$_Post['state'];
    $quali=$_Post['qualification'];
    $speci=$_Post['specialization[]'];
    $pass=$_Post['password'];
    $file=$_Post['filename'];
    $sql = "INSERT INTO '`employee`. `emp` ( `fname`, `lname`, `email`, `mobile`, `gender`, `dob`, `address`, `city`, `area`, `state`, `quali`, `speci`, `password`, `file`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', ''), ( '$fname', '$lname', '$email', '$mobil', '$gende', '$dob', '$addre', '$city', ' $area', '$state', '$quali', '$speci', '$pass', '$file');";
}
?>



<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Responsive Registaration Form</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" lang="javascript" src="./responsiveRegistaration.js"></script>
    </head>
       
    <body>
        <h1>Employee Registaration Form</h1>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <label for="fname">First Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="fname" name="firstname" placeholder="Enter your first name">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="lname">Last Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="lname" name="lastname" placeholder="Enter your last name">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="email">Email:</label>
                </div>
                <div class="col-90">
                    <input type="email" id="email" name="email" placeholder="it should contain @,.">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="mobile">Mobile:</label>
                </div>
                <div class="col-90">
                    <input type="tel" id="mobile" name="mobile" placeholder="only 10 digits are allowed">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="gender" required>Gender:</label>
                </div>
                <div class="col-90">
                    <input type="radio" id="male" name="gender" value="male"/>Male
                    <input type="radio" id="female" name="gender" value="female"/>Female
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="dob">Date Of Birth:</label>
                </div>
                <div class="col-90">
                    <input type="Date" id="dob" name="dob">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="address">Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="city">City:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="city" name="city" maxlength="10">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="pincode">Area PIN:</label>
                </div>
                <div class="col-90">
                    <input type="number" id="pin" name="pin" maxlength="6">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="state">State:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="state" name="state">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="qualification" required >Qualification:</label>
                </div>
                <div class="col-90">
                    <select name="qualification" id="qualification">
                        <option value=" ">Select Qualification:</option>
                        <option value="Graduation">Graduation</option>
                        <option value="BTech.">BTech.</option>
                        <option value="MTech.">MTech.</option>
                        <option value="MCA">MCA</option>
                        <option value="BCA">BCA</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="specialization">Specialization:</label>
                </div>
                <div class="col-90">
                    <input type="checkbox" class="specialization" id="cs" name="specialization[]" value="Computer Science">Computer Science<br/>
                    <input type="checkbox" class="specialization" id="it" name="specialization[]" value="Information Technology">Information Technology<br/>
                    <input type="checkbox" class="specialization" id="ca" name="specialization[]" value="Computer Architecture">Computer Architecture<br/>
                    <input type="checkbox" class="specialization" id="tc" name="specialization[]" value="Tele Communication">Tele Communication<br/>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="password">Password:</label>
                </div>
                <div class="col-90">
                    <input type="password" id="password" name="password" maxlength="8">
                </div>
            </div>

            <div class="row">
                <div class="col-10">
                <label for="password">Adhaar card:</label>
                    <input type="file" id="myFile" name="filename">
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Registered" onclick="SaveStudentDetails()">
            </div>  
        </div>  
    </body>
</html>



<!-- INSERT INTO `emp` (`s/no`, `fname`, `lname`, `email`, `mobile`, `gender`, `dob`, `address`, `city`, `area`, `state`, `quali`, `speci`, `password`, `file`) VALUES ('', '', '', '', '', '', '', '', '', '', '', '', '', '', ''), ('1', 'textname', 'textname', 'this@this.com', '1111111111', 'female', '2013-01-04', 'this area', 'guna', '473001', 'MP', 'b.tech', 'CSE', '12345678', 'textfile'); -->


	
