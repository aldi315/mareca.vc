
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php if(!empty(flashdata())){ echo flashdata(); }?>
                <a href="tambah.php" class="btn btn-primary" role="button">Add License</a>
                <br><br>
                <div class="card">
                    <div class="header">
                        <h4 class="title">Daftar License</h4>
                    </div>
                    <div style="border-top:1px solid #ddd;margin-top:12px;"></div>
                    <div class="content">
                        
        <div class="table-responsive">
            <table class="table table-striped" id="example1">
                <thead>
                    <tr>
                        <th>No</th>
            
                <th>Licensecode</th>
                <th>Substype</th>
                <th>Organization</th>
                <th>Expiry</th>
                <th>Licensedevices</th>
                <th>Created at</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no =1;
                $sql = "SELECT * FROM license ORDER BY id DESC";
                $row = $connectdb->prepare($sql);
                $row->execute();
                $hasil = $row->fetchAll(PDO::FETCH_OBJ);
                foreach($hasil as $r){
            ?>
            <tr>
                <td><?= $no;?></td>
          
            <td><?=$r->licensecode;?></td>      
            <td><?=$r->substype;?></td>      
            <td><?=$r->organization;?></td>      
            <td><?=$r->expiry;?></td>      
            <td><?=$r->licensedevices;?></td>      
            <td><?=$r->created_at;?></td>
                <td>
                    <a href="<?= "edit.php?id=".$r->id;?>" 
                        class="btn btn-success btn-sm" title="Edit">
                        <i class="fa fa-edit"></i> 
                    </a> 
                    <a href="<?= "proses.php?aksi=delete&id=".$r->id;?>" 
                        class="btn btn-danger btn-sm" 
                        onclick="javascript:return confirm(`Data ingin dihapus ?`);" title="Delete">
                        <i class="fa fa-times"></i> 
                    </a>
                </td>
            </tr>
            <?php $no++; }?>
        </tbody>
    </table>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>