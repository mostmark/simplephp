<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
          .rectangle {
              width:500px;
              height:100px;
              border:0px solid #000;
              text-align:center;
              background-color: green;
          }
        </style>
    </head>
    <body>
        <h1>This is the best PHP application in the world!</h1>
        <br/>
        <?php
        echo "The time is " . date("h:i:sa");
        echo "<br/>The hostname is " . gethostname();
        ?>
        <br/>
        <div class="rectangle"/>
    </body>
</html>
