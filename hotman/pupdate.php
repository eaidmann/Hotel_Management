<!DOCTYPE HTML>

<HTML>

    <head>
    
        <title>TourisMY Hotel - Staff Update</title>
        <link rel="stylesheet" href="styling.css">
        
    </head>
    
    <header>
    
        <h1 align="center" class="titleheader">
        <img src="hotel-logo2.png" />
        </h1>
        <hr/>
    
    </header>
<body>
    
    <?php
        $db_HOST="localhost";
        $db_USER="root";
        $db_PASS="123456";
        
        $conn=mysqli_connect($db_HOST,$db_USER,$db_PASS) or die("Failed to connect to MySQL" .mysqli_error());
        mysqli_select_db($conn,"hotelmgmt");

        $query="Select * from package where PackageType='$_GET[id]'";

        $retval=mysqli_query($conn,$query);
    ?>
        
        <div align="center" class="stafflisting">
            <h2>Update Staff Detail</h2>
        <table>
            <tr>
            <th>Package Type</th>
            <th>Package Name</th>
            <th>Price</th>
            <th>Status</th>
            </tr>
<?php
        while($row=mysqli_fetch_array($retval)){
            echo "<tr><form action=pkgupdate.php?id=".$row['PackageType']." method='POST'>";
            echo "<td>".$row['PackageType']."</td>";
            echo "<td><input type=text name=packname value=".$row['PackageName']."></td>";
            echo "<td><input type=text name=packcost value=".$row['PackageCost']."></td>";
            echo "<td><input type='submit'></td>";
            echo "</form></tr>";
        }
            echo "<a href='package.php'>Exit</a>";
?>
        </table>
    </div>
    </body>
</HTML>