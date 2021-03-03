<?php
    $error = "";
    session_start();
    $_SESSION["user"] = "Zihan";
    $data = file_get_contents('data.json');
    $data = json_decode($data, true);

    foreach($data as $key => $info)
    {
        if($info["username"] == $_SESSION["user"])
        {
            $name = $info["name"];
            $email = $info["email"];
            $username = $info["username"];
            $gender = $info["gender"];
            $dateofbirth = $info["dateofbirth"];
            if(isset($_POST["submit"]))
            {
                $data[$key]["name"] = $_POST["name"];
                $data[$key]["email"] = $_POST["email"];
                $data[$key]["username"] = $_POST["username"];
                $data[$key]["gender"] = $_POST["gender"];
                $data[$key]["dateofbirth"] = $_POST["dateofbirth"];
            }
            $final_data = json_encode($data);
            if (file_put_contents('data.json', $final_data)) {
                $message = "<label class='text-success'>File Appended Success fully</p>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>                                                                                                                                                                                     
<body>
<div class="container">
        <legend>REGISTRATION</legend>
        <form method="POST" action="test.php">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $name ?>" >
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $email ?>"  required>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Use Name</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username ?>" >
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-1">
                    <label class="form-label">Gender</label>
                </div>
                <div class="col-md-11">
                    <div class="form-check">
                        <input type="radio" name="gender" value="male" id="gridRadios1" class="form-check-input">
                        <label class="form-check-label" for="gridRadios1">Male</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="gender" value="female" id="gridRadios2" class="form-check-input">
                        <label class="form-check-label" for="gridRadios2">Female</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" name="gender" value="other" id="gridRadios3" class="form-check-input">
                        <label class="form-check-label" for="gridRadios3">Other</label>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-auto">
                    <fieldset>
                        <legend>Date of Birth</legend>
                        <input type="date" name="dateofbirth" value="<?php echo $dateofbirth ?>" >
                    </fieldset>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-auto">
                    <?php if (isset($_POST["submit"])) echo $error ?>
                </div>
            </div>
            <br>
            <div class="row g-3">
                <div class="col-md-auto">
                    <input type="submit" name="submit" class="btn btn-primary">
                    <input type="reset" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
</body>
</html>