<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'link/links.php';?>
	<?php include 'css/style.php';?>
</head>
		
<body>
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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
   
       <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#preventid">Steps of Prevention</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#indtrc">India Corona Live Track</a>
      </li>
      	<li class="nav-item">
        <a class="nav-link" href="worldcoronaliveupdate.php">World Corona Live Track</a>
      	</li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact Us</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#videoid">Video</a>
      </li>
      
    </ul>
    
  </div>
</nav>



<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12  order-lg-1 order-2">
		<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
			<img src="c1.jpg" width="400" height="300">	
		</div>
			
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside  w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Fight Toghter Against<br>Cor<span class="corona_animation"><img src="c2.png" height="100" width="200"></span>na Virus,<br>Please Stay Home, Stay Safe.</h1>
			</div>
		</div>
	</div>
	
</div>
<!-- Update of corona  -->
<section class="corona_update container-fluid">
<div class="mb-3  " id="indtrc">

	 	<div class=" section_header sub_section text-center mb-5 mt-4">
  <h1 style="color:rgb(103,71,169);"class="text-uppercase text-center mt-4 pt-3 ">
 
 India Covid-19 Live Updates Tracker</h1>
</div>
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




<section class="corona_update">

	<div class=" section_header sub_section text-center text-capitalize mb-5 mt-4">

	<h1 style="color:rgb(103,71,169);">Covid-19 Updates</h1>

</div>


<div class="d-flex
 justify-content-around align-items-center" style="background-color:rgb(227,231,173);">
	<div>
		<h1 class="count">
46,476

</h1>
<p>Confirmed Cases</p>
	</div>

		<div>
		<h1 class="count">
32,052

		</h1>
		<p>Active Cases
 		</p>
	</div>
		<div>
		<h1 class="count">
12,849
</h1>
<p>Recovered</p>
	</div>
	<div>
<h1 class="count">
1,571

</h1>
<p>Deceased</p>
	</div>
</div>	

</section>
<!--  About Section-->


<div class="container-fluid  pt-5 pb-5 "id="aboutid" >
	
<div class="section_header sub_section text-center mb-5 mt-4">

	<h1 style="color:rgb(103,71,169);" >About Covid-19</h1>

</div>
<div class="row pt-3" style="background-color: rgb(224,251,252);"> 
	<div class="col-lg-5 col-md-6 col-12
	ml-5">
	<video height="280" width="500" class="video-fluid" controls="">
		<source src="videoplayback.mp4" type="video/mp4">
	</video>
	</div>
	<div class="col-lg-6 col-md-6 col-12">
		<h2>What is COVID-19(CORONA VIRUS)</h2>
		<p>The coronavirus is a family of viruses that can cause a range of illnesses in humans including common cold and more severe forms like SARS and MERS which are life-threatening. </p>
		<p>The virus is named after its shape which takes the form of a crown with protrusions around it and hence is known as coronavirus.The recent outbreak of coronavirus is believed to have occurred in a market for illegal wildlife in the central Chinese city of Wuhan. Chinese health authorities and the WHO are investigating the outbreak of the recent coronavirus.</p>
	</div>
</div>
</div>

<!---Symptoms of Coronavirus --->

<div class="container-fluid bg-light  pt-5 pb-5 "id="sympid">
	
<div class="section_header  sub_section text-center mb-5 mt-4">

	<h1 style="color:rgb(103,71,169);">Symptoms of Coronavirus</h1>

</div>
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12 mt-5 "><figure class="text-center"><img src="s1.png" class="img-fluid " width="120" height="120"><figcaption>
		Cough </figcaption>
		</figure>
		</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5"><figure class="text-center"><img src="s2.png" class="img-fluid " width="120" height="120"><figcaption>Cold</figcaption>
		</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5"><figure class="text-center"><img src="s6.png" class="img-fluid " width="120" height="120"><figcaption>Fever </figcaption>
		</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5"><figure class="text-center"><img src="s4.png" class="img-fluid " width="120" height="120"><figcaption>Difficulty in Breathing </figcaption>
		</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5"><figure class="text-center"><img src="s5.png" class="img-fluid " width="120" height="120"><figcaption>Runny Nose </figcaption>
		</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5"><figure class="text-center"><img src="s3.png" class="img-fluid " width="120" height="120"><figcaption>Tirdeness</figcaption>
		</figure>
		</div>

	</div>
	
</div>


</div>
<!---Preventionof Coronavirus --->

<div class="container-fluid bg-light pt-5 pb-5 "id="preventid">
	
<div class=" section_header sub_section text-center mb-5 mt-4">

	<h1 style="color:rgb(103,71,169);">Prevention of Coronavirus</h1>

</div>

<div class="container">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<figure class="text-center"><img src="p1.png" class="img-fluid " width="120" height="120">
					</figure>
				</div>
				<div class="col-lg-8 col-md-8
				 col-12 mt-5">
				 <p>Wash Your hand Frequantly with soap and water or Wash hand with sanitizer so that can remove germs from hand</p></div>

			</div>
			
		</div>
		

			<div class="col-lg-4 col-md-4 col-12">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<figure class="text-center"><img src="p2.png" class="img-fluid " width="120" height="120">
					</figure>
				</div>
				<div class="col-lg-8 col-md-8
				 col-12 mt-5">
				 <p>Cover your Nose , Face and Mouth with the help of mask. or flexed your elbow when you cough or sneeze </p></div>

			</div>
			
		</div>

			<div class="col-lg-4 col-md-4 col-12">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<figure class="text-center"><img src="p3.png" class="img-fluid " width="120" height="120">
					</figure>
				</div>
				<div class="col-lg-8 col-md-8
				 col-12 mt-5">
				 <p>If you have cough,fever,difficulty in breathing, seek medical care early</p></div>

			</div>
			
			</div>

			<div class="col-lg-4 col-md-4 col-12">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<figure class="text-center"><img src="p4.png" class="img-fluid " width="120" height="120">
					</figure>
				</div>
				<div class="col-lg-8 col-md-8
				 col-12 mt-5">
				 <p>Avoid Close Contact ( 2 meter ) with people who are unwell and make a social distancing</p></div>

			</div>
			
		</div>

			<div class="col-lg-4 col-md-4 col-12">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<figure class="text-center"><img src="p5.png" class="img-fluid " width="120" height="120">
					</figure>
				</div>
				<div class="col-lg-8 col-md-8
				 col-12 mt-5">
				 <p>Stay informed by watching tv news & follow the certain rules and recommended practices</p></div>

			</div>
			
		</div>

			<div class="col-lg-4 col-md-4 col-12">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<figure class="text-center"><img src="p6.png" class="img-fluid " width="120" height="120">
					</figure>
				</div>
				<div class="col-lg-8 col-md-8
				 col-12 mt-5">
				 <p>Stay Home, Stay Saf,if you feel unwell you can self-isolate from others int he household</p></div>

			</div>
			
		</div>



	</div>

	
</div>


</div>

<!---Preventionof Coronavirus --->

<div class="container-fluid bg-light pt-5 pb-5 "id="contactid">
	
<div class=" section_header sub_section text-center mb-5 mt-4">

	<h1 style="color:rgb(103,71,169);" >Contact Us</h1>

</div>
<div class="container">
	<div class="row">
		<div class="col-lg-8 offset-lg-2 col-12">
			<form action="" method="POST">
				<div class="form-group">
    <label >User Name</label>
    <input type="text" class="form-control" name="username" placeholder="name" required autocomplete="off">
  </div>
 

  <div class="form-group">
    <label>Email </label>
    <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
  </div>

  <div class="form-group">
    <label>Mobile No</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" required autocomplete="off">
  </div>

  <div class="form-group">
    <label>Select Symptoms</label><br>
    <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" 
    value="cold">
    <label class="custom-control-label" for="customcheckbox1">Cold</label>
</div>

 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" 
    value="fever">
    <label class="custom-control-label" for="customcheckbox2">Fever</label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" 
    value="breath">
    <label class="custom-control-label" for="customcheckbox3">Difficulty in breathing</label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" 
    value="tired">
    <label class="custom-control-label" for="customcheckbox4">Feeling Weak Or Tirdness</label>
</div>
  </div>





 

  <div class="form-group">
    <label >Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="msg"rows="3"></textarea>
  </div>
   <button type="submit" class="btn btn-primary name" name="submit">Submit</button>
</form>	

			
		</div>
	</div>
</div>
</div>



<!-- TOP CURSOR -->
<div class="container scrolltop float-right pr-5">
	<i class= "fa fa-arrow-up" onclick="topFunction()" id="mybtn">TOP</i>
	
</div>





<div class="container-fluid bg-light pt-5 pb-5 "id="videoid">
	
<div class=" section_header sub_section text-center mb-5 mt-4">
	<h1 style="color:rgb(103,71,169);">Info Video Of Covid-19</h1>
</div>

<div class="row pt-3 bg-light"> 
	<div class="col-lg-5 col-md-6 col-12
	ml-5">
	<video height="380" width="520" class="video-fluid" controls="">
		<source src="V1.mp4" type="video/mp4">
	</video>
	</div>
	<div class="col-lg-6 col-md-6 col-12">
		<video height="380" width="520" class="video-fluid" controls="">
		<source src="V3.mp4" type="video/mp4">
	</video>
	</div>
</div>
</div>





<!-- footer -->
<footer class="mt-5">

	<div class="footer_style text-white text-center container-fluid">

	<p>copyright by Vatsal</p>

	</div>
	
</footer>

</body>

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
  <div id="ais-concierge"></div><script src="https://cdn.aisoftware.com/concierge/index.js"
id="ais-concierge-script" concierge-token="4e8fe09d-8cef-4af7-8fcd-2bcb8852d4e8"></script>


<script type="text/javascript">

window.capacityConcierge.open()

$('.count').counterUp({
	delay:10,
	time:3000,
	
})
</script>

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

</html>

  <?php

		include 'dbconnection.php';


	if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$symptoms=$_POST['coronasym'];
	$msg=$_POST['msg'];

	$chk="";

	foreach ($symptoms as $chk1){
		$chk .=$chk1.",";
	}


	$insertquery=" insert into coronacase(User_Name,Email, Mobile_No,Symptoms,Message) values('$username','$email','$mobile','$chk','$msg')";

		$query = mysqli_query($con,$insertquery);

		if($query){
			?>
			<script >
				alert("Insertion succesful");
			</script>
			<?php
		}else{
			?>
			<script >
				alert("Insertion failed");
			</script>
			<?php
		}
		}
		?>