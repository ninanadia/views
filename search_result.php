<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="Description" content="">
    <meta name="Author" content="">
    <link rel="icon" href="assets/img/favicon.ico">

    <title>Surat Tugas Dosen</title>

    <!-- Bootstrap core CSS -->


    <!-- FontAwsome icons -->
    <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <header class="site-header" role="banner">
        <div class="navbar-wrapper">
            <div class="navbar navbar-inverse" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="<?= base_url('main/cariDosen') ?>"><img src="assets/img/logo.png" alt="Cetak Surat"></a>
                        <a class="navbar-brand" href="<?= base_url('main/inputDosen') ?>"><img src="assets/img/logo.png" alt="Input Dosen"></a>
                        <a class="navbar-brand" href="<?= base_url('main/inputMK') ?>"><img src="assets/img/logo.png" alt="Input Mata Kuliah"></a>

                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= base_url('main/mainMenu') ?>">Home</a></li>
                            <li><a href="<?= base_url('DataDosen') ?>">Data Dosen</a></li>
                            <li><a href="<?= base_url('DataMK') ?>">Data Mata Kuliah</a></li>
                            <li><a href="<?= base_url('login/logout') ?>">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">

        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama Dosen</th>
                    <th scope="col">Kode Dosen</th>
                    <th scope="col">NIDN</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $no = 1;
                foreach ($DATA_DOSEN as $u) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u->NIP ?></td>
                        <td><?php echo $u->NAMA_DOSEN ?></td>
                        <td><?php echo $u->KODE_DOSEN ?></td>
                        <td><?php echo $u->NIDN ?></td>
                        <td>
                            <a type="button" class="btn btn-primary text-white" href="<?= base_url('manageCetak/prosesCetak/') . $u->ID_DOSEN ?>">Proses</a>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>

</html>