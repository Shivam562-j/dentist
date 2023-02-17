<?php
    $name = $_REQUEST['name'];
    $mobileno = $_REQUEST['mobileno'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    // check the field
    if(empty($name) || empty($mobileno) || empty($message)){
        echo "Please Fill all the field";
    }

    else{
        mail("krshivam998@gmail.com" , "Dentist Website Message", $message , "From: $name <$email>");
        echo "<script type="text/javadcript">alert("Your Message sent Sucessfully");
        window.history.log(-1)
;        </script>
    }
?>

