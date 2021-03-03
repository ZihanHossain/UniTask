<?php
session_start();
function viewProfile()
    {
        $data = file_get_contents("data.json");
        $data = json_decode($data, true);
        foreach ($data as $info)
        {
            if($_SESSION["user"] == $info["name"])
            {
                $_SESSION["email"] = $info["email"];
                $_SESSION["gender"] = $info["gender"];
                $_SESSION["dateofbirth"] = $info["dateofbirth"];
                $GLOBALS["right"] = '<div class="container" >
                <div class="row">
                    <legend>View Profile</legend>
                </div>
                <div class="row">
                    <hr>
                </div>
                <div class="row" >
                    <div class="col" >
                        <div class="container" >
                            <div class="row" >
                                <div class="col-4">
                                    <span>Name</span>
                                </div>
                                <div class="col-8">
                                    <span>:</span>'
                                    . $_SESSION["user"] .'
                                </div>
                            </div>
                            <div class="row">
                                 <hr>
                            </div>
                            <div class="row" >
                                <div class="col-4">
                                    <span>Email</span>
                                </div>
                                <div class="col-8">
                                    <span>:</span>
                                    '. $_SESSION["email"] .'
                                </div>
                            </div>
                            <div class="row">
                                 <hr>
                            </div>
                            <div class="row" >
                                <div class="col-4">
                                    <span>Gender</span>
                                </div>
                                <div class="col-8">
                                    <span>:</span>
                                    '. $_SESSION["gender"] .'
                                </div>
                            </div>
                            <div class="row">
                                 <hr>
                            </div>
                            <div class="row" >
                                <div class="col-4">
                                    <span>Date of Birth</span>
                                </div>
                                <div class="col-8">
                                    <span>:</span>
                                    '. $_SESSION["dateofbirth"] .'
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col" >
                        Picture
                    </div>
                </div>
            </div>';
            }
        }
    }

    function dashbord()
    {
        $GLOBALS["right"] = "<span>Welcome ". $_SESSION["user"] ."</span>";
    }

    function editProfile()
    {
        $error = "";
        $data = file_get_contents('data.json');
        $data = json_decode($data, true);

        foreach($data as $key => $info)
        {
            if($info["name"] == $_SESSION["user"])
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

        $GLOBALS["right"] = '<div class="container">
        <legend>REGISTRATION</legend>
        <form method="POST" action="test.php">
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="'. $name .'" >
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="'. $email .'"  required>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Use Name</label>
                    <input type="text" name="username" class="form-control" value="'. $username .'" >
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
                        <input type="date" name="dateofbirth" value="'. $dateofbirth .'" >
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
    </div>';
    }

?>