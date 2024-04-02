@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Преподаватели</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="{{ route('main') }}">Главная</a></li>             
              <li class="breadcrumb-item"><a href="{{ route('teather.index') }}">Преподаватели</a></li>             
              <li class="breadcrumb-item active">Изменение</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Изменение Преподавателей</h3>            
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                  <form class="p-3" action="<?php echo e(route('teather.update', $t['id'])); ?>" method="POST">
                    @csrf
                    @method('patch')
                      <div class="form-group">
                        <label for="">email Преподавателя</label>
                        <input type="email" required name="email" class="form-control" value="{{ $t['email'] }}" placeholder="Введите email">
                      </div>
                      <div class="form-group">
                        <label for="">Фамилия Преподавателя</label>
                        <input type="text" required name="family" class="form-control" value="{{ $t['family'] }}" placeholder="Введите фамилию">
                      </div>
                      <div class="form-group">
                        <label for="">Имя Преподавателя</label>
                        <input type="text" required name="name" class="form-control" value="{{ $t['name'] }}" placeholder="Введите имя">
                      </div>
                      <div class="form-group">
                        <label for="">Отчество Преподавателя</label>
                        <input type="text" required name="patronymic" class="form-control" value="{{ $t['patronymic'] }}" placeholder="Введите отчество">
                      </div>
                      <button type="submit" class="btn btn-primary">Изменить</button>                    
                  </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>    
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection