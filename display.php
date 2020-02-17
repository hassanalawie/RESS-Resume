<?php require_once('load.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css">
        <title>HTML Form Tutorial - Display</title>
    </head>
    <body style="max-width: 900px;">
        <?php
        // Connect to database
        $mysql = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        // Select data
        $resource = $mysql->query("SELECT * FROM users");
        
        // Loop and fetch
        while($row = $resource->fetch_object()) {
        	$results[] = $row;
        }
        ?>
        <table class="table users">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Student Number</th>
                    <th>Program</th>
                    <th>Resume</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ( $results as $result ) : ?>
                    <tr>
                        <td><?php _e($result->fname); ?></td>
                        <td><?php _e($result->lname); ?></td>
                        <td><?php _e($result->studentnumber); ?></td>
                        <td><?php _e($result->program); ?></td>
                        <td><?php _e($result->resume); ?></td>
                    </tr>
                <?php endforeach; ?>  
            </tbody>
            <tfoot>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Student Number</th>
                    <th>Program</th>
                    <th>Resume</th>
                </tr>
            </tfoot>
        </table>
    </body>
</html>
