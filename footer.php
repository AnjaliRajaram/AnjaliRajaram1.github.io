<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Footer with Horizontal Containers</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        footer {
            background-color: #5DADE2;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        .container {
            display: flex;
            justify-content: space-around;
        }

        .footer-item {
            flex: 1;
            text-align: center;
            padding: 10px;
            border-right: 2px solid white; /* Add a border between items */
        }

        .footer-item:last-child {
            border-right: none; /* Remove the border on the last item */
        }
		
		.center{
			text-align:center;
		}
		.a{
			color:white;
		}
		
		 /* Style for the icons */
        .icon {
            color: white; /* Set the icon color to white */
            font-size: 20px; /* Change the font size as needed */
            margin-right: 5px; /* Add spacing between the icon and text */
        }
    </style>
</head>
<body>
    <footer>
        <div class="container">
            <div class="footer-item">
			<h2 style="text-decoration:underline">Overview</h2>
			<a href="mainpage.php#about-us" style="color: white; text-decoration: none;  font-size:18px;"><h4>About Us</h4></a>
			<a href="mainpage.php#vision" style="color: white; text-decoration: none;  font-size:18px;"><h4>Vision</h4></a>
			<a href="mainpage.php#vision" style="color: white; text-decoration: none;  font-size:18px;"><h4>Mission</h4></a>
			<a href="mainpage.php#objective" style="color: white; text-decoration: none;  font-size:18px;"><h4>Objective</h4></a>
			</div>
			
            <div class="footer-item">
			<h2 style="text-decoration:underline">Contact Us</h2>
			<i class="fas fa-map-marker-alt"></i> <a href="https://maps.app.goo.gl/EhMd3ZxEPWcLaeZt6"  style="color: white; text-decoration: none;  font-size:18px;">&nbsp No 104, Jalan Waja Indah 3, Taman Waja Indah, Kawasan Perindustrian Waja,<br> 09000, Kulim, Kedah</a><br><br>
			<i class="fas fa-envelope icon" aria-hidden="true"></i><a href="mailto:sathis@testcal.com.my"  style="color: white; text-decoration: none;  font-size:18px;">&nbsp sathis@testcal.com.my</a><br><br>
			<i class="fas fa-building"></i><a href=""  style="color: white; text-decoration: none;  font-size:18px;">&nbsp Office : 04-408 0550</a><br>
			<i class="fa fa-whatsapp" aria-hidden="true"  style="font-size:18px"></i><a href=""  style="color: white; text-decoration: none;  font-size:18px;">&nbsp Dr. Sathiskumari : +6016 - 449 6561</a><br>
			<i class="fa fa-whatsapp" aria-hidden="true"  style="font-size:18px"></i><a href=""  style="color: white; text-decoration: none;  font-size:18px;">&nbsp Ms. Yashikkanitha : +6016 - 449 0842</a>
			</div>
        </div>
    </footer>

<h3 class="center">&copy TESTCAL SDN BHD</h3>
</body>
</html>