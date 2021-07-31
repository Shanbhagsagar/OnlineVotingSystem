<html>
    <head>
        <title>
            Admin Edit Voter
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
    $vid = $_GET['vid'];
    $sql = "select *  from voter where vid=$vid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <body>       
        <div class="wrapper">
            <br/><h2>Edit Voter</h2><br/>
            <form method="post">
                <div class="tablecontainer" style="overflow-x:auto;">
                    <table align="center" width="15%">
                        <tbody>
                            <?php
                            if (isset($_POST['submit'])) {
                                $sql1 = "update voter set vname='" . $_POST['vname'] . "', vbirth='" . $_POST['vbirth'] . "', vgender='" . $_POST['vgender'] . "', vphone='" . $_POST['vphone'] . "', vyear='" . $_POST['vyear'] . "', vemail='" . $_POST['vemail'] . "' where vid=$vid";
                                if (mysqli_query($conn, $sql1)) {
                                    echo "<tr><th style='color:green;text-align:center;'>Record updated successfully</th></tr>";
                                    echo "<meta http-equiv='refresh' content='2;url=../../front/admin/admin_votermanage.php'>";
                                } else {
                                    echo "Error updating record: " . mysqli_error($conn);
                                }
                            }
                            ?>
                            <tr>
                                <th>Name</th>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input class="forminput" type="text" value="<?php echo $row['vname']; ?>" placeholder="Ex. John" name="vname" required></td>
                            </tr>
                            <tr>
                                <th>Date of birth</th>   
                            </tr>
                            <tr>
                                <td>
                                    <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input class="forminput" type="date" value="<?php echo $row['vbirth']; ?>" name="vbirth" required>
                                </td>
                            </tr>
                            <tr>
                                <th>Gender</th>   
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <select id = "courselist" name="vgender">
                                        <option value ="Male" <?php if ($row['vgender'] == "Male") echo "selected" ?> >Male</option>
                                        <option value ="Female" <?php if ($row['vgender'] == "Female") echo "selected" ?> >Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input class="forminput" type="text" placeholder="+91" value="<?php echo $row['vphone']; ?>"name="vphone" pattern="[0-9]{10}" required></td>
                            </tr>
                            <tr>
                                <th>Course&Year</th>   
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-user-graduate" aria-hidden="true"></i>
                                    <select id = "courselist" name="vyear">
                                        <option value = "MCA 1st YEAR" <?php if ($row['vyear'] == "MCA 1st YEAR") echo "selected" ?> >MCA 1st YEAR</option>
                                        <option value = "MCA 2nd YEAR" <?php if ($row['vyear'] == "MCA 2nd YEAR") echo "selected" ?> >MCA 2nd YEAR</option>
                                        <option value = "MCA 3rd YEAR" <?php if ($row['vyear'] == "MCA 3rd YEAR") echo "selected" ?> >MCA 3rd YEAR</option>
                                        <option value = "BCA 1st YEAR" <?php if ($row['vyear'] == "BCA 1st YEAR") echo "selected" ?> >BCA 1st YEAR</option>
                                        <option value = "BCA 2nd YEAR" <?php if ($row['vyear'] == "BCA 2nd YEAR") echo "selected" ?> >BCA 2nd YEAR</option>         
                                        <option value = "BCA 3rd YEAR" <?php if ($row['vyear'] == "BCA 3rd YEAR") echo "selected" ?> >BCA 3rd YEAR</option>
                                        <option value = "MMS 1st YEAR" <?php if ($row['vyear'] == "MMS 1st YEAR") echo "selected" ?> >MMS 1st YEAR</option>
                                        <option value = "MMS 2nd YEAR" <?php if ($row['vyear'] == "MMS 2nd YEAR") echo "selected" ?> >MMS 2nd YEAR</option>
                                       
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Email</th>
                            </tr>
                            <tr>
                                <td><i class="far fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input class="forminput" type="email" value="<?php echo $row['vemail']; ?>"placeholder="xyz@yourmail.com" name="vemail" required></td>
                            </tr>
                            <tr>
                                <td><button type="submit" name="submit" value="Submit">Update&nbsp;Voter</button></td>
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
