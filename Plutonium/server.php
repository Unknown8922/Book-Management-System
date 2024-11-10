<?php
//include ("connection.php");

// ============== Web Service Function =======================

function proceedNewRequestBook($bookid, $customerid, $bookQuantity, $cardNumber, $address)
{
    // connect to the DB and insert the record

    $conn = new mysqli("localhost", "root", "", "plutonium_db");
    if ($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
        
    }
    else
    {
        //Connected to db
        $todayDate = date("Y-m-d H:i:s");
         
       $sqlQuery =   "INSERT INTO `plutonium_db`.`order` (Oid, `bid`, `customer_id`, `card_number`, `delivery_address`, `order_Date`) VALUES (NULL, '$bookid', '$customerid', '$cardNumber', '$address', '$todayDate');";
            
        if ($conn->query($sqlQuery) === TRUE)
        {


        $sql = "SELECT max(Oid) MOID FROM `banbury_db`.`order`";
//echo $sql;
 $result = $conn->query($sql);

 if (!$result)
    {
     trigger_error('Invalid query: ' . $conn->error);
    }
    else if (is_object($result))
    {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        $ordid=$row["MOID"];    
        } 

    }
    else {
    echo "0 results";
    }

$sql ="INSERT INTO `plutonium_db`.`order_details` (`Oitem_ID`, `OID`, `BID`, `Qty`) VALUES
(NULL, $ordid, $bookid, $bookQuantity);";
if ($conn->query($sql) === TRUE) {
    echo "<br><br>record created successfully in OrderItem";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//Record Inserted
$xmlResult = <<<XML
<?xml version='1.0' encoding="UTF-8"?>
<ORDER_INSERT>
<ORDER>
<MSG>ORDER MADE SUCCESFULLY</MSG>
<CODE>0</CODE>
</ORDER>
</ORDER_INSERT>
XML;
}//Inserted order-3-c
else
{// ordertbl insert failed-3-o
$qr="Errormessage:". mysqli_error($conn);
$q=$conn->error;
$xmlResult = <<<XML
<?xml version='1.0' encoding="UTF-8"?>
<BOOK_INSERT>
<BOOK>
<MSG>$qr</MSG>
<CODE>$q</CODE>
</BOOK>
</BOOK_INSERT>
XML;
}//3-c
mysqli_close($conn);
return $xmlResult;
}// Connected -2-c
}//func close-1-c

//********************SEACRH MANY BOOK*********//
function SearchAllBook($srchkey, $category, $author, $price)
{
    $conn = new mysqli("localhost", "root", "", "banbury_db");
    if ($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);

    }
    
    /*$sqlQuery  = "SELECT title, price, author FROM `banbury_db`.`books` WHERE title like '%$srchkey%'"; 
    $sqlQuery .= (isset($price)     OR `price` LIKE '%$price%');
    $sqlQuery .= (isset($author)  OR `author` LIKE '%$price%');
*/

  $query = "SELECT title, price, author FROM `plutonium_db`.`books` WHERE "; 
    //$and = "0"; 
    
    if(trim($srchkey)!= '') { 
    //$and = "1"; 
    $query .= "title LIKE '%$srchkey%'"; 
    } 
     
     if(trim($category)!= '') { 
    //$and = "1"; 
    $query .= " or category LIKE '%$category%'"; 
    }  

     if(trim($author)!= '') { 
    //$and = "1"; 
    $query .= "or author LIKE '%$author%'"; 
    } 
    
    if(trim($price)!= '') { 
    //$and = "1"; 
    $query .= "or price LIKE '%$price%'"; 
    } 
         
    $query .= " ORDER BY title"; 

    $result = mysqli_query($conn,$query);
    if ($result)
    {
        $xmlResult = "<?xml version=\"1.0\"?>\n";
        $xmlResult .= "<BOOK_DETAIL>\n";
while($row = $result->fetch_assoc())
{

        $t=$row["title"];
        $pr=$row["price"];
        $au=$row["author"];
                //Record found

$xmlResult .= "\t<BOOK>\n";
$xmlResult .= "\t\t<BNAME>".$t."</BNAME>\n";
$xmlResult .= "\t\t<PRICE>".$pr."</PRICE>\n";
$xmlResult .= "\t\t<AUTHOR>".$au."</AUTHOR>\n";
$xmlResult .= "\t</BOOK>\n";
}
$xmlResult .= "</BOOK_DETAIL>\n";
}
else{
$xmlResult = <<<XML
<?xml version='1.0' encoding="UTF-8"?>
<BOOK_DETAIL>
<BOOK>
<BNAME>Errormessage</BNAME>
<PRICE>Search properly</PRICE>
</BOOK>
</BOOK_DETAIL>
XML;
}
return $xmlResult;
}//else $result->num_rows > 0



ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("http://localhost/Dubai_Books/Plutonium/service.wsdl");
$server->addFunction("proceedNewRequestBook");
$server->addFunction("SearchAllBook");
$server->handle();
?>
