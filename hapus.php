<?php

function hapus($id) {
    global $connection;
    mysqli_query($connection, "DELETE FROM barang WHERE id = $id");
    return mysqli_affected_rows($connection);
}

$id = $_GET["id"];


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