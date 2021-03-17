<!DOCTYPE HTML>
<html>
    <head>
        <title>Hexadecimal number</title>
    </head>
    <body>
        <?php 
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $pattern = '/^[0-9a-f]+$/i';
                $test = $_POST['hex'];
                if(preg_match($pattern,$test)){
                    echo "Input is Hexadecimal";
                }else{
                    echo "Input is not Hexadecimal";
                }
            }
        ?>
        
        <form action="hexa.php" method="POST">
            <div>
                <label>Enter the number</label>
                <input type="text" name="hex" minlength=2 maxlength=2>
            </div>
            <div>
                <input type="submit" value="SUBMIT">
            </div>            
        </form>
    </body>    
</html>