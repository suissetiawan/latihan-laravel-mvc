<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>
<h2>Buat Account Baru!</h2>
<h3>Sign Up Form</h3>
<form action="/welcome" method="POST">
	@csrf
	<p>First name :</p>
	<input type="text" name="namaAwal">
	<p>Last name :</p>
	<input type="text" name="namaAkhir">
	<p>Gender :</p>
	<p>
	<input type="radio" name="laki">Male<br>
	<input type="radio" name="perempuan">Female<br>
	<input type="radio" name="lainnya">Other<br>
	</p>
	<p>Nasionality :</p>
		<select name="negara">
			<option>Indonesian</option>
			<option>England</option>
			<option>American</option>
			<option>Japan</option>
			<option>Korean</option>
			<option>Lainya</option>
		</select>

	<p>Language Spoken :</p>
	<P>
		<input type="checkbox" name="indonesia">Bahasa Indonesia<br>
		<input type="checkbox" name="indonesia">English<br>
		<input type="checkbox" name="indonesia">Japannese<br>
		<input type="checkbox" name="indonesia">Other<br>
	</P>
	<p>Bio :</p>
	<textarea name="bio"></textarea><br>
	<button>Sign Up</button>
</form>
</body>
</html>