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
              <li class="breadcrumb-item active">Преподаватели</li>
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
                <h3 class="card-title">Список Преподавателей</h3>

                <div class="card-tools">
                    <a class="btn btn-block btn-primary" href="{{ route('teather.create')}}">Создать</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th style="width: 20px;">Id</th>
                      <th class="text-left">Фамилия</th>                      
                      <th class="text-left">Имя</th>
                      <th class="text-left">Отчество</th>
                      <th style="width: 20px;">&nbsp;</th>
                      <th style="width: 20px;">&nbsp;</th>
                      <th style="width: 20px;">&nbsp;</th>
                      <th style="width: 20px;">&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>100</td>
                      <td>Воронов</td>
                      <td>Игорь</td>
                      <td>Петрович</td>
                      <td></td>
                      <td><a class="btn btn-block btn-success" href="<?php echo e(route('teather.show',1)); ?>"><i class="far fa-eye"></i></a></td>
                      <td><a class="btn btn-block btn-success" href="<?php echo e(route('teather.edit',1)); ?>"><i class="fas fa-pen"></i></a></td>
                      <td>
                        <form action="<?php echo e(route('teather.destroy', 1)); ?>" method="POST">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('delete'); ?>
                          <button type="submit" class="btn btn-block btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                      </td>                      
                    </tr> 
                  </tbody>
                </table>
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