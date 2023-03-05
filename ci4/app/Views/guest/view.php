<body class="profile">
  <img class="bg-image" src="../images/logo-bg.png" alt="the boy">
    <div class="container">
    
			<div class="small-container">
				<div class="gallery">
				<h1><?= esc($guest['name']) ?></h1>
				<p class="sub"><?= esc($guest['datetime']) ?> <br>
                <?= esc($guest['email']) ?><br>
                <?= esc($guest['website']) ?></p>
				<hr>
				<p>
				<?= esc($guest['note']) ?><br><br>
                <center>
                <span class="black-text">
                "I sacrifice my <?= esc($guest['organ']) ?> to Him."</span><br><br>
                </center>
                </p>
        <center>
        <a href="../guest"><button type="button" class="yellow" >Go Back.</button></a>
        </center>
				</div>
			</div>