<?php
$id = $_GET["id_barang"];

function hapus($id) {
    global $connection;
    mysqli_query($connection, "DELETE FROM barang WHERE id_barang = $id");
    return mysqli_affected_rows($connection);
}



if( hapus($id) > 0 ) {
    
    echo "<script>
                alert('data berhasil dihapus!');
                document.location.href = 'addbarang.php';
        </script>
        ";
} else {
        echo "<script>
                alert('data gagal dihapus!');
                document.location.href = 'addbarang.php';
            </script> 
            ";
  } 

?>
