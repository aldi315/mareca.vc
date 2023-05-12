
<?php
if (!empty(getGet("aksi") == "tambah")) {

    $data[] =  getPost("licensecode", TRUE);
    $data[] =  getPost("substype", TRUE);
    $data[] =  getPost("organization", TRUE);
    $data[] =  getPost("expiry", TRUE);
    $data[] =  getPost("licensedevices", TRUE);
    $data[] =  date('Y-m-d H:i:s');

    $sql = "INSERT INTO license (licensecode,substype,organization,expiry,licensedevices,created_at ) VALUES (?,?,?,?,?,?)";
    $row = $connectdb->prepare($sql);
    $result = $row->execute($data);
    if ($result) {
        set_flashdata("Berhasil", "tambah telah sukses !", "success");
        redirect("index.php");
    }else{
        set_flashdata("Gagal", "Error description: " . $result -> error, "danger");
        redirect("index.php");
    }
}

if (!empty(getGet("aksi") == "update")) {
    $id =  (int)$_POST["id"];
    $data[] =  getPost("licensecode", TRUE);
    $data[] =  getPost("substype", TRUE);
    $data[] =  getPost("organization", TRUE);
    $data[] =  getPost("expiry", TRUE);
    $data[] =  getPost("licensedevices", TRUE);
    $data[] = $id;
    $sql = "UPDATE license SET licensecode = ?, substype = ?, organization = ?, expiry = ?, licensedevices = ? WHERE id = ? ";

    $row = $connectdb->prepare($sql);
    $row->execute($data);

    set_flashdata("Berhasil", "edit telah sukses !", "success");
    redirect("edit.php?id=" . $id);
}

if (!empty(getGet("aksi") == "delete")) {

    $id =  (int)$_GET["id"]; // should be integer (id)
    $sql = "SELECT * FROM license WHERE id = ?";
    $row = $connectdb->prepare($sql);
    $row->execute(array($id));
    $cek = $row->rowCount();
    if ($cek > 0) {
        $sql_delete = "DELETE FROM license WHERE id = ?";
        $row_delete = $connectdb->prepare($sql_delete);
        $row_delete->execute(array($id));
        set_flashdata("Berhasil", "delete telah sukses !", "success");
        redirect("index.php");
    } else {
        set_flashdata("Gagal", "delete telah gagal !", "danger");
        redirect("index.php");
    }
}

