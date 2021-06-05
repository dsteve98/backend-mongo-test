
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Mobil Data</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Edit A Form</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{action('App\Http\Controllers\MobilController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Carcompany">Tahun Keluaran</label>
            <input type="text" class="form-control" name="tahun_keluaran" value="{{$mobil->tahun_keluaran}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Model">Warna:</label>
            <input type="text" class="form-control" name="warna" value="{{$mobil->warna}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Harga:</label>
            <input type="text" class="form-control" name="harga" value="{{$mobil->harga}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Terjual:</label>
            <input type="text" class="form-control" name="terjual" value="{{$mobil->terjual}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Stok:</label>
            <input type="text" class="form-control" name="stok" value="{{$mobil->stok}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Jenis Kendaraan:</label>
            <input type="text" class="form-control" name="jenis_kendaraan" value="{{$mobil->jenis_kendaraan}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Mesin:</label>
            <input type="text" class="form-control" name="mesin" value="{{$mobil->mesin}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Kapasitas Penumpang:</label>
            <input type="text" class="form-control" name="kapasitas_penumpang" value="{{$mobil->kapasitas_penumpang}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Tipe:</label>
            <input type="text" class="form-control" name="tipe" value="{{$mobil->tipe}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>