<?php
include('koneksii.php');
$tampilcuti = mysql_query("select * from t_cuti");
?>
<table border="1">
    <tr>
        <td>id</td>
        <td>nik</td>
        <td>nama</td>
        <td>jabatan</td>
        <td>hakcuti</td>
    </tr>
    <?php
    while ($cuti = mysql_fetch_array($tampilcuti)) { ?>
        <tr>
            <td><?php echo $cuti['id']; ?></td>
            <td><?php echo $cuti['nik']; ?></td>
            <td><?php echo $cuti['nama']; ?></td>
            <td><?php echo $cuti['jabatan']; ?></td>
            <td><?php echo $cuti['hak_cuti']; ?></td>
        </tr>
    <?php } ?>

</table>