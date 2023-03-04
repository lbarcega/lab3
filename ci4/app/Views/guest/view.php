<body class="no-escape">
  <img class="bg-image" src="images/logo-bg.png" alt="the boy">
    <div class="container">
    
			<div class="small-container">
				<div class="gallery">
				<h1><?= esc($guest['name']) ?></h1>
				<p class="sub"><?= esc($guest['datetime']) ?> <br>
                <?= esc($guest['email']) ?><br>
                <?= esc($guest['website']) ?></p>
				<hr>
				<p>
				<?= esc($guest['note']) ?>
                "I have pledged to sacrifice my <?= esc($guest['organ']) ?> to Him."
                Signed by,
                <?= esc($guest['name']) ?>
				</p>
        <center>
        <a href="../"><button type="button" class="yellow" >Go Back.</button></a>
        </center>
				</div>
			</div>