<!DOCTYPE HTML>
<html>
    <head>
        <title>Regex</title>
    </head>
    <body>
        <?php 
            if(isset ($pattern)){
                $pattern = "/^[a-z0-9]{3,3}(-|\.)[a-z0-9]{3,3}\.[a-z]{2,3}$/i";
                $test = $_POST['regex'];
                if(preg_match($pattern, $test)) {
                    
                    echo "Regex valid";	
                } else{ 
                
                    echo "Not Valid";
                }
            }
            
        ?>
        
        <form action="regex.php" method="POST">
            <div>
                <label>Enter the string</label>
                <input type="text" name="regex">
            </div>
            <div>
                <input type="submit" value="SUBMIT">
            </div>            
        </form>
    </body>    
</html>