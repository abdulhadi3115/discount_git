<!DOCTYPE html>
<html lang="en">
<head>
	<title>.:: Program Menghitung Discount ::.</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

	<script src="jquery.min.js"></script>
	<script src="jquery.mask.min.js"></script>

</head>
<body>

	<div class="bg-contact3" style="background-image: url(https://www.lokerlike.id/wp-content/uploads/2017/05/indomaret-1.jpg);">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form" action=index.php method=post>
					<span class="contact3-form-title">
						Menghitung Discount
					</span>

					<!-- <div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="choice" value="say-hi" checked="checked">
							<label class="label-radio3" for="radio1">
								Say Hi
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio2" type="radio" name="choice" value="get-quote">
							<label class="label-radio3" for="radio2">
								Get a Quote
							</label>
						</div>
					</div> -->

					<div class="wrap-input3 validate-input" data-validate="Name is required">
						<input class="input3" type=text name=totalbeli placeholder="total beli">
						<span class="focus-input3"></span>
					</div>

					<!-- <div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="email" placeholder="Your Email">
						<span class="focus-input3"></span>
					</div> --> 

					<!-- <div class="wrap-input3 input3-select">
						<div>
							<select class="selection-2" name="service">
								<option>Needed Services</option>
								<option>eCommerce Bussiness</option>
								<option>UI/UX Design</option>
								<option>Online Services</option>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 input3-select">
						<div>
							<select class="selection-2" name="budget">
								<option>Budget</option>
								<option>1500 $</option>
								<option>2000 $</option>
								<option>3000 $</option>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div> -->

					<!-- <div class="wrap-input3 validate-input" data-validate = "Message is required">
						<textarea class="input3" name="message" placeholder="Your Message"></textarea>
						<span class="focus-input3"></span>
					</div> -->
					<?php

			if(!empty($_POST['tuku'])){
			$totalbeli = $_POST['totalbeli'];
			$totalbeli = str_replace(".", "", $totalbeli);


			if (isset($totalbeli)){

			$toyar=intval($totalbeli);
			$diskon=0;

			if ($toyar>=500000){
			$diskon=(0.5*$toyar);
			} 
			else if ($toyar>=100000) {
			$diskon=(0.1*$toyar);
			}else if ($toyar>=50000) {
			$diskon=(0.05*$toyar);
			} else {
			print("Maaf Tidak Ada Diskon <br>\n");
			}



			// {
			// //printf("Jumlah Bayar = %d<br>\n",$toyar);
			// echo "Jumlah Bayar = Rp ";
			// echo number_format($toyar,2,",",".");
			// echo "<br>";

			// //printf("Diskon = %d<br>\n",$diskon);

			// echo "Diskon = Rp ";
			// echo number_format($diskon,2,",",".");
			// echo "<br>";

			$totalbayar=$toyar-$diskon;
			// //printf("<b>Total Bayar = %d<br></b>\n",$totalbayar);

			// echo "<b>Total Bayar = </b> Rp ";
			// echo number_format($totalbayar,2,",",".");
			// echo "<br>";

			// echo "<b>Total Bayar = </b> Rp ";
			// echo number_format($totalbayar,2,",",".");
			// }

			}

			}
			?>

			<div class="container-contact3-form-btn">
						<button class="contact3-form-btn"value="Hitung Diskon" name=tuku>
							Discount
						</button>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="email" placeholder="jumlah bayar" value="<?php echo "Jumlah Bayar = Rp ";
						echo number_format($toyar,2,",",".");
						?>" >
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="email" placeholder="jumlah bayar" value="<?php echo "Diskon = Rp ";
						echo number_format($diskon,2,",",".");
						?>" >
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="email" placeholder="Total Bayar" value="<?php echo "Total Bayar = Rp ";
						echo number_format($totalbayar,2,",",".");
						?>" >
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input3" type="text" name="email" placeholder="Total Bayar" value="<?php echo "Total Bayar = Rp ";
						echo number_format($totalbayar,2,",",".");
						?>" >
						<span class="focus-input3"></span>
					</div>
				</form>	
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
