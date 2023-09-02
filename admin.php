<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    table {
        width: 700px;
        margin: auto;
        border-bottom: 3px solid #2ba89c;
        background-color: white;
    }

    thead {
        font-weight: bold;
        background-color: #404040;
    }

    th {
        padding: 15px;
        color: white;
    }

    td {
        text-align: center;
        background-color: #eee;
        position: relative;
        font-weight: 600;
        padding: 10px 0 10px 0;
    }

    img {
        width: 80px;
        height: 80px;
        margin: auto;
        margin-left: 10px;
        margin-right: 10px;
        border: 5px solid white;
    }

    a {
        text-decoration: none;
        padding: 5px 10px;
        color: red;
        font-size: 15px;
    }

    .view {
        background-color: #03a9f4;
    }

    .delete {
        background-color: #e91e63;
    }

    button {
        padding: 10px;
        font-weight: bold;
        color: red;
        margin: 20px auto;
        display: flex;
        border: 1px solid #2ba89c;
    }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>course-name</th>
                <th>image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
include('connection.php');

$query="select * from course";

$records=mysqli_query($db,$query);

while($data =mysqli_fetch_array($records))
{
?>
            <tr>
                <td><?php echo $data ['id'];?></td>
                <td><?php echo $data ['name'];?></td>
                <td><img src="<?php echo $data['img'];?>"></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id'];?>">Edit</a>
                    <a href="delete.php?id=<?php echo $data['id'];?>">Delete</a>
                </td>
            </tr>

            <?php
}
?>
        </tbody>
    </table>
    <button><a href="add_course.php">Add New course</a></button>

</body>

</html>