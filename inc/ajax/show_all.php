<?php

    // Database connection
    include_once "../../app/db.php";
    include_once "../../app/functions.php";

    $sql = "SELECT * FROM students ORDER BY sl DESC";
    $data = $connection -> query($sql);

    $i = 1;
    while( $all_stu = $data -> fetch_assoc() ) :

?>

    <tr>
        <th><?php echo $i; $i++; ?></th>
        <td><?php echo $all_stu['name'] ?></td>
        <td><?php echo $all_stu['email'] ?></td>
        <td><?php echo $all_stu['cell'] ?></td>
        <td><?php echo $all_stu['location'] ?></td>
        <td><img style="width:50px;height:40px" src="media/images/students/<?php echo $all_stu['photo'] ?>" alt=""></td>
        <td>
            <a id="stuView" student_data="<?php echo $all_stu['sl'] ?>" href="#" class="btn btn-info" >View</a>
            <a href="#" class="btn btn-danger" >Edit</a>
            <a id="delete_student" student_data="<?php echo $all_stu['sl'] ?>" href="#" class="btn btn-warning" >Delete</a>
        </td>
    </tr>

    <?php endwhile; ?>