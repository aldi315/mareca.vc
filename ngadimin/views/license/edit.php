<?php
$id =  (int)$_GET["id"];
$sql = "SELECT * FROM license WHERE id = ?";
$row = $connectdb->prepare($sql);
$row->execute(array($id));
$edit = $row->fetch(PDO::FETCH_OBJ);
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <?php if (!empty(flashdata())) {
                    echo flashdata();
                } ?>
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit License</h4>
                    </div>
                    <div style="border-top:1px solid #ddd;margin-top:12px;"></div>
                    <div class="content">
                        <form action="proses.php?aksi=update" method="post">

                            <div class="form-group">
                                <label for="">Licensecode</label>
                                <input type="text" class="form-control" value="<?= $edit->licensecode; ?>" name="licensecode" id="licensecode" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label for="substype">Subscription Type</label>

                                <select class="form-control" name="substype">
                                    <option <?= ($edit->substype == 'Lite') ? "selected": ''; ?> value="lite">Lite</option>
                                    <option <?= ($edit->substype == 'Pro') ? "selected": ''; ?> value="pro">Pro</option>
                                    <option <?= ($edit->substype == 'Organization') ? "selected": ''; ?> value="organization">Organization</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Organization</label>
                                <input type="text" class="form-control" value="<?= $edit->organization; ?>" name="organization" id="organization" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label for="">Expiry</label>
                                <input type="date" class="form-control" value="<?= $edit->expiry; ?>" name="expiry" id="expiry" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label for="">Licensedevices</label>
                                <input type="text" class="form-control" value="<?= $edit->licensedevices; ?>" name="licensedevices" id="licensedevices" placeholder="" />
                            </div>

                            <div class="form-group">
                                <label for="">Created at</label>
                                <input type="text" class="form-control" value="<?= $edit->created_at; ?>" name="created_at" id="created_at" placeholder="" />
                            </div>

                            <input type="hidden" name="id" value="<?= $id; ?>">
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