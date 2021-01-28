<?php

include_once("app/config/database.php");
//var_dump($conn);

function setRegister()
{
<<<<<<< Updated upstream
    $today = date("Y-m-d H:i:s");
=======
    //$today = date("Y-m-d H:i:s");
>>>>>>> Stashed changes
    $dbConn = getDBConnection();
    $username = $_POST['user_name'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $password = md5($password);
// add other fields
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $course = implode(',', $_POST['course']);
    $gender = $_POST['gender'];


<<<<<<< Updated upstream
 $query = " INSERT INTO users (user_name, first_name, last_name, password,email,address,mobile,country,state,zip,course,gender,
 created, modified)
 VALUES('$username', '$first_name', '$last_name', '$password','$email ','$address','$mobile','$country','$state','$zip','$course','$gender'
 '$today', '$today')";
=======
 //$query = " INSERT INTO employee(user_name, first_name, last_name, password,email,address,mobile,country,state,zip,course,gender,created, modified)
 //VALUES('$username', '$first_name', '$last_name', '$password','$email ','$address','$mobile','$country','$state','$zip','$course','$gender','$today', '$today')";
 $query = " INSERT INTO employee(user_name, first_name, last_name, password,email,address,mobile,country,state,zip,course,gender)
 VALUES('$username', '$first_name', '$last_name', '$password','$email ','$address','$mobile','$country','$state','$zip','$course','$gender')";
>>>>>>> Stashed changes
 mysqli_query($dbConn, $query);

mysqli_close($dbConn);
    die("Done");
// return $result;
}

function setLogin() {
    $status = false; // login error
    $dbConn = getDBConnection();
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $password = md5($password);
    $remember_me = $_POST['remember_me'];
    $remember_me = (int) $remember_me;
<<<<<<< Updated upstream
    $query = " SELECT * FROM users WHERE status = 'Active' and deleted = 0 AND user_name = '$user_name' AND password = '$password'";
=======
    $query = " SELECT * FROM employee WHERE status = 'Active' and deleted = 0 AND user_name = '$user_name' AND password = '$password'";
>>>>>>> Stashed changes
    $query = mysqli_query($dbConn, $query);
    if($query){
        if(mysqli_num_rows($query) > 0 ){
            $result = mysqli_fetch_assoc($query);
            $user_name = $result['user_name'];
            $id = $result['id'];
            $_SESSION['username'] = $user_name;
            $_SESSION['id'] = $id;
            $status = true;
            if($remember_me === 1)
                setcookie (session_name(), session_id() ,time()+ ( 60 * 60 * 24 * 7), "/");
        }
    }else{
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND);
        echo mysqli_error($dbConn);die;
    }
    //mysqli_close($dbConn);
<<<<<<< Updated upstream

    return $status;
}

function getProfile()
{
    $result = null;
    $dbConn = getDBConnection();
    $id = $_SESSION["id"];
    $query = " SELECT * FROM users WHERE id = $id";
    $query = mysqli_query($dbConn, $query);
    mysqli_close($dbConn);
    if (mysqli_num_rows($query) > 0) {
=======
    if($query){
    if(mysqli_num_rows($query) > 0 ){
>>>>>>> Stashed changes
        $result = mysqli_fetch_assoc($query);
    }
    return $result;

}

function setProfile()
{
    $status = false;
    $today = date("Y-m-d H:i:s");
    $dbConn = getDBConnection();
    $id = $_SESSION["id"];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];

    $query = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email'
 , address = '$address', mobile = '$mobile', modified = '$today' WHERE id = $id";
    if(mysqli_query($dbConn, $query)){
        $status = true;
        if($remember_me === 1)
                setcookie (session_name(), session_id() ,time()+ ( 60 * 60 * 24 * 7), "/");
    }
<<<<<<< Updated upstream
=======
}else{
    $msg = mysqli_error($dbConn);
    file_put_contents('logs/error.log', $msg, FILE_APPEND);
    echo mysqli_error($dbConn);die;
}
    return $status;
}

function getProfile()
{
    $result = null;
    $dbConn = getDBConnection();
    $id = $_SESSION["id"];
    $query = " SELECT * FROM employee WHERE id = $id";
    $query = mysqli_query($dbConn, $query);
    mysqli_close($dbConn);
    if (mysqli_num_rows($query) > 0) {
        $result = mysqli_fetch_assoc($query);
    }
    return $result;

}

function setProfile()
{
    $status = false;
    //$today = date("Y-m-d H:i:s");
    $dbConn = getDBConnection();
    $id = $_SESSION["id"];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    

    




    //$query = "UPDATE employee SET first_name = '$first_name', last_name = '$last_name', email = '$email'
 //, address = '$address', mobile = '$mobile', WHERE id = $id";
 $query = "UPDATE employee SET first_name = '$first_name', last_name = '$last_name', email = '$email'
 , address = '$address', mobile = '$mobile', country = '$country', zip = '$zip', gender = '$gender', state = '$state' WHERE id = $id";
    if(mysqli_query($dbConn, $query)){
        $status = true;
    }
>>>>>>> Stashed changes
    mysqli_close($dbConn);

    return $status;
}

?>