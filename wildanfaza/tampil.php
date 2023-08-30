<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"content="width=device=width,initial-scale=1.0">
    <title>menampilkan pengaduanmasyarakat</title>
</head>
<body>
    <h1>DATA Masyarakat</h1>
    <table border="1">
        <tr>
            <th>no</th>
            <th>nik</th>
            <th>nama</th>
            <th>username</th>
            <th>password</th>
            <th>tlp</th>
            
        </tr>
        <?php
             include "koneksi.php";

        $no =1;
        $data=mysqli_query($koneksi,"SELECT * FROM masyarakat");
        while ($hasil= mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $hasil['nik'];?></td>
                <td><?php echo $hasil['nama'];?></td>
                <td><?php echo $hasil['username'];?></td>
                <td><?php echo $hasil['username'];?></td>
                <td><?php echo $hasil['tlp'];?></td>
                <td>
                    <a href=""> ubah </a>
                    <a href=""> hapus </a>
                </td>
            </tr>
            <?php
        }
        ?>
</body>
</html>


