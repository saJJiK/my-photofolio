<?php
include_once('./php/config.php');
//passing data through the form.
$fullname = $_POST['full_name'];
$name = $_POST['Username'];
$email = $_POST['Email'];
$number = $_POST['Phone_number'];
$password = $_POST['Password'];
$address = $_POST['comment'];
$birthday = $_POST['birthday'];
$carreer = $_POST['career'];
$about = $_POST['commen'];
$myservice_1 = $_POST['service1'];
$myservice_2 = $_POST['service2'];
$myservice_3 = $_POST['service3'];
$myskills = $_POST['myskills'];
$myskills_1 = $_POST['html_skill'];
$myskills_2 = $_POST['css_skill'];
$myskills_3 = $_POST['php_skill'];
$myskills_4 = $_POST['javascript_skill'];
$myskills_5 = $_POST['mysql_skill'];




$targetDir = "image_upload/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
           $sql = "INSERT INTO userinfo VALUES(NULL,'$fullname','$name','$email','$number','$password','$address','$birthday','$carreer','$about','$myservice_1','$myservice_2','$myservice_3','$myskills','$myskills_1','$myskills_2','$myskills_3','$myskills_4','$myskills_5','$fileName')";
            echo($sql);
            if ($__conn->query($sql) === TRUE) {
                echo ("<title>Animation Text</title>
                <link rel='stylesheet' href='style2.css'>
              </head>
              <body>
            
            <div class='container'>
              <span class='text1'>Account created successfully</span>
              <span class='text2'> Please Log in</span>
            </div>
            ");
            } else {
                echo "unsuccess";
            }
        }else{
            $success= "Sorry, there was an error uploading your file.";
        }
    }else{
        $success= 'Sorry, only JPG, JPEG, PNG are allowed to upload.';
    }
}else{
    $success = 'Please select a file to upload.';
}

// Display status message
echo $success;
?>
// $sql = "INSERT INTO userinfo VALUES(NULL,'$fullname','$name','$email','$number','$password','$address','$birthday','$carreer','$about','$myservice_1','$myservice_2','$myservice_3','$myskills','$myskills_1','$myskills_2','$myskills_3','$myskills_4','$myskills_5')";
// if ($__conn->query($sql) === TRUE) {
// //     echo "account created successfully. Please Log in ";

echo("
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Animation Text</title>
    <link rel='stylesheet' href='style2.css'>
  </head>
  <body>

<div class='container'>
  <span class='text1'>Account Created Successfully</span>
  <span class='text2'> Please Login..</span>
</div>

  </body>
</html>

");
} else {
    echo("
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Animation Text</title>
    <link rel='stylesheet' href='style2.css'>
  </head>
  <body>

<div class='container'>
  <span class='text1'>Account created unsuccessfully</span>
  <span class='text2'> Please Try again..</span>
</div>

  </body>
</html>

");
}





