@extends('layouts.main')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Группы</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="">Главная</a></li>             
              <li class="breadcrumb-item active">Группы</li>
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
                <h3 class="card-title">Список групп</h3>

                <div class="card-tools">
<<<<<<< HEAD
                    <a class="btn btn-block btn-primary" href="">Создать</a>
=======
                    <a class="btn btn-block btn-primary" href="{{ route('group.create') }}">Создать</a>
>>>>>>> d5f221095a547562b428567698fa8342944f05d8
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                
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
 