<html>
    <head>
        <title>
            Admin Add Election
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
                        <a href="#" class="active">Election</a>
                        <input type="checkbox" id="drop-1"/>
                        <ul>
                            <li><a href="admin_addelec.php" class="active">New Election</a></li>
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
                    <li><a href="admin_notify.php">Notification</a></li>
                    <li><a href="admin_changepass.php">Change Password</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>  
        </nav>
        <div class="wrapper">
            <br/><h2>Add a New Election</h2><br/>
            <form action="../../back/admin1/addelec.php" method="post">
                <div class="tablecontainer" style="overflow-x:auto;">
                    <table align="center">
                        <tbody>
                           <tr>
                                <th>Title</th>   
                            </tr>
                            <tr>
                               <td>      
                               <i class="fa fa-graduation-cap" aria-hidden="true"></i> 
                               
                                    <select id = "courselist" name="etitle">
                                        <option value = "MCA 1st YEAR" selected> MCA 1st YEAR</option>
                                        <option value = "MCA 2nd YEAR">MCA 2nd YEAR</option>
                                        <option value = "MCA 3rd YEAR">MCA 3rd YEAR</option>
                                        <option value = "BCA 1st YEAR">BCA 1st YEAR</option>
                                        <option value = "BCA 2nd YEAR">BCA 2nd YEAR</option>         
                                        <option value = "BCA 3rd YEAR">BCA 3rd YEAR</option>
                                        <option value = "MMS 1st YEAR">MMS 1st YEAR</option>
                                        <option value = "MMS 2nd YEAR">MMS 2nd YEAR</option>
                                        <option value = "STUDENT COUNCIL">STUDENT COUNCIL</option>
                                    </select>
                                       
                                </td>
                            </tr>
                              <tr>
                                <th>Start Date:</th>   
                            </tr>
                            <tr>
                                <td>
                                  <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input class="forminput" type="date" name="estart" min="<?php echo date('Y-m-d');?>" required>
                                </td>
                            </tr>
                             <tr>
                                <th>End date:</th>   
                            </tr>
                            <tr>
                                <td>
                                  <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input class="forminput" name="eend" type="date" min="<?php echo date('Y-m-d');?>" max="<?php $date = date('Y-m-d'); echo date('Y-m-d', strtotime("+12 months $date")); ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="submit" value="Submit">Add&nbsp;Election</button></td>
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
