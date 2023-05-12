<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add license</h4>
                    </div>
                    <div style="border-top:1px solid #ddd;margin-top:12px;"></div>
                    <div class="content">
                        <form action="proses.php?aksi=tambah" method="post">
                            <div class="form-group">
                                <label for="licensecode">License Code</label>
                                <input type="text" class="form-control" required name="licensecode" id="licensecode" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="substype">Subscription Type</label>

                                <select class="form-control" name="substype">
                                    <option value="lite">Lite</option>
                                    <option value="pro">Pro</option>
                                    <option value="organization">Organization</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="organization">Organization</label>
                                <input type="text" class="form-control" required name="organization" id="organization" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="expiry">Expiry Date</label>
                                <input type="date" class="form-control" required name="expiry" id="expiry" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="licensedevices">Licensed Devices</label>
                                <input type="text" class="form-control" required name="licensedevices" id="licensedevices" placeholder="">
                            </div>
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