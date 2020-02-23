<div id="leaderboard" class="leaderboard">
  <div id="leaderboardPage">
    
    <button id="homeButton2" class="homeButton2">🏡</button>

    <h1  id="LeaderBoards" >LeaderBoards</h1>

    <div class="sideMenu">

      <button id="addCompetitionsButton" class="addCompetitionsButton">+ Add Competition</button>
      <button id="ViewCompetitionsButton" class="ViewCompetitionsButton">My Competitions</button>

    </div>
  
    <form id="adding" autocomplete="off">
      <label>Name of Competition* :</label> <br>
      <input id="competitionName" type="Name of Competition" name="Name of Competiton" placeholder="Family" required> <br>
      <label>Users*  (separate with a comma and space):</label> <br>
      <input id="peopleCompetition" type="Users" name="Users" placeholder="bob, sam, tim" required> <br>
      <button type="submit" onclick="createCompetition()" id="addingSubmit">CREATE</button>
    </form>

    <h1 id="created">Created ✔</h1>
    <button id="anotherOne">CREATE ANOTHER</button>
    

  </div>
</div>

<script>
</script>