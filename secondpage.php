

<?php 


if(isset($_POST['submit'])){
    $name = $_POST['first'];
    $Age = $_POST['Age'];
    $State = $_POST['State'];
    $comment = $_POST['ighub'];

    echo "<p>";



    echo "<h3>Please confirm this details</h3>";


    echo 'Your full name is: ' . $name;
    echo "<br>";
    echo 'You are: ' . $Age . ' years old';
    echo "<br>";
    echo 'You are from ' . $State . ' state';
    echo "<br>";
    echo 'And your reason for joining the Ighub program is  for : ' . $comment;

    echo "</p>";
    


}



    

?>






