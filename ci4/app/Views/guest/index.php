<body class="profile">
<img class="bg-image" src="images/logo-bg.png" alt="the boy">
<div class="navigation">
      <nav style="color:#ffefef;">
        <a href="<?php echo base_url();?>/profile">Home</a> |
        <a href="<?php echo base_url();?>/guest">Donors</a> |
        <a href="<?php echo base_url();?>/guest/create">Make a Donation</a> |
        <a href="<?php echo base_url();?>/references">References</a>
      </nav>
    </div>
    <div class="container">
        <div class="gallery">
            <h1 id="header">Donor List</h1>
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

    <p>No Donors Yet?</p><br>
    <p><span class="redacted">He</span> will be displeased.</p>

<?php endif ?>
            </div>
        </div>
      </div>