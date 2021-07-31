<html>
    <head>
        <title>
            Admin Voter Notification
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
                        <a href="#">Candidate</a>
                        <input type="checkbox" id="drop-4"/>
                        <ul>
                            <li><a href="admin_addcand.php" >Add Candidate</a></li>
                            <li><a href="admin_delcand.php">Delete Candidate</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Voting Summary</a></li>
                    <li><a href="#" class="active">Notification</a></li>
                    <li><a href="admin_changepass.php">Change Password</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>  
        </nav>
        <div class="wrapper">
            <br/><h2>Send A Notification</h2><br/>
            <form action="admin_notify.php" method="post">
                <div class="tablecontainer" style="overflow-x:auto;">
                    <table align="center">
                        <tbody>
                            <tr>
                                <th>Course&Year</th>   
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-user-graduate" aria-hidden="true"></i>
                                    <select id = "courselist" name="vyear">
                                        <option value = "MCA 1st YEAR">MCA 1st Year</option>
                                        <option value = "MCA 2nd YEAR">MCA 2nd Year</option>
                                        <option value = "MCA 3rd YEAR">MCA 3rd Year</option>
                                        <option value = "BCA 1st YEAR">BCA 1st Year</option>
                                        <option value = "BCA 2nd YEAR">BCA 2nd Year</option>         
                                        <option value = "BCA 3rd YEAR">BCA 3rd Year</option>
                                        <option value = "MMS 1st YEAR">MMS 1st Year</option>
                                        <option value = "MMS 2nd YEAR">MMS 2nd Year</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Message</th>   
                            </tr>
                            <tr>
                                <td><i class="fas fa-comment-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"  name="text" placeholder="Enter Message" required></td>
                            </tr>
                            <tr>
                                <td><button type="submit" value="Submit" name="submit" style="margin-left: 20%;"><i class="fas fa-plus-circle"></i>&nbsp;Send&nbsp;Notification</button></td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </form>
            <div class="push"></div>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            $text = $_POST['text'];
            $vyear = $_POST['vyear'];

            $sql = "select vphone  from voter where vyear='" . $vyear . "'";
            $res = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($res)) {
                $url = "www.way2sms.com/api/v1/sendCampaign";
                $message = urlencode($text); // urlencode your message
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_POST, 1); // set post data to true
                curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=XXD9SCXXT2GCESR3HQCUR5TBE6Y500NZ&secret=T76373UQEZN6STSU&usetype=stage&phone=" . $row['vphone'] . "&senderid=sagar.shanbhag27@gmail.com&message=$message"); // post data
                 // query parameter values must be given without squarebrackets.
                // Optional Authentication:
                curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                $result = curl_exec($curl);
                curl_close($curl);
                echo $result;
            }
        }
        ?>
        <?php
        mysqli_close($conn);
        ?>        
        <div class="footer">A html, php & pure css project by Sagar Shanbhag & Thomas Ben Johnson</div>
    </body>
</html>
