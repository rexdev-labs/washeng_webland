<?php
    if(isset($_POST['edit_gambar'])){
        
        $id=addslashes($_POST[idd]);
                $gambar=addslashes($_POST[url_gambar]);
                                   $namafile=$_FILES['gambar']['name'];
                                   $namaimg = time().'.png';
                                   $tmp_file=$_FILES['gambar']['tmp_name'];
                                   $type=$_FILES['gambar']['type'];
                                   $size=$_FILES['gambar']['size'];
                                   $gambar=addslashes($_POST[url_gambar]);
                                   $target='upload/'.$namaimg;
                                   move_uploaded_file($tmp_file,$target);
        
        if(empty($gambar)){  
            
            $conn->query("UPDATE produk SET 
                img = '$namaimg'
                WHERE id_produk='$_POST[idd]'
                ");
            ?>
                <script>
                    alert("Edit Gambar Berasil");
                    document.location="edit_produk&id=<?= $_POST[idd] ?>";
                </script>
            <?php
            
        }else{
            
            $conn->query("UPDATE produk SET 
                img = '$gambar'
                WHERE id_produk='$_POST[idd]'
                ");
            ?>
                <script>
                    alert("Edit Gambar Berasil");
                    document.location="edit_produk&id=<?= $_POST[idd] ?>";
                </script>
            <?php
                
        }
}
?>
