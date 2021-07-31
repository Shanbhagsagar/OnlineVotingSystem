<html>
    <head>
        <title>
            Admin Candidate Management
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
                        <li><a href="#">Election Management</a></li>
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
                    <a href="#">Voters</a>
                    <input type="checkbox" id="drop-3"/>
                    <ul>
                        <li><a href="admin_addvoter.php">Add Voters</a></li>
                        <li><a href="admin_votermanage.php">Voter Management</a></li>
                    </ul>
                </li>
                <li>
                    <label for="drop-4" class="toggle">Candidate</label>
                    <a href="#" class="active">Candidate</a>
                    <input type="checkbox" id="drop-4"/>
                    <ul>
                        <li><a href="admin_addcand.php">Add Candidate</a></li>
                        <li><a href="#" class="active">Delete Candidate</a></li>
                    </ul>
                </li>
                <li><a href="#">Voting Summary</a></li>
                <li><a href="admin_notify.php">Notification</a></li>
                <li><a href="#">Change Password</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
        <div class="wrapper">
            <br/><h2>Candidate Management</h2><br/>
            <div style="overflow-x: auto;">
                <table align="center">
                    <thead>
                    <th>Election Id</th>
                    <th>Election Name</th>
                    <th>Candidate Id</th>
                    <th>Candidate Name</th>
                    <th>Position</th>
                    <th>Operations</th>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $sql = "SELECT * FROM candidate c JOIN voter v ON c.vid=v.vid JOIN election e ON c.eid=e.eid order by cid asc";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr><td>" . $row["eid"] . "</td><td>" . $row["etitle"] . "</td><td>" . $row["cid"] . "</td><td>" . $row["vname"] . "</td><td>" . $row["pos"] . "</td><td><a href='../../back/admin1/generatepdf.php?cid=" . $row["cid"] . "'>View</a>&nbsp;|<a href='../../back/admin1/editcand.php?cid=" . $row["cid"] . "'>Edit</a>&nbsp;|&nbsp;<a href='../../back/admin1/delcand.php?cid=" . $row["cid"] . "'>Delete</a>&nbsp;</td></tr>";
                                }
                            } else {
                                echo "<tr><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td><td>-</td></tr>";
                            }
                            ?>       
                        </tr>              
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
