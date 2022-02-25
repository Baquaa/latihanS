<?php
include_once "../src/koneksi.php";

if(isset($_POST['btnSimpan'])){
    $id_spp     = $_POST['id_spp'];
    $tahun     = $_POST['tahun'];
    $nominal     = $_POST['nominal'];

    $pesanError = array();
    if (trim($id_spp)=="") {
        $pesanError[] = "Data <b>ID SPP</> tidak boleh kosong !";
    }
    if (trim($tahun)=="") {
        $pesanError[] = "Data <b>Tahun</> tidak boleh kosong !";
    }
    if (trim($nominal)=="") {
        $pesanError[] = "Data <b>Nominal</> tidak boleh kosong !";
    }

    if (count($pesanError)>=1 ){
        $noPesan=0;
        foreach ($pesanError as $indeks=>$pesan_tampil){
        $noPesan++;
            echo "&nbsp; $noPesan $pesan_tampil<br>";
        }
    echo "<br>";

    }
    else {
        $sql = mysqli_query($koneksi, "INSERT INTO spp (id_spp, tahun, nominal)
            VALUES('$id_spp', '$tahun', '$nominal' )");
        if($sql){
            echo " <center> <b> <font color = 'red' size = '4'> <p> Data Berhasil disimpan </ p>
                    </center> </b> </font> </br>
            <meta http-equiv='refresh' content='2; url=?open=data_spp'>";
        }
        else{
            echo " <center> <b> <font color = 'red' size = '4'> <p> Data Gagal disimpan !
            <meta http-equiv='refresh' content='2; url=?open=data_spp'>";
        }
        exit;
    }
}

?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" >
    <table cellspacinng="1" cellspadding="3">
        <tr>
            <td bgcolor="#CCCCCC"><strong>TAMBAH DATA SPP </strong></td>
    </tr>
<tr>
    <td>ID SPP</td>
    <td>:</td>
    <td><input name="id_spp" type="text" size="10" maxlength="4" /></td>
</tr>
<tr>
    <td>Tahun</td>
    <td>:</td>
    <td><input name="tahun" type="text" size="10" maxlength="4" /></td>
</tr>
<tr>
    <td>Nominal</td>
    <td>:</td>
    <td><input name="nominal" type="text" size="10" maxlength="4" /></td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input name="btnSimpan" type="submit" value="Simpan" /></td>
</tr>
</table>
</form>