
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Edit Motor Data</title>
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
      <form method="post" action="{{action('App\Http\Controllers\MotorController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Carcompany">Tahun Keluaran</label>
            <input type="text" class="form-control" name="tahun_keluaran" value="{{$motor->tahun_keluaran}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Model">Warna:</label>
            <input type="text" class="form-control" name="warna" value="{{$motor->warna}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Harga:</label>
            <input type="text" class="form-control" name="harga" value="{{$motor->harga}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Terjual:</label>
            <input type="text" class="form-control" name="terjual" value="{{$motor->terjual}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Stok:</label>
            <input type="text" class="form-control" name="stok" value="{{$motor->stok}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Jenis Kendaraan:</label>
            <input type="text" class="form-control" name="jenis_kendaraan" value="{{$motor->jenis_kendaraan}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Mesin:</label>
            <input type="text" class="form-control" name="mesin" value="{{$motor->mesin}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Tipe Suspensi:</label>
            <input type="text" class="form-control" name="tipe_suspensi" value="{{$motor->tipe_suspensi}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Price">Tipe Transmisi:</label>
            <input type="text" class="form-control" name="tipe_transmisi" value="{{$motor->tipe_transmisi}}">
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