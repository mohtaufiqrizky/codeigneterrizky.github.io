<html>
<head>
<title>
Login
</title>
</head>
<body>
<form>
<table border="1" cellspacing='0'cellpadding='1' align="center">

<tr>
<td>Nim</td>
<td>Nama Lengkap</td>
<td>Tanggal Lahir</td>
<td>Alamat</td>
<td>Aksi</td>
</tr>

<?php
foreach ($kelas as $kls){ ?>
<tr>
<td><?=$kls->nim?></td>
<td><?=$kls->nama?></td>
<td><?=$kls->tgllahir?></td>
<td><?=$kls->alamat?></td>
<td><input type="button"

value="Edit"></td>

</tr>
<?php }
?>
</table>
</form>
</body>
</html>