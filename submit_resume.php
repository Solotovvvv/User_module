<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $firstName = $_POST["fname"];
    $middleName = $_POST["mname"];
    $surname = $_POST["sname"];
    $position = $_POST["position"];
    $address = $_POST["address"];
    $objective = $_POST["summary"];

    $contacts = $_POST['contacts'];
    $schools = $_POST['schools'];
    $school_sy = $_POST['school_sy'];
    $exp_company = $_POST['exp_company'];
    $exp_position = $_POST['exp_position'];
    $work_experience = $_POST['work_experience'];
    $work_address = $_POST['work_address'];
    $exp_year = $_POST['exp_year'];
    $skills = $_POST['skills'];
    $cert_desc = $_POST['cert_desc'];
    $cert_year = $_POST['cert_year'];
    



    // // Process the data (you can perform database operations or any other processing here)

    // Loop through the submitted data and display the values
  $company = implode(', ', $exp_company);
  $exp_position = implode(', ', $exp_position);
  $work_experience = implode(', ', $work_experience);


  
  

    // // You can perform additional processing or database operations here as needed.

    // // Console log the arrays for debugging
    // echo "<script>";
    // echo "console.log('Companies:', " . json_encode($companies) . ");";
    // echo "console.log('Positions:', " . json_encode($positions) . ");";
    // echo "console.log('Years:', " . json_encode($years) . ");";
    // echo "console.log('Experiences:', " . json_encode($experiences) . ");";
    // echo "</script>";
} else {
    // Handle cases where the request method is not POST
    echo "Invalid request method.";
}
?>
