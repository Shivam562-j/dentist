<?php
    $name = $_REQUEST['Name'];
    $mobileno = $_REQUEST['Mobileno'];
    $email = $_REQUEST['Email'];
    $message = $_REQUEST['Message'];

    // check the field
    if(empty($name) || empty($email) || empty($mobileno) || empty($message)){
        echo "Please Fill all the field";
    }

    else{
        mail("krshivam998@gmail.com" , Dentist Website Message, $message , "From: $name <$mobileno> <$email>");
        echo "<script type="text/javascript">alert("Your Message sent Sucessfully");
        window.history.log(-1)
;        </script>
    }
?>

