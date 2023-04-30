<?php
$ser = 'localhost';
$user = 'root';
$pas = '';
$db = 'donation';
$con = mysqli_connect($ser , $user ,$pas , $db);
if($con){
    ?>
<script>
    alert('Connectioin successful')
    </script>
<?php
}
else{
?>
<script>alert('Connectioin failed')
</script>
<?php
}
?>