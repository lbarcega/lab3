<body class="profile">
  <img class="image" src="images/icon.png" alt="the boy">
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
                <span class="redacted">I have pledged to sacrifice my <?= esc($guest['organ']) ?> to Him."</span><br><br>
				</p>
        <center>
        <a href="<?php base_url() ?>/guest"><button type="button" class="yellow" >Go Back.</button></a>
        </center>
				</div>
			</div>