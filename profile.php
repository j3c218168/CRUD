<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap.min.js"></script>
    <script src="jquery.js"></script>
  
    <script>
        function goBack() {
        window.history.back();
        }
    </script>
    <title> Profile </title>

</head>
<body class="bg-light">


    <nav class="sticky-top">
        <div class="container-fluid">
            
            <div class="btn-group">
                <a>
                    <button onclick="goBack()" class="btn">
                        Kembali
                    </button>
                </a>



                <button type="submit" class="btn btn-primary" name="edit" form="data">
                    Edit
                </button>
            </div>
        
        </div>    
      </nav>


    <div class="container-fluid ">
        <div class="container w-75 bg-white my-5 shadow rounded ">
            <div class="row">
                <div class="col">
                    <h2 class="pt-3 pb-1 border-bottom">Data Mahasiswa</h2>
                </div>
            </div>

            <form method="POST" action="edit.php" id="data">
                <input type="hidden" value="1" name="id">
            </form>

            <form method="POST" action=" " id="hapus">
                <input type="hidden" value="1" name="id">
            </form>


            
            <form method="POST" enctype="multipart/form-data" id="mhs">
            
                <div class="row">
                    <div class="col-8" style="overflow-y: scroll; height: 60vh;">
                        <div class="form-group row">
                            <label for="form-nim" class="pl-3 col-form-label font-weight-bold">NIM</label>
                            <div class="col">
                                <input type="text" name="nim" class="form-control" id="form-nim" value="J3C218168" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="form-nama" class="font-weight-bold">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" id="form-nama" value="Maria Veronica Sihotang" readonly>
                        </div>

                        <div class="form-group">
                            <label for="form-sex" class="font-weight-bold">Jenis Kelamin</label>
                            <input type="text" name="sex" class="form-control" id="form-sex" value="Perempuan" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="form-agama" class="font-weight-bold">Agama</label>
                            <input type="text" name="agama" class="form-control" id="form-agama" value="Katolik" readonly>
                        </div>
                        

                        <div class="form-group">
                            <label for="form-hobi" class="font-weight-bold">Hobi</label>
                            <input type="text" name="hobi" class="form-control" id="form-nama" value="Membaca" readonly>
                            <input type="text" name="Menulis" readonly>
                            <input type="text" name="Menggambar" readonly>
                            <input class="form-control" id="form-nama" value="Menonton Anime" readonly>
                        
                        </div>
                        <tr>
                        <tr>
                        <tr>

                    </div>
 
                    <div class="col">
                        <div class="row m-auto">
                            <div class="col m-auto text-center">
                                <img class="m-auto bg-dark" src="J3C218168/images.jpeg" style="height: 100%; width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>