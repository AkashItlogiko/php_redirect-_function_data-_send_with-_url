 <?php
 echo $user = $_REQUEST["username"];
 $pass = $_REQUEST["password" ];

if($user=="google"){
  header("location: show.php?test=$user");
}

// if($user=="google"){
//   header("location: https://www.google.com");
// }elseif($user=="facebook"){
//   header("location: https://www.facebook.com");
// }else{
// echo "You didn't redirect";
// }

?>