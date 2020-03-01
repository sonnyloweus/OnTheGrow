<?php

  $theHREF =  $_SERVER['REQUEST_URI'];
  $counter = 0;
  $index = 0;
  for ($i = 0; $i < strlen($theHREF); $i++){
      if($theHREF[$i] == "&"){
          $counter++;
      }
      if($counter == 1){
          $index = $i;
          break;
      }
  }
  $index = $index-31;
  $theName = substr($theHREF, 31, $index);

  $doneName = "";

  for ($i = 0; $i < strlen($theName); $i++){
      if($theName[$i] == "+"){
          $doneName = $doneName . " ";
      }else{
          $doneName = $doneName . $theName[$i];
      }
  }

  include('templates/connect_db.php');

  $sql = "SELECT * FROM members WHERE username = '$doneName'";
  //make query + result
  $result = mysqli_query($conn, $sql);
  //fetch array from result
  $member = mysqli_fetch_assoc($result);
  $userPointCount = 0;
  if($member){
    $userPointCount = $member['points'];
  }
  mysqli_free_result($result);

?>

<div id="myForest" class="myForest">
  <div id="myForestPage">
    
    <button id="homeButton3" class="homeButton3">🏡</button>

    <h1  id="MyForestTitle" >My Tree</h1>
    <h3 id="score"> Points: <?php echo $userPointCount ?> </h3> 

    <img id="myTree" src="">

    <div class="sideMenu"></div>

</div>
</div>

<script>
  let userPointCount = "<?php echo "$userPointCount"?>";
  let myTree = document.getElementById("myTree");
  if(userPointCount == 0){
    myTree.src = "images/treeLevel_0.png";
  }if(userPointCount > 0 && userPointCount < 40){
    myTree.src = "images/treeLevel_1.png";
  }if(userPointCount > 40 && userPointCount < 80){
    myTree.src = "images/treeLevel_2.png";
  }if(userPointCount > 80 && userPointCount < 160){
    myTree.src = "images/treeLevel_3.png";
  }if(userPointCount > 160 && userPointCount < 210){
    myTree.src = "images/treeLevel_4.png";
  }if(userPointCount > 210 && userPointCount){
    myTree.src = "images/treeLevel_5.png";
  }
</script>