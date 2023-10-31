<!DOCTYPE html>
<html>

<head>
    <title>Tugas PWEB</title>
</head>

<body>
    <header>
        <h3>Pendaftaran siswa baru</h3>
        <h1>SMK Coding</h1>
    </header>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Form Pendaftaran</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
        <?php if (isset($_GET['status'])): ?>
        <p>
            <?php
            if ($_GET['status'] == 'sukses') {
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
        </p>
        <?php endif; ?>
    </nav>
</body>

</html>