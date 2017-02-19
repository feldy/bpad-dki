<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>Daftar Artikel</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col-sm-9">
                <span class="input-group-btn">
                    <a href="?p=create-artikel" type="button" class="btn btn-sm btn-primary"> Buat Artikel</a> 
                </span>
            </div>
            <div class="col-sm-3">
                <form method="post" action="">
                    <div class="input-group">
                        <input type="text" name="src_search" value="" placeholder="Pencarian" class="input-sm form-control" /> 
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-sm btn-primary"> Go!</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <table class="table table-hover no-margins">
                <tbody>
                <?php 
                    $user_sid = $_SESSION['user_sid'];
                    $sql = mysqli_query($conn, "SELECT * FROM tbl_artikel where is_publish = 1 and author = '$user_sid' order by tanggal desc");
                    while($arr = mysqli_fetch_array($sql)) {
                        $sid = $arr['sid'];
                ?>
                <tr>
                    <td class="project-status">
                        <span class="label label-warning"><?php echo $arr['category']; ?></span>
                        <br/>
                        <small><i class="fa fa-clock-o"></i> <?php echo get_tanggal($arr['tanggal']);?></small>
                    </td>
                    <td class="project-title">
                        <a href="#"><?php echo $arr['judul']; ?></a>
                        <br/>
                        <small><?php echo trim_text(htmlspecialchars_decode($arr['isi']), 170);?></small>
                    </td>
                    <td class="project-actions">
                        <a class="btn btn-white btn-sm" href="?p=create-artikel&id=<?php echo $sid;?>"><i class="fa fa-pencil-square-o"></i> Edit</a>
                        <a class="btn btn-white btn-sm btnDelete" onclick="deleteAction('<?php echo $sid;?>')"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>