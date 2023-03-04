<body class="profile">
<h2><?= esc($title) ?></h2>

<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

        <h3><?= esc($guest_item['name']) ?></h3>

        <div class="main">
            <?= esc($guest_item['note']) ?>
        </div>
        <p><a href="<?php echo base_url(); ?>/guest/<?= esc($guest_item['note_id'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Victims Yet?</h3>

    <p>I might be losing my touch.</p>

<?php endif ?>