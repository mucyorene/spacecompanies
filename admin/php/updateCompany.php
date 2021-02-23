<?php
    include '../includes/db.php';
    $a = mysqli_real_escape_string($conn,$_POST['coName']);
    $b = mysqli_real_escape_string($conn,$_POST['coEmail']);
    $c = mysqli_real_escape_string($conn,$_POST['coLocation']);
    $d = mysqli_real_escape_string($conn,$_POST['phoneNumber']);
    $e = mysqli_real_escape_string($conn,$_POST['cousername']);
    $f = mysqli_real_escape_string($conn,$_POST['copassword']);
    $g = mysqli_real_escape_string($conn,$_POST['coTin']);

    //images

    $tk = mysqli_real_escape_string($conn,$_FILES["thumbnails"]["name"]);
    

    $ext1 = explode(".",$tk);
    
    $i = uniqid().".".$ext1[1];

        $updates  = mysqli_query($conn,"UPDATE companies SET comName='$a',comEmail='$b',comLocation='$c',comPhone='$d',comUsername='$e',comPassword='$f' WHERE id='$id')") or die(mysqli_error($conn));

        //move_uploaded_file($_FILES['thumbnails']['tmp_name'],"admin/media/companies/".$i);
        if ($updates) {
            $msg="<div class='alert alert-success alert-dismissible' role='alert'>
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                        <h3>Updated successfully</h3>
                        </div>";
        }else {
            $msg="<div class='alert alert-danger alert-dismissible' role='alert'>
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                    <h3>Failed to be saved</h3>
                    </div>";
        }
?>