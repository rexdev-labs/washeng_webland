<?php
    include "header.php";
    require "app/set_add_foto.php";
?>
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="index.html">Upload Foto</a>
    </li>
</ul>
<!--------------------
          END - Breadcrumbs
          -------------------->
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-lg-12">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Upload Sub Foto
                    </h6>
                    <div class="element-box">
                        <div class="container">
                            <div class="panel panel-default">
                                <div class="panel-heading">Image Upload</div>
                                <div class="panel-body">

                                    <?php
                                    $data=$conn->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
                                         $row=mysqli_fetch_array($data);
                                         $i++;
                                            
                            ?>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4" style="">
                                            <form method="post" enctype="multipart/form-data">
                                                <div class="container">
                                                    <input type="file" name="gambar" id="preview_gambar" />
                                                    <input type="text" name="url_gambar" placeholder="Gambar Melalu Url" class="form-control" style="margin: 20px 0px;">
                                                    <img src="#" id="gambar_nodin" width="320" height="320px" style="overflow: hidden; postition: relative;" alt="Preview Gambar" />
                                                </div>

                                                <div class="form-buttons-w">
                                                    <button type="submit" name="simpan_produk" class="btn btn-success upload-result2">Save Foto</button>
                                                </div>
                                            </form>
                                            <br>
                                            <br>
                                            <br>
                                            <h4>Main Foto</h4>
                                            <?php
                                $img = $row[img];
                                    if($img[0] == "h"){
                                        ?>
                                            <img src="<?= $row[img] ?>" alt="" style="width: 250px;">
                                            <?php
                                    }else{
                                        ?>
                                            <img src="upload/<?= $row[img] ?>" alt="" style="width: 250px;">
                                            <?php
                                    }
                                ?>

                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <table class="table" data-paging="true" data-show-toggle="false" data-expand-first="false" style="background: #fff; margin-bottom: 100px;">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $data=$conn->query("SELECT * FROM images WHERE id_barang = '$_GET[id]'");
                                         while($row=mysqli_fetch_array($data)){
                                         $i++;
                            ?>
                                <tr>
                                    <td> 
                                        <?php
                                        $img = $row[foto];
                                            if($img[0] == "h"){
                                                ?>
                                                    <img src="<?= $row[foto] ?>" alt="" style="width: 250px;">
                                                    <?php
                                            }else{
                                                ?>
                                                    <img src="upload/<?= $row[foto] ?>" alt="" style="width: 250px;">
                                                    <?php
                                            }
                                        ?>
                                   </td>
                                    <td>
                                        <a href="add_foto&id=<?= $_GET[id] ?>&del=1&ids=<?php echo "$row[id_images]"?>"><i class="icon-feather-trash-2"></i></a>
                                    </td>
                                </tr>
                                <?php
                                         }
                            
                            
                             if($_GET[del]){
                            ?>
                                <script>
                                    var result = confirm("Want to delete?");
                                    if (result) {
                                        <?php
                                                  
                                         $conn->query("DELETE  FROM images WHERE id_images = $_GET[ids] ");
                            ?>
                                        document.location = "add_foto&id=<?php echo"$_GET[id]" ?>";

                                    }
                                </script>

                                <?php
                             }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!--------------------
              START - Color Scheme Toggler
              -------------------->
        <div class="floated-colors-btn three-floated-btn">
            <div class="os-toggler-w">
                <div class="os-toggler-i">
                    <div class="os-toggler-pill"></div>
                </div>
            </div>
            <span>Dark </span><span>Colors</span>
        </div>
        <!--------------------
              END - Color Scheme Toggler
              -------------------->
        <!--------------------
              START - Demo Customizer
              -------------------->

        <!--------------------
              END - Chat Popup Box
              -------------------->
    </div>
</div>
</div>
</div>
<div class="display-type"></div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="bower_components/moment/moment.js"></script>
<script src="bower_components/chart.js/dist/Chart.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<script src="bower_components/dropzone/dist/dropzone.js"></script>
<script src="bower_components/editable-table/mindmup-editabletable.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="bower_components/tether/dist/js/tether.min.js"></script>
<script src="bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="bower_components/bootstrap/js/dist/util.js"></script>
<script src="bower_components/bootstrap/js/dist/alert.js"></script>
<script src="bower_components/bootstrap/js/dist/button.js"></script>
<script src="bower_components/bootstrap/js/dist/carousel.js"></script>
<script src="bower_components/bootstrap/js/dist/collapse.js"></script>
<script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
<script src="bower_components/bootstrap/js/dist/modal.js"></script>
<script src="bower_components/bootstrap/js/dist/tab.js"></script>
<script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
<script src="bower_components/bootstrap/js/dist/popover.js"></script>
<script src="js/demo_customizer.js?version=4.4.0"></script>
<script src="js/main.js?version=4.4.0"></script>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-XXXXXXX-9', 'auto');
    ga('send', 'pageview');
</script>
<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#gambar_nodin').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#preview_gambar").change(function() {
        bacaGambar(this);
    });
</script>






</body>

</html>