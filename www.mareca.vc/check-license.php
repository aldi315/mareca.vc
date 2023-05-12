<?php
include 'ngadimin/setting.php';


$license = $_POST['license'];
$sql = "SELECT * FROM license WHERE licensecode = $license";
$row = $connectdb->prepare($sql);
$row->execute();
$hasil = $row->fetchAll(PDO::FETCH_OBJ);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Status</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <div class="container">
        <header>
            <h2><a href="index.php"><i class="ion-plane"></i> Mareca Signage System </a></h2>

        </header>
        <div class="cover">
            <h1>Subscription Status</h1>
            <form class="flex-form" action="?submit" method="post">
                <label for="from">
                    <i class="ion-location"></i>
                </label>
                <input type="search" name="license" placeholder="Please enter your license code">
                <input type="submit" value="Submit">
            </form>
            <?php if ($_GET == !null) { ?>
           
            <div class="card">
                <?php if ($hasil == !null) : ?>

                    <table>
                        <thead>
                            <tr>
                                <th>Subscription Status</th>
                                <th>
                                    <?php if (date($hasil[0]->expiry) > date('Y-m-d')) { ?>
                                        <span style="color : green">Active</span>
                                    <?php } else { ?>
                                        <span style="color : red">Expired</span>
                                    <?php } ?>

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>License Code</td>
                                <th><?= $hasil[0]->licensecode ?></th>
                            </tr>
                            <tr>
                                <td>Subscription Type</td>
                                <th><?= $hasil[0]->substype ?></th>
                            </tr>
                            <tr>
                                <td>Registered to</td>
                                <th><?= $hasil[0]->organization ?></th>
                            </tr>
                            <tr>
                                <td>Expiry Date</td>
                                <th><?= $hasil[0]->expiry ?></th>
                            </tr>
                            <tr>
                                <td>License Devices</td>
                                <th><?= $hasil[0]->licensedevices ?></th>
                            </tr>
                        </tbody>
                    </table>
                <?php else : ?>
                    <h3>License could not be found</h3>
                <?php endif; ?>
            </div>
            <?php } ?>
        </div>


    </div>
</body>

</html>