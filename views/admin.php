<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Pagina</title>
</head>
<body>
<div class="page-wrap">
    <br>
    <br>

<form  enctype="multipart/form-data" action="" method="post">

        <div id="naam">

            <label for="naam">Titel:</label><br>
            <input type="text" placeholder="Titel" id="titel" name="title" autofocus><br><br>


        <label for="text">Text:</label><br>
        <textarea rows="20" cols="40" name="content" id="text" placeholder="Artikel text"></textarea><br><Br>
        <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
        <label for="image">Upload:</label><br>
        <input type="file"  name="image" placeholder="Upload" autofocus><Br><Br>
        <input type="submit" value="Submit" name="submit">
        </div>


</form>
<?php
if(isset($_POST['submit'])) {

    $dbc = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die ('cant connect to the database');
    $title = mysqli_real_escape_string($dbc,trim($_POST['title']));
    $content =  mysqli_real_escape_string($dbc,trim($_POST['content']));
    $image = 'images/' . time() . $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];
    if(move_uploaded_file($temp,$image)) {
        $query = "INSERT INTO articles VALUES  ('0','$title','$content','$image',NOW())";
        $result = mysqli_query($dbc, $query) or die ("Cant query");
      echo 'Het uploaden is gelukt!';

    }
}









?>
</div>
</body>
</html>