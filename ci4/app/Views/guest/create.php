<body class="profile">
<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<h1 id="header">Any Last Words?</h1>
<hr>
<div style="margin-left:40px;">
<form method="post" action="create"> 
  <?= csrf_field() ?> 
  Name: <input type="text" name="name" value="<?= set_value('name')?>">
  <br><br>
  E-mail: <input type="text" name="email" value="<?= set_value('email')?>">
  <br><br>
  Website: <input type="text" name="website" value="<?= set_value('website')?>">
  <br><br>
  Say anything:
  <br>
  <textarea name="note" rows="5" cols="40" value="<?= set_value('name')?>"></textarea>
  <br><br>
  Which organ would you be willing to part with:
  <br>
  <input type="radio" name="organ" <?php if (isset($organ) && $organ=="skin") echo "checked";?> value="skin">Skin
  <input type="radio" name="organ" <?php if (isset($organ) && $organ=="lung") echo "checked";?> value="lung">A lung
  <input type="radio" name="organ" <?php if (isset($organ) && $organ=="spleen") echo "checked";?> value="spleen">Spleen
  <input type="radio" name="organ" <?php if (isset($organ) && $organ=="heart") echo "checked";?> value="heart">Other  
  <br><br>
  <button class="yellow" style="width:100px;" onclick="sacrifice()" type="submit" name="submit" value="Submit">Submit</button>
</form>
