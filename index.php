<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="bootstrap.min.css" rel="stylesheet" />
    <script src="bootstrap.min.js"></script>
    <script src="jquery.js"></script>

    <title> Data Mahasiswa </title>

</head>
<body>


    <nav class="navbar  sticky-top">
        <div class="container-fluid">
    
        
        <form action="databaru.php" class="px-3 my-auto">
            <button type="submit" class="btn" >Tambah</button>
        </form>

        </div>    
      </nav>

      <div class="row pt-5">
    <div class="col-10 mx-auto">
        <table class="table shadow">
            <thead class="thead-blue">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody><tr><th scope="row">1</th><td class="col-3">J3C218168</td>
                <td class="col-7">Maria</td>
                    <form method="POST" action="profile.php" id="profil1">
                        <input type="hidden" name="id" value="1">
                </form>

                <td>
                    <button form="profile1" class="btn btn-primary" name="profile">Profile</button>
                </td>

                    </tr>
                    <tr>
                        <th scope="row">2</th><td class="col-3">J3C218168</td><td class="col-7">Maria Veronica Sihotang</td>
                        <form method="POST" action="profile2.php" id="profilkedua">
                        <input type="hidden" name="id" value="2"></form>
                        <td><button form="profilkedua" class="btn btn-primary" name="profile">Profile</button></td>
                    </tr>
                    
                   </tbody>
                </table>
            </div>
        </div>
            

       

    
    

</body>
