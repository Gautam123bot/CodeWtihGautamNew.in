




<?php
$con = mysqli_connect('localhost','codewithgautam','Gautam@123@mysql','webganyi_contactdata','3306');
    if(!$con){
        ?>
<script type="text/javascript">
alert('Error: Unable to connect to the database');
</script>
<?php
    }

$name = $_POST['name'];
$email = $_POST['email'];
$tell = $_POST['tell'];

$query = " insert into gautamcontactinfo (name, email, tell) values
('$name', '$email', '$tell') ";

$iquery = mysqli_query($con, $query);

if($iquery){
    ?>
<script type="text/javascript">
alert("Thanks for your response.. !!");
window.location.replace("index.php");
</script>

<?php
}else{
    ?>
<script>
alert("Please try again.");
</script>
<?php
}
?>