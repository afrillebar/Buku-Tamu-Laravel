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
                            <h3>Data Tamu</h3>
                            <div class="flash-message">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))
                                        <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                    @endif
                                @endforeach
                            </div>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Alamat</th>
                                        <th>No.HP</th>
                                        <th>Pesan</th>
                                        <th>Waktu</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!$messages->isEmpty())
                                        @php $count=1; @endphp
                                        @foreach ($messages as $message)
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->jabatan }}</td>
                                            <td>{{ $message->alamat }}</td>
                                            <td>{{ $message->nohp }}</td>
                                            <td>{{ $message->message }}</td>
                                            <td>{{ $message->created_at }}</td>
                                            <td>
                                                <a href="{{ url('/guestbook/'.$message->id.'/edit') }}">Edit</a> |                                            
                                                <a href="{{ url('/guestbook/'.$message->id.'/delete') }}">Delete</a>
                                            </td>
                                        </tr>
                                        @php $count++; @endphp
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="4">No Message</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
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