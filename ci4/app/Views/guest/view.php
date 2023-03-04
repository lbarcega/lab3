<body class="profile">
  <img class="image" src="images/logo-bg.png" alt="the boy">
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
                <span style="font-family: 'Times New Roman', Times, serif;background-color: #000000; color:#7c1e1e !important;">I have pledged to sacrifice my <?= esc($guest['organ']) ?> to Him."</span><br><br>
                </center>
                </p>
        <center>
        <a href="index"><button type="button" class="yellow" >Go Back.</button></a>
        </center>
				</div>
			</div>