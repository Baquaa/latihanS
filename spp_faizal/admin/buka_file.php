<?php
if (isset($_GET['open'])){
    switch($_GET['open']){
        case'':
            if(!file_exists ("informasi_utama.php")) die ("file tidak ada!");
            include "informasi_utama.php"; break;

        case'data_spp':
            if(!file_exists ("data_spp.php")) die ("file tidak ada!");
            include "data_spp.php"; break;
        
            case'tambah_spp':
                if(!file_exists ("tambah_spp.php")) die ("file tidak ada!");
                include "tambah_spp.php"; break;

                case'hapus_spp':
                    if(!file_exists ("hapus_spp.php")) die ("file tidak ada!");
                    include "hapus_spp.php"; break;

                    case'edit_spp':
                        if(!file_exists ("edit_spp.php")) die ("file tidak ada!");
                        include "edit_spp.php"; break;

                        // case'kelas.php':
                        //     if(!file_exists("kelas.php")) die ("file tidak ada!");
                        //     include "kelas.php"; break;

                        default :
                            if(!file_exists ("informasi_utama.php")) die ("file tidak ada!");
                            include "informasi_utama.php"; break;

    }
}
else {
    if(!file_exists ("informasi_utama.php")) die ("file tidak ada!");
    include "informasi_utama.php";
}
?>