
<?php
    $id =  (int)$_GET["id"];
    $sql = "SELECT * FROM hak_akses WHERE id = ?";
    $row = $connectdb->prepare($sql);
    $row->execute(array($id));
    $edit = $row->fetch(PDO::FETCH_OBJ);
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <?php if(!empty(flashdata())){ echo flashdata(); }?>
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Hak Akses</h4>
                    </div>
                    <div style="border-top:1px solid #ddd;margin-top:12px;"></div>
                    <div class="content">
                        <form action="proses.php?aksi=update" method="post">
                            
                <div class="form-group">
                    <label for="">Hak akses</label>
                    <input type="text" class="form-control" value="<?= $edit->hak_akses;?>" name="hak_akses" id="hak_akses" placeholder=""/>
                </div>
            
                            <input type="hidden" name="id" value="<?= $id;?>">
                            <button type="submit" class="btn btn-primary btn-md">Save</button>
                            <a href="index.php" class="btn btn-danger btn-md">Back</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>