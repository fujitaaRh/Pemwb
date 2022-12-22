<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
 
    <form action="create.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Jenis</td>
                <td><input type="text" name="jenis"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $jenis = $_POST['jenis'];
        $harga = $_POST['harga'];
        
        // include database connection file
        include_once("connect.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO produk(nama,jenis,harga) VALUES('$nama','$jenis','$harga')");
        
        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>