<?php
require("connectdb.php");
if ($_GET["type"] == 'data')
        $clusterQuery = "SELECT DISTINCT label FROM data ORDER BY label";
        $clusterResult = $connect->query($clusterQuery);

        if ($clusterResult && $clusterResult->num_rows > 0) {
            while ($clusterRow = $clusterResult->fetch_assoc()) {
                echo "<li><a class='dropdown-item' href='?label=" .$clusterRow['label']. "&type=data'>" . $clusterRow['label'] . "</a></li>";
            }
        }
        ?>