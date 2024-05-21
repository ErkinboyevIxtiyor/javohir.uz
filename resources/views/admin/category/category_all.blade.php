
@extends('layouts.admin')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Kategoriyalar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Asosiy</a></li>
              <li class="breadcrumb-item active">Kategoriyalar</li>
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
                <form action="{{route('admin.category.post')}}" method="POST">
                    @csrf
                    <div class="row d-flex align-items-center">
                        <div class="col-md-2">
                            <h4 class="card-title">Kategoriya qo‘shish</h4>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="name" id="name"
                            placeholder="Kategoriya nomi:" required>
                        </div>
                        <div class="col-md-4">
                            <select name="status" id="status" class="form-control custem-select">
                                <option value="1">Faol</option>
                                <option value="0">Nofaol</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Saqlash</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nomi</th>
                                <th>Holati</th>
                                <th>Yaratilgan sana</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <th>{{$loop->index+1}}</th>
                                <td>{{$item->name}}</td>
                                <td>
                                    @if ($item->status == 1)
                                    <span class="badge badge-success">Active</span>
                                    @else
                                    <span class="badge badge-danger">In Active</span>
                                    @endif
                                </td>
                                <td>{{$item->created_at}}</td>
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
