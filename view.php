<?php
    include("connection.php");
        $First Name = $_POST['First_Name'];
        $MiddleName = $_POST['MiddleName'];
        $LastName = $_POST['LastName'];
        $ApprenticeCode = $_POST['ApprenticeCode'];
        $D.O.B = $_POST['D.O.B'];
        $Emailid = $_POST['Emailid'];
        $MobileNumber = $_POST['MobileNumber'];
        $Department = $_POST['Department'];
        $JoinDate = $_POST['JoinDate'];
        $EndingDate = $_POST['EndingDate'];
        $Experince = $_FILES['Experince'];
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];
        $destfile = 'photo/'.$filename;
        move_uploaded_file($filepath,$destfile);

    $query = "INSERT INTO apprenticeship details (FirstName,MiddleName,ApprenticeCode,D.O.B,Emailid,MobileNumber,Department,JoinDate,EndingDate,Experince)values('FirstName','$MiddleName','$LastName','$ApprenticeCode',D.O.B,'$Emailid','$MobileNumber','$Department','$JoinDate','$EndingDate','$Experince')";
    $data = mysqli_query($conn,$query);
   
    if($data)
    {
         
         echo "CONNECTED SUCCESSFULLY";

    }
    else{
        echo "FAILD TO CONNECTED";
    }

?>