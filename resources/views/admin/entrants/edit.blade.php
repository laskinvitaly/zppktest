@extends('layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Абитуриенты</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="{{ route('main')}}">Главная</a></li>             
              <li class="breadcrumb-item"><a href="{{ route('entrant.index')}}">Абитуриенты</a></li>             
              <li class="breadcrumb-item active">Редактирование</li>
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
                <h3 class="card-title">Редактирование</h3>                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <form class="p-3" action="{{ route('entrant.update',1) }}" method="POST">
                  @csrf
                  @method('patch')
                    <div class="form-group">
                      <label for="">Фамилия</label>
                      <input type="text" class="form-control" placeholder="Введите фамилию" value="Иванов">
                    </div>
                    <div class="form-group">
                      <label for="">Имя</label>
                      <input type="text" class="form-control" placeholder="Введите имя" value="Иван">
                    </div>
                    <div class="form-group">
                      <label for="">Отчество</label>
                      <input type="text" class="form-control" placeholder="Введите отчество" value="Иванович">
                    </div>
                    <div class="form-group">
                      <label for="">Группа</label>
                      <input type="text" class="form-control" placeholder="Введите группу" value="451">
                    </div>
                    <div class="form-group">
                      <label for="">Номер телефона</label>
                      <input type="text" class="form-control" placeholder="Введите номер" value="+7 800 (555)-35-35">
                    </div>
                    <div class="form-group">
                      <label for="">Изображение</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
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