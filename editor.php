<!DOCTYPE html>

<html>    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html">
        <meta name="author" content="WinnerOfDeath">
        <meta name="robots" content="index, follow">
        
        <title></title>
        
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <link rel="stylesheet" href="main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="script.js"></script>
    </head>

    <body>

         <form action="project-save.php" method="post">
            Miejscowosc: <input type="text" name="town" placeholder="Rowy"><br>
            Rok: <input type="text" name="year" placeholder="2019"><br>
            <input class="submit" type="button" value="Zapisz/Generuj">
        </form>
        <!-- Editor -->
        <div style="height:400px; width:500px; border:solid">
        <h1 style="position:absolute;"><?php echo $_POST["town"];?></h1><br>
        <h1 style="position:absolute;"><?php echo $_POST["year"];?></h1><br>
        </div>
    </body>
</html>