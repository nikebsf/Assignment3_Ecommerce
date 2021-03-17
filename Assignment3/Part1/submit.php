<!DOCTYPE HTML>
<html>
    <head>
        <title> Form Validation </title>
    </head>
    <body>
        <form action = "submit.php" method="POST">
        
            <div>
            <label> Username </label>
            <input type= "text" name="username">
            </div>
            <div>
            <label> Age </label>
            <input type= "text" name="age">
            </div>
            <div>
            <label> Password </label>
            <input type= "password" name="password">
            </div>
            <div>
            <label> City </label>
            <input type= "text" name="city">
            </div>
            <div>
            <label> Country </label>
            <input type= "text" name="country">
            <div>
            <input type="submit" value="SUBMIT"><br>
        
        </form>
        <?php 
            $username=$password=$age=$city=$country="";
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                echo "Please fill the registration form"."<br>";
                $username = filter_var($username,FILTER_SANITIZE_STRING);
                $password = filter_var($password,FILTER_SANITIZE_STRING);
                $age = filter_var($age,FILTER_SANITIZE_NUMBER_INT);
                $city = filter_var($city,FILTER_SANITIZE_STRING);
                $country = filter_var($country,FILTER_SANITIZE_STRING);

                if(empty($_POST['username'])){
                    echo "Please enter username"."<br>"; 
                }
                if(empty($_POST['password'])){
                    echo "Please enter password"."<br>";
                }
                if((empty($_POST['age'])) && (is_numeric($_POST['age']))) {
                    echo "Please enter age"."<br>";
                }
                if(empty($_POST['city'])){
                    echo "Please enter city"."<br>";
                }
                if(empty($_POST['country'])){
                    echo "Please enter country"."<br>";
                }

                echo "Form filled succesfully";

            }                            
                   
                   
                
            
        
        
        
        ?>



    </body>
</html>
