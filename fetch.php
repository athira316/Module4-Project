<?php
include_once "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <h1 style="padding: 10px; color: royalblue; text-align: center;">Apprenticeship Details</h1>
    <table border="1">
        <tr>
            <th> First Name </th>
            <th> Middle Namee </th>
            <th> Last Name </th>
            <th> Apprentice Code </th>
            <th> D.O.B </th>
            <th> Mobile Number </th>
            <th> Email id </th>
            <th> Department </th>
            <th> Join Date </th>
            <th> Ending Date </th>
            <thExperince></th>
        </tr>
        <?php
            $query = "SELECT * FROM apprenticeship details";
            $data = mysqli_query($conn,$query);
            $total = mysqli_num_rows($data);
            if($total !=0)
            {
                while($result = mysqli_fetch_assoc($data))
                {
        ?>
                    <tr>
                    <td><?php echo $result['fnmae'] ?></td>
                    <td><?php echo $result['mname']?></td>
                    <td><?php echo $result['lname'] ?></td>
                    <td><?php echo $result['apcode']?></td>
                    <td><?php echo $result['dob'] ?></td>
                    <td><?php echo $result['mobileno']?></td>
                    <td><?php echo $result['email']?> </td>
                    <td><?php echo $result['dept']?></td>
                    <td><?php echo $result['joindate']?> </td>
                    <td><?php echo $result['endingdate']?></td>
                    <td><?php echo $result['experience']?></td>
                    <td><a href="delete.php?apprentice code= <?php echo $result['apprentice code'];?>">Delete </a></td>
                    </tr>
                    <?php
                }
            }
            ?>
    </table>    
</html>