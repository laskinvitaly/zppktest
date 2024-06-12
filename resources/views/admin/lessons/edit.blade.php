@extends('layouts.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Секции и кружки</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="{{ route('main')}}">Главная</a></li>
              <li class="breadcrumb-item"><a href="{{ route('lesson.index')}}">Секции и кружки</a></li>             
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
                <h3 class="card-title">Реадктирование</h3>                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <form class="p-3" action="{{ route('lesson.update',1) }}" method="POST">
                    @csrf
                    @method('patch')
                      <div class="form-group">
                        <label for="">Наименование</label>
                        <input type="text" class="form-control" placeholder="" value="Плавание">
                      </div>
                      <div class="form-group">
                        <label for="">Главное изображение</label>
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
                      <div class="form-group">
                        <label for="">Краткое описание</label>
                        <textarea class="form-control" rows="3" placeholder="Плавание для всех желающих"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Расписание</label>
                        <select class="custom-select rounded-0" id="">
                          <option>Понедельник - вторник: 16:00 - 18:00</option>
                          <option>Среда - четверг: 17:00 - 19:00</option>
                          <option>Пятница: 15:00 - 17:00</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Руководитель</label>
                        <textarea class="form-control" rows="1" placeholder="Enter ...">Кузнецова Елена Игоревна
                      <div class="form-group">
                        <label for="">Цена/час</label>
                          <select class="custom-select rounded-0" id="">
                            <option>500р/час</option>
                            <option>1000р/час</option>
                            <option>1500р/час</option>
                            <option>2000р/час</option>
                          </select>
                      </div>
                        
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
