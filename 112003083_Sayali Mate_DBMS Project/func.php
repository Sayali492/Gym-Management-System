<?php
$conn = mysqli_connect("localhost", "root", "", "gym", 3307);
if (isset($_POST['login_submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select * from admin_login where admin_username='$username' and admin_password='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        header("Location:home.php");
    } else {
        echo "<script>alert('Incorrect username or password!')</script>";
        // header("Location:index.php");
        echo "<script>window.open('index.php','_self')</script>";
    }
}
if (isset($_POST['pat_submit'])) {
    // $fname = $_POST['first_name'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $email = $_POST['email'];
    $dateofbirth = $_POST['dateofbirth'];
    // $userid = $_POST['userid'];
    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $typeid = $_POST['typeid'];
    $joiningdate = $_POST['joining_date'];
    $enddate = "";
    if ($typeid == 1) {
        // $d = strtotime("today");
        // $joiningdate = date("Y-m-d", $d);
        $d = strtotime("$joiningdate +3 Months");
        $enddate = date("Y-m-d", $d);
        // $end_date=$joiningdate;
    } elseif ($typeid == 2) {
        // $d = strtotime("today");
        // $joiningdate = date("Y-m-d", $d);
        $d = strtotime("$joiningdate +6 Months");
        $enddate = date("Y-m-d", $d);
    } elseif ($typeid == 3) {
        // $d = strtotime("today");
        // $joiningdate = date("Y-m-d", $d);
        $d = strtotime("$joiningdate +12 Months");
        $enddate = date("Y-m-d", $d);
    }

    // $docapp = $_POST['docapp'];
    $query = "INSERT INTO `user`values('$gender','$street','$city','$pincode','$email','$dateofbirth','$joiningdate','$phone1','$typeid')";
    $query1 = "INSERT INTO `user`values('$gender','$street','$city','$pincode','$email','$dateofbirth','$joiningdate','$phone2','$typeid')";
    $query2 = "INSERT INTO `phone` VALUES('$phone1','$name')";
    $query3 = "INSERT INTO `phone` VALUES('$phone2','$name')";
    $query4 = "INSERT INTO `membership`  VALUES('$email','$joiningdate','$enddate')";
    // if (!empty(trim($phone2))) {
    //     $query2 = "INSERT INTO `phone` VALUES('$userid','$phone2')";
    // }
    $result = mysqli_query($conn, $query);
    $result1 = mysqli_query($conn, $query1);
    $result2 = mysqli_query($conn, $query2);
    $result3 = mysqli_query($conn, $query3);
    $result4 = mysqli_query($conn, $query4);




    if ($result && $result1 && $result2 && $result3 && $result4) {
        echo "<script>alert('Member added suucessfully')</script>";
        echo "<script>window.open('home.php','_self')</script>";
    }
}
if (isset($_POST['tra_submit'])) {
    $i_id = $_POST['i_id'];
    $i_name = $_POST['i_name'];
    $workout_id = $_POST['workout_id'];
    $query = "INSERT INTO INSTRUCTOR VALUES ('$i_id','$i_name')";
    $query1 = "INSERT INTO WORKOUT VALUES ('$i_id','$workout_id')";
    $result = mysqli_query($conn, $query);
    $result1 = mysqli_query($conn, $query1);
    if ($result && $result1) {
        echo "<script>alert('Trainer added.')</script>";
        echo "<script>window.open('home.php','_self')</script>";
    }
}
if (isset($_POST['pay_submit'])) {
    // $Payment_id = $_POST['Payment_id'];
    
    $email = $_POST['email'];
    $type_id = $_POST['type_id'];
    $amount ="";
    $paymentdate = $_POST['paymentdate'];
    if ($type_id == 1) {
        $amount=500;
        
    } elseif ($type_id == 2) {
        $amount=1000;
    } elseif ($type_id == 3) {
        $amount=1500;
    }
    $query = "INSERT INTO  payment values('$email','$type_id','$paymentdate')";
    $query1 = "INSERT INTO  payment_amount values('$email','$type_id','$amount')";
    $result = mysqli_query($conn, $query);
    $result1 = mysqli_query($conn, $query1);
    if ($result && $result1) {
        echo "<script>alert('Payment sucessfull.')</script>";
        echo "<script>window.open('home.php','_self')</script>";
    }
}
function get_member_details()
{
    global $conn;
    $query = "SELECT phone.name,user.gender,user.street,user.city,user.pincode,user.email,user.dateofbirth,user.joining_date,membership.end_date,phone.phone_no
    FROM ((user INNER JOIN phone ON user.phone_no=phone.phone_no) INNER JOIN membership ON user.joining_date=membership.joining_date)";
    // $query1 = "SELECT * from `user`";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        // $user_id = $row['user_id'];
        // $fname = $row['first_name'];
        $name = $row['name'];
        $gender = $row['gender'];
        $street = $row['street'];
        $city = $row['city'];
        $pincode = $row['pincode'];
        $email = $row['email'];

        $dateofbirth = $row['dateofbirth'];
        $joining_date = $row['joining_date'];
        $end_date = $row['end_date'];
        $phone = $row['phone_no'];
        echo "<tr>
        
          
        <td>$name</td>
        <td>$gender</td>
        <td>$street</td>
        <td>$city</td>
        <td>$pincode</td>
            <td>$email</td>
            <td>$dateofbirth</td>
            <td>$joining_date</td>
            <td>$end_date</td>
            <td>$phone</td>
           
        </tr>";
    }
}
function get_membership_details()
{
    global $conn;
    $query = "SELECT type_name,amount from `membership_details`";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        // $Package_id = $row['type_name'];
        $type_name = $row['type_name'];
        $amount = $row['amount'];
        echo "<tr>
    
        <td>$type_name</td>
            <td>$amount</td>
            
        </tr>";
    }
}
function get_trainer()
{
    global $conn;
    $query = "SELECT Instructor.i_id,Instructor.i_name,workout_plan.workout_name from 
    ((Instructor INNER JOIN WORKOUT ON Instructor.i_id=Workout.i_id) INNER JOIN WORKOUT_PLAN ON workout.workout_id=workout_plan.workout_id)";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $Instructor_id = $row['i_id'];
        $Name = $row['i_name'];
        $workout_name = $row['workout_name'];
        echo "<tr>
        <td>$Instructor_id</td>
        <td>$Name</td>
        <td>$workout_name</td>
            
            
        </tr>";
    }
}
function get_payment()
{
    global $conn;
    $query = "SELECT payment.email,payment.membership_type_id,payment_amount.amount,payment.payment_date from payment INNER JOIN payment_amount ON payment.membership_type_id=payment_amount.membership_type_id";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
        $email = $row['email'];
        $membership_type_id = $row['membership_type_id'];
        $amount = $row['amount'];
       
        $payment_date = $row['payment_date'];
        // $customer_name = $row['customer_name'];

        echo "<tr>
        <td>$email</td>
        <td>$membership_type_id</td>
        <td>$amount</td>
        
        <td>$payment_date</td>
       
            </tr>";
    }
}
