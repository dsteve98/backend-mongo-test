<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Tahun Keluaran</th>
        <th>Warna</th>
        <th>Harga</th>
        <th>Terjual</th>
        <th>Stok</th>
        <th>Jenis Kendaraan</th>
        <th>Mesin</th>
        <th>Kapasitas Penumpang</th>
        <th>Tipe</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($mobil as $mobiliter)
      <tr>
        <td>{{$mobiliter->tahun_keluaran}}</td>
        <td>{{$mobiliter->warna}}</td>
        <td>{{$mobiliter->harga}}</td>
        <td>{{$mobiliter->terjual}}</td>
        <td>{{$mobiliter->stok}}</td>
        <td>{{$mobiliter->jenis_kendaraan}}</td>
        <td>{{$mobiliter->mesin}}</td>
        <td>{{$mobiliter->kapasitas_penumpang}}</td>
        <td>{{$mobiliter->tipe}}</td>
        <td><a href="{{action('App\Http\Controllers\MobilController@edit', $mobiliter->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('App\Http\Controllers\MobilController@destroy', $mobiliter->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>