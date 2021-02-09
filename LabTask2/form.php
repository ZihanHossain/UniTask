<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validation</title>
</head>
<body>

    <?php
        $name = $email = $gender = $dob = $degree = "";
        $nameError = $emailError = $dobError = $degreeError = $genderError = "";

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $dob = $_POST["dob"];
            
            if(strlen($name)<2)
            {
                $nameError = "* Name must be atleast of 2 alphabet";
            }
            else if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) 
            {
                $nameError = "* Only letters and white space allowed";
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $emailError = "* Invalid email format";
            }

            if (empty($_POST["gender"])) 
            {
                $genderError = "Gender is required";
            } else 
            {
                $gender = $_POST["gender"];
            }

            if (empty($_POST["dob"]))
            {
                $dobError = "* Date of Birth is required";
            }
        }
        
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <fieldset style="width: 40%;">
            <legend>NAME</legend>
            <input type="text" name="name">
            <label style = "color:red"><?php echo $nameError;?></label> <br>
            <hr>
            <input type="submit">
        </fieldset>
    
    <br>
    
        <fieldset style="width: 40%;">
            <legend>EMAIL</legend>
            <input type="email" name="email">
            <label style = "color:red"><?php echo $emailError;?></label> <br>
            <hr>
            <input type="submit">
        </fieldset>
    
    <br>
    
        <fieldset style="width: 40%;">
            <legend>DATE OF BIRTH</legend>
            <input type="date" name="dob" min = "1953-01-01" max = "1998-12-31">
            <label style = "color:red"><?php echo $dobError;?></label> <br>
            <hr>
            <input type="submit">
        </fieldset>
    
    <br>
    
        <fieldset style="width: 40%;">
            <legend>GENDER</legend>
            <input type="radio" name="gender" value="male"><label>Male</label>
            <input type="radio" name="gender" value="female"><label>Female</label>
            <input type="radio" name="gender" value="other"><label>Other</label>
            <label style = "color:red"><?php echo $genderError;?></label> <br>
            <hr>
            <input type="submit">
        </fieldset>
    
    <br>
    
        <fieldset style="width: 40%;">
            <legend>DEGREE</legend>
            <input type="checkbox" name="degree1" value="ssc">
            <label for="vehicle1"> SSC</label>
            <input type="checkbox" name="degree2" value="hsc">
            <label for="vehicle2"> HSC</label>
            <input type="checkbox" name="degree3" value="bsc">
            <label for="vehicle3"> BSc</label>
            <input type="checkbox" name="degree4" value="msc">
            <label for="vehicle3"> MSc</label><br>
            <hr>
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>