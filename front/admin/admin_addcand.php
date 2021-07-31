<html>
    <head>
        <title>
            Admin Add Candidate
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
                            <li><a href="#" class="active">Add Candidate</a></li>
                            <li><a href="admin_delcand.php">Delete Candidate</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Voting Summary</a></li>
                    <li><a href="admin_notify.php">Notification</a></li>
                    <li><a href="#">Change Password</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>  
        </nav>
        <div class="wrapper">
            <br/><h2>Add a New Candidate</h2><br/> 
            <form action="../../back/admin1/addcand.php" method="post">
                <div class="tablecontainer" style="overflow-x:auto;">
                    <table align="center">
                        <thead>
                            <tr>
                                <th>Voter ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="vid" id="electiontitle" required></td>
                            </tr>
                            <tr>
                                <th>Election ID</th>   
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;
                                    <select id = "courselist" name="eid">
                                        <?php
                                        $sql = "SELECT * FROM election";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value='".$row['eid']."'>[".$row['eid']."] ".$row['etitle']."</option>";
                                            }
                                        } else {
                                            echo "<option>-</option>";
                                        }
                                        ?> 
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Position</th>   
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;
                                    <select id = "courselist" name="pos">
                                    <?php
                                        $sql = "SELECT * FROM position";
                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<option value='".$row['pname']."'>".$row['pname']."</option>";
                                            }
                                        } else {
                                            echo "<option>-</option>";
                                        }
                                        ?> 
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                        <tr>
                            <td><button type="submit" value="Submit" style="margin-left: 20%;"><i class="fas fa-plus-circle"></i>&nbsp;Add&nbsp;Candidate</button></td>
                        </tr>
                        </tbody>
                    </table> 
                </div>
            </form>
            <div class="push"></div>
        </div>
        <?php
        mysqli_close($conn);
        ?>
        <div class="footer">A html, php & pure css project by Sagar Shanbhag & Thomas Ben Johnson</div>
    </body>
</html>
