<?php

$response = wp_remote_get( $url, $arguments );
$results = json_decode( wp_remote_retrieve_body( $response ) );

?>

<table border="1">
    <tr>
        <td>ID</td>
        <td>Email</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Name</td>
        <td>Avatar</td>


    </tr>
    <?php
    
    
    ?>