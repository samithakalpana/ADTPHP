<?php
ob_start();
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
 $lang=$_SESSION["lang"];
 $page=$_SESSION["page"];

 echo "<br>page name :".$page;
 echo "<br>Language :".$lang;

 if(strcmp($lang,"sinhala")==0){
//   header("Location:../$page");
   echo '<br>language if work';
 }else {
//   header("Location:sinhala/$page");
   echo '<br>else work';
   
 }
 
 if(isset($_GET["page"]) && $_GET["lang"]){
     echo '<br> ok';
     $lang=$_GET["lang"];
     $page=$_GET["page"];
     
      if(strcmp($lang,"sinhala")==0){
   header("Location:../$page");
   echo '<br>language if work';
 }else {
   header("Location:../sinhala_$page");
   echo '<br>else work';
   
 }
 }
 echo '<br>'.$_GET["lang"];
 echo '<br>'.$_GET["page"];

 ob_end_flush();
?>