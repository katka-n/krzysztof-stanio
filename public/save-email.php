<?php
/**
 * Created by PhpStorm.
 * User: kaska
 * Date: 1/25/17
 * Time: 3:16 PM
 */


$result = ['status' => -1, 'info' => 'empty post'];
if(isSet($_POST['email'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $result = ['status' => 1];
    } else {
        $result = ['status' => 0, 'info' => 'wrong email'];
    }
}
echo json_encode($result);