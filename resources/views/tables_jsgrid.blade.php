@extends ("layouts.base")

@section('extra-css')
    @parent
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- jsGrid -->
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/jsgrid/jsgrid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin-lte/plugins/jsgrid/jsgrid-theme.min.css') }}">
@endsection

@push('extra-js')
    <!-- PAGE SCRIPTS -->
    {{-- END PAGE LEVEL SCRIPTS --}}
    <!-- jsGrid -->
    <script src="{{ asset('admin-lte/plugins/jsgrid/demos/db.js') }}"></script>
    <script src="{{ asset('admin-lte/plugins/jsgrid/jsgrid.min.js') }}"></script>

    <!-- page script -->
    <script>
        $(function () {
            $("#jsGrid1").jsGrid({
                height: "100%",
                width: "100%",
        
                sorting: true,
                paging: true,
        
                data: db.clients,
        
                fields: [
                    { name: "Name", type: "text", width: 150 },
                    { name: "Age", type: "number", width: 50 },
                    { name: "Address", type: "text", width: 200 },
                    { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
                    { name: "Married", type: "checkbox", title: "Is Married" }
                ]
            });
        });
        </script>
@endpush


@section('main-content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>jsGrid</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">jsGrid</li>
                </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
            <div class="card-header">
                <h3 class="card-title">jsGrid</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div id="jsGrid1"></div>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection