<!DOCTYPE HTML>
<!--
	Projection by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Cars Gallery</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="./assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.php" class="logo"><strong>Cars Gallery</strong> by David Jiménez</a>
					<nav id="nav">
						<a href="index.php">Home</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome, user!</h1>
					</header>

					<div class="flex ">

						<div>
							<span class="icon fa-car"></span>
							<h3>Best cars for you</h3>
						</div>

					</div>
				</div>
			</section>

            <section id="marcasSeccion" class="align-center">
                    <div id="marcas">
                    
                        <h2 id="tituloModelo"></h2>

                        <div id="marcasContenido" style="display: flex; flex-wrap: wrap; justify-content: center;"></div>

                    </div>
			</section>

        <?php

            require('client.php');
            
            $marcas = $client->ObtenerMarcasUrl();
            $imagenes = ['./assets/imgs/ford.png', './assets/imgs/seat.png', './assets/imgs/nissan.png', './assets/imgs/audi.png', './assets/imgs/bmw.png', './assets/imgs/citroen.png']

        ?>


		<!-- Three -->
			<section id="three" class="wrapper align-center">
				<div class="inner">
					<div class="flex flex-2">

                        <?php
                        
                        $index = 0;
                        foreach($marcas as $marca => $url) {
                        
                        ?>

						<article style="margin-bottom: 2rem;">
							<div class="image">
								<img src="<?= $imagenes[$index++]?>" style="width: 200px; height: 200px;" alt="<?= $marca ?>" />
							</div>
							<header>
								<h3><?= $marca ?></h3>
							</header>
							<footer>
                                <button name="botonModelos" data-id="<?= $marca ?>">Modelos</button>
								<a href="<?= $url ?>" target="_blank" class="button">Video</a>
							</footer>
						</article>

                        <?php
                        
                        }

                        ?>
			
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h3>Get in touch</h3>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>

					<div class="copyright">
						&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com">Unsplash</a>.
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
            <script src="assets/js/obtenerModelos.js"></script>
	</body>
</html>