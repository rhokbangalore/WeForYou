<?php

$sl=$_POST['query'];

$con=mysql_connect("localhost","root","");
mysql_select_db("sex",$con)or die("error");

$r=mysql_query("insert into questions(q)values('$sl');")or die("error2");

echo
 "<html>
<head>
<script>
function chk()
{
window.location.href='query.html';
}
</script>
<body onload='chk();'></body></html>";

?>