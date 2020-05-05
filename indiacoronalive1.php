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
    <th class="text-capitalize">state</th>
    <th class="text-capitalize">confirmed</th>
    <th class="text-capitalize">active</th>
    <th class="text-capitalize">recovered</th>
    <th class="text-capitalize">deaths</th>
   
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

  <td><?php echo $corona['statewise'][$i]['state'];
 ?></td>

  <td><?php echo $corona['statewise'][$i]['confirmed'];
 ?></td>

  <td><?php echo $corona['statewise'][$i]['active'];
 ?></td>

  <td><?php echo $corona['statewise'][$i]['recovered'];
 ?></td>

  <td><?php echo $corona['statewise'][$i]['deaths'];
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
<!-- TOP CURSOR -->
<div class="container scrolltop float-right pr-5">
  <i class= "fa fa-arrow-up" onclick="topFunction()" id="mybtn">TOP</i>
  
</div>
<<!-- footer -->
<footer class="mt-5">

  <div class="footer_style text-white text-center container-fluid">

  <p>copyright by Vatsal</p>

  </div>
  
</footer>

</body>
<script type="text/javascript">

  mybutton=document.getElementById("mybtn");

  window.onscroll=function(){
    scrollFunction()};
    function
    scrollFunction(){
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop>100) {

    mybutton.style.display="block";

  }
  else{
    mybutton.style.display="none";
  }
}
function topFunction(){
  document.body.scrollTop=0;
  document.documentElement.scrollTop=0;
}
</script>



<script type="text/javascript">

  function fetch()
  {
    $.get("https://api.covid19api.com/summary",
        function (data){
              
            var tbval= document.getElementById("tbval");
            for(var i=1; i<(data['Countries'].length);i++){

              var x=tbval.insertRow();
              x.insertCell(0);

              tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];

              tbval.rows[i].cells[0].style.background="lightblue";
              tbval.rows[i].cells[0].style.color="red";
              tbval.rows[i].cells[0].style.font="bold";

              x.insertCell(1);

              tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
              tbval.rows[i].cells[1].style.background="lightgrey";



              x.insertCell(2);

              tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
              tbval.rows[i].cells[2].style.background="lightgrey";

               x.insertCell(3);

              tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
              tbval.rows[i].cells[3].style.background="lightgrey";

                x.insertCell(4);

              tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed']
              tbval.rows[i].cells[4].style.background="lightgrey";

              x.insertCell(5);

               tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered']
              tbval.rows[i].cells[5].style.background="lightgrey";

               
              x.insertCell(6);

               tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths']
                tbval.rows[i].cells[6].style.background="lightgrey";

               



            }        
        }

      );
  }

  </script>
</html>