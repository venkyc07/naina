<?php
    session_start();
    include("../db_connection.php");
    
    // echo "<pre>";print_r($_POST);die;
    if(!empty($_POST['product_id']))
    {

        // echo "<pre>";print_r($_POST);die;
        $category_id = $_POST['category_id'];
        $product_name = $_POST['product_name'];
        $actual_price = $_POST['actual_price'];
        $offer_price = $_POST['offer_price'];
        $product_sizes = $_POST['product_sizes'];
        $product_description = $_POST['product_description'];
        $editor1 = $_POST['editor1'];
        $status = $_POST['status'];
        $imagePath = $_POST['imagePath'];

        $Get_image_name = $_FILES['product_image']['name'];

        if($imagePath == '') {
            if($Get_image_name != '') {
                $image_Path = "products/".basename($Get_image_name);
            } else {
                $image_Path = '';
            }
        } else {
            $image_Path = $imagePath;
        }

        $query= "update `products` set `cat_id` = '$category_id', `product_name` = '$product_name',`actual_price` = '$actual_price',
        `offer_price` = '$offer_price',`product_sizes` = '$product_sizes',`product_description` = '$product_description', `aditional_description` = '$editor1',
        `status` = '$status', `product_image` = '$image_Path' where product_id = ".$_POST['product_id'];
        
    } else {

        // echo "<pre>";print_r($_POST);die;
        $category_id = $_POST['category_id'];
        $product_name = $_POST['product_name'];
        $actual_price = $_POST['actual_price'];
        $offer_price = $_POST['offer_price'];
        $product_sizes = $_POST['product_sizes'];
        $product_description = $_POST['product_description'];
        $editor1 = $_POST['editor1'];
        $status = $_POST['status'];

        $Get_image_name = $_FILES['product_image']['name'];

        // echo "<pre>";print_r($Get_image_name);die;

        if($Get_image_name != '') {

            // echo "<pre>";print_r($Get_image_name);die;
            $image_Path = "products/".basename($Get_image_name);
        } else {
            
            // echo "<pre>";print_r($Get_image_name);die;
            $image_Path = '';
        }

        // echo "<pre>";print_r($image_Path);die;
        $query= "INSERT INTO `products` (`product_id`,`category_id`,`product_name`,`actual_price`,`offer_price`,`product_sizes`,`product_description`, `aditional_description`,`status`,`product_image`) 
        VALUES ('','$category_id', '$product_name','$actual_price','$offer_price','$product_sizes','$product_description','$editor1','$status', '$image_Path')";
        
    }

    if ($conn->query($query) === TRUE) {
        // echo '<script language="javascript">';
        // echo 'window.location.href = "../total_products.php";';
        // echo '</script>';
        if(!empty($Get_image_name)) {
            if (move_uploaded_file($_FILES['product_image']['tmp_name'], $image_Path)) {
                // echo "Your Image uploaded successfully";
                echo '<script language="javascript">';
                echo 'window.location.href = "../total_products.php";';
                echo '</script>';
            }else{
                // echo  "Not Insert Image";
                echo '<script language="javascript">alert("Something Went Wrong");';
                echo 'window.location.href = "../add_product.php";';
                echo '</script>';
            }
        } else {
            echo '<script language="javascript">';
            echo 'window.location.href = "../total_products.php";';
            echo '</script>';
        }

    } else {
        // die;
        echo '<script language="javascript">alert("Something Went Wrong");';
        echo 'window.location.href = "../add_product.php";';
        echo '</script>';
    }

?>