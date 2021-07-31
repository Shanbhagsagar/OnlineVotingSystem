<html>
    <head>
        <title>
            Admin Change Password
        </title>
        <link rel="stylesheet" href="../../css/admin_navstyle.css" type="text/css">
        <link rel="stylesheet" href="../../css/admin_addelecstyle.css" type="text/css">
        <script src="https://kit.fontawesome.com/d03aab3bfa.js" crossorigin="anonymous"></script>
    </head>
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
                            <li><a href="#">New Election</a></li>
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
                    <li><a href="admin_changepass.php"  class="active">Change Password</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>  
        </nav>
        <div class="wrapper">
            <br/><h2>Change Password</h2><br/>
            <form action="#" method="get">
                <div class="tablecontainer" style="overflow-x:auto;">
                    <table align="center">
                        <thead>
                            <tr>
                                <th>New Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="Enter New Password" id="electitle" required></td>
                            </tr>
                            <tr>
                                <th>Confirm password</th>
                            </tr>
                            <tr>
                                <td><i class="fas fa-lock"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" placeholder="Confirm New Password" id="electdesc" required></td>
                            </tr>
                            <tr>
                                <td><button style="margin-left: 25%; width:50%;" type="submit" value="Submit">Confirm</button></td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </form>
            <div class="push"></div>
        </div>  
        <div class="footer">A html, php & pure css project by Sagar Shanbhag & Thomas Ben Johnson</div>
    </body>
</html>
