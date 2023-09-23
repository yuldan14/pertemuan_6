<?php
$conn = mysqli_connect("localhost","root","","Mahasiswa");
$result= mysqli_query($conn,"SELECT * FROM mahasiswa");
$mahasiswa=mysqli_fetch_all($result, MYSQLI_ASSOC);
?>