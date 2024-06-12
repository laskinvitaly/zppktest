@extends('layouts.main')
@section('content')
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
              <li class="breadcrumb-item"><a href="{{ route('main')}}">Главная</a></li>             
              <li class="breadcrumb-item"><a href="{{ route('group.index')}}">Группы</a></li>             
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
                <h3 class="card-title">Просмотр группы</h3>
                <div class="card-tools d-flex">
                  <a class="btn btn-primary mr-2" href="{{ route('group.edit', 1)}}">Редактировать</a>
                  <form action="{{route('group.destroy', 1)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-block btn-danger">Удалить</button>
                  </form>                  
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
                      <p>142</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Наименование</strong></p>
                    </div>
                    <div class="col-10">
                      <p>451</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Специальность</strong></p>
                    </div>
                    <div class="col-10">
                      <p>Информационные системы и программирование</p>
                    </div>
                    <div class="col-2">
                      <p><strong>Классный руководитель</strong></p>
                    </div>
                    <div class="col-10">
                      <p>Иванова Мария Ивановна</p>
                    </div>
                    <div class="col-12">
                      <a href="{{ route('group.index') }}">Список групп</a>
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