@extends('layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Новости</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="{{ route('main')}}">Главная</a></li>
              <li class="breadcrumb-item"><a href="{{ route('new.index')}}">Новости</a></li>             
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
                <h3 class="card-title">Новая новость</h3>                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                  <form class="p-3" action="{{ route('new.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label for="title">Название</label>
                        <input name="title" type="text" class="form-control" placeholder="Введите название">
                      </div>
                      <div class="form-group">
                        <label for="keyword">Категория</label>
                        <select name="keyword" class="custom-select rounded-0" id="">
                          @foreach ($categories as $categori)
                            <option value="{{ $categori->id }}">{{ $categori->categori }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="readmore">Краткое описание</label>
                        <input name="readmore" type="text" class="form-control" placeholder="Введите краткое описание">
                      </div>
                      <div class="form-group">
                        <label for="content">Контент</label>
                        <textarea name="content" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                      <div class="form-group">
                        <label for="">Главное изображение</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="image">Choose file</label>
                          </div>
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