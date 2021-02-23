<?php
if (isset($_POST["submit"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check == false) {
        $message = "File is not an image";
    }
    if ($_FILES["image"]["size"] > 4000000) {
        $message = "File is too big. Max 40mb";
    }
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        $message = "Sorry, only JPG, JPEG, PNG files are allowed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>PROFILE PICTURE</legend>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ?>">
            <input type="file" name="image" id="image">
            <label><?php if(isset($_POST["submit"])) echo $message ?></label>
            <hr>
            <input type="submit" name="submit">
        </form>
    </fieldset>
</body>

</html>