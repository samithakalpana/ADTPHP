<?php
@session_start();

$page="";
$lang="";

if(isset($_SESSION["lang"])){
  echo "<br>language  setted";
}else{
  echo "<br>language not setted";
}
if(isset($_SESSION["page"])){
  echo "<br>page setted";
}else{
  echo "<br>page  not setted";
}
// $lang=$_SESSION["lang"];
// $page=$_SESSION["page"];

// echo "page name :".$page;
// echo "Language :".$lang;

// if(strcmp($lang,"sinhala") ){
//   header("Location:../.$page.");
// }else{
//   header("Location:../sinhala/.$page.");
// }

?>