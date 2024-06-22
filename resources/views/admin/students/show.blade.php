@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Студенты</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="{{ route('main') }}">Главная</a></li>             
              <li class="breadcrumb-item"><a href="{{ route('student.index') }}">Студенты</a></li>             
              <li class="breadcrumb-item active">Просмотр</li>
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
                <h3 class="card-title">Просмотр Студентов</h3>
                <div class="card-tools d-flex">
                  <a class="btn btn-primary mr-2" href="<?php echo e(route('student.edit', $t["id"])); ?>"style="height: 40px;">Редактировать</a>
                  <form action="<?php echo e(route('student.destroy', $t["id"])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-block btn-danger">Удалить</button>
                  </form>                  
                </div>
              </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <div class="container-fluid">
                  <div class="row p-3">
                    <div class="col-2">
                      <p><strong>Id</strong></p>
                    </div>
                    <div class="col-10">
                      <p>{{ $t["id"] }}</p>
                    </div>
                    <div class="col-2">
                      <p><strong>ФИО </strong></p>
                    </div>
                    <div class="col-10">
                      <p>{{ $t['family'] }} {{ $t['name'] }} {{ $t['patronymic'] }}</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Личная ссылка</strong></p>
                    </div>
                    <div class="col-10">
                      <p>{{ $t['link'] }}</p>
                    </div>
                    <div class="col-12">
                      <a href="<?php echo e(route('student.index')); ?>">Список Студентов</a>
                    </div>
                  </div>
                </div>                  
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