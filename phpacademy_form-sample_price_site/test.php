<?php
$row = 1;
if (($handle = fopen("phpacademy_form-sample_price_site/assets/price.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $num = count($data);
        echo "<p> $num полей в строке $row: <br /></p>\n";
        $row++;

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql = "INSERT INTO test (brend, rub, sex, grn) VALUES ('$data[3]','$data[5]','$data[6]','$data[14]')";
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "Бд удачно заповнена";
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }

            $conn = null;

        }
    }
    fclose($handle);



