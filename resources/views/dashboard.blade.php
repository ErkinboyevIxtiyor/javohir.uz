{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Asosiy') }}
        </h2>
    </x-slot>



    <div class="py-12">
        @if (Auth::user()->role == "founder")
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap -mx-3">
                <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                  <!-- small box -->
                  <div class="text-white p-4 rounded-lg bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex items-center justify-between">
                      <div>
                        <h3 class="text-2xl font-bold">0</h3>
                        <p>Foydalanuvchilar</p>
                      </div>
                      <div>
                        <i class="fas fa-user-plus text-4xl"></i>
                      </div>
                    </div>
                    <a href="#" class="text-white mt-4 inline-block">
                      Batafsil <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                  <!-- small box -->
                  <div class="bg-green-500 text-white p-4 rounded-lg">
                    <div class="flex items-center justify-between">
                      <div>
                        <h3 class="text-2xl font-bold">53<sup class="text-lg">%</sup></h3>
                        <p>Bounce Rate</p>
                      </div>
                      <div>
                        <i class="ion ion-stats-bars text-4xl"></i>
                      </div>
                    </div>
                    <a href="#" class="text-white mt-4 inline-block">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                  <!-- small box -->
                  <div class="bg-yellow-500 text-white p-4 rounded-lg">
                    <div class="flex items-center justify-between">
                      <div>
                        <h3 class="text-2xl font-bold">44</h3>
                        <p>User Registrations</p>
                      </div>
                      <div>
                        <i class="ion ion-person-add text-4xl"></i>
                      </div>
                    </div>
                    <a href="#" class="text-white mt-4 inline-block">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <!-- ./col -->
                <div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">
                  <!-- small box -->
                  <div class="bg-red-500 text-white p-4 rounded-lg">
                    <div class="flex items-center justify-between">
                      <div>
                        <h3 class="text-2xl font-bold">65</h3>
                        <p>Unique Visitors</p>
                      </div>
                      <div>
                        <i class="ion ion-pie-graph text-4xl"></i>
                      </div>
                    </div>
                    <a href="#" class="text-white mt-4 inline-block">
                      More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                  </div>
                </div>
                <!-- ./col -->
              </div>

        </div>
        @endif


        <div class="d-flex justify-between align-items-center">
            <div class="max-w-7xl mx-auto sm:px lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("Siz tizimga kirdingiz!") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
@extends('layouts.admin')

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
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Asosiy</a></li>
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
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Foydalanuvchilar</span>
                    <span class="info-box-number">{{$usersCount}}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Buyurtmalar</span>
                  <span class="info-box-number">
                    {{$oredersCount}}
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
          </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
