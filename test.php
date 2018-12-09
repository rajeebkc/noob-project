
<?php echo "name:".$_POST["name"]; ?>
<br/>
<?php echo "email:".$_POST["email"]; ?>
<br/>
<?php echo "password:".$_POST["password"]; ?>
<br />
<?php 
$d = new DateTime('first day of this month');
echo $d->format('jS,F Y');
$d=new DateTime('2018-12-03');
$d->modify('third day of this month');
echo $d->format('jS, F Y');
//echo date_create('2018-12-03')
//->modify('third day of this month')
//->format('JS, F Y');
?>