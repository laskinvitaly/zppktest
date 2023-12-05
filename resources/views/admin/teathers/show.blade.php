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
                <h3 class="card-title">Просмотр Преподавателей</h3>
                <div class="card-tools d-flex">
                  <a class="btn btn-primary mr-2" href="<?php echo e(route('teather.edit', 1)); ?>"style="height: 40px;">Редактировать</a>
                  <form action="<?php echo e(route('teather.destroy', 1)); ?>" method="POST">
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
                      <p>100</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Фамилия </strong></p>
                    </div>
                    <div class="col-10">
                      <p>Воронов</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Имя</strong></p>
                    </div>
                    <div class="col-10">
                      <p>Игорь</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Отчество</strong></p>
                    </div>
                    <div class="col-10">
                      <p>Петрович</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Должность</strong></p>
                    </div>
                    <div class="col-10">
                      <p>Младший научный сотрудник</p>
                    </div>
                    <div class="form-group">
                        <label for="" style="margin-left: 7px;">Фотография Преподавателя</label>
                        <div class="input-group">
                          <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Фотография</label>
                          </div>
                          </div>
                        </div>
                      </div>
                    <div class="col-10">
                      <div class="news-photo" style="color: #fff; background: #333; width: 100px; height: 150px; border-radius: 7px; display: flex; justify-content: center; align-items: center;">Фото</div>
                    </div>
                    <div class="col-12">
                      <a href="<?php echo e(route('teather.index')); ?>">Список Преподавателей</a>
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