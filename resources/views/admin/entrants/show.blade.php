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
                <h3 class="card-title">Просмотр абитуриента</h3>
                <div class="card-tools d-flex">
                  <a class="btn btn-primary mr-2" href="{{ route('entrant.edit', 1)}}">Редактировать</a>
                  <form action="{{route('entrant.destroy', 1)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-block btn-danger">Удалить</button>
                  </form>                  
                </div>  
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <div class="container-fluid d-flex">
                  <div class="row p-3">
                    <div class="col-2">
                      <p><strong>Id</strong></p>
                    </div>
                    <div class="col-10">
                      <p>69</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Фамилия</strong></p>
                    </div>
                    <div class="col-10">
                      <p>Иванов</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Имя</strong></p>
                    </div>
                    <div class="col-10">
                      <p>Иван</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Отчество</strong></p>
                    </div>
                    <div class="col-10">
                      <p>Иванович</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Группа</strong></p>
                    </div>
                    <div class="col-10">
                      <p>451</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Номер телефона</strong></p>
                    </div>
                    <div class="col-10">
                      <p>+7 800 (555)-35-35</p>
                    </div>


                    <div class="col-12">
                      <a href="{{ route('entrant.index') }}">Список абитуриентов</a>
                    </div>
                  </div>
                  <div class="row p-3">
                    <div class="col-12">
                      <div class="news-photo" style="color: #fff; background: #333; width: 300px; height: 400px; border-radius: 7px; display: flex; justify-content: center; align-items: center;">Фото</div>
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