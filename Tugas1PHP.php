<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portofolio</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #000000; 
            color: #fff;
        }
        header {
            background-color: #333; 
            color: #fff;
            text-align: left;
            padding: 10px;
        }
        nav {
            font-size:medium;
            background-color: #000000;
            color: #fffcfc;
            padding: 20px;            
            margin-bottom: 0px;
        }
        nav ul {
            list-style: circle;
            padding: 10px;
            margin: 5px;
            color: #ffffff;
        }
        nav li {
            color: #ffffff;
            margin-bottom: 1%;
        }
        content {
            text-align:justify;
            background-color: #000000; 
            float: left;
            width: 70%;
            padding: 50px;
            margin-bottom: 50px;
        }
        content img {
            float: right;
            width: 25%;
            height:max-content;
            margin-bottom: 10px; 
        }
        footer {
            clear: both;
            background-color: #555;
            color: #fff;
            position: sticky;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Afrizal Julianur</h1>
    </header>
    <nav>
        <h2>Search:</h2>
        <ul>
			<li><a href="file:///I:/Tugas%207%20JavaScript/layoutit/src/Tugas7JS.html#">Home</a></li>
            <li><a href="file:///I:/Tugas%207%20JavaScript/layoutit/src/Tugas7JS.html#">Portofolio</a></li>
        </ul>
    </nav>
    <content>
        <?php
        // Informasi biodata
        $nama = "Afrizal Julianur";
        $umur = 20;
        $alamat = "Jalan SIRSAK Gang Kopi Rt 009/04 No.73, Ciganjur, Jagakarsa. Jakarta Selatan";
        $hobi = "Futsal dan Bermain Game";
        $email = "afrizalwalker@gmail.com";
        ?>
        
        <h1>Biodata Saya</h1>
        <p>Nama: <?php echo $nama; ?></p>
        <p>Umur: <?php echo $umur; ?> tahun</p>
        <p>Alamat: <?php echo $alamat; ?></p>
        <p>Hobi: <?php echo $hobi; ?></p>
        <p>Email: <?php echo $email; ?></p>
    </content>
	<content>
        <h2>Portofolio Saya</h2>
        <p>
			<h2>Keahlian Saya :</h2>
			<ul>
				<li> Web Designer </li>
				<li> Creator Software Application </li>
				<li> Network Engineering </li>
			</ul>
		</p>
		<p>
			<h2>Pendidikan :</h2>
			<ul>
				<li> SD : SDN Jagakarsa 05 Pagi </li>
				<li> SMP : SMPN 175 Jakarta </li>
				<li> SMK : SMK Bakti 17 Jakarta </li>
			</ul>
		</p>
		<p>
			<h2>Minat Saya :</h2>
			Saya nantinya berminat kerja pada PT.Cyber 2 Tower yang dimana di tempat itu terdapat banyak orang-orang IT yang hebat dan sangat kompeten pada bidangnya sehingga saya tertarik pada PT.Cyber 2 Tower
		</p>
    </content>
    <footer>
        <div class="contact-info">
            <p>Contact us: <a href="mailto:afrizalwalker@gmail.com">afrizalwalker@gmail.com</a></p>
        </div>
        <div class="social-media">
            <a href="https://www.instagram.com/jalltzy_/">Instagram</a>
        </div>
        <p>&copy; 2023 Afrizal Julianur. All rights reserved.</p>
    </footer>
</body>
</html>