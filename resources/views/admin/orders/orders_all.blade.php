@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Buyurtmalar</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Asosiy</a></li>
                            <li class="breadcrumb-item active">Buyurtmalar</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Buyurtmalar ro‘yxati</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Buyurtmachi</th>
                                        <th>Buyurtma turi</th>
                                        <th>Buyurtma holati</th>
                                        <th>Yaratilgan sana</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                        <tr>
                                            <th>{{ $loop->index + 1 }}</th>
                                            <td>
                                                {{ $item->user_name }} <br>
                                                {{ $item->user_phone }}
                                            </td>
                                            <td>{{ $item->category_name }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <span class="badge badge-success">Yangi buyurtma</span>
                                                @else
                                                    <span class="badge badge-warning">Bajarilgan buyurtma</span>
                                                @endif
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
