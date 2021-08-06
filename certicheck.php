<?php
$id=$_POST["uid"];
if ($id!=null){
    header("Location: $id.pdf");
}
else {
    header("Location: certificate.php?id=Err");
}
?>