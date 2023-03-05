<body class="profile">
<img class="bg-image" src="images/logo-bg.png" alt="the boy">
    <div class="container">
        <div class="gallery">
            <h1 id="header">Givers List</h1>
            <hr>
            <div class="note-container">
<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>
        <a href="<?php echo base_url(); ?>/guest/<?= esc($guest_item['note_id'], 'url') ?>" class="stretched-link">
            <div class="card">
                <div class="container-card">
                    <h2><b><?= esc($guest_item['name']) ?></b></h2>
                    <p class="sub"><?= esc($guest_item['datetime']) ?></p>
                    <hr>
                    <p class="card-text">
                      <?= substr(esc($guest_item['note']), 0, 100) ?>...
                    </p>
                </div>
                 
            </div>
        </a>

    <?php endforeach ?>

<?php else: ?>

    <p><span class="black-text">No Givers Yet?</span></p><br>
    <p><span class="black-text">I might be losing my touch.</span></p>

<?php endif ?>
            </div>
        </div>
      </div>