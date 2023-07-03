<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "books";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    if($conn->connect_error)
    {
        die("Connection Failed : ".$conn->connect_error);
    }
    else
    {
        echo "Connection Successfull";
        $values = "select * from books_info";
        $res = mysqli_query($conn, $values);
        if($res)
        {
            echo '<table border=1>
                    <tr>
                        <th>Book Name</th>
                        <th>Author Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Date Of Purchase
                    </tr>';
            while($result = mysqli_fetch_array($res))
            {
                echo '<tr>';
                echo '<td>'.$result['name'].'</td>';
                echo '<td>'.$result['author'].'</td>';
                echo '<td>'.$result['price'].'</td>';
                echo '<td>'.$result['quantity'].'</td>';
                echo '<td>'.$result['date_of_purchase'].'</td>';
                echo '</tr>';
            }
            echo '</table>';
        }   
        else
        {
            echo "Error while Viewing";
        }
    }
    $conn->close();
?>