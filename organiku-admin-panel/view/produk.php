<?php
    include "header.php";
?>
<ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="produk">Products</a>
            </li>
          </ul>
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <h6 class="element-header">
                Data Produk
            </h6>
            <a href="upload_produk"><button class="mr-2 mb-2 btn btn-primary btn-lg" type="button">Tambah Produk</button></a>
            <div class="element-box">
                <h5 class="form-header">
                    Data Poduk TFGEC (TOKO FEBRIAN GROSIR ECER COLLECTION)
                </h5>
                <div class="table-responsive">
                    <table class="table" data-paging="true" data-show-toggle="false" data-expand-first="false" style="background: #fff; margin-bottom: 100px;">
                        <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th data-breakpoints="xs">Harga SD</th>
                                    <th data-breakpoints="xs">Harga</th>
                                    <th data-breakpoints="xs">Kategoty</th>
                                    <th data-breakpoints="xs">Action</th>
                                    <th data-breakpoints="all">Deskripsi</th>
                                </tr>
                        </thead>
                        <tbody>
                           <?php
                                    $data=$conn->query("SELECT * FROM produk ORDER BY id_produk DESC ");
                                         while($row=mysqli_fetch_array($data)){
                                         $i++;
                                            $sub=$conn->query("SELECT * FROM sub_kategori WHERE id_sub='$row[id_sub]'");
                                            $row2=mysqli_fetch_array($sub);
                                            $kat=$conn->query("SELECT * FROM kategori WHERE id_kategori='$row2[id_kategori]'");
                                            $row3=mysqli_fetch_array($kat);
                            ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row[nama] ?></td>
                                <td>Rp. <?= number_format($row[harga_awal]) ?></td>
                                <td>Rp. <?= number_format($row[harga]) ?></td>
                                <td><?= $row3[kategori] ?> -> <?= $row2[nama] ?></td>
                                <td>
                                    <a href="edit_produk&id=<?= $row[id_produk] ?>"><i class="icon-feather-edit"></i></a>
                                    <a href="add_foto&id=<?= $row[id_produk] ?>"><i class="icon-feather-image"></i></a>
                                    <a href="produk&del=1&id=<?php echo "$row[id_produk]"?>"><i class="icon-feather-trash-2"></i></a>
                                </td>
                                <td><?= $row[desk] ?></td>
                            </tr>
                            <?php
                                         }
                            
                            
                             if($_GET[del]){
                            ?>
                                <script>
                                    var result = confirm("Want to delete?");
                                        if (result) {
                                            <?php
                                                  
                                         $conn->query("DELETE  FROM produk WHERE id_produk='$_GET[id]'");
                            
                            ?>
                                    document.location="produk";
                        
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
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/demo_customizer.js?version=4.4.0"></script>
<script src="footable/js/footable.js"></script>
<script src="js/main.js?version=4.4.0"></script>
<script>
    jQuery(function($){
       	$('.table').footable({
		"paging": {
            "size": 15
		}
	});
    });
    
    
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
</body>

</html>