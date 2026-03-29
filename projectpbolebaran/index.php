<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data</title>
</head>
<body>

    <h2>Form Input Data</h2>

    <form action="proses.php" method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur" required><br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>