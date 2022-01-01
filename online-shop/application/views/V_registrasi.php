<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	
	<!-- Bootsrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	
	<link type="text/css" rel="stylesheet" href="StyleRegis.css" />
	
	
		<!-- MyCSS -->
        <style type="text/css">
			body {
			height: 100%;
			background-color: #71bc78;	
			}


			.judul {
			text-align: center;
			}
			.form_Registrasi {
			width: 380px;
			height: 750px;
			padding: 20px;
			background-color: #deb887;
			border-radius: 10px;
			justify-content: center;
			right: 0;
			left: 0;
			top: 0;
			bottom: 0;
			margin: auto;
			}



			.btn {
			background: #1a2226;
			color: black !important;
			font-size: 14px;
			color: white;
			}
			</style>
				
		</head>
		<body>
				 <form>
				   <div class="judul">
				   <h1>Registrasi</h1>
		</div>
					<div class="form_Registrasi">
					
					<label for="exampleInputNamaLengkap1" class="form-label">Nama Lengkap</label>
					<input type="text" class="form-control" id="exampleInputNamaLengkap1" aria-describedby="NamaLengkapHelp">
					<div id="NamaLengkapHelp" class="form-text">Ini adalah nama lengkap kamu.</div>
				 
					<label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
					<input type="number" class="form-control" id="exampleInputPassword1">
				 
					<label for="exampleInputPassword1" class="form-label">Tempat lahir</label>
					<input type="text" class="form-control" id="exampleInputPassword1">
				  
					<label for="exampleInputPassword1" class="form-label">Gender</label>
					<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
					<label class="form-check-label" for="flexRadioDefault1">
					Laki-laki
				</label>
		</div>
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
				  <label class="form-check-label" for="flexRadioDefault2">
				   Perempuan
			</label>
		</div>
					<label for="exampleInputPassword1" class="form-label">Nomor HP</label>
					<input type="number" class="form-control" id="exampleInputPassword1">
				  
					<label for="exampleInputPassword1" class="form-label">Nomor KTP</label>
					<input type="number" class="form-control" id="exampleInputPassword1">
				 
					<label for="exampleInputPassword1" class="form-label">Asal Kota</label>
					<input type="text" class="form-control" id="exampleInputPassword1">
				  
					<label for="exampleInputEmail1" class="form-label">Email</label>
					<input type="Email" class="form-control" id="exampleInputEmail1">
				 
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1">
			 <br>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>

	</body>
</html>
