<?php
$selected_radio = $_POST['sa'];
if($selected_radio == 's')
{
    $con = mysqli_connect("localhost","root","","project");
    if(!$con)
    {
        echo "Failed to connect to MYSQL: " . mysqli_connect_error();
    }
    $sname = $_POST['nm'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $pass = $_POST['pass'];
    $sql1 = "INSERT INTO student_details VALUES (NULL,'$sname','$email','$phone','$dob')";
    $sql2 = "INSERT INTO student_cred VALUES ('$email','$pass')";
    if(mysqli_query($con,$sql1) && mysqli_query($con,$sql2))
    {
        echo "<script>";
        echo"alert('Student Account Created Successfully!');";
        echo"window.location.href='http://localhost/alumni_econ/logins/login_sa.html';";
        echo"</script>";
    }
    mysqli_close($con);
}
else if ($selected_radio == 'a')
{
    $con = mysqli_connect("localhost","root","","project");
    if(!$con)
    {
        echo "Failed to connect to MYSQL: " . mysqli_connect_error();
    }
    $alname = $_POST['nm'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $pass = $_POST['pass'];
    $sql1 = "INSERT INTO alumni_details VALUES (NULL,'$alname','$email','$phone','$dob')";
    $sql2 = "INSERT INTO alumni_cred VALUES ('$email','$pass')";
    if(mysqli_query($con,$sql1) && mysqli_query($con,$sql2))
    {
        echo "<script>";
        echo"alert('Alumni Account Created Successfully!');";
        echo"window.location.href='http://localhost/alumni_econ/logins/login_sa.html';";
        echo"</script>";
    }
    mysqli_close($con);
}
else
{
    echo "<script>";
    echo"alert('Please select Student/Alumni');";
    echo"window.location.href=href='javascript:history.go(-1)';";
    echo"</script>";
}
?>