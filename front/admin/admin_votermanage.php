<html>
    <head>
        <title>
            Admin Voter Management
        </title>
        <link rel="stylesheet" href="../../css/admin_navstyle.css" type="text/css">
        <link rel="stylesheet" href="../../css/admin_elecmanage.css" type="text/css">
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
                    <a href="#">Position</a>
                    <input type="checkbox" id="drop-2"/>
                    <ul>
                        <li><a href="admin_addpos.php">Add Position</a></li>
                        <li><a href="admin_delpos.php">Delete Position</a></li>
                    </ul>
                </li>
                <li>
                    <label for="drop-3" class="toggle">Voters</label>
                    <a href="#" class="active">Voters</a>
                    <input type="checkbox" id="drop-3"/>
                    <ul>
                        <li><a href="admin_addvoter.php">Add Voters</a></li>
                        <li><a href="admin_votermanage.php" class="active">Voter Management</a></li>
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
        </nav>
        <div class="wrapper">
            <br/><h2>Manage/Handle your Voters</h2><br/>
            <div style="overflow-x: auto;">
                <table align="center">
                    <thead>
                    <th>Voter ID</th>
                    <th>Voter Name</th>
                    <th>Voter Birth</th>
                    <th>Voter Gender</th>
                    <th>Voter Phone</th>
                    <th>Voter Course & Year</th>
                    <th>Voter Email</th>
                    <th>Operations</th>
                    </thead>
                    <tbody>
                         <?php
                        $sql = "SELECT * FROM voter";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr><td>" . $row["vid"] . "</td><td>" . $row["vname"] . "</td><td>" . $row["vbirth"] . "</td><td>" . $row["vgender"] . "</td><td>" . $row["vphone"] . "</td><td>" . $row["vyear"] . "</td><td>" . $row["vemail"] . "</td><td><a href='../../back/admin1/editvoter.php?vid=".$row["vid"]."'>Edit</a>&nbsp;|&nbsp;<a href='../../back/admin1/delvoter.php?vid=".$row["vid"]."'>Delete</a>&nbsp;</td></tr>";
                            }
                        } else {
                            echo "<tr><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>";
                        }
                        ?>                     
                    </tbody>
                </table>
            </div>
            <div class="push"></div>
        </div>  
        <?php
         mysqli_close($conn);
        ?>
        <div class="footer">A html, php & pure css project by Sagar Shanbhag & Thomas Ben Johnson</div>
    </body>
</html>
