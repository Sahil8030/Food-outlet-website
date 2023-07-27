<html>
<head>
</head>


<body>
  <h1>Welcome to the next page</h1>
  <?php
  $servername = "localhost";
  $username = "root";
$password = "";
$dbname = "signup45";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) { 
  die("Connection failed: " . mysqli_connect_error());
}

  session_start();
  $user1=$_SESSION['username'];
  $query1="SELECT * FROM signup where username='$user1'";

  //  echo $query1;
   $result = mysqli_query($conn, $query1);
   
   $row=mysqli_fetch_array($result, MYSQLI_ASSOC);

 echo $row['name'];
  echo $row['age'];
   echo $row['mobile'];
   ?>
    <table border ='1' width='40%'>
        <tr>
            <th>Field</th>
            <th>Enter the value</th>
        </tr>

        <tr>
            <td>Name</td>
           
                <td><?php echo $row['name']?></td>
          
        </tr>

        <tr>
            <td>Age</td>
           
                <td><?php echo $row['age']?></td>
            
        </tr>


        <tr>
            <td>Email ID</td>
            
                <td><?php echo $row['email']?></td>
            
        </tr>

        <tr>
            <td>Username</td>
            
                <td><?php echo $row['username']?></td>
            
        </tr>

        <tr>
            <td>Password</td>
            
                <td><?php echo $row['password']?></td>
            
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="usubmit" id="usubmit" value="Signup"/></td>
            
        </tr>
    </table>
    </form>
</body>
</html>