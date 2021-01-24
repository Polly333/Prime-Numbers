<?php
$start = $_POST['n1'];
$end = $_POST['n2'];
echo "Prime Numbers between $start and $end are : <br>" ;
for($i = $start; $i<= $end; $i++)
{
for( $j = 2; $j < $i; $j++ )
{
if( $i % $j == 0 )
{
break;
}

}
if( $j == $i )
echo "Prime Number : ", $i, "<br>";
}
?>