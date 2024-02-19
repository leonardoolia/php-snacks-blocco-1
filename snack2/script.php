<?php 

if($_SERVER['REQUEST_METHOD'] == 'GET'){
$user_name = $_GET['name'];
$user_email = $_GET['email'];
$user_age = $_GET['age'];


$is_name_valid = strlen($user_name) > 3;
$is_email_valid = filter_var($user_email, FILTER_VALIDATE_EMAIL) !== false;
$is_age_valid = is_numeric($user_age);

if ($is_name_valid && $is_email_valid && $is_age_valid) {
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
}

}
?>