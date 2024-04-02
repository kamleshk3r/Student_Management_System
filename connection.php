<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_information_management_system";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Separate the form data
$personalInfo = array(
    'name' => $_POST['name'],
    'age' => $_POST['age'],
    'dob' => $_POST['dob'],
    'gender' => $_POST['gender'],
    'email' => $_POST['email'],
    'phone' => $_POST['phone']
);

$academicInfo = array(
    'ssc_school_name' => $_POST['sscSchoolName'],
    'sscboard' => $_POST['sscBoard'],
    'sscresult' => $_POST['sscResult'],
    'hsc_school_name' => $_POST['hscSchoolName'],
    'hscboard' => $_POST['hscBoard'],
    'hscresult' => $_POST['hscResult']

);

$residentialInfo = array(
    'nationality' => $_POST['nationality'],
    'address' => $_POST['address'],
    'city' => $_POST['city'],
    'pincode' => $_POST['pincode'],
    'state' => $_POST['state']
);

$familyInfo = array(
    'fathers_name' => $_POST['fathersName'],
    'fathers_email' => $_POST['fathersEmail'],
    'fathers_phone' => $_POST['fathersPhone'],
    'mothers_name' => $_POST['mothersName'],
    'mothers_email' => $_POST['mothersEmail'],
    'mothers_phone' => $_POST['mothersPhone'],
    'guardian_name' => $_POST['guardianName'],
    'guardian_phone' => $_POST['guardianPhone']
);

// Insert into personal_info table
$sql_personal = "INSERT INTO students (Name, Age, Gender, Email, Phone_Number, Date_Of_Birth)
        VALUES ('" . $personalInfo['name'] . "', '" . $personalInfo['age'] . "', '" . $personalInfo['gender'] . "', '" . $personalInfo['email'] . "', '" . $personalInfo['phone'] . "', '" . $personalInfo['dob'] . "')";

if ($conn->query($sql_personal) === TRUE) {
    echo "Personal information stored successfully<br>";
} else {
    echo "Error: " . $sql_personal . "<br>" . $conn->error;
}

// Insert into academic_info table
$sql_academic = "INSERT INTO academic (SSC_School_Name, SSC_School_Board, SSC_Result, HSC_School_Name, HSC_School_Board, HSC_Result)
        VALUES ('" . $academicInfo['ssc_school_name'] . "', '" . $academicInfo['sscboard'] . "', '" . $academicInfo['sscresult'] . "','".$academicInfo['hsc_school_name'] . "','".$academicInfo['hscboard'] . "','".$academicInfo['hscresult'] . "')";

if ($conn->query($sql_academic) === TRUE) {
    echo "Academic information stored successfully<br>";
} else {
    echo "Error: " . $sql_academic . "<br>" . $conn->error;
}

// Insert into residential_info table
$sql_residential = "INSERT INTO residential(nationality, address, city, pincode, state)
        VALUES ('" . $residentialInfo['nationality'] . "', '" . $residentialInfo['address'] . "', '" . $residentialInfo['city'] . "', '" . $residentialInfo['pincode'] . "', '" . $residentialInfo['state'] . "')";

if ($conn->query($sql_residential) === TRUE) {
    echo "Residential information stored successfully<br>";
} else {
    echo "Error: " . $sql_residential . "<br>" . $conn->error;
}

// Insert into family_info table
$sql_family = "INSERT INTO family(Father_Name, Father_Email, Father_Number, Mother_Name, Mother_Email, Mother_Number, Guardian_Name, Guardian_Number)
        VALUES ('" . $familyInfo['fathers_name'] . "', '" . $familyInfo['fathers_email'] . "', '" . $familyInfo['fathers_phone'] . "', '" . $familyInfo['mothers_name'] . "', '" . $familyInfo['mothers_email'] . "', '" . $familyInfo['mothers_phone'] . "', '" . $familyInfo['guardian_name'] . "', '" . $familyInfo['guardian_phone'] . "')";

if ($conn->query($sql_family) === TRUE) {
    echo "Family information stored successfully<br>";
} else {
    echo "Error: " . $sql_family . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>