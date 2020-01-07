<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="REGISTER">
    <meta name="author" content="ANANDARAFI">
    <link rel="icon" type="image/png" href="img/logo.png">

    <!-- Title Page-->
    <title>REGISTER</title>

    <!-- Icons font CSS-->
    <link href="{{url('assetsss/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('assetsss/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{url('assetsss/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{url('assetsss/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{url('assetsss/css/main.css')}}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">REGISTER</h2>
                    <form method="POST" action="{{ url('/login/store') }} " enctype="multimedia/form-data">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NO INDUK" name="no_induk">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAMA LENGKAP" name="nama">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="PASSWORD" name="password">
                        </div>
                        <div>
                            <label for="status">STATUS</label><br><br>
                            <select name="status" id="status" class="selectpicker" data-style="select-with-transition" title="Select Class" data-size="20">
                                @foreach ($status as $data)
                            <option value="{{ $data->status }}" >{{ $data->nama_status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">REGISTER</button>

                        </div>
                    </form>    
                    <div class="p-t-20">
                        <a href="/login"><button class="btn btn--radius btn--green">LOGIN</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{url('assetsss/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Vendor JS-->
    <script src="{{url('assetsss/vendor/select2/select2.min.js')}}"></script>
    <script src="{{url('assetsss/vendor/datepicker/moment.min.js')}}"></script>
    <script src="{{url('assetsss/vendor/datepicker/daterangepicker.js')}}"></script>

    <!-- Main JS-->
    <script src="{{url('assetsss/js/global.js')}}"></script>

</body>

</html>
<!-- end document-->
