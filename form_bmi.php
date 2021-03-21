<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Form BMI Pasien</title>
</head>

<body>
    <section class="form__nilai">
        <div class="card shadow rounded">
            <div class="card-header bg-success">
                <h3>Form Isian Indeks Massa Tubuh (BMI)</h3>
            </div>
            <div class="card-body p-5">
                <form action="form_bmi.php" method="POST">
                    <div class="form-group">
                        <label><strong> Nama</strong></label>
                        <input type="text" class="form-control" placeholder="Masukan Nama Lengkap" name="name" required>
                    </div>
                    <div class="form-group">
                        <label><strong> Berat Badan </strong></label>
                        <div class="input-group">
                            <input type="text" class="form-control col-md-4" placeholder="Masukan Berat Badan"
                                name="weight" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">kg</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><strong> Tinggi Badan </strong></label>
                        <div class="input-group">
                            <input type="text" class="form-control col-md-4" placeholder="Masukan Tinggi Badan"
                                name="height" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">cm</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><strong> Umur </strong></label>
                        <div class="input-group">
                            <input type="text" class="form-control col-md-4" placeholder="Masukan Tinggi Badan"
                                name="age" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">Tahun</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><strong> Jenis Kelamin </strong></label>
                        <div class="input-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="laki-laki">
                                <label class="form-check-label">Laki-Laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="perempuan">
                                <label class="form-check-label">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-info mt-5 col-md-12" value="Simpan" name="proses" />
                </form>
            </div>
            <div class="card output__card w-75">
                <div class="card-body">
                    <?php 
                    require_once "class_bmipasien.php";
                    if(isset($_POST['proses'])) {
                        $name = $_POST['name'];
                        $weight = $_POST['weight'];
                        $height = $_POST['height'];
                        $age = $_POST['age'];
                            $gender = $_POST['gender'];
                            $pasien1 = new BMIPasien($name, $weight, $height, $age, $gender);
                            
                            
                            echo 'Nama : ' . $pasien1->name . '</br>';
                            echo 'Berat Badan : ' . $pasien1->weight . '</br>';
                            echo 'Tinggi Badan : ' . $pasien1->height . '</br>' ;
                            echo 'Umur : ' . $pasien1->age. '</br>';
                            echo 'Gender : ' . $pasien1->gender . '</br>';
                            echo 'BMI : ' . round($pasien1->hasilBMI()) . '</br>';
                            echo 'Status : ' . $pasien1->statusBMI() . '</br>';
                        }
                        ?>
                </div>
            </div>
            <hr>
            <span>copyright by abdulloh fahmi</span>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>