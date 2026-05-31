<?php
// Database connection parameters

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "biodata_form";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST['name'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$birth_day = $_POST['birth_day'];
$birth_month = $_POST['birth_month'];
$birth_year = $_POST['birth_year'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$nationality = $_POST['nationality'];
$email = $_POST['email'];
$religion = $_POST['religion'];
$marital_status = $_POST['marital_status'];
$address = $_POST['address'];
$experience = $_POST['experience'];
$computer_knowledge = $_POST['computer_knowledge'];
$declaration = $_POST['declaration'];
$place = $_POST['place'];
$biodata_date = $_POST['date'];

$photo = "";

// Handle file upload
if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {

    $upload_dir = "uploads/";

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    $photo = time() . "_" . basename($_FILES['file']['name']);

    move_uploaded_file(
        $_FILES['file']['tmp_name'],
        $upload_dir . $photo
    );
}

// Insert user information into the database
$sql = "INSERT INTO user_info(
            name,
            father_name,
            mother_name,
            birth_day,
            birth_month,
            birth_year,
            gender,
            contact,
            nationality,
            email,
            religion,
            marital_status,
            photo,
            address,
            experience,
            computer_knowledge,
            declaration,
            place,
            biodata_date
        )
        VALUES(
            '$name',
            '$father_name',
            '$mother_name',
            '$birth_day',
            '$birth_month',
            '$birth_year',
            '$gender',
            '$contact',
            '$nationality',
            '$email',
            '$religion',
            '$marital_status',
            '$photo',
            '$address',
            '$experience',
            '$computer_knowledge',
            '$declaration',
            '$place',
            '$biodata_date'
        )";

if (mysqli_query($conn, $sql)) {

    $user_id = mysqli_insert_id($conn);

    for ($i = 1; $i <= 3; $i++) {

        if (!empty($_POST["exam$i"])) {

            $exam = $_POST["exam$i"];
            $year = $_POST["year$i"];
            $board = $_POST["board$i"];
            $percentage = $_POST["percentage$i"];
            $grade = $_POST["grade$i"];

            // Insert educational qualifications into the database
            mysqli_query($conn,
                "INSERT INTO user_education(
                    user_id,
                    exam_name,
                    passing_year,
                    board_university,
                    percentage,
                    grade
                )
                VALUES(
                    '$user_id',
                    '$exam',
                    '$year',
                    '$board',
                    '$percentage',
                    '$grade'
                )"
            );
        }
    }

    echo "
    // Using JavaScript to show an alert and redirect to the view_biodata page
    <script>
        alert('Biodata submitted successfully!');
        window.location.href = 'view_biodata.php?id=$user_id';
    </script>
    
    ";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

?>
 