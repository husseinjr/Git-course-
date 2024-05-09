<?php

session_start();

include('../config/dbcon.php');

function getAll($table) {
    global $con;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($con, $query);
}


function getById($table , $id) {
    global $con;
    $query = "SELECT * FROM $table WHERE id = '$id' ";
    return $query_run = mysqli_query($con, $query);
}

function getAllActive($table) {
    global $con;
    $query = "SELECT * FROM $table WHERE status='0' ";
    return $query_run = mysqli_query($con, $query);
}

function getAllOrders() {
    global $con;
    $query = "SELECT * FROM orders WHERE status='0' ";
    return $query_run = mysqli_query($con, $query);
}

function getOrdersHistory() {
    global $con;
    $query = "SELECT * FROM orders WHERE status !='0' ";
    return $query_run = mysqli_query($con, $query);
}

function checkTrackingNoValid($tracking_no){
    global $con;
    $query = "SELECT * FROM orders WHERE tracking_no = '$tracking_no' ";
    return mysqli_query($con, $query);
}
?>