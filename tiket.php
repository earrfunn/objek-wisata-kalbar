
<style>
    body {
  background: #EEE;
  font-family: sans-serif;
  font-size: 20px;
  margin: 3em;
  padding: 0;
}
#register {
  width: 20em;
  margin: auto;
}
#ticket {
  background: white;
  margin: 0 1em;
  padding: 1em;
  box-shadow: 0 0 5px rgba(0,0,0,.25);
}
#ticket h1 {
  text-align: center;
}
#ticket table {
  font-family: monospace;
  width: 100%;
  border-collapse: collapse;
}
#ticket td, #ticket th {
  padding: 5px;
}
#ticket th {
  text-align: left;
}
#ticket td, #ticket #total {
  text-align: right;
}
#ticket tfoot th {
  border-top: 1px solid black;
}

#entry {
  background: #333;
  padding: 12px;
  border-radius: 10px;
  box-shadow: 0 0 5px rgba(0,0,0,.25);
}
#entry input {
  width: 100%;
  padding: 10px;
  border: 1px solid black;
  text-align: right;
  font-family: sans-serif;
  font-size: 20px;
  box-shadow: inset 0 0 3px rgba(0,0,0,.5);
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#entry input:focus {
  outline: none;
  border-color: rgba(255,255,255,.75); 
}

</style>
    <?php
    include('koneksi.php');
    ?>
    <html>
    <head>
        <title>Objek Wisata Kalimantan Barat | Tiket Wisata</title>
        <link rel="shortcut icon" type="image/x-icon" href="http://2.bp.blogspot.com/-YXpuxVKzbUM/ULoCEZUDgZI/AAAAAAAAAHE/0yCq4qkNKmE/s1600/logo-prop-kalbar.png"/>
         <link href="Assets/css/style1.css" rel="stylesheet">
          <?php
            $sql = "SELECT * FROM beli WHERE id_beli IN (SELECT MAX(id_beli) FROM beli)";
            $query = mysqli_query($kon, $sql) or die("Database Anda Salah");
            $nomor = 0;
            //Melakukan perulangan u/menampilkan data
            while ($data = mysqli_fetch_array($query)) {
            if ($data['tmpwisata'] == 1) {
                $tmpwisata = "Tugu Bambu Pontianak";
            } else if ($data['tmpwisata'] == 2) {
                $tmpwisata = "Bukit Kelam";
            } else if ($data['tmpwisata'] == 3) {
                $tmpwisata = "Pulau Temajo";
            } else if ($data['tmpwisata'] == 4) {
              $tmpwisata = "Danau Sentarum";
            } else if ($data['tmpwisata'] == 5) {
              $tmpwisata = "Pantai Temajuk";
            } else if ($data['tmpwisata'] == 6) {
              $tmpwisata = "Bukit Babi";
          }
            ?>
            <tr><tr></tr>
            <br></br><br></br>
            <div id="register">
            <div id="ticket">
            <h1>Tiket Online</h1>
                  <table>
                    <tbody id="entries">
                    </tbody>
                    <tr>
                    <th>ID Tiket</th>
                    <td><?= $data['id_beli'] ?></td>
                      </tr>
                      <tr>
                      <th>Nama Lengkap</th>
                        <td><?= $data['nama'] ?></td>
                      </tr>
                      <tr>
                        <th>No Identitas</th>
                        <td><?= $data['noid'] ?></td>
                      </tr>
                      <tr>
                        <th>No HP</th>
                        <td><?= $data['nohp'] ?></td>
                      </tr>
                      <tr>
                        <th>Tempat Wisata</th>
                        <td><?= $tmpwisata ?></td>
                      </tr>
                      <tr>
                        <th>Tanggal Kunjungan</th>
                        <td><?= $data['tgl'] ?></td>
                        </tr>
                        <tr>
                          <th>Pengunjung Dewasa</th>
                          <td><?= $data['pdewasa'] ?></td>
                        </tr>
                        <tr>
                          <th>Pengunjung Anak (harga 50%)</th>
                          <td><?= $data['panak'] ?></td>
                        </tr>
                        <tr>
                          <th>Harga Tiket</th>
                          <td><?= $data['harga'] ?></td>
                        </tr><tr>
                      <tfoot>
                        <tr>
                        <th>Total Bayar</th>
                        <td>Rp. <?= $data['total'] ?></td>
                        </tr>
                      </body>
                  </table>
                </div>
            </form>
            </div>
      <?php } ?>
      
      <br>
      <center><input type=button onClick="location.href='kalbar.php'"value='Kembali Halaman Pesan tiket'class="btn btn-primary"></center>
      </br>
    </head>
    <script src="Assets/js/jquery.js" type="text/javascript"></script>
    <script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    </html>
    


