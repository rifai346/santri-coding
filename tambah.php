<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data Guru</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA GURU
            </div>
            <div class="card-body">
              <form action="simpan.php" method="POST">
                
                <div class="form-group">
                  <label>NUPTK</label>
                  <input type="text" name="nuptk" placeholder="Masukkan NUPTK " class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Guru" class="form-control">
                </div>

                <div class="form-group">
                  <label>Golongan</label>
                  <select name="golongan" class="form-select" aria-label="Default select example">
                    <option selected name="golongan">GOLONGAN</option>
                    <option value="III/A">III/A</option>
                    <option value="III/B">III/B</option>
                    <option value="III/C">III/C</option>
                    <option value="III/D">III/D</option>
                    <option value="IV/A">IV/A</option>
                </select>
                </div>
                

                <div class="form-check">
                    <input class="form-check-input" name="jenis_kelamin" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="L">
                    <label class="form-check-label" name="jenis_kelamin" for="flexRadioDefault1" >
                     Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="jenis_kelamin" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="P"checked>
                    <label class="form-check-label" name="jenis_kelamin" for="flexRadioDefault2">
                    perempuan
                    </label>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>