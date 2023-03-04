<body class="profile">
  <img class="image" src="icon.png" alt="the boy">
    <div class="container">
    
			<div class="small-container">
				<div class="gallery">
				<h1><?= esc($guest['name']) ?></h1>
				<p class="sub"><?= esc($guest['datetime']) ?> <br>
                <?= esc($guest['email']) ?><br>
                <?= esc($guest['website']) ?></p>
				<hr>
				<p>
				<?= esc($guest['note']) ?><br>
                "I have pledged to sacrifice my <?= esc($guest['organ']) ?> to Him."<br>
                Signed by,<br>
                <?= esc($guest['name']) ?>
				</p>
        <center>
        <a href="<?php base_url() ?>/guest"><button type="button" class="yellow" >Go Back.</button></a>
        </center>
				</div>
			</div>