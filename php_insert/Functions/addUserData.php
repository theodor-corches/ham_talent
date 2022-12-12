<?php 

$nume=$_POST["nume_proprietar"];
$oras=$_POST["oras"];
$telefon=$_POST["telefon"];
$animal=$_POST["animal"];
$varsta=$_POST["varsta"];
$descriere=$_POST["descriere"];
$filename=$_POST["uploadfile"];
$img_content = $_POST["uploadfile"];

///Applications/XAMPP/xamppfiles/logs/php_error_logs

$connect = mysqli_connect("localhost","root","","userform") or die(mysqli_error($connect));

// Check if the file was uploaded using HTTP POST
if (is_uploaded_file($filename)) {
    // Get the uploaded file information
    $file_name = $filename["name"];
    $file_tmp_name = $filename["tmp_name"];
    $file_size = $filename["size"];
    $file_type = $filename["type"];
  
    // Set the target directory for the uploaded file
    $target_dir = "/image/";
  
    // Generate a unique file name for the uploaded file
    $file_name = uniqid() . "-" . $file_name;
  
    // Generate the full path for the uploaded file
    $file_path = $target_dir . $file_name;
  
    // Move the uploaded file to its new destination
    if (move_uploaded_file($file_tmp_name, $file_path)) {
      // Open the image file
      $fp = fopen($file_path, "rb");
  
      // Read the image file into a binary string
      $img_content = fread($fp, filesize($file_path));
  
      // Close the image file
      fclose($fp);
  
      // Escape the binary string so it can be safely inserted into the database
      $img_content = $mysqli->real_escape_string($img_content);
  
      // Insert the image into the images table
    //   $sql = "INSERT INTO inscrieri(nume_proprietar,oras,telefon,nume_animal,varsta_animal,descriere_animal,file_name) VALUES
    //   ('$nume','$oras','$telefon','$animal',$varsta,'$descriere','$filename')";
    //   $mysqli->query($sql);
    } else {
      // There was an error uploading the file
    }
  }


$insertQuery="INSERT INTO inscrieri(nume_proprietar,oras,telefon,nume_animal,varsta_animal,descriere_animal,file_name,image_file) VALUES
('$nume','$oras','$telefon','$animal',$varsta,'$descriere','$filename','$img_content')";
// $insertQuery="INSERT INTO user(u_name,u_number,u_dob,u_email,u_password) VALUES
// ('ddd','4','2000-01-01','aaa2.aa@aa.com','ffdddd')";
$runQuery=mysqli_query($connect,$insertQuery) or die(mysqli_error($connect));

echo "<script>alert('This is an alert box.');</script>";

header("location:http://localhost/php_insert/index.php");

mysqli_close($connect);
    ?>