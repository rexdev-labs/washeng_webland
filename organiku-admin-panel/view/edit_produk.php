<?php
    include "header.php";
    require "app/set_edit_produk.php";
?>
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="index.html">Upload Products</a>
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
                        Upload Produk
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

	  	<div class="row">
	  		<div class="col-md-4" style="">
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
	  		<div class="col-md-4" style="padding-top:30px;">
				<a href="edit_gambar&id=<?= $row[id_produk] ?>"><span class="btn btn-primary">Edit Gambar</span></a>
	  		</div>
	  	</div>


	  </div>
	</div>
</div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-group">
                               <input class="form-control" placeholder="Nama Produk" type="hidden" name="img" required value="<?= $row[img] ?>">
                                <label for=""> Nama Produk</label><input class="form-control" placeholder="Nama Produk" type="text" name="nama" required value="<?= $row[nama] ?>">
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""> Harga Sebelum Diskon</label><input class="form-control" placeholder="Harga Sebelum Diskon" type="text" name="harga_disk" required value="<?= $row[harga_awal] ?>">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Harga Real</label><input class="form-control" placeholder="Harga Real" type="text" name="harga_real" required value="<?= $row[harga] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""> Kategori</label><select class="form-control" name="kategori" required>
                                   <?php
                                            $sub=$conn->query("SELECT * FROM sub_kategori WHERE id_sub='$row[id_sub]'");
                                            while($row2=mysqli_fetch_array($sub)){
                                            $kat=$conn->query("SELECT * FROM kategori WHERE id_kategori='$row2[id_kategori]'");
                                            $row3=mysqli_fetch_array($kat);
                                    ?>
                                    <option selected value="<?= $row2[id_sub] ?>">
                                        <?= $row3[kategori] ?> >> <?= $row2[nama] ?>
                                    </option>
                                    <?php
                                            }
                                                ?>
                                    <?php
                                            $sub=$conn->query("SELECT * FROM sub_kategori");
                                            while($row2=mysqli_fetch_array($sub)){
                                            $kat=$conn->query("SELECT * FROM kategori WHERE id_kategori='$row2[id_kategori]'");
                                            $row3=mysqli_fetch_array($kat);
                                    ?>
                                    <option value="<?= $row2[id_sub] ?>">
                                        <?= $row3[kategori] ?> >> <?= $row2[nama] ?>
                                    </option>
                                    <?php
                                            }
                                                ?>
                                </select>
                            </div>

                            <!--
          <div class="form-group">
            <label for=""> Multiselect</label><select class="form-control select2" multiple="true">
              <option selected="true">
                New York
              </option>
              <option selected="true">
                California
              </option>
              <option>
                Boston
              </option>
              <option>
                Texas
              </option>
              <option>
                Colorado
              </option>
            </select>
          </div>
          <fieldset class="form-group">
            <legend><span>Section Example</span></legend>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for=""> First Name</label><input class="form-control" placeholder="First Name" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">Last Name</label><input class="form-control" placeholder="Last Name" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for=""> Date Picker</label>
                  <div class="date-input">
                    <input class="single-daterange form-control" placeholder="Date of birth" type="text" value="04/12/1978">
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">Twitter Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        @
                      </div>
                    </div>
                    <input class="form-control" placeholder="Twitter Username" type="text">
                  </div>
                </div>
              </div>
            </div>
-->
                            <div class="form-group">
                                <label> Deskripsi Produk</label>
                                <textarea cols="80" id="ckeditor1" name="deskripsi" rows="10" placeholder="Masukan Deskripsi Produk" required><?= $row[desk] ?></textarea>
                            </div>

                            


                            <div class="form-buttons-w">
                               <button  type="submit" name="simpan_produk" class="btn btn-success upload-result2">Save Changes</button>
                            </div>
                        </form>
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






</body>

</html>