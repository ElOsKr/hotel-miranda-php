<?php

function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
        mt_rand( 0, 0xffff ),
        mt_rand( 0, 0x0fff ) | 0x4000,
        mt_rand( 0, 0x3fff ) | 0x8000,
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}

    function insertContact($name, $email, $phone ,$subject,$comment){
        $conn = new mysqli('localhost', 'root', '', 'mirandahotel');
        $id = gen_uuid();
        $sql = "insert into contacts (contact_id, contact_name, contact_email, contact_phone, contact_subject, contact_comment, contact_status)
                values('$id', '$name', '$email', '$phone', '$subject', '$comment', 0)";
        $result = $conn->query($sql);
        $conn->close();
        if($result === TRUE){
            return ("Inserted");
        }else{
            return ("Failed");
        }
    }

    if(isset($_POST)){
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);
        
        $name = $data['name'];
        $email = $data['email'];
        $phone = intval($data['phone']);
        $subject = $data['subject'];
        $message = $data['message'];

        $insert = insertContact($name, $email, $phone, $subject, $message);
        echo $insert;
    }

?>