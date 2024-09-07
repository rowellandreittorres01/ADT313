<h1>Hands-on Actvity #2</h1>

<?php
    $table = array(
        "header"=>array(
            "StudentID",
            "Firstname",
            "Middlename",
            "Lastname",
            "Section",
            "Course",
            "Yearlevel"
        ),
        "body"=> array(
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 ),
                 array(
                    "firstname"=>"Firstname",
                    "middlename"=>"Middlename",
                    "lastname"=>"Lastname",
                    "section"=>"Section",
                    "course"=>"Course",
                    "yearlevel"=>"Yearlevel"
                 )
        ),
    )
?>

<table border="1">
    <thead>
        <tr>
        <?php foreach($tabl['header'] as $header) {?>
                <th><?php echo $header; ?></th>
                <?php } ?>
        </tr>
    <thead>
    <tbody>
        <?php
            foreach($table['body'] as $index => $row) {?>
                <tr>
                <td><?php echo $index; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['middlename']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['section']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td><?php echo $row['yearlevel']; ?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
