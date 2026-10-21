<?php
$data = [
    ["2559201016", "Reni Artita", 3],
    ["2559201015", "Sutari", 3],
    ["2559201019", "Nada Nadhifah", 3],             
];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tabel Array</title>
</head>
<body>
  <h2 style="text-align: center;">Daftar Mahasiswa</h2>
  <table border="1" cellpadding="10" style="margin: auto;">
    <tr>
      <th>No</th>
      <th>NPM</th>
      <th>Nama</th>
      <th>Semester</th>
    </tr>
    <?php foreach ($data as $i => $row) { ?>
    <tr>
      <td><?= $i + 1 ?></td>
      <td><?= $row[0] ?></td>
      <td><?= $row[1] ?></td>
      <td><?= $row[2] ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>