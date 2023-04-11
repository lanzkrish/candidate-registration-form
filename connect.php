<?php
 $firstName =$_POST['firstName'];
 $lastName = $_POST['lastName'];
 $dob = $_POST['dob'];
 $email = $_POST['email'];
 $fatherfirstName = $_POST['father-first-name'];
 $fatherlastName = $_POST['father-last-name'];
 $motherrfirstName = $_POST['mother-first-name'];
 $motherlastName = $_POST['mother-last-name'];
 $gender = $_POST['gender'];
 $nationality = $_POST['nationality'];
 $streetAddress = $_POST['street-address'];
 $city = $_POST['city'];
 $country = $_POST['countries'];
 $mobileno = $_POST['telephone-mobile'];
 $homeno = $_POST['telephone-home'];
 $hscname = $_POST['hscname'];
 $hscscore = $_POST['hscscore'];
 $sscname = $_POST['sscname'];
 $sscscore = $_POST['sscscore'];
 $currenteducation = $_POST['currenteducation'];
 $currentname = $_POST['currentname'];
 $currentscore = $_POST['currentscore'];
 $backlogs = $_POST['backlogs'];
 $passportphoto = $_POST['passportphoto'];
 $hscmarksheet = $_POST['hscmarksheet'];
 $sscmarksheet = $_POST['sscmarksheet'];
 $allsemarksheet = $_POST['allsemarksheet'];

 // Databse Connection
$conn = new mysqli('localhost','root','','test');
if ($conn->connect_error){
    die('connection Failed :'.$conn->connection_error);
    }else{
        $stmt = $conn->prepare("insert into registration(firstName, lastName, dob, email, fatherfirstName, fatherlastName, motherfirstName, motherlastName, gender, nationality, streetAddress, city, country, mobileno, homeno, hscname, hscscore, sscname, sscscore, currenteducation, currentname, currentscore, backlogs, passportphoto, hscmarksheet, sscmarksheet, allsemarksheet)
                values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")
        $stmt->bind_patam("sssssssssssssiisisissisbbbb",$firstName, $lastName, $dob, $email, $fatherfirstName, $fatherlastName, $motherfirstName, $motherlastName, $gender, $nationality, $streetAddress, $city, $country, $mobileno, $homeno, $hscname, $hscscore, $sscname, $sscscore, $currenteducation, $currentname, $currentscore, $backlogs, $passportphoto, $hscmarksheet, $sscmarksheet, $allsemarksheet);
        $stmt->execute();
        echo"Uploaded Successfully";
        $stmt->close();
    }
?>