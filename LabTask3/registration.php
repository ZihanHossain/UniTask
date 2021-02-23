<?php
$message = '';  
$error = '';  
if(isset($_POST["submit"]))  
{  
     if(empty($_POST["name"]))  
     {  
          $error = "<label>Enter Name</label>";  
     }  
     else if(empty($_POST["gender"]))  
     {  
          $error = "<label>Enter Gender</label>";  
     }  
     else if(empty($_POST["email"]))  
     {  
          $error = "<label>Enter Email</label>";  
     }
     else if(empty($_POST["username"]))  
     {  
          $error = "<label>Enter User Name</label>";  
     }  
     else if(empty($_POST["password"]))  
     {  
          $error = "<label>Enter Password</label>";  
     }  
     else if(empty($_POST["confirmpassword"]))  
     {  
          $error = "<label>Enter Confirm Password</label>";  
     }
     else if(empty($_POST["dateofbirth"]))  
     {  
          $error = "<label>Enter Date of Birth</label>";  
     }      
     else  
     {  
          if(file_exists('data.json'))  
          {  
               $current_data = file_get_contents('data.json');  
               $array_data = json_decode($current_data, true);  
               $extra = array(  
                    'name'            =>     $_POST['name'],  
                    'gender'          =>     $_POST["gender"],  
                    'email'           =>     $_POST["email"], 
                    'username'        =>     $_POST["username"],  
                    'password'        =>     $_POST["password"], 
                    'confirmpassword' =>     $_POST["confirmpassword"],
                    'dateofbirth'     =>     $_POST["dateofbirth"]    
               );  
               $array_data[] = $extra;  
               $final_data = json_encode($array_data);  
               if(file_put_contents('data.json', $final_data))  
               {  
                    $message = "<label class='text-success'>File Appended Success fully</p>";  
               }  
          }  
          else  
          {  
               $error = 'JSON File not exits';  
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
    <title>Document</title>
</head>

<body>
    <fieldset>
        <legend>REGISTRATION</legend>
        <form method="POST" action="registration.php">
            <table>
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <label> :</label>
                        <input type="text" name="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <label> :</label>
                        <input type="email" name="email" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Use Name</label>
                    </td>
                    <td>
                        <label> :</label>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <label> :</label>
                        <input type="password" name="password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Confirm Password</label>
                    </td>
                    <td>
                        <label> :</label>
                        <input type="password" name="confirmpassword">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Gender</legend>
                            <input type="radio" name="gender" value="male">
                            <label>Male</label>
                            <input type="radio" name="gender" value="female">
                            <label>Female</label>
                            <input type="radio" name="gender" value="other">
                            <label>Other</label>
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <fieldset>
                            <legend>Date of Birth</legend>
                            <input type="date" name="dateofbirth">
                        </fieldset>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php if(isset($_POST["submit"])) echo $error ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit">
                        <input type="reset">
                    </td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>