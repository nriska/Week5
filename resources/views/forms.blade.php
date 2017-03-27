<!DOCTYPE html>
<html>
    <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
    <title>forms</title>
    
    </head>
    <body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form action="" method="post" class="form-horizontal">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" @if(isset($nama)) value="{{$nama}}" @endif>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" @if(isset($email)) value="{{$email}}" @endif>
                </div>
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <br>
                        <input type="radio" name="gender" value="pria" @if(isset($gender) && $gender == "pria") checked @endif>Pria<br>
                        <input type="radio" name="gender" value="perempuan" @if(isset($gender) && $gender == "perempuan") checked @endif>Perempuan<br>
                        <input type="radio" name="gender" value="other" @if(isset($gender) && $gender == "other") checked @endif>Other<br>
                    
                </div>
                <div class="form-group">
                    <label for="hobi">Hobi</label>
                    <br>
                        <input type="checkbox" name="hobi[]" value="Swimming" @if(isset($hobi) && in_array ('Swimming', $hobi)) checked @endif)>Swimming<br>
                        <input type="checkbox" name="hobi[]" value="Drawing" @if(isset($hobi) && in_array ('Drawing', $hobi)) checked @endif)>Drawing<br>
                        <input type="checkbox" name="hobi[]" value="Driving" @if(isset($hobi) && in_array ('Driving', $hobi)) checked @endif)>Driving<br>
                    
                </div>
                <br>
                <button type="submit" class="btn btn-warning">Submit</button>
        </form>
           {{--  Nama<input type="text" name="nama">
            Email<input type="email" nama="email">
            <button type="submit">Submit</button>
         --}}
        <br>
        <br>
        @if(isset($nama))
        Halo, {{ $nama }}
        @endif
        <br>

        @if(isset($email))
        Email kamu, {{ $email }}
        @endif
        <br>

        @if(isset($gender))
        Kamu seorang {{ $gender }} 
        @endif
        <br>

        @if(isset($hobi))
        Hobimu adalah 
        <br>
            @foreach($hobi as $hob)
                ->{{ ucwords($hob) }}
                <br>
            @endforeach
        @endif
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>