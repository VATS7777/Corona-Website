<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php include 'link/links.php';?>
  <?php include 'css/style.php';?>
</head>


<body onload="fetch()">
  <nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">
    <img src="l1.png" height="80px" width="150px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
    </ul>
    
  </div>
</nav>

<!-- section part --> 


<section class="corona_update container-fluid">
<div class="mb-3">
  <h3 class="text-uppercase text-center mt-4 pt-3">
 India Covid-19 Live Updates Tracker</h3>
</div>

<div class="d-flex
 justify-content-around align-items-center">
  <div class="table-responsive">

  <table class="table table-bordered table-striped text-center">
    <tr>
    <th class="text-capitalize">lastupdatedtime</th>
    
    <th class="text-capitalize">statecode</th>

    <th class="text-capitalize">state</th>



    <th class="text-capitalize">confirmed</th>

    <th class="text-capitalize">deltaconfirmed</th>

    <th class="text-capitalize">active</th>

    <th class="text-capitalize">recovered</th>

    <th class="text-capitalize">deltarecovered</th>

    <th class="text-capitalize">deaths</th>

    <th class="text-capitalize">deltadeaths</th>


   
    </tr>
 
  <?php

  $data = file_get_contents("https://api.covid19india.org/data.json");

  $corona = json_decode($data,true);

  
$statecount =count($corona['statewise']);


  $i=1;
  while($i<$statecount){

  ?>
  <tr>

     <td><?php echo $corona['statewise'][$i]['lastupdatedtime'];
 ?></td>
  
  
<td><?php echo $corona['statewise'][$i]['statecode'];
 ?></td>

 <td><?php echo $corona['statewise'][$i]['state'];
 ?></td>


 <td><?php echo $corona['statewise'][$i]['confirmed'];
 ?></td>

 <td><?php echo $corona['statewise'][$i]['deltaconfirmed'];
 ?></td>


 <td><?php echo $corona['statewise'][$i]['active'];
 ?></td>   


 <td><?php echo $corona['statewise'][$i]['recovered'];
 ?></td>

 <td><?php echo $corona['statewise'][$i]['deltarecovered'];
 ?></td>


 <td><?php echo $corona['statewise'][$i]['deaths'];
 ?></td>

 <td><?php echo $corona['statewise'][$i]['deltadeaths'];
 ?></td>




  </tr>
  


<?php
  $i++;
  }

  ?>  


  </table>
  
</div>
</div>
</section>







<div id="ais-concierge"></div><script src="https://cdn.aisoftware.com/concierge/index.js"
id="ais-concierge-script" concierge-token="4e8fe09d-8cef-4af7-8fcd-2bcb8852d4e8"></script>


<script type="text/javascript">

  function fetch()
  {
    $.get("https://api.covid19india.org/data.json",
        function (data){
              
            var tbval= document.getElementById("tbval");
            for(var i=1; i<(data['statewise'].length);i++){

              var x=tbval.insertRow();
              x.insertCell(0);

              tbval.rows[i].cells[0].innerHTML = data['statewise'][i-1]['confirmed'];

              tbval.rows[i].cells[0].style.background="lightblue";
              tbval.rows[i].cells[0].style.color="red";
              tbval.rows[i].cells[0].style.font="bold";

              x.insertCell(1);

              tbval.rows[i].cells[1].innerHTML = data['statewise'][i-1]['active'];
              tbval.rows[i].cells[1].style.background="lightgrey";



              x.insertCell(2);

              tbval.rows[i].cells[2].innerHTML = data['statewise'][i-1]['recovered'];
              tbval.rows[i].cells[2].style.background="lightgrey";

               x.insertCell(3);

              tbval.rows[i].cells[3].innerHTML = data['statewise'][i-1]['deaths'];
              tbval.rows[i].cells[3].style.background="lightgrey";




         x.insertCell(4);

              tbval.rows[i].cells[4].innerHTML = data['statewise'][i-1]['deltaconfirmed'];
              tbval.rows[i].cells[4].style.background="lightgrey";



         x.insertCell(6);

              tbval.rows[i].cells[6].innerHTML = data['statewise'][i-1]['deltadeaths'];
              tbval.rows[i].cells[6].style.background="lightgrey";



         x.insertCell(7);

              tbval.rows[i].cells[7].innerHTML = data['statewise'][i-1]['deltarecovered'];
              tbval.rows[i].cells[7].style.background="lightgrey";



         x.insertCell(8);

              tbval.rows[i].cells[8].innerHTML = data['statewise'][i-1]['lastupdatedtime'];
              tbval.rows[i].cells[8].style.background="lightgrey";



         x.insertCell(9);

              tbval.rows[i].cells[9].innerHTML = data['statewise'][i-1]['state'];
              tbval.rows[i].cells[9].style.background="lightgrey";



         x.insertCell(10);

              tbval.rows[i].cells[10].innerHTML = data['statewise'][i-1]['statecode'];
              tbval.rows[i].cells[10].style.background="lightgrey";




          
               



            }        
        }

      );
  }

  </script>