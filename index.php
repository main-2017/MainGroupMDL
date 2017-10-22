<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Main Group | MDL</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.green-deep_purple.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<style>
.demo-layout-transparent {
  background: url('../assets/demos/transparent.jpg') center / cover;
}
.demo-layout-transparent .mdl-layout__header,
.demo-layout-transparent .mdl-layout__drawer-button {
  /* This background is dark, so we set text to white. Use 87% black instead if
     your background is light. */
  color: white;
}
</style>

<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"></span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
     <!--  <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav> -->
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
  </main>
</div>
	<img class="logo_main" src="img/logo.png" alt="MainGroup">
 	<div class="img-container">
		
		<h1>Desarrollamos <br>experiencias</h1>
		<h5>Programming & Product design</h5>
		<button id="accion" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
 			 CONOCENOS
		</button>
	</div>
  		<div class="homepage-hero-module">
		    <div class="video-container">
		        <div class="filter"></div>
		        <video autoplay loop class="fillWidth">
		            <source src="media/bg.mp4" type="video/mp4"/>
		        </video>
		    </div>
		</div>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>