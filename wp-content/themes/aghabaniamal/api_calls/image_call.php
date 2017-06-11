<?php
    session_start();

$images[]=array("first_image"=>$_SESSION['first_image'],
                "second_image"=>$_SESSION['second_image'],
                "third_image"=>$_SESSION['third_image'],
                "fourth_image"=>$_SESSION['fourth_image'],
                "white_color"=>$_SESSION['white_color'],
                "black_color"=>$_SESSION['black_color'],
                "red_color"=>$_SESSION['red_color'],
                "blue_color"=>$_SESSION['blue_color'],
                "green_color"=>$_SESSION['green_color'],
                "xl_size"=>$_SESSION['xl_size'],
                "large_size"=>$_SESSION['large_size'],
                "medium_size"=>$_SESSION['medium_size'],
                "small_size"=>$_SESSION['small_size'],
                "xs_size"=>$_SESSION['xs_size'],
                );
    header('Content-Type: application/json');
 		echo json_encode($images);
?>