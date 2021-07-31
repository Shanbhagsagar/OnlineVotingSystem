<html>
    <head>
        <title>
            Admin Edit Election
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
    $eid = $_GET['eid'];
    $sql = "select *  from election where eid=$eid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <body>       
        <div class="wrapper">
            <br/><h2>Edit Election</h2><br/>
            <form method="post">
                <div class="tablecontainer" style="overflow-x:auto;">
                    <table align="center">
                        <?php
                        if (isset($_POST['submit'])) {
                            $sql1 = "update election set etitle='" . $_POST['etitle'] . "', estart='" . $_POST['estart'] . "', eend='" . $_POST['eend'] . "' where eid=$eid";
                            if (mysqli_query($conn, $sql1)) {
                                echo "<tr><th style='color:green;text-align:center;'>Record updated successfully</th></tr>";
                                echo "<meta http-equiv='refresh' content='2;url=../../front/admin/admin_elecmanage.php'>";
                            } else {
                                echo "Error updating record: " . mysqli_error($conn);
                            }
                        }
                        ?>
                        <tbody>
                            <tr>
                                <th>Election id</th>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input class="forminput" type="text" value="<?php echo $eid; ?>" name="eid" readonly></td>
                            </tr>   
                            <tr>
                                <th>Title</th>   
                            </tr>
                            <tr>
                                <td>      
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i> 

                                    <select id = "courselist" name="etitle" >
                                        <option value = "MCA 1st YEAR" <?php if ($row['etitle'] == "MCA 1st YEAR") echo "selected" ?> >MCA 1st YEAR</option>
                                        <option value = "MCA 2nd YEAR" <?php if ($row['etitle'] == "MCA 2nd YEAR") echo "selected" ?> >MCA 2nd YEAR</option>
                                        <option value = "MCA 3rd YEAR" <?php if ($row['etitle'] == "MCA 3rd YEAR") echo "selected" ?> >MCA 3rd YEAR</option>
                                        <option value = "BCA 1st YEAR" <?php if ($row['etitle'] == "BCA 1st YEAR") echo "selected" ?> >BCA 1st YEAR</option>
                                        <option value = "BCA 2nd YEAR" <?php if ($row['etitle'] == "BCA 2nd YEAR") echo "selected" ?> >BCA 2nd YEAR</option>         
                                        <option value = "BCA 3rd YEAR" <?php if ($row['etitle'] == "BCA 3rd YEAR") echo "selected" ?> >BCA 3rd YEAR</option>
                                        <option value = "MMS 1st YEAR" <?php if ($row['etitle'] == "MMS 1st YEAR") echo "selected" ?> >MMS 1st YEAR</option>
                                        <option value = "MMS 2nd YEAR" <?php if ($row['etitle'] == "MMS 2nd YEAR") echo "selected" ?> >MMS 2nd YEAR</option>
                                        <option value = "Student Council" <?php if ($row['etitle'] == "Student Council") echo "selected" ?> >Student Council</option>
                                    </select>

                                </td>
                            </tr>
                            <tr>
                                <th>Start Date:</th>   
                            </tr>
                            <tr>
                                <td>
                                    <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input class="forminput" type="date" name="estart" value="<?php echo $row['estart']; ?>" min="<?php echo date('Y-m-d'); ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <th>End date:</th>   
                            </tr>
                            <tr>
                                <td>
                                    <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input class="forminput" type="date" name="eend" value="<?php echo $row['eend']; ?>" min="<?php echo date('Y-m-d'); ?>" max="<?php
                                    $date = date('Y-m-d');
                                    echo date('Y-m-d', strtotime("+12 months $date"));
                                    ?>" required>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="submit" value="Submit" name="submit" style="margin-left:15px;">Update&nbsp;Election</button></td>
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
