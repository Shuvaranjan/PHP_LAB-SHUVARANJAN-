<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio-Data Form</title>
</head>

<body>

    <?php

        $severname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "biodata_form";

        $conn = mysqli_connect($severname, $username, $password, $dbname);

        $id = $_GET['id'];

        $user = mysqli_fetch_assoc(
        mysqli_query(
        $conn,
        "SELECT * FROM user_info WHERE id='$id'"
        )
    );

        $education = mysqli_query(
        $conn,
        "SELECT * FROM user_education WHERE user_id='$id'"
    );

    ?>

    <form method="GET">
        <table width="800" border="1" cellpadding="30" cellspacing="5" align="center">
            <tr>
                <td>
                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td align="center" width="100%" valign="top">
                                <h2><u>BIO-DATA</u></h2>
                            </td>
                            <td align="center" width="20%">
                                <table border="0" width="100" height="120" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td align="center">
                                            <img width="100" height="120" src="uploads/<?php echo $user['photo']; ?>">
                                        </td>
                                    </tr>
                                </table>
                            </td>

                        </tr>
                    </table>
                    <table width="100%" cellpadding="4">
                        <tr>
                            <td width="40%">Name</td>
                            <td width="5%">:</td>
                            <td><?php echo $user['name']; ?></td>
                        </tr>
                        <tr>
                            <td>Father's Name</td>
                            <td>:</td>
                            <td><?php echo $user['father_name']; ?></td>
                        </tr>
                        <tr>
                            <td>Mother's Name</td>
                            <td>:</td>
                            <td><?php echo $user['mother_name']; ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td>:</td>
                            <td>
                                <?php echo $user['birth_day'] . " " . strtoupper($user['birth_month']) . " " . $user['birth_year']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:</td>
                            <td><?php echo $user['gender']; ?></td>
                        </tr>
                        <tr>
                            <td>Contact No</td>
                            <td>:</td>
                            <td><?php echo $user['contact']; ?></td>
                        </tr>
                        <tr>
                            <td>Nationality</td>
                            <td>:</td>
                            <td><?php echo $user['nationality']; ?></td>
                        </tr>
                        <tr>
                            <td>Email ID</td>
                            <td>:</td>
                            <td><?php echo $user['email']; ?></td>
                        </tr>
                        <tr>
                            <td>Religion</td>
                            <td>:</td>
                            <td><?php echo $user['religion']; ?></td>
                        </tr>
                        <tr>
                            <td>Marital Status</td>
                            <td>:</td>
                            <td><?php echo $user['marital_status']; ?></td>
                        </tr>
                        <tr>
                            <td valign="top">Address</td>
                            <td valign="top">:</td>
                            <td><?php echo $user['address']; ?></td>
                        </tr>
                        <tr>
                            <td>
                                <u>Educational Qualifications</u>
                            </td>
                        </tr>
                    </table>
                    <table width="100%" border="1" cellpadding="4" cellspacing="0">
                        <tr>
                            <th>Name of Exam</th>
                            <th>Year of Passing</th>
                            <th>Board/University</th>
                            <th>Percentage</th>
                            <th>Grade</th>
                        </tr>
                        <?php while($row = mysqli_fetch_assoc($education)){ ?>

                        <tr>
                            <td><?php echo $row['exam_name']; ?></td>
                            <td><?php echo $row['passing_year']; ?></td>
                            <td><?php echo $row['board_university']; ?></td>
                            <td><?php echo $row['percentage']; ?></td>
                            <td><?php echo $row['grade']; ?></td>
                        </tr>

                        <?php } ?>
                    </table>
                    <br>

                    <table width="100%" cellpadding="4">
                        <tr>
                            <td width="40%">Experience</td>
                            <td width="5%">:</td>
                            <td><?php echo $user['experience']; ?></td>

                        </tr>
                        <tr>
                            <td>Computer Knowledge</td>
                            <td>:</td>
                            <td><?php echo $user['computer_knowledge']; ?></td>

                        </tr>
                        <tr>
                            <td>Declaration</td>
                            <td>:</td>
                            <td><?php echo $user['declaration']; ?></td>
                            
                        </tr>
                        <tr>
                        <td>
                            Place
                        </td>
                        <td>:</td>
                        <td><?php echo $user['place']; ?></td>
                        </tr>
                        <tr>
                        <td>
                             Date
                        </td>
                        <td>:</td>
                        <td><?php echo $user['biodata_date']; ?></td>
                        </tr>
                    </table>

        
        </table>
    </form>





</body>

</html>