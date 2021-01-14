<?php
    if(isset($_POST['simpan_faq'])){
        
    
        
        $quest=addslashes($_POST[pertanyaan]);
        $answr=addslashes($_POST[jawaban]);
  
        
    $conn->query("INSERT INTO faq VALUES(
        DEFAULT,
        '$quest',
        '$answr'
        )");
        
//        ?>
//            <script>
//                document.location="faq";
//            </script>
//        <?php
        
}
?>
