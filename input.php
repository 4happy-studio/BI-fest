<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Input Form</title>
</head>
<body>

<h2>INPUT TENANT</h2>
<form action="input_tenant.php" method="post">
    <p>
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">
    </p>
    <p>
        <label for="name">Nama Tenant:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="desc">Deskripsi Tenant:</label>
        <input type="text" name="desc" id="desc">
    </p>
    <p>
        <label for="cluster">cluster</label>
        <input type="text" name="cluster" id="cluster">
    </p>
    <input type="submit" value="Submit">
</form>

<br>
<br>

<h2>INPUT PRODUK</h2>
<form action="input_produk.php" method="post">
    <p>
        <label for="id">ID:</label>
        <input type="text" name="id" id="id">
    </p>
    <p>
        <label for="id_tenant">ID Tenant:</label>
        <input type="text" name="id_tenant" id="id_tenant">
    </p>
    <p>
        <label for="name">Nama produk:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="desc">Deskripsi produk</label>
        <input type="text" name="desc" id="desc">
    </p>

    <p>
        <label for="img">Gambar Produk</label>
        <input type="file" id="img" name="img" accept="image/*">
    </p>
    
    <input type="submit" value="Submit">
</form>
</body>
</html>