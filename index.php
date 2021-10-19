<?php 
$con=mysqli_connect('localhost','root','','datatables');
$res=mysqli_query($con,"SELECT * FROM customers");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Datatabke</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<body>
    
<div class="container" style="margin-top: 50px;">
    <table class="table table-striped" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Contact No</th>
                <th>NID No</th>
                <th>Address</th>
                <th>City</th>
                <th>Date & Time</th>
            </tr>
        </thead>

        <tbody>
            <?php while($row=mysqli_fetch_assoc($res)){
                ?>
            
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['contact_no'] ?></td>
                <td><?php echo $row['nid_no'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['city'] ?></td>
                <td><?php echo $row['created'] ?></td>
                
            </tr>
            <?php
                }
            ?>
            
        </tbody>
    </table>
</div>
   

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    

    <script type="text/javascript">
        $(document).ready( function () {
            $('.table').DataTable();
        } );
    </script>

</body>
</html>