<?php
    $authorID = $_SESSION['user_sid'];
    $sid_artikel = "";
    $judul = "";
    $kategori = "";
    $isi = "";
    $subKategori = "";
    $sumberArtikel = "";

    if (isset($_GET['id'])) {
        $sid_artikel = $_GET['id'];
        
        $sql = mysqli_query($conn, "SELECT * FROM tbl_artikel where sid = '$sid_artikel' order by tanggal desc");
        $arr = mysqli_fetch_array($sql);
        
        $judul = $arr['judul'];
        $kategori = $arr['category'];
        $subKategori = $arr['sub_category'];
        $sumberArtikel = $arr['sumber'];
        $isi = htmlspecialchars_decode($arr["isi"]);

    }
?>
<style type="text/css">
     .twitter-typeahead {
        width: 100%;
        position: relative;
      }
      .twitter-typeahead .tt-query,
      .twitter-typeahead .tt-hint {
         margin-bottom: 0;
         width:100%;
         height:30px;
         position:absolute;
         top:0;
         left:0;
      }
      .twitter-typeahead .tt-hint {
          color:#fff;
      }
      .tt-dropdown-menu {
         min-width: 200px;
         margin-top: 2px;
         padding: 5px 0;
         background-color: #fff;
         border: 1px solid #ccc;
         border: 1px solid rgba(0,0,0,.2);
        *border-right-width: 2px;
        *border-bottom-width: 2px;
      }

      .tt-suggestion {
         display: block;
         padding: 5px 20px;
      }

      .tt-suggestion.tt-is-under-cursor {
         color: #fff;
         background-color: #0081c2;
      }

      .tt-suggestion.tt-is-under-cursor a {
         color: #fff;
      }

      .tt-suggestion p {
         margin: 0;
      }
</style>
<div class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="mail-box-header">
                    <h2><?php if (strlen($sid_artikel) == 0) {echo "Artikel Baru";} else {echo "Edit Artikel";}?></h2>
                </div>
                <form class="form-horizontal" action="../../system/crud_impl.php" method="POST" enctype="multipart/form-data" onsubmit="return postForm()">
                    <div class="mail-box">
                        <div class="mail-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Judul:</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="judul" value="<?php echo $judul;?>"></div>
                                    <input type="hidden" name="authorID" value="<?php echo $authorID; ?>" />
                                    <input type="hidden" name="sid" id="sidArtikel" 
                                    value="<?php if (strlen($sid_artikel) == 0) {echo gen_uuid();} else {echo $sid_artikel;}?>" />
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kategori:</label>
                                    <div class="col-sm-10"><input type="text" id="kategoriArtikel" class="form-control typeahead" name="category" value="<?php echo $kategori;?>"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Sub Kategori:</label>
                                    <div class="col-sm-10"><input type="text" id="subKategoriArtikel" class="form-control typeahead" name="subCategory" value="<?php echo $subKategori;?>"></div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Sumber:</label>
                                    <div class="col-sm-10"><input type="text" id="sumberArtikel" class="form-control typeahead" name="sumberArtikel" value="<?php echo $sumberArtikel;?>"></div>
                                </div>
                        </div>
                        <div class="mail-text h-200">
                            <textarea class="isiArtikel" name="isiArtikel" id="isiArtikel">
                                <?php echo $isi;?>
                            </textarea>
                            <!-- <div class="summernote" >
                            </div> -->
                            <div class="clearfix"></div>
                        </div>
                        <div class="mail-body text-right tooltip-demo">
                            <button type="submit"  class="btn btn-sm btn-primary" name="btnSaveArtikel" data-toggle="tooltip" data-placement="top" title="Simpan"><i class="fa fa-reply"></i> Simpan</button>
                            <button type="button" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Batal"><i class="fa fa-times"></i> Batal</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var postForm = function() {
        var content = $('textarea[name="isiArtikel"]').html($('#isiArtikel').code());
    }
</script>