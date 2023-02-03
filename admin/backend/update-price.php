<?php
include './connection.php';
if(isset($_POST['update'])){
    $topware=$_POST['topware'];
    $bottomware=$_POST['bottomware'];
    $woolen=$_POST['woolen'];
    $other=$_POST['other'];
    $query="UPDATE pricing SET price='".$bottomware."' WHERE slno=2; 
                    UPDATE pricing SET price='".$topware."' WHERE slno=1; 
                    UPDATE pricing SET price='".$woolen."' WHERE slno=3; 
                    UPDATE pricing SET price='".$other."' WHERE slno=4"; 

$result=mysqli_multi_query($con,$query);
if($result){
    header ('location:../pricing-list.php?name=Pricing Updated Successfully');
}
else{
    header ('location:../pricing-list.php?name=Can not update Pricing, Try Again');
    
}

}

?>