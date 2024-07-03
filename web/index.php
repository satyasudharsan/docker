<!DOCTYPE html>
<html>
<head>
    <title>Profil Sederhana</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
        h1, h2 {
            margin: 10px 0;
        }
        img {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <?php
        $name;
        $nim;  
        $kelas;  
    ?>
    <h1>DEMO DOCKER</h1>
    <img src="logo.png" alt="Logo Undiksha" style="width:200px;height:auto;">
    <h2>Nama : Gusti Nyoman Satya Sudharsan <?php echo $name; ?></h2>
    <h2>Nim : 2215101040 <?php echo $nim; ?></h2>
    <h2>Kelas : A <?php echo $kelas; ?></h2>
    <h2>Saya sedang belajar docker!</h2>
    <img src="satya.jpeg" alt="Profil Image" style="width:200px;height:auto;">
</body>
</html>
