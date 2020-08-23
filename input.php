<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Tenant Form</title>
</head>
<body>
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
</body>
</html>