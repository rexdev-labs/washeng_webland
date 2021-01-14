<?php
    if(isset($_POST['simpan_produk'])){
        
        
        $nama=addslashes($_POST[nama]);
        $harga_disk=addslashes($_POST[harga_disk]);
        $harga_real=addslashes($_POST[harga_real]);
        $kategori=addslashes($_POST[kategori]);
        $deskripsi=addslashes($_POST[deskripsi]);
        $datetime = date("Y-m-d");
        $imageName = time().'.png';
  
        
   $conn->query("UPDATE produk SET 
        nama = '$nama',
        harga = '$harga_real',
        harga_awal = '$harga_disk',
        desk = '$deskripsi',
        id_sub = '$kategori'
        WHERE id_produk='$_GET[id]'
        ");
        
    ?>
        <script>
                alert("Sukses Edit Product");
                document.location="produk";
        </script>
    <?php
    
        
        
        
        

}
?>
