<?php
    include("./connection.php");

    session_start();

    header('Content-Type: application/json');
    header('Access-Control-Allow-origin:*');
    header('Access-Control-Method:POST');


    $data = json_decode(file_get_contents("php://input"));
   

    $school_name=$data->schoolname;
    $student_name=$data->studentname;
    $fathers_name=$data->fathersname;
    $mothers_name=$data->mothersname;
    $fathers_occ=$data->fathersocc;
    $mothers_occ=$data->mothersocc;
    $email=$data->email;
    $dob=$data->dob;
    $b_groop=$data->bgroop;
    $number=$data->number;
    $a_number=$data->anumber;
    $aadhar=$data->aadhar;
    $class=$data->class;
    $remarks=$data->remarks;
    $state=$data->state;
    $district=$data->district;
    $board=$data->board;
    $id=$data->id; 
    
    $sql="UPDATE `students` SET `sc_name`='$school_name',`stud_name`='$student_name',`f_name`='$fathers_name',`m_name`='$mothers_name',`f_occupation`='$fathers_occ',`m_occupation`='$mothers_occ',`email`='$email',`dob`='$dob',`blood`='$b_groop',`number`='$number',`a_number`='$a_number',`adhar`='$aadhar',`class`='$class',`remarks`='$remarks',`state`='$state',`district`='$district',`board`='$board',`image`='[value-19]' WHERE `students`.`id` = {$id}";

    $result =$connection->query($sql); 
   
    
?>