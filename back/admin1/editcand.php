<html>
    <head>
        <title>
            Admin Edit Candidate
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
    $cid = $_GET['cid'];
    $sql = "SELECT * FROM candidate c JOIN voter v ON c.vid=v.vid JOIN election e ON c.eid=e.eid where cid=$cid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <body>       
        <div class="wrapper">
            <br/><h2>Edit Candidate</h2><br/>
            <form method="post">
                <div class="tablecontainer" style="overflow-x:auto;">
                    <table align="center" width="15%">
                        <tbody>
                            <?php
                            if (isset($_POST['submit'])) {
                                $sql1 = "update candidate set vid='" . $_POST['vid'] . "', eid='" . $_POST['eid'] . "', pos='" . $_POST['pos'] . "' where cid=".$cid;
                                if (mysqli_query($conn, $sql1)) {
                                    echo "<tr><th style='color:green;text-align:center;'>Record updated successfully</th></tr>";
                                    echo "<meta http-equiv='refresh' content='2;url=../../front/admin/admin_delcand.php'>";
                                } else {
                                    echo "Error updating record: " . mysqli_error($conn);
                                }
                            }
                            ?>
                            <tr>
                                <th>Voter</th>
                            </tr>
                            <tr>
                                <td><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="vid" id="electiontitle" value="<?php echo $row['vid']; ?>" required></td>
                            </tr>
                            <tr>
                                <th>Election ID</th>   
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;&nbsp;
                                    <select id = "courselist" name="eid">
                                        <?php
                                        $sql2 = "SELECT * FROM election";
                                        $result1 = mysqli_query($conn, $sql2);

                                        if (mysqli_num_rows($result1) > 0) {
                                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                                echo "<option value='" . $row1['eid'] . "'";
                                                if ($row["etitle"] == $row1["etitle"]) {
                                                    echo "selected";
                                                }
                                                echo">[" . $row1['eid'] . "] " . $row1['etitle'] . "</option>";
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
                                        $sql3 = "SELECT * FROM position";
                                        $result2 = mysqli_query($conn, $sql3);

                                        if (mysqli_num_rows($result2) > 0) {
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                                echo "<option value='" . $row2['pname'] . "'";
                                                if ($row["pos"] == $row2["pname"]) {
                                                    echo "selected";
                                                }
                                                echo ">" . $row2['pname'] . "</option>";
                                            }
                                        } else {
                                            echo "<option>-</option>";
                                        }
                                        ?> 
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><button type="submit" name="submit" value="Submit" style="margin-left: 20%;">&nbsp;Update&nbsp;Candidate</button></td>
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
