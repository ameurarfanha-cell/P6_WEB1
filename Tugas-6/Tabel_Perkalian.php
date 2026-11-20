<table border="1" cellpadding="3">
  <tr>
    <td bgcolor="white">bilangan</td>
    <?php for ($j = 1; $j <= 10; $j++) { ?>
      <td bgcolor="lime"><?= $j ?></td>
    <?php } ?>
  </tr>

  <?php for ($i = 1; $i <= 10; $i++) { ?>
  <tr>
    <td bgcolor="lime"><?= $i ?></td>
    <?php for ($j = 1; $j <= 10; $j++) {
        $hasil = $i * $j;
        $warna = ($hasil % 2 == 1) ? "yellow" : "cyan";
    ?>
      <td bgcolor="<?= $warna ?>"><?= $hasil ?></td>
    <?php } ?>
  </tr>
  <?php } ?>
</table>