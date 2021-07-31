<html>
    <head>
        <title>
            Admin Add Position
        </title>
        <link rel="stylesheet" href="../../css/admin_navstyle.css" type="text/css">
        <link rel="stylesheet" href="../../css/admin_addelecstyle.css" type="text/css">
        <script src="https://kit.fontawesome.com/d03aab3bfa.js" crossorigin="anonymous"></script>
    </head>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vote";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
    <body>       
        <nav>
            <div id="logo">Admin Panel</div>
            <div id="cursor"> 
                <label for="drop" class="toggle">Menu</label>
                <input type="checkbox" id="drop" />
                <ul class="menu">
                    <li><a href="admin_dash.php">Dashboard</a></li>
                    <li>
                        <!--Drop Down -->
                        <label for="drop-1" class="toggle">Election</label>
                        <a href="#">Election</a>
                        <input type="checkbox" id="drop-1"/>
                        <ul>
                            <li><a href="admin_addelec.php">New Election</a></li>
                            <li><a href="admin_elecmanage.php">Election Management</a></li>
                        </ul> 
                    </li>
                    <li>
                        <label for="drop-2" class="toggle">Position</label>
                        <a href="#" class="active">Position</a>
                        <input type="checkbox" id="drop-2"/>
                        <ul>
                            <li><a href="admin_addpos.php" class="active">Add Position</a></li>
                            <li><a href="admin_delpos.php">Delete Position</a></li>
                        </ul>
                    </li>
                    <li>
                        <label for="drop-3" class="toggle">Voters</label>
                        <a href="#">Voters</a>
                        <input type="checkbox" id="drop-3"/>
                        <ul>
                            <li><a href="admin_addvoter.php">Add Voters</a></li>
                            <li><a href="admin_votermanage.php">Voter Management</a></li>
                        </ul>
                    </li>
                     <li>
                        <label for="drop-4" class="toggle">Candidate</label>
                        <a href="#">Candidate</a>
                        <input type="checkbox" id="drop-4"/>
                        <ul>
                            <li><a href="admin_addcand.php" >Add Candidate</a></li>
                            <li><a href="admin_delcand.php">Delete Candidate</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Voting Summary</a></li>
                    <li><a href="admin_notify.php">Notification</a></li>
                    <li><a href="admin_changepass.php">Change Password</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>  
        </nav>
      
        <div class="wrapper">
            <br/><h2>Add a New Position</h2><br/>
            <form action="../../back/admin1/addpos.php" method="post">
              <div class="tablecontainer" style="overflow-x:auto;">
                    <table align="center">
                        <thead>
                            <tr>
                                <th>Position</th>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                                <td><i class="fas fa-users"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter Position" name="pname" required></td>
                            </tr>
                            <tr>
                                <td><button type="submit" name="submit" value="Submit"><i class="fas fa-plus-circle"></i>&nbsp;Add&nbsp;Position</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
       <?php
         mysqli_close($conn);
       ?>          
        <div class="footer">A html, php & pure css project by Sagar Shanbhag & Thomas Ben Johnson</div>
    </body>
</html>
