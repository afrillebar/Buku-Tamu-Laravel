<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BUKU TAMU</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
        
    </head>
    <body>

        <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                 <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/guestbook') }}">Data Tamu</a></li>
                        <li><a href="{{ url('/guestbook/create') }}">Input Data Tamu</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h2><strong>BUKU TAMU</strong></h2>
                        </div>

                        <div class="panel-body">
                            <h3>Edit</h3>
                            <form id="contactForm" action="{{ url('/guestbook/'.$message->id) }}" method="POST">
                                <input name="_method" type="hidden" value="PUT">

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger hide-box mt-4" id="contactError">
                                        <p><strong>Error!</strong> Problem updating message.</p>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                {{ csrf_field() }}
                                
                                <div class="form-group">
                                    <label>Nama *</label>
                                    <input type="text" value="{{ $message->name }}" maxlength="100" class="form-control" name="name" id="name" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <label>Jabatan *</label>
                                    <input type="text" value="{{ $message->jabatan }}" maxlength="100" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan">
                                </div>

                                <div class="form-group">
                                    <label>Alamat *</label>
                                    <textarea maxlength="500" rows="4" class="form-control" name="alamat" id="alamat" placeholder="Alamat">{{ $message->message }}</textarea>                 
                                </div>

                                <div class="form-group">
                                    <label>No. HP *</label>
                                    <input type="text" value="{{ $message->nohp }}" maxlength="100" class="form-control" name="nohp" id="nohp" placeholder="Nomer HP">
                                </div>

                                <div class="form-group">
                                    <label>Pesan *</label>
                                    <textarea maxlength="5000" rows="8" class="form-control" name="message" id="message" placeholder="Message">{{ $message->message }}</textarea>                 
                                </div>

                                <input type="submit" value="Update Message" class="btn btn-primary">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>