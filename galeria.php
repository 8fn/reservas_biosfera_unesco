<!DOCTYPE html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Galeria - Biosfera da Ilha do Porto Santo</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<style>
*{
margin: 0;
padding: 0;

}

#contentor {
		width: 900px;
		background-color: #2a2a2a;
		margin: 0 auto;
		padding-bottom: 20px;
	}

#cabecalho {
		padding: 30px 10px;
		text-align: center;
	}
#cabecalho h1 {
		color: #CCCCCC;
		margin-bottom: 20px;
	}

#col1 {
		width: 170px;
		float: left;
		padding-top: 10px;
		padding-bottom: 10px;
	}

#col2 {
		width: 710px;
		padding: 10px;
		color: #CCCCCC;
		text-align: justify;
		float: right;
		background-color: #454545;
		margin-bottom: 20px;
		border-radius: 5px;
		box-shadow: 2px 2px 5px #000;
	}

#rodape{
clear:both;
text-align:center;

padding:10px;
color:#CCCCCC;

}
#menu {
		list-style: none;
		margin-bottom: 20px;
	}
#menu li {
		width: 168px;
		border-width: 2px;
		border-style: solid;
		border-top-color: #343434;
		border-right-color: #343434;
		border-bottom-color: #222222;
		border-left-color: #343434;
		margin-bottom: 10px;
	}

#menu li a {
		text-decoration: none;
		font-size: 18px;
		display: block;
		padding: 5px;
		width: 160px;
		color: #CCCCCC;
		text-align: center;
		transition: all 0.3s ease;
	}

#menu li a:hover {
		color: #FFFFFF;
		background: #333333;
		border-color: #FFFFFF;
	}

	body {
		background-image: url('https://images.pexels.com/photos/14533016/pexels-photo-14533016.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
		background-repeat: no-repeat;
		height: 100%;
		width: 100%;
		background-size: cover;
	}

#img-unesco {
    align-items: center;
    text-align: center;
	object-fit: cover;
	object-position: center;
	margin-bottom: 10px;
	
}

</style>
</head>

<body>
<img src="a" alt="">
<div id="contentor">
<div id="cabecalho">
<h1> Galeria - Biosfera da Ilha do Porto Santo <br> <div id="img-unesco"><img src="https://portosantobiosfera.madeira.gov.pt/images/Logo.png"></div> </h1>

</div>
<div id="corpo">
<div id="col1">

<ul id="menu">
<li> <a href="index.php">Home</a></li>
<li> <a href="biosfera_ilha_porto_santo.php">Reserva da Biosfera da Ilha do Porto Santo</a></li>
<li> <a href="galeria.php">Galeria</a></li>
<li> <a href="contacto.php">Contactos</a></li>
</div>
<div id="col2">
<div class="gallery">
		<img src="https://cdn-images.rtp.pt/icm/images/a6/a6e67c62872a9a546e88973014861f26?1200&rect=0,0,3500,1919">
		<img src="https://visitmadeira.com/media/bpiebi1p/ponta-da-calheta1-carlos-gouvia.jpg">
		<img src="https://bomdia.eu/wp-content/uploads/2017/08/porto_santo-e1568820466631.jpg">
        <img src="https://agriculturaemar.com/wp-content/uploads/2018/01/porto-santo-praiapxo_2_1300x440.jpg">
	</div>

	<style>
		.gallery {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: center;
			margin-top: 20px;
		}

		.gallery img {
			width: 300px;
			margin-bottom: 20px;
			object-fit: cover;
			object-position: center;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 2px 2px 5px #ccc;
		}
        </style>

</div>
<div id="rodape">

Feito por Gabriel Araújo 

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
