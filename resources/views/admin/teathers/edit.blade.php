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
              <form class="p-3" action="{{ route('teather.update',1) }}" method="POST">
                    @csrf
                    @method('patch')
                      <div class="form-group">
                        <label for="">Название</label>
                        <input type="text" class="form-control" placeholder="Введите название">
                      </div>
                      <div class="form-group">
                        <label for="">Преподаватели</label>
                        <select class="custom-select rounded-0" id="">
                          <option>Преподаватели</option>
                          <option>Преподаватель</option>
                          <option>Другие новости о преподавателях</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Контент</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Главное изображение</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Фотография Преподавателя</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Изменить</button>                    
                  </form>
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