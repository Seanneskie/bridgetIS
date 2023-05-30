<?php
    session_start();

    $table__name = $_SESSION['table'];

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_stock = $_POST['product_stock'];
    $exp_date = $_POST['exp_date'];  
    $mana_date = $_POST['man_date'];  
    $quantity = $_POST['quantity'];  
    //$encrypted = password_hash($password, PASSWORD_DEFAULT);
    // ->RANDOMIZE PASSWORD IN DATABASE (41:00MINUTE IN YT VID)
    // Adding records ----

    try{
        $command = "INSERT INTO 
                               product_1 (product_name, product_price, product_stock, password, created_at, updated_at)
                           VALUES 
                               ('".$first_name."','".$last_name."','".$email."', '".$password."', NOW(), NOW())";
                           

        include('connection.php');

        $conn->exec($command);
        $response = [
            'success' => true,
            'message' => ' Account created successfully.' 
        ];
        
    } catch(PDOException $e) {
        
        $response = [
            'success' => false,
            'message' => $e->getMessage()
        ];
    }
    $_SESSION['response'] = $response;
    header('location: ../index.php')

?>


