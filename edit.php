<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_guru WHERE nuptk = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA GURU
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
              <div class="form-group">
                  <label>NUPTK</label>
                  <input type="text" name="nuptk" placeholder="Masukkan NUPTK " class="form-control" value="<?php echo $row['nuptk'] ?> " readonly>
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Guru" class="form-control" value="<?php echo $row['nama'] ?>">
                </div>

                <div class="form-group">
                  <label>Golongan</label>
                  <select name="golongan" class="form-select" aria-label="Default select example" value="<?php echo $row['golongan'] ?>">
                    <option value="III/A" <?php echo ($row['golongan'] == 'III/A') ? "selected":"" ?>>III/A</option>
                    <option value="III/B" <?php echo ($row['golongan'] == 'III/B') ? "selected":"" ?>>III/B</option>
                    <option value="III/C" <?php echo ($row['golongan'] == 'III/C') ? "selected":"" ?>>III/C</option>
                    <option value="III/D" <?php echo ($row['golongan'] == 'III/D') ? "selected":"" ?>>III/D</option>
                    <option value="IV/A" <?php echo ($row['golongan'] == 'IV/A') ? "selected":"" ?>>IV/A</option>
                </select>
                </div>
                

                <div class="form-check">
                    <input class="form-check-input" name="jenis_kelamin" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="L" <?php echo ($row['jenis_kelamin'] == 'L') ? "checked":"" ?>>
                    <label class="form-check-label" name="jenis_kelamin" for="flexRadioDefault1" >
                     Laki-Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="jenis_kelamin" type="radio" name="flexRadioDefault" id="flexRadioDefault2"  value="P" <?php echo ($row['jenis_kelamin'] == 'P') ? "checked":"" ?>>
                    <label class="form-check-label" name="jenis_kelamin" for="flexRadioDefault2">
                    Perempuan
                    </label>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
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