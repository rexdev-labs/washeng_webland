<?php
    include "header.php";
    require "app/set_gambar.php";
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
                    <form method="post" enctype="multipart/form-data">

                        <div class="element-box">
                            <div class="container">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Image Upluad</div>
                                    <div class="panel-body">


                                        <div class="row">
                                            <div class="col-md-4 text-center">
                                                <div id="upload-demo2" style="width:350px">

                                                </div>
                                            </div>
                                            <div class="col-md-4" style="padding-top:30px;">
                                                <input type="file" name="gambar" id="preview_gambar" />
                                                <input type="text" name="url_gambar" placeholder="Gambar Melalu Url" class="form-control" style="margin: 20px 0px;">
                                                <img src="#" id="gambar_nodin" width="320" height="320px" style="overflow: hidden; postition: relative;" alt="Preview Gambar" />
                                                <br />
                                                <input type="hidden" name="idd" value="<?= $_GET[id] ?>">
                                                <div class="form-buttons-w">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="edit_gambar" class="btn btn-success upload-result2">Save Changes</button>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>


                        </div>
                    </form>

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

<script type="text/javascript">
    $uploadCrop2 = $('#upload-demo2').croppie({
        enableExif: true,
        viewport: {
            width: 300,
            height: 350,
            type: 'square'
        },
        boundary: {
            width: 350,
            height: 450
        }
    });




    $('#upload2').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            $uploadCrop2.croppie('bind', {
                url: e.target.result
            }).then(function() {
                console.log('jQuery bind complete');
            });

        }
        reader.readAsDataURL(this.files[0]);
    });


    $('.upload-result2').on('click', function(ev) {
        $uploadCrop2.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function(resp) {


            $.ajax({
                url: "ajaxpro.php",
                type: "POST",
                data: {
                    "image": resp
                },
                success: function(data) {
                    html = '<img src="' + resp + '" />';
                    $("#upload-demo-i2").html(html);
                }
            });
        });

    });
</script>


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