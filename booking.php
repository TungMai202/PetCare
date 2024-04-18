<?php
  include_once("config.php");
  $db = new DB();
  $conn = $db->conn();
  $get_product = mysqli_query($conn,'SELECT * FROM product');
?>

<?php
    if(isset($_POST['id']) && $_POST['id'] != '' && isset($_GET['action']) && $_GET['action'] == 'booking'){
        $id_product = isset($_POST['id']) ? $_POST['id'] : '';
        $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $type = isset($_POST['type']) ? $_POST['type'] : '';
        $result = mysqli_query($conn,"INSERT INTO `service`(`id_product`, `fullname`, `phone`, `email`, `type`) 
        VALUES ('$id_product','$fullname','$phone','$email','$type')");
        if($result){
            echo json_encode(['status' => true]);
        }else{
            echo json_encode(['status' => false]);
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == 'contact' && isset($_POST['name']) && $_POST['name'] != ''){
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';
        $result = mysqli_query($conn,"INSERT INTO `contact`(`name`, `email`, `message`) 
        VALUES ('$name', '$email', '$message')");
        if($result){
            echo json_encode(['status' => true]);
        }else{
            echo json_encode(['status' => false]);
        }
    }
?>