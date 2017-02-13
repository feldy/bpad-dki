<?php
    $sid_artikel = "";
    $judul = "";
    $kategori = "";
    $isi = "";

    if (isset($_GET['id'])) {
        $sid_artikel = $_GET['id'];
        
        $sql = mysqli_query($conn, "SELECT * FROM tbl_artikel where sid = '$sid_artikel' order by tanggal desc");
        $arr = mysqli_fetch_array($sql);
        
        $judul = $arr['judul'];
        $kategori = $arr['category'];
        $isi = htmlspecialchars_decode($arr["isi"]);
    }

?>
<div class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-12 animated fadeInRight">
                <div class="mail-box-header">
                    <h2><?php if (strlen($sid_artikel) == 0) {echo "Artikel Baru";} else {echo "Edit Artikel";}?></h2>
                </div>
                <div class="mail-box">
                    <div class="mail-body">
                        <form class="form-horizontal" method="get">
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Judul:</label>
                                <div class="col-sm-11"><input type="text" class="form-control" value="<?php echo $judul;?>"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-1 control-label">Kategori:</label>
                                <div class="col-sm-11"><input type="text" class="form-control" value="<?php echo $kategori;?>"></div>
                            </div>
                        </form>
                    </div>
                    <div class="mail-text h-200">
                        <div class="summernote">
                            <?php echo $isi;?>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="mail-body text-right tooltip-demo">
                        <a href="mailbox.html" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Send"><i class="fa fa-reply"></i> Simpan</a>
                        <a href="mailbox.html" class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="Discard email"><i class="fa fa-times"></i> Batal</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>