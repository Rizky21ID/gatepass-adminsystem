<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><div>
<p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
<h2>INPUT DATA PETUGAS</h2></div>
<form name="form1" method="post" action="http://localhost/gatepass/aksi/simpanpetugas.php">
<table>
<tr>
<td>Username</td>
<td><input class="w3-input w3-animate-input" style="width:30%" type="text" name="username" size="15"/></td>
</tr>
<tr>
<td>Nama Petugas</td>
<td><input class="w3-input w3-animate-input" style="width:70%" type="text" name="nama_petugas" size="30"/></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td><input type="radio" name="jklm" value="Laki-Laki" />Laki-Laki
<input type="radio" name="jklm" value="Perempuan" />Perempuan
</tr>
<tr>
<td>Agama</td>
<td><input class="w3-input w3-animate-input" style="width:30%" type="text" name="agama" size="15"/></td>
</tr>
<tr>
<td>Nomer HP</td>
<td><input class="w3-input w3-animate-input" style="width:30%" type="text" name="hp" size="15"/></td>
</tr>
<tr>
<td>Level</td>
<td><input type="radio" name="level" value="admin" />Admin
<input type="radio" name="level" value="operator" />Operator
</tr>
<tr>
<td>Password</td>
<td><input class="w3-input w3-animate-input" style="width:30%" type="text" name="password" size="15"/></td>
</tr>
</tr>

<td><input value="Simpan" type="submit" class="w3-btn w3-green"/></td>
<td><input value="Ulangi" type="reset" class="w3-btn w3-red"/></td>
<td><input value="Kembali" type="button" onclick="self.history.back ()" class="w3-btn w3-red"/>
</td>
</table>
</body>
</html>