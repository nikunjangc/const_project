
<?php
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
  
  header("Location: login_main.php"); 
} ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ex credit</title>
  <link rel = "stylesheet" type = "text/css" href="main.css">
</head>
<body>
  <div id  = "naviBar" class="navibar">
    <h1>LaGuardia Community College Construction Project</h1>
    <option value="search"></option>
    Project ID:
    <select>
      <option value="search"></option>
    </select>
    Project Name: 
    <select>
      <option value="search"></option>
    </select>
    Project building: 
    <select>
      <option value="search">
      </option>
    </select>
    Project Status: 
    <select>
      <option value = "search"></option>
    </select>
  </div>
  <form action="save_proj.php" method="post">
    <div class="split Left">
   <!--    Project#: <input type = "text" name="project"  ><br> -->
      Project Name: <input type="text" name="proj_name"><br>
      Project Type: <input type="text" name="proj_type"><br>
      Project Description: <input type="text" name="proj_description"><br>
      Project Start Date: <input type="date" name="st_date"><br>
      Completion date: <input type = "date" name="comp_date"><br>
      Design Team: <input type="text" name="design_team"><br>
      Cost: <input type="text" name="cost" ><br>
      Design Cost: <input type="text" name="design_cost"><br>            Construction cost: <input type="text" name="cons_cost"><br>
      FE Cost: <input type="text" name="fe_cost"><br>
      Management Cost: <input type="text" name="manag_cost"><br>
      Total Cost: <input type="text" name="total_cost"><br>

       overview: <input type="text" name="proj_overview"><br>
    </div>

    <div class = "split Right">
      Priority Level: <select name="priority_level">
        <option value="nothing">Select Priority Level</option>
        <option value="High">HIGH</option>
        <option value="Medium">MEDIUM</option>
        <option value="Low">LOW</option>
      </select><br>
      Building: <select name="building_value">
        <option value="nothing">Select Building</option>
        <option value="B">B
        </option>
        <option value="C">C
        </option>
        <option value="E">E
        </option>
        <option value="M">M
        </option>
      </select><br>
      Location: <input type="text" name="location"><br>
      Service Provided: <select name="service_provided">
        <option value="nothing">Select Service Provided</option>
        <option value="Full">FUll</option>
        <option value="No">NO</option>
        <option value="PARTIAL">partial</option>
      </select><br>
      Status: <select name="proj_status">
        <option value="nothing">Select Status</option>
        <option  value="Incomplete">INCOMPLETE</option>
        <option value="Completed">COMPLETED</option>
      </select><br>
      <button type="submit" >Save</button>
    </div>


    <div class = "split Right"> 
      <table>
        <tr>
          <th scope="row"></th>
          <th scope="row"></th>
          <th scope="row">Amount</th>
          <th scope="row">FY Received</th>
          <th scope="row">Contact Info</th>
        </tr>
        <tr>
          <th scope="col">Boro President:</th>
          <td><input type = "checkbox"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>
        </tr>

        <tr>
          <th scope="col">City Council:</th>
          <td><input type = "checkbox"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>

        </tr>

        <tr>
          <th scope="col">Mayor:</th>
          <td><input type = "checkbox"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>


        </tr>

        <tr>
          <th scope="col">In House:</th>
          <td><input type = "checkbox"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>


        </tr>

        <tr>
          <th scope="col">Capital Project:</th>
          <td><input type = "checkbox"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>

        </tr>

        <tr>
          <th scope="col">CUNY 2020:</th>
          <td><input type = "checkbox"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>

        </tr>

        <tr>
          <th scope="col">SAM CCAP:</th>
          <td><input type = "checkbox"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>

        </tr>

        <tr>
          <th scope="col">Private Grant:</th>
          <td><input type = "checkbox"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>

        </tr>

        <tr>
          <th scope="col">Federal State:</th>
          <td><input type = "checkbox"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>
          
        </tr>

        <tr>
          <th scope="col">DCAS/Operating:</th>
          <td><input type = "checkbox"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>

        </tr>

        <tr>
          <th scope="col">DCAS/CAP:</th>
          <td><input type = "checkbox"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>

        </tr>

        <tr>
          <th scope="col">Energy Conservation:</th>
          <td><input type = "checkbox"></td>
          <td><input type = "text"></td>
          <td><input type = "text"></td>
          
        </tr>
      </table>
    </div>
  </form>



  <div class="tab">
    <button class="tablinks" onclick="openBox(event, 'Meeting')">Meeting Minutes</button>

    <button class="tablinks" onclick="openBox(event, 'Request_and_design_basis')">RequestandDesignBasis</button>
    <button class="tablinks" onclick="openBox(event, 'Request_for_scooping_change')">Request for Scooping Change</button>
    <button class="tablinks" onclick="openBox(event, 'Cost_estimates')">Cost Estimates</button>
    <button class="tablinks" onclick="openBox(event, 'Building_department')">Building Department</button>
    <button class="tablinks" onclick="openBox(event, 'Bid_documents')">Bid Documents Change</button>

    <button class="tablinks" onclick="openBox(event, 'Inspection_Reports')">Inspection Report</button>
    
    
    <button class="tablinks" onclick="openBox(event, 'FandE')">F and E</button>
    <button class="tablinks" onclick="openBox(event, 'Closeout')">CLoseout</button>
  </div>

  <div id="Meeting" class="tabcontent">
    <h3>Meeting</h3>
    <p>London is the capital city of England.</p>
  </div>

  <div id="Request_and_design_basis" class="tabcontent">
    <h3>Request_and_design_basis</h3>
    <p>London is the capital city of England.</p>
  </div>

  <div id="Request_for_scooping_change" class="tabcontent">
    <h3>Request_for_scooping_change</h3>
    <p>Paris is the capital of France.</p> 
  </div>

  <div id="Cost_estimates" class="tabcontent">
    <h3>Cost_estimates</h3>
    <p>Tokyo is the capital of Japan.</p>
  </div>
  <div id="Building_department" class="tabcontent">
    <h3>Building_department</h3>
    <p>Tokyo is the capital of Japan.</p>
  </div>
  <div id="Bid_documents" class="tabcontent">
    <h3>Bid_documents</h3>
    <p>Tokyo is the capital of Japan.</p>
  </div>

  <div id="Inspection_Reports" class="tabcontent">
    <h3>Inspection_Reports</h3>
    <p>Tokyo is the capital of Japan.</p>
  </div>
  <div id="FandE" class="tabcontent">
    <h3>FandE</h3>
    <p>Tokyo is the capital of Japan.</p>
  </div>  
  <div id="Closeout" class="tabcontent">
    <h3>Closeout</h3>
    <p>Tokyo is the capital of Japan.</p>
  </div>

  <script>
    function openBox(evt, Opt_types) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(Opt_types).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>



  <button type="text"  name ="close" value="ok">CLose</button>

  <button type="text"  name ="five" value="ok">FiveYearCapitalBudgetRequest</button>


  <form method="post" action="logout.php">
    <input type="submit" name="" value="Logout">
  </form>







</body>
</html> 
