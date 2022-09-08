<?php
session_start();
require_once("../../DbConnect/db_connect.php");




if(isset($_POST["recentWorkUpdateViewPageBtn"])){
    $idForUpdate = $_POST["idForUpdate"];
    $SlForUpdate = $_POST["SlForUpdate"];
    
    $_SESSION["idForUpdateSession"] = $idForUpdate;
    $_SESSION["SlForUpdateSession"] = $SlForUpdate;
  
    header("location:recentWorkUpdatePage.php");
}




if(isset($_POST["recentUpdateBtn"])){
    $idForUpdateForSession = $_SESSION["idForUpdateSession"];
    $SlForUpdateForSession = $_SESSION["SlForUpdateSession"];

    $recentIconUpdate = $_POST["recentIconUpdate"];
    $recentNumberUpdate = $_POST["recentNumberUpdate"];
    $recentDescriptionUpdate = $_POST["recentDescriptionUpdate"];
    $RecentWorkStatusUpdate = $_POST["RecentWorkStatusUpdate"];
    $flag = false;




    if ($recentIconUpdate) {
        $recentIconOldUpdate = $recentIconUpdate;
    } else {
        $_SESSION["recentIconErrorUpdate"] = "Icon is required";
        $flag = true;
    }

    if ($recentNumberUpdate) {
        $recentNumberOldUpdate = $recentNumberUpdate;
    } else {
        $_SESSION["recentNumberErrorUpdate"] = "Number  is required";
        $flag = true;
    }

    if ($recentDescriptionUpdate) {
        $recentDescriptionOldUpdate = $recentDescriptionUpdate;
    } else {
        $_SESSION["recentDescriptionErrorUpdate"] = "Description is required";
        $flag = true;
    }
    
    if ($flag) {
        header("location:recentWorkUpdatePage.php");
    } else {

        $UpdateRecentWork = "UPDATE recentworks SET recentIcon='$recentIconUpdate',recentNumber='$recentNumberUpdate',recentDescription='$recentDescriptionUpdate' WHERE Id='$idForUpdateForSession'";

        $UpdateRecentWorkRes = mysqli_query($con, $UpdateRecentWork);

        if ($UpdateRecentWorkRes) {
            header("location:recentWorkViewPage.php");
            $_SESSION["recentStatusUpdateSuccess"] = "Update Success For SL NO : " . $SlForUpdateForSession;
        }
    }

}










?>