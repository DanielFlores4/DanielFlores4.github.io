<?php
	
	include 'config.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO demo (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>








<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Comment System PHP | National Coding</title>
</head>
<body>
	
<div class="flexbox-conteiner" style="max-width: 1600px;">
        
		<link rel="stylesheet" href="myStyles.css">
		
			
			<div class="flexbox-conteiner-titulo">
				<div class="flexbox-item flexbox-item-4">
						<h1 style="text-align:center ;">Modelos De <br>Sofware</h1>
				</div>
				
			</div>
				<div  class ="flexbox-conteiner-buton-2" style="left: 35%;">
					<div class="box-test">
						<button class="buttonst-2 buttonst4" onclick="window.location.href='info-desarrolladores.html';"><p>Desarrolladores</p></button>
					</div>
					<div class="box-test">
						<button class="buttonst-2 buttonst4" onclick="window.location.href='Referencias.html';"><p>Referencias </p></button>
					</div>
				</div> 

	<div class="flexbox-conteiner">
		
		<div class="flexbox-slideshow" style="max-width:78%">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					</head>
					<body>
					<div class="slideshow-container">

					<div class="mySlides fade">
					<div class="1">1 / 3</div>
					<img src="image/Picture6.png" style="width:100%;">
					<div class="text"><a href="https://www.researchgate.net/figure/Figura-19-Ciclo-de-vida-del-desarrollo-de-software-en-espiral_fig6_264899327">Referencia</a></div>
					</div>

					<div class="mySlides fade">
					<div class="2">2 / 3</div>
					<img src="image/8.png" style="width:100%;">
					<div class="text"><a href="https://www.digite.com/es/agile/que-es-scrum/">Referencia</a></div>
					</div>

					<div class="mySlides fade">
					<div class="3">3 / 3</div>
					<img src="image/cascadamode.png" style="width:100%;height:unset;max-width:1080px;max-height:unset;">
					<div class="text"><a href="https://es.wikipedia.org/wiki/Desarrollo_en_cascada">Referencia</a></div>
					</div>

					<a class="prev" onclick="plusSlides(-1)">❮</a>
					<a class="next" onclick="plusSlides(1)">❯</a>

					</div>
					<br>

					<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span> 
					<span class="dot" onclick="currentSlide(2)"></span> 
					<span class="dot" onclick="currentSlide(3)"></span> 
					</div>

					<script src="slidescrip.js">
					</script>
					

					</body>


		</div>
	</div>
		
		<div  class ="flexbox-conteiner-buton" >
			
				<button class="buttonst buttonst1" onclick="window.location.href='Cascada.html';"><p style="text-align:center;">Modelo<br>Cascada</p></button>
		   
				<button class="buttonst buttonst2" onclick="window.location.href='Espiral.html';"><p style="text-align:center ;">Modelo<br>Espiral</p></button>
			
				<button class="buttonst buttonst3" onclick="window.location.href='Scrum.html';"><p style="text-align:center ;">Modelo<br>Scrum</p></button>
		 

		</div>
		<div class ="flexbox-conteiner-boxes">
			<div class="flexbox-item flexbox-item-2">
				<p style="text-align: right;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
					 Cum, accusamus dolorum expedita explicabo totam voluptatum voluptas,<br>
					  hic fugit maiores velit nulla itaque ipsa! <br>
					  Dolorem accusantium recusandae eaque illo totam iusto!</p>
			</div >
			<div class="flexbox-item flexbox-item-2">
				<p style="text-align: center;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
					 Cum, accusamus dolorum expedita explicabo totam voluptatum voluptas,<br>
					  hic fugit maiores velit nulla itaque ipsa! <br>
					  Dolorem accusantium recusandae eaque illo totam iusto!</p>
			</div >
			<div class="flexbox-item flexbox-item-2">
				<p style="text-align: left;">Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
					 Cum, accusamus dolorum expedita explicabo totam voluptatum voluptas,<br>
					  hic fugit maiores velit nulla itaque ipsa! <br>
					  Dolorem accusantium recusandae eaque illo totam iusto!</p>
			</div >
		   

		</div>

			<div class="flexbox-conteiner"  style="width:800px;">
				<form action="" method="post" class="form">
					<input type="text" class="name" name="name" placeholder="Name">
					<br>
					<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
					<br>
					<button type="submit" class="btn" name="post_comment">Post Comment</button>
				</form>
			</div>

			<div class="flexbox-conteiner" style="flex-direction:column;">
				<?php

					$sql = "SELECT * FROM demo";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					
				?>
				
				<div class="flexbox-conteiner"  style="width:800px;">
						<h3 style="text-align:left;display: flex;"><?php echo $row['name']; ?><br></h3>
						
						</div>
						<br>
						<div class="flexbox-conteiner"  style="width:800px;">
						<p style="text-align:left;display: flex;"><?php echo $row['message']; ?><br></p>
						
				</div>
				<br>
				<?php } } ?>
			</div>
		
	

</body>
</div>
</html>