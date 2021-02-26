<!DOCTYPE html>
<html>
<head>
  <title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
  <h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
  <table border="1">
    <tr>
      <th>Nama1</th>
      <th>Nama2</th>
      <th>Email</th>
      <th>Password</th>
    </tr>
    <?php foreach($admin as $u){ ?>
    <tr>
      <td><?php echo $u->nama1 ?></td>
      <td><?php echo $u->nama2 ?></td>
      <td><?php echo $u->email ?></td>
      <td><?php echo $u->password ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>