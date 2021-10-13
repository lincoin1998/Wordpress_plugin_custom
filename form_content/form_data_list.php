<?php
 global $wpdb;
 $table = $wpdb->prefix.'form_content';
 $sql = "select * from $table";
$results = $wpdb->get_results($sql);
?>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
    </tr>
    <?php
    foreach ($results as $result) {
       ?>
       <tr>
           <td><?php echo $result->id ?></td>
           <td><?php echo $result->name?></td>
       </tr>
       <?php 
    }
    ?>
</table>