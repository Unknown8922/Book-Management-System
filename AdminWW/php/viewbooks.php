<?php include("header.php"); ?>

<!-- Search Books section -->
<div id="mainContent" style="width: 100%">
    <div id="bodyContent" style="background-color: white; padding: 20px; border-radius: 8px; margin: 20px auto; width: 70%;">
        <div id="header" style="border-bottom: 2px solid #DDEEFF; display: block; height: 75px; padding-top: 25px; text-align: center; width: 100%">
            <h2> Search Books </h2>
        </div>

        <?php
        // get wsdl from registry table
        include("connect.php");

        if (!$conn->connect_error) {
            // Get the list of suppliers
            $sqlSuppliers = "SELECT * FROM `registry`";
            $resultSuppliers = $conn->query($sqlSuppliers);

            if ($resultSuppliers) {
                // Display supplier selection dropdown
                echo '<form method="post" action="">';
                echo '<label for="supname">Choose a supplier:</label>';
                echo '<select name="supname">';
                
                while ($rowSupplier = $resultSuppliers->fetch_assoc()) {
                    $supId = $rowSupplier["supid"];
                    $supName = $rowSupplier["supname"];
                    echo "<option value=\"$supId\">$supName</option>";
                }

                echo '</select>';
                echo '<input type="submit" value="Search">';
                echo '</form>';

                // Retrieve data from the form
                $selectedSupplier = $_POST["supname"];
                $srchtxt = trim($_POST['txttitle']);
                $category = trim($_POST['txtcategory']);
                $author = trim($_POST['txtauthor']);
                $price = trim($_POST['txtprice']);

                // SOAP Request
                $client = new SoapClient("http://localhost/Dubai_Books/Banbury/service.wsdl");

                // Execute the web service function
                try {
                    // Call the appropriate function based on user choice
                    if (!empty($selectedSupplier)) {
                        $returnedData = $client->ViewAllBook($srchtxt, $category, $author, $price, $selectedSupplier, array("trace" => 1, "exception" => 0));
                    } else {
                        $returnedData = $client->SearchAllBook($srchtxt, $category, $author, $price, array("trace" => 1, "exception" => 0));
                    }

                    // Display SOAP Response for debugging
                    echo "SOAP Response:<br>";
                    echo htmlentities($client->__getLastResponse()) . "<br><br>";

                    // Process the returned data
                    libxml_use_internal_errors(true); // to catch XML conversion error
                    $res = simplexml_load_string($returnedData);

                    if ($res === false) {
                        echo "Failed loading XML: ";
                        foreach (libxml_get_errors() as $error) {
                            echo "<br>", $error->message;
                        }
                    } else {
                        // Display the returned value
                        echo "<table border=1 class=\"w3-table-all w3-hoverable\" style=\"width: 100%;\">
                            <tr class=\"w3-light-grey w3-hover-green\"><th>BOOK NAME</th><th>PRICE</th><th>AUTHOR</th></tr>";

                        foreach ($res->BOOK as $b) {
                            $x = trim($b->BNAME);
                            echo "<tr class=\"w3-hover-blue\"><td>$x</td><td>$b->PRICE</td><td>$b->AUTHOR</td></tr>";
                        }
                        echo "</table>";
                    }

                    libxml_use_internal_errors(false);
                } catch (SoapFault $soapFault) {
                    var_dump($soapFault);
                    echo "$client->__getLastRequest()<br/>";
                    echo "$client->__getLastResponse()<br/>";
                }
            } else {
                echo "Error retrieving suppliers: " . $conn->error;
            }
        } else {
            echo "Error connecting to the database: " . $conn->connect_error;
        }
        ?>
    </div>
</div>

<?php include("footer.php"); ?>
