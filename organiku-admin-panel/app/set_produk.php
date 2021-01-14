<?php
    if(isset($_POST['simpan_produk'])){
        
    
        
        $nama=addslashes($_POST[nama]);
        $harga_disk=addslashes($_POST[harga_disk]);
        $harga_real=addslashes($_POST[harga_real]);
        $kategori=addslashes($_POST[kategori]);
        $sub = explode("|",$kategori);
        $subkat = $sub[0];
        $kat = $sub[1];
        $deskripsi=addslashes($_POST[deskripsi]);
        $datetime = date("Y-m-d");
    
        $gambar=addslashes($_POST[url_gambar]);
                                   $namafile=$_FILES['gambar']['name'];
                                   $namaimg = time().'.png';
                                   $tmp_file=$_FILES['gambar']['tmp_name'];
                                   $type=$_FILES['gambar']['type'];
                                   $size=$_FILES['gambar']['size'];
                                   $target='upload/'.$namaimg;
                                   move_uploaded_file($tmp_file,$target);
    
  
     if(empty($gambar)){   
        
        $conn->query("INSERT INTO produk VALUES(
        DEFAULT,
        '$nama',
        '$harga_real',
        '$harga_disk',
        '$deskripsi',
        '$subkat',
        '$namaimg',
        '1',
        '$kat'
        )");
         
         ?>
                <script>
                    alert("Input Data Produk Berhasil <?= $kat | $subkat ?>");
                    document.location="produk";
                </script>
            <?php
        
        
     }else{
         
        $conn->query("INSERT INTO produk VALUES(
        DEFAULT,
        '$nama',
        '$harga_real',
        '$harga_disk',
        '$deskripsi',
        '$subkat',
        '$gambar',
        '1',
        '$kat'
        )");
         
         ?>
                <script>
                    alert("Input Data Produk Berhasil2");
                    document.location="produk";
                </script>
            <?php
         
     }
        

}
?>
