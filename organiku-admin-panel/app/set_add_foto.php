<?php
    if(isset($_POST['simpan_produk'])){
        
    
     
    
        $gambar=addslashes($_POST[url_gambar]);
                                   $namafile=$_FILES['gambar']['name'];
                                   $namaimg = time().'.png';
                                   $tmp_file=$_FILES['gambar']['tmp_name'];
                                   $type=$_FILES['gambar']['type'];
                                   $size=$_FILES['gambar']['size'];
                                   $target='upload/'.$namaimg;
                                   move_uploaded_file($tmp_file,$target);
    
  
     if(empty($gambar)){   
        
        $conn->query("INSERT INTO images VALUES(
        DEFAULT,
        '$_GET[id]',
        '$namaimg'
        )");
         
         ?>
                <script>
                    alert("Input Data Foto Berhasil");
                    document.location="add_foto&id=<?= $_GET[id] ?>";
                </script>
            <?php
        
        
     }else{
         
        $conn->query("INSERT INTO images VALUES(
        DEFAULT,
        '$_GET[id]',
        '$gambar'
        )");
         
         ?>
                <script>
                    alert("Input Data Foto Berhasil");
                    document.location="add_foto&id=<?= $_GET[id] ?>";
                </script>
            <?php
         
     }
        

}
?>
