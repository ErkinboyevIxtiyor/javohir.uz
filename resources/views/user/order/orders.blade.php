@extends('layouts.user')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Bosh sahifa</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Asosiy</a></li>
                            <li class="breadcrumb-item active">Bosh sahifa</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col -->
                    <div class="col-md-12">
                        <form action="{{route('user.orders.post')}}" method="POST">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Buyurtma berish</h4>
                                </div>
                                <div class="card-body">
                                    <p>Barcha majburiy maydonlar <span class="text-danger">*</span> belgi bilan belgilangan!</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="user">Buyurtmachi <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="user" id="user"
                                                    value="{{ Auth::user()->name }}" disabled required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="type">Buyurtma turi <span class="text-danger">*</span></label>
                                                <select name="type" id="type" class="form-control select-custem">
                                                    <option value="">Buyurtma turini tanlang</option>
                                                    @foreach ($category as $item)
                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="subscribe">Buyurtma izohi <span class="text-danger">*</span></label>
                                                <textarea name="subscribe" class="form-control" id="subscribe" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Saqlash</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.col -->

                    <div class="col-md-12">
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
                                            @foreach ($orders as $item)
                                        <tr>
                                            <th>{{ $loop->index + 1 }}</th>
                                            <td>{{ $item->user_name }}</td>
                                            <td>{{ $item->category_name }}</td>
                                            <td>
                                                @if ($item->status == 1)
                                                    <span class="badge badge-success">Bajarilgan</span>
                                                @else
                                                    <span class="badge badge-warning">Yangi</span>
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
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
