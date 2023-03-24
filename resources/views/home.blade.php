@extends('app')

@section('content')
@push('custom_css')
        <style>
            h1 {
                font-weight: bold;
            }
        </style>
@endpush
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="card">
        
            
            <div class="card-body">
                Selamat Datang!
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Abdul Basith Bahi &nbsp;&nbsp;|&nbsp;&nbsp; 2141720177
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection
@push('custom_js')
<script>
    alert('Selamat Datang');
</script>
@endpush