<?php
    include '../includes/db.php';
    $id = $_GET['identifications'];
    $sele = mysqli_query($conn,"SELECT *FROM customers WHERE reserveId='$id'") or die(mysqli_error($conn));

       $fes = mysqli_fetch_array($sele);

       if ($fes['reserveStatus']=='Approve') {
           $check = mysqli_query($conn,"UPDATE customers SET reserveStatus='Approved' WHERE reserveId='$id'") or die(mysqli_error($conn));
           if ($check) {
              header("location:../confirmedSales");
           }else{
               echo "Fail 1";
           }
       }else{
            $check1 = mysqli_query($conn,"UPDATE customers SET reserveStatus='Approve' WHERE reserveId='$id'") or die(mysqli_error($conn));
            if ($check1) {
                header("location:../bookedSales");
             }else {
                 echo "Fail 2";
             }
       }
    
?>