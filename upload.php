<form method="post" enctype="multipart/form-data">

    <input type="file" name="file" placeholder="jpg"><br>
    <input type="text" name="title" placeholder="title"><br>
    <input type="submit" name="submit" value="upload"><br>


</form>

<?php
$db= mysqli_connect('localhost','root','','user_info');
if (isset($_POST['submit'])){

    $image= $_FILES['file']['name'];
    $title= $_POST['title'];

    $target= "uploads/".basename($image);
    $query= "insert into upload values ('$image','$title')";
    mysqli_query($db,$query);

    if (move_uploaded_file($_FILES['file']['tmp_name'],$target)){

        echo "file is uploaded";
    }else{

        echo "file is not uploaded";
    }
}

$query2= "select * from upload";
$result= mysqli_query($db,$query2);
while($fetrow= mysqli_fetch_assoc($result)){
?>

<img src="uploads/<?php echo $fetrow['Image']; ?>"/>

<?php }?>