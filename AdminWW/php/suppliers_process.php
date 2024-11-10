<?php

require_once('consb.php');

function get_order_details(){
    global $conn;

    $sql = "SELECT o.oid, o.bid, o.customer_id, o.delivery_address, o.order_date, d.qty FROM `order`o, `order_details`d WHERE o.oid= d.OID ORDER BY o.`order_date`";

    $result = mysqli_query($conn, $sql);
    if($result){
        while ($row=mysqli_fetch_array($result)) {
            $id = $row['oid'];
            $bname =  $row['bid'];
            $cname =  $row['customer_id'];
            $cadd =  $row['delivery_address'];
            $odate = $row['order_date'];
            $qty =  $row['qty'];

            echo "<tr>
                <td>$id</td>
                <td>$bname</td>
                <td>$qty</td>
                <td>$cname</td>
                <td>$cadd</td>
                <td>$odate</td>          
            </tr>";
        }
    } else {
        echo "<script>alert('The record cant be found')</script>";
        echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
}

function view_users(){
    require('cons.php');
    
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row=mysqli_fetch_array($result)) {
            $id =  $row['id'];
            $name = $row['name'];
            $address = $row['address'];
            $gender = $row['gender'];
            $phone = $row['phone_number'];
            $email =  $row['email'];
            $username =  $row['username'];
        
            echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$address</td>  
            <td>$gender</td> 
            <td>$phone</td>
            <td>$email</td>  
            <td>$username</td>  
            </tr>";
        }
    } else {
        echo "<script>alert('The record cant be found')</script>";
        echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
}

function view_comp(){
    require('cons.php');
    
    $sql = "SELECT * FROM user_comp";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row=mysqli_fetch_array($result)) {
            $id =  $row['id'];
            $name = $row['user'];
            $comp = $row['comp'];
            $supp = $row['supplier'];
        
        
            echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$comp</td>  
            <td>$supp</td> 
            
            </tr>";
        }
    } else {
        echo "<script>alert('The record cant be found')</script>";
        echo "<script>window.open('adminpanel.php', '_self')</script>";
    }
}



function search_by_date(){
    global $conn;
    if(isset($_POST['search'])){

    $date = $_POST['search'];
    $sql = "SELECT o.oid, o.bid, o.customer_id, o.delivery_address, o.order_date, d.qty FROM `order`o, `order_details`d WHERE o.oid= d.OID AND o.order_date = '$date' ORDER BY o.`order_date`";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row=mysqli_fetch_array($result)) {
        $id = $row['oid'];
        $bname =  $row['bid'];
        $cname =  $row['customer_id'];
        $cadd =  $row['delivery_address'];
        $odate = $row['order_date'];
        $qty =  $row['qty'];

        echo "<tr>
        <td>$id</td>
        <td>$bname</td>
        <td>$qty</td>
        <td>$cname</td>
        <td>$cadd</td>
        <td>$odate</td>          
        </tr>";
        }

    } else {
        echo "<script>alert('The record cant be found')</script>";
        echo "<script>window.open('doctor_details.php', '_self')</script>";
    }

    }

} 

function view_suppliers(){
    require('cons.php');
    
    $sql = "SELECT * FROM registry";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while ($row=mysqli_fetch_array($result)) {
            $id =  $row['supid'];
            $name = $row['supname'];
            $wsdlurl = $row['wsdlurl'];
            
        
            echo "<tr>
            <td>$id</td>
            <td>$name</td>
            <td>$wsdlurl</td>  
            </tr>";
        }
    } else {
        echo "<script>alert('The record cant be found')</script>";
        echo "<script>window.open('.php', '_self')</script>";
    }
}
?>
