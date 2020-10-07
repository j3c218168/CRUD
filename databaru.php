<html>
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap.min.js"></script>
    <script src="jquery.js"></script>

    <title> Form Data Baru </title>

</head>

<body class="bg-light">

    <nav class="navbar  sticky-top">
        <div class="container-fluid">
     
            
            <div class="btn-group">
                <a href="index.php">
                    <button class="btn">
                        Kembali
                    </button>
                </a>
                <label for="simpan">
                    <button class="btn btn-primary" name="save" form="data">
                        Simpan
                    </button>
                </label>
            </div>
        
        </div>    
      </nav>


    <div class="container-fluid ">
        <div class="container w-75 bg-white my-5 shadow rounded ">
            <div class="row">
                <div class="col">
                    <h2 class="pt-3 pb-1 border-bottom">Form Mahasiswa Baru</h2>
                </div>
            </div>

            <form method="POST" enctype="multipart/form-data" action="save.php" id="data">
                <div class="row">
                    <div class="col-8" style="overflow-y: scroll; height: 60vh;">
                        <div class="form-group row">
                            <label for="form-nim" class="pl-3 col-form-label font-weight-bold">NIM</label>
                            <div class="col">
                                <input type="text" name="nim" class="form-control" id="form-nim">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="form-nama" class="font-weight-bold">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="form-nama" >
                        </div>

                        <div class="form-group" id="form-sex">
                            <label for="form-sex" class="font-weight-bold">Jenis Kelamin</label>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="L" name="sex" value="L">
                                <label class="custom-control-label" for="L">Laki - Laki</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="P" name="sex" value="P">
                                <label class="custom-control-label" for="P">Perempuan</label>
                            </div>
                        </div>
                        
                        <div class="form-group" id="form-agama">
                            <label for="form-agama" class="font-weight-bold">Agama</label>
                            <select class="form-control" name="agama" id="form-agama" >
                                <option>Pilih</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budhha">Buddha</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                        </div>
                        

                        <div class="form-group" id="form-hobi">
                            <label for="form-hobi" class="font-weight-bold">Hobi</label>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="hobi[]" id="baca" value="Membaca">
                                <label class="custom-control-label" for="baca">Membaca</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="hobi[]" id="tulis" value="Menulis">
                                <label class="custom-control-label" for="tulis">Menulis</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="hobi[]" id="gambar" value="Menggambar">
                                <label class="custom-control-label" for="gambar">Menggambar</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="hobi[]" id="ngegame" value="Bermain Game">
                                <label class="custom-control-label" for="ngegame">Bermain Game</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="hobi[]" id="masak" value="Memasak">
                                <label class="custom-control-label" for="masak">Memasak</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="hobi[]" id="tari" value="Menari">
                                <label class="custom-control-label" for="tari">Menari</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="hobi[]" id="anime" value="Menonton Anime">
                                <label class="custom-control-label" for="anime">Menonton Anime</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="hobi[]" id="drakor" value="Menonton Drakor">
                                <label class="custom-control-label" for="drakor">Menonton Drakor</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="hobi[]" id="bikinkonten" value="Membuat Konten Media Sosial (Youtube/Instagram/Tiktok/Facebook)">
                                <label class="custom-control-label" for="bikinkonten">Membuat Konten Media Sosial (Youtube/Instagram/Tiktok/Facebook)</label>
                            </div>
                            <tr>
                            <tr>

                            
                        </div>
                    </div>

                    <div class="col">
                        <label for="upload" class="font-weight-bold">Upload Foto</label>
                        <div class="input-group mb-3" id="upload">
                            <div class="form-group">
                                <input type="file" name="photo" accept="image/*" class="form-control-file" id="pic">
                            </div>
                        </div>
                        <p>
                            Ektensi file : (.jpeg), (.jpg), (.png) </br>
                            
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>