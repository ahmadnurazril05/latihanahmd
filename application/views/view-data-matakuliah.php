<html>

<head>
        <title>Tampil Data Mahasiswa</title>
    </head>
    <body>
        <center>
            <table>   
                <tr>
                    <th colspan="3">
                        Tampil Data Mata Kuliah
                    </th> 
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <?= $kode; ?>
                    </td>
                </tr>
                <tr>
                    <td>Nama MTK</td>
                    <td>:</td>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('matakuliah');
     ?>"Kembali</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>

    </html>
                     
                    