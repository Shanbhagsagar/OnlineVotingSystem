<html>
    <head>
        <title>
            Admin Dashboard
        </title>
        <link rel="stylesheet" href="../../css/admin_navstyle.css" type="text/css">
        <link rel="stylesheet" href="../../css/admin_dashstyle.css" type="text/css">
    </head>
    <body>       
        <nav>
            <div id="logo">Admin Panel</div>
            <label for="drop" class="toggle">Menu</label>
            <input type="checkbox" id="drop" />
            <ul class="menu">
                <li><a href="admin_dash.php" class="active">Dashboard</a></li>
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
                    <li><a href="admin_notify.php">Notification</a></li>
                <li><a href="admin_changepass.php">Change Password</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </nav>
        <div class="wrapper">
            <br/><h2>Admin Dashboard</h2><br/>
            <table align="center">
                <thead>
                    <tr>
                        <th colspan="3">Admin Dummy</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>Dummy</td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td>:</td>
                        <td>Dummy</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td>Dummy</td>
                    </tr>                
                </tbody>
            </table>

            <div class="push"></div>
        </div>  
        <div class="footer">A html, php & pure css project by Sagar Shanbhag & Thomas Ben Johnson</div>
    </body>
</html>
