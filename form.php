<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="file.css">
</head>
<body>
    <div class="background">
        <h1>Fill In Your Details below</h1>

        <h4>Welcome to Ighub fellowship</h4>
        
            <form action="secondpage.php" method="POST" >
                
                Full name: <input type="text" class="details" name="first" ><br>

                
                Age: <input type="text" class="details" name="Age"><br>

                
                State: <input type="text" class="details" name="State"><br>

                
                State your reason for joining the Ighub fellowship: <textarea name="ighub" class="details" cols="35" rows="5" name="text"></textarea>
                <button type="submit" name="submit"class="submit">Submit Here</button>
            </form>



            


            
    </div>

    <?php
			include_once 'secondpage.php';	
		
	?>
    
    
</body>
</html>