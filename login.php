<?php
   $username = $_REQUEST["username"];
   $pwd = hash('sha256',$_REQUEST["password"]);
   $dbhandle = new PDO("sqlite:auth.db") or die("Failed to open DB");
   if (!$dbhandle) die ($error);
   $statement = $dbhandle->prepare("Select * from users where username='".$username."' and pwd='".$pwd."'");
   $statement->execute();
   $results = $statement->fetch(PDO::FETCH_ASSOC);
   if (isset($results["pwd"])){
       $_SESSION['logged_in'] = true;
       echo "Success!  You are logged in.";
   } else {
       $_SESSION["logged_in"] = false;
       header("Location: index.html"); /* Redirect browser */
       exit();
   }
?>