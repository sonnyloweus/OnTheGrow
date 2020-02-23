<div id="leaderboard" class="leaderboard">
  <div id="leaderboardPage">
    
    <button id="homeButton2" class="homeButton2">🏡</button>

    <h1  id="LeaderBoards" >LeaderBoards</h1>

    <div class="sideMenu">

      <button id="addCompetitionsButton" class="addCompetitionsButton">+ Add Competition</button>
      <button id="ViewCompetitionsButton" class="ViewCompetitionsButton">My Competitions</button>

    </div>

    <div id="createAnother" style="display: none;"> 

      <form id="adding" autocomplete="off">
        <label>Name of Competition* :</label> <br>
        <input id="competitionName" type="Name of Competition" name="Name of Competiton" placeholder="Family" required> <br>
        <label>Users*  (separate with a comma and space):</label> <br>
        <input id="peopleCompetition" type="Users" name="Users" placeholder="bob, sam, tim" required> <br>
        <button type="submit" onclick="createCompetition('create')" id="addingSubmit">CREATE</button>
      </form>

      <h1 id="created">Created ✔ wait...</h1>
      <button id="anotherOne">CREATE ANOTHER</button>

    </div>

  
    <div id="myCompetitions" style="display: none;">

      <!-- <?php 
        $test = "title:bob,sam,joe";
        $titleComp = "";
        $userComp = array("","","","","");

        $counter1 = 0;
        $counter2 = 0;
        $indextitle = 0; 
        for($i = 0; $i < strlen($test); $i++){
          if($test[$i] == ":"){
            $counter1++;
          }
          if($counter1 == 1){
          }else if($counter1 != 1){
            $titleComp = $titleComp . $test[$i];
          }else{
            if($test[$i] == ","){
              $counter2++;
            }else{
              $userComp[$counter2] = $userComp[$counter2] . $test[$i];
            }
          }
        }

        echo '<h1 id="titleComp">'. $titleComp .'</h1>';
        echo '<div id="userComp">';
        for($i = 0; $i < sizeof($userComp); $i++){
          echo '<h3>'. $userComp[$i] .' </h3>';
        }
        echo '<div>';
      
      ?> -->
    
    </div>
    

  </div>
</div>

<script>
</script>