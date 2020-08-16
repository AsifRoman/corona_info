<!DOCTYPE html>
<html>
<head>
	<title>CORONA PROJECT </title>
<link rel="icon" href="images/icons8-coronavirus-64.png">


	<?php include 'link.php'; ?>
	<?php include 'style.php'; ?>
	
	

</head>
<body onload="fetch()">
	
<nav class="navbar navbar-expand-lg nav_style navbar-dark bg-dark">
	<img src ="images/icons8-coronavirus-64.png" width="100 " height="60">
	<h2 class="covid">Covid-19</h2>
       
  <button style="border-color: lime" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#"><img src="https://img.icons8.com/dusk/64/000000/home.png"/ height="30px" width="30px"> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid"><img src="https://img.icons8.com/dusk/64/000000/brain.png"/  height="30px" width="30px"> About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#mythid"><img src="https://img.icons8.com/color/48/000000/joker-dc.png"/ height="30px" width="30px"> Myths</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#sympid"><img src="https://img.icons8.com/plasticine/100/000000/coughing.png"/  height="30px" width="30px"> Symptoms</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#preventid"><img src="https://img.icons8.com/officel/80/000000/protection-mask.png"/ height="30px" width="30px"> Prevention</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#contactid"><img src="https://img.icons8.com/officel/80/000000/phone-contact.png"/ height="30px" width="30px"> Contact</a>
      </li>
     
     
  </div>
</nav>

<div id="main">
	<div class="main-header">
		<div class="row w-200 h-200 ">
			<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
				<div class="leftside w-100 h-100 d-flex justify-content-center align-itmes-center">
				<img src ="images/images1.png" width="400 " height="300" style="padding: 50px">
		      </div>
		     </div> 
			<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
				<div class="rightside  w-100 h-100 d-flex justify-content-center align-itmes-center">
					<h1 class="main-styling"> Let's Stay Safe & Fight Together Against corona Virus </h1>
				</div>
				<h3 class="tweet">#IndiaFightsCorona</h3>
				
			</div>
		</div>
	</div>
</div>

<!--------- corona latest update------>

<section class="corona_update container-fluid">
	<div class="mb-5 mt-1 ">
		<h3 class="text-uppercase text-center"> COVID-19 UPDATES OF THE WORLD</h3>
	</div>

	<!-------- Search Box ----------->
	
	<!--------- End Search Box ------>

	<div class="table-responsive">
		<table class=" table table-bordered table-striped text-center" id="tableval"> 
				<tr>
					<th>Country</th>
					<th>TotalConfirmed</th>
					<th>TotalRecovered</th>
					<th>TotalDeaths</th>
					<th>NewConfirmed</th>
					<th>NewRecovered</th>
					<th>NewDeaths</th>
				</tr>

		</table>
	</div>
</section>
 <!--------------- About Section--------->

<div class="container-fluid pt-5 pb-5" id="aboutid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>About COVID-19</h1>
	</div>
	<div class="row">
		<div class="col-lg-5 col-md-6 col-12">
			<img src="images/images5.png" class="img-fluid">
		</div>
		<div class= "col-lg-6 col-md-6 col-12">
			<h2> What is COVID-19 (Corona-Virus)</h2>

			<p> Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>

              <p>  Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>

              <p> The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p>

               <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>

	    </div>
	</div>
</div>
 <!---------------Myths of Corona Virus ---------->

<div class="container-fluid pt-5 pb-5" id="mythid">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Mythbusters</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="text-center">
						<img src="images/myth1.jpg"class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> FACT: Studies show hydroxychloroquine does not have clinical benefits in treating COVID-19.</p>
					</div>
		
				</div>		
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="text-center">
						<img src="images/myth2.jpg"class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> FACT: The COVID-19 virus can spread in hot and humid climates.</p>
		
					</div>
		
				</div>		
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="text-center">
						<img src="images/myth3.jpg"class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> FACT: Cold weather and snow CANNOT kill the COVID-19 virus. </p>
					
					</div>
					
				</div>		
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="text-center">
						<img src="images/myth4.jpg"class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> FACT: COVID-19 is NOT transmitted through houseflies. </p>
					
					</div>
					
				</div>		
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="text-center">
						<img src="images/myth5.jpg"class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> FACT: Eating Garlic & Ginger does NOT prevent COVID-19. </p>
					
					</div>
					
				</div>		
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="text-center">
						<img src="images/myth6.jpg"class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> FACT: Drinking alcohol does not protect you against COVID-19 and can be dangerous. </p>
					
					</div>
					
				</div>		
			</div>
		</div>
	</div>
</div>

 <!---------------coronavirus symptoms--------->

<div class="container-fluid pt-3 pb-3" id="sympid" style="margin:0 0 20px 0; 
		background-color: #F37335;">
	<div class="section_header text-center mb-5 mt-4">
		<h1> Coronavirus Symptoms </h1>
	</div>
	<div class="container" >
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 ">
				<figure class="text-center">
				<img src="images/images9.jpg"class="img-fluid" width="120" height="120">
					<figcaption> Cough </figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 ">
				<figure class="text-center">
				<img src="images/images10.jpg"class="img-fluid" width="120" height="120">
					<figcaption> Running Nose </figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 ">
				<figure class="text-center">
				<img src="images/images11.jpg"class="img-fluid" width="120" height="120">
					<figcaption> Fever </figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 ">
				<figure class="text-center">
				<img src="images/images12.png"class="img-fluid" width="120" height="120">
					<figcaption> Cold </figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 ">
				<figure class="text-center">
				<img src="images/images13.jpg"class="img-fluid" width="120" height="120">
					<figcaption> Tiredness </figcaption>
				</figure>
			</div>
			<div class="col-lg-4 col-md-4 col-12 ">
				<figure class="text-center">
				<img src="images/images14.png"class="img-fluid" width="120" height="120">
					<figcaption> Breathing Problem </figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>

 <!---------------Prevention Against Coronavirus --------->

<div class="container-fluid pt-5 pb-5" id="preventid">
	<div class="section_header text-center mb-5 mt-4">
		<h1 style="color: blue">6 steps Prevention Against Coronavirus </h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="text-center">
						<img src="images/images15.jpg"class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze. </p>
		
					</div>
		
				</div>		
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="text-center">
						<img src="images/images16.png"class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> Avoid close contact(1 meter or 3 feet) with  people who are  unwell. </p>
		
					</div>
		
				</div>		
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="text-center">
						<img src="images/images17.png"class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub. </p>
					
					</div>
					
				</div>		
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="text-center">
						<img src="images/images18.png"class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> Stay home and self-isolate from others in the household if you feel unwell. </p>
					
					</div>
					
				</div>		
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="text-center">
						<img src="images/images19.jpg"class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> Stay informed by watching news  & follow the  recommended practices. </p>
					
					</div>
					
				</div>		
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5 ">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 ">
						<figure class="text-center">
						<img src="images/images20.jpg"class="img-fluid" width="120" height="120">
						</figure>
					</div>
					<div class="col-lg-8 col-md-8 col-12">
						<p> If you have fever, cough and difficulty breathing seek medical care early. </p>
					
					</div>
					
				</div>		
			</div>
		</div>
	</div>
</div>
 <!---------------Contact Us ASAP--------->

<div class="container-fluid pt-5 pb-5" id="contactid">
	<div class="section_header text-center mb-5 mt-4">
		<h1>CONTACT TO THE NEAREST AUTHORITIES </h1>
	</div>

    <div class="container">
    	<div class="row">
    		<div class="col-lg-8 offset-lg-2 col-12">
			<form action="" method="POST">

				<div class="form-group">
				    <label >Username</label>
				    <input type="text" class="form-control" name="username" placeholder="Enter here" autocomplete="off">
				</div>
				   <div class="form-group">
				  	<label >Email</label>
				    <input type="email" class="form-control" name="email" placeholder="binod@example.com" required autocomplete="off" >
				  </div>
				   <div class="form-group">
				   <label> Mobile</label>
				    <input type="number" class="form-control" name="mobile" placeholder="Enter Number here" autocomplete="off">
				   </div>

				   <div class="form-group">
				  	<label> select Symptoms</label><br>
				  	 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				  	 	<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
				  	 	<label class="custom-control-label" for="customcheckbox1">Cold </label>
				  	 </div>
				  	 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				  	 	<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
				  	 	<label class="custom-control-label" for="customcheckbox2">Fever </label>
				  	 </div>
				  	 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				  	 	<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
				  	 	<label class="custom-control-label" for="customcheckbox3">difficulty in Breath </label>
				  	 </div>
				  	 <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				  	 	<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="weak">
				  	 	<label class="custom-control-label" for="customcheckbox4">Feeling Weak </label>
				  	 </div> 
				  	</div> 
				 
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Example textarea</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
				  </div>

				  <button type="submit" class="btn btn-danger btn-lg btn-block" name="submit">Submit</button>


			</form>
			</div>
		</div>
	</div>
</div>


<!---------- top cursor--------->




<!---------- footer--------->

<!-- Footer -->
<footer class="page-footer font-small elegant color">

  <!-- Footer Text -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">
      <div class="col-md-4 mt-md-0 mt-3">
        <img src="images/roman_525.jpg" class="img-fluid d-block mx-auto fx">
      </div>

      <hr class="clearfix w-100 d-md-none pb-3">
      <!-- Grid column -->
      <div class="col-md-4 mt-md-0 mt-3">

        <!-- Content -->
        <h2 class="text-uppercase font-weight-bold" style="margin-top:10px; color: lime;">ASIF ALI</h2>
        <p><strong>WEB DEVELOPER</strong></p>
        <p>B.TECH - 3rd YEAR<br>Email: asif30945@gmail.com<br>
        Contact: 8910927313</p>

        <p>Follow me on:</p>

          <a href="https://www.facebook.com/asif.roman.338" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" height="75px" width="75px"></a>

          <a href="https://www.instagram.com/asifroman.jpg/?hl=en" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" height="75px" width="75px"></a>

          <a href="https://twitter.com/AsifAli14064960" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" height="75px" width="75px"></a>

          <a href="https://github.com/AsifRoman" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/github.png" height="75px" width="75px"></a>
      </div>
      <!-- Grid column -->


      <!-- Grid column -->
      

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Text -->

  <!-- Copyright -->
	  <div class="footer-copyright text-center py-3">© 2020 Copyright:
	    <a href="#"> Asif x Roman</a>
	  </div>
  <!-- Copyright -->

</footer>
  <!-- End Footer -->

<script type="text/javascript">

	


	function fetch(){
		 $.get("https://api.covid19api.com/summary",

		 	function(data){  
		 		//console.log(data['Countries'].length)}
		 		var tableval=document.getElementById('tableval');
			 		for(var i=1; i<(data['Countries'].length); i++){
			 				var x=tableval.insertRow();
			 			x.insertCell(0);
			 			tableval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
			 			tableval.rows[i].cells[0].style.background='#7a4a91';
			 			tableval.rows[i].cells[0].style.color='#fff';
			 			x.insertCell(1);
			 			tableval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
			 			tableval.rows[i].cells[1].style.background='#4bb7d8';

			 			x.insertCell(2);
			 			tableval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
			 			tableval.rows[i].cells[2].style.background='#4bb7d8';

			 			x.insertCell(3);
			 			tableval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
			 			tableval.rows[i].cells[3].style.background='#f36e23';

			 			x.insertCell(4);
			 			tableval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
			 			tableval.rows[i].cells[4].style.background='#4bb7d8';

			 			x.insertCell(5);
			 			tableval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
			 			tableval.rows[i].cells[5].style.background='#9cc850';

			 			x.insertCell(6);
			 			tableval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
			 			tableval.rows[i].cells[6].style.background='#f36e23';
			 		}
			 	}


		 	);
	}
</script>

</body>


</html>

<?php

include 'connection.php';

if(isset($_POST['submit']))
{
	$Username=$_POST['username'];
	$Email=$_POST['email'];
	$Mobile=$_POST['mobile'];
	$symp=$_POST['coronasym'];
	$Message=$_POST['msg'];

	$chk="";

	foreach($symp as $chk1)
	{
		$chk .=$chk1.",";

	}

	$insertquery=" insert into contact_table(username, email, mobile, symp,	message) values('$Username','$Email','$Mobile','$chk','$Message')";

	

   $query=mysqli_query($con, $insertquery);

   if($query) 
	{
		?>
		<script>
			alert ("You will under our authorities.");
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert ("Not Inserted!");
		</script>
		<?php
	}
		

}

?>   