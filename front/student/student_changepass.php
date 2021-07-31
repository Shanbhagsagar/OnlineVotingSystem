<html>
    <head>
        <title>
            Voter Dashboard
        </title>
        <link rel="stylesheet" href="../../css/admin_navstyle.css" type="text/css">
        <link rel="stylesheet" href="../../css/student.css" type="text/css">
     <script src="https://kit.fontawesome.com/d03aab3bfa.js" crossorigin="anonymous"></script>
    </head>
    <body>       
        <nav>
            <div id="logo">Voter Panel</div>

            <label for="drop" class="toggle">Menu</label>
            <input type="checkbox" id="drop" />
            <ul class="menu">
                <li><a href="student_dash.php">Dashboard</a></li>
                <li>
                    <!--Drop Down -->
                    <a href="#">View Candidate</a>
                 </li>
                 <li>
                  <a href="#">Voting</a>
                </li>
                <li><a href="#">Voting Summary</a></li>
                <li><a href="student_changepass.php"  class="active">Change Password</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
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
                                <td><button type="submit" value="Submit">Confirm</button></td>
                            </tr>
                        </tbody>
                    </table> 
                </div>
            </form>
        </div>  
        <div class="footer">A html, php & pure css project by Sagar Shanbhag & Thomas Ben Johnson</div>
    </body>
</html>
