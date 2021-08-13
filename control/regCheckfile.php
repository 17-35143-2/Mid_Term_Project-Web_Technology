<?php
    // print_r('hello')
    if($_POST['password'] == $_POST['cpassword'])
    {
        if(!empty($_POST['fname']) && !empty($_POST['lname'])&&
        !empty($_POST['email']) && !empty($_POST['username'])&&
        !empty($_POST['DOB']) && !empty($_POST['address'])&&
        !empty($_POST['gender']))
        {
            // file;
            $client = fopen("user.txt","a");

            $add = $_POST['fname'].$_POST['lname'].' '.$_POST['email'].' '.$_POST['username'].' '.$_POST['DOB'].' '.$_POST['address'].' '.$_POST['gender'].' '.$_POST['password'];
            fwrite($client, $add. " \r\n");
           
            fclose($client);
            
            // json
            $formdata = array(
                'name' => $_POST["fname"].' '.$_POST['lname'],
                'email' => $_POST["email"],
                'username' => $_POST["username"],
                'password' => $_POST["password"],
                'DOB'=>$_POST['DOB'],
                'address'=>$_POST['address'],
                'gender'=>$_POST['gender'],
            );




            $existingdata = file_get_contents('data.json');
            $tempJSONdata = json_decode($existingdata); //stdcl


            
            $tempJSONdata[] = $formdata;
            //Convert updated array to JSON
            $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);

            //write json data into data.json file
            file_put_contents("data.json", $jsondata);
            
            header('Location: ../view/login.php');



        }
        else{
            echo 'All fields are required';
        }
    }
    else{
        echo 'wrong password';
    }
?>