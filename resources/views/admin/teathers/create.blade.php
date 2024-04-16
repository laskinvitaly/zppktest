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
              <li class="breadcrumb-item active">Создание</li>
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
                <h3 class="card-title">Новый преподаватель</h3>                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                  <form class="p-3" action="<?php echo e(route('teather.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                      <div class="form-group">
                        <label for="">email Преподавателя</label>
                        <input type="email" required name="email" class="form-control" placeholder="Введите email">
                      </div>
                      <div class="form-group">
                        <label for="">Фамилия Преподавателя</label>
                        <input type="text" required name="family" class="form-control" placeholder="Введите фамилию">
                      </div>
                      <div class="form-group">
                        <label for="">Имя Преподавателя</label>
                        <input type="text" required name="name" class="form-control" placeholder="Введите имя">
                      </div>
                      <div class="form-group">
                        <label for="">Отчество Преподавателя</label>
                        <input type="text" required name="patronymic" class="form-control" placeholder="Введите отчество">
                      </div>
                      <div class="form-group">
                        <label for="">Логин преподавателя для входа</label>
                        <input type="text" required name="login" class="form-control" placeholder="Введите логин">
                      </div>
                      <div class="form-group">
                        <label for="">Пароль преподавателя для входа</label>
                        <input type="text" required name="password" class="form-control" placeholder="Введите пароль">
                      </div>
                      <button type="submit" class="btn btn-primary">Создать</button>                    
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