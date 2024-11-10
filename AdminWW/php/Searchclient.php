<?php include("header.php"); ?>

<!-- Search Books section -->
<div id="mainContent" style="width: 100%">
    <div id="bodyContent" style="background-color: white; padding: 20px; border-radius: 8px; margin: 20px auto; width: 70%;">
        <div id="header" style="border-bottom: 2px solid #DDEEFF; display: block; height: 75px; padding-top: 25px; text-align: center; width: 100%">
            <h2> Search Books </h2>
        </div>

        <?php
        //get wsdl from registry table
        include("connect.php");
        if (!$conn->connect_error) {
            //echo "Connected to db";

            //change to the supplier chosen by user
            $srchkey = $_POST["supname"];
            //$srchkey="Banbury";

            $sqlQuery = "SELECT * FROM `registry` WHERE supid = '$srchkey';";//='$srchkey';";
            $result = $conn->query($sqlQuery);
            if ($result) {
                //Record found
                $row = $result->fetch_assoc();
                $wsdl_url = $row["wsdlurl"];
                //echo $wsdl_url;

                // SOAP Request

                //$wsdl_url = "http://localhost/WORDSWORTH/Banbury/service.wsdl";
                $client = new SoapClient($wsdl_url);

                $srchtxt = trim($_POST['txttitle']);
                $category = trim($_POST['txtcategory']);
                $author = trim($_POST['txtauthor']);
                $price = trim($_POST['txtprice']);

                // Execute the web service function defined in service.php on the web service server
                try {
                    $returnedData = $client->SearchAllBook($srchtxt, $category, $author, $price, array("trace" => 1, "exception" => 0));
                    //echo $returnedData;

                    libxml_use_internal_errors(true); // to catch XML conversion error

                    $res = simplexml_load_string($returnedData);

                    if ($res === false) {
                        echo "Failed loading XML: ";
                        foreach (libxml_get_errors() as $error) {
                            echo "<br>", $error->message;
                        }
                    } else { // Valid XML, Display the returned value
                        //echo "<pre>";
                        //print_r($res);// shows objects if conversion succeeded else nothing

                        // Display the returned value
                        echo "<table border=1 class=\"w3-table-all w3-hoverable\" style=\"width: 100%;\">
                            <tr class=\"w3-light-grey w3-hover-green\"><th>BOOK NAME</th><th>PRICE</TH><th>AUTHOR</TH></tr>";

                        foreach ($res->BOOK as $b) {
                            $x = trim($b->BNAME);
                            echo "<tr class=\"w3-hover-blue\"><td>$x</td><td>$b->PRICE</td><td>$b->AUTHOR</td></tr>";
                        }
                        echo "</table>";
                    }//Valid XML

                    libxml_use_internal_errors(false);
                } catch (SoapFault $soapFault) {
                    var_dump($soapFault);
                    echo "$client->__getLastRequest()<br/>";
                    echo "$client->__getLastResponse()<br/>";
                }
            }// supplier found
        }//db connected
        ?>
    </div>
</div>

<?php include("footer.php"); ?>
