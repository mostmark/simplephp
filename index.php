<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
          body {
              background-color: green
          }
        </style>
    </head>
    <body>
        <h1>This is the best PHP application in the world</h1>
        <?php
        echo "The time is " . date("h:i:sa");
        echo "<br>The hostname is " . gethostname();
        ?>
    </body>
</html>
