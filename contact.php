<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>UJGallery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<title>Contact</title>
    <style>
h1 {
  text-align: center;
}
body {
    background: linear-gradient(to right, #f6eceb, #dcd9c6, #b6d7b1, #8ac6d1, #d0c7ae);
		}
		h1 {
			text-align: center;
			color: #333333;
		}
		p {
			font-size: 18px;
			color: #666666;
			margin: 0 20px;
			line-height: 1.5;
			text-align: justify;
		}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">UJGallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Αρχική</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">Σχετικά</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Επικοινωνία</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://mobile.facebook.com/people/Zenia-Karampatzaki/100009702849201/?_rdc=1&_rdr&refsrc=deprecated" target="_blank" rel="noopener">Facebook</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="GET" action="search.php">
            <input class="form-control mr-sm-2" type="search" placeholder="Αναζήτηση" aria-label="Search" name="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Αναζήτηση</button>
          </form>
          
        </div>
</nav>

	<div class="container">
	<form>
		<h2>Στείλτε μου το μήνυμα</h2>
		<div class="form-group">
			<label for="name">Όνομα:</label>
			<input type="text" id="name" name="name" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="email">Email:</label>


            <input type="email" id="email" name="email" class="form-control" required value="alexander3_ker@yahoo.gr">

		</div>
		<div class="form-group">
			<label for="message">Μήνυμα:</label>
			<textarea id="message" name="message" rows="5" class="form-control" required></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Αποστολή</button>
	</form>
	<div class="row">
		<div class="col-md-6">
			<div class="contact-info">
				<h2>Επικοινωνήστε μαζί μας</h2>
				<p><strong>Διεύθυνση:</strong> Οδός Λήμνου 49, Αθήνα, Ελλάδα</p>
				<p><strong>Τηλέφωνο:</strong> +30 6999999999</p>
				<p><strong>Email:</strong> UJGallery@test.com</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="map-container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.125193663164!2d23.742233215143383!3d37.97480727972229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd3ca6b2d63f%3A0xcbbc5c058d6e6b5!2zzprOsc-EzqzOvc61zrkgzrzOt8-Bzq3Ouc69zq3PgiDOrc69zrEgz4TOvyBNaWNoYWVsLCAxNzAwIDAyIEdvbGZvcmQ!5e0!3m2!1sel!2sgr!4v1586445353684!5m2!1sel!2sgr" frameborder="0" style="border:0; width: 100%; height: 300px;" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>


</body>
</html>