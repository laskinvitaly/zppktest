 <!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
@extends('layouts.main')
 @section('content')
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
                <h3 class="card-title">Редактирование группы</h3>                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
              <form class="p-3" action="{{ route('group.update',1) }}" method="POST">
                    @csrf
                    @method('patch')
                      <div class="form-group">
                        <label for="">Наименование группы</label>
                        <input type="text" class="form-control" placeholder="Введите название группы" value="451">
                      </div>
                      <div class="form-group">
                        <label for="">Специальность</label>
                        <select class="custom-select rounded-0" id="">
                        <option>Информационные системы и программирование</option>
                          <option>Технология деревообработки</option>
                          <option>Коррекционная педагогика</option>
                          <option>Дошкольное образование</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Классный руководитель</label>
                        <textarea class="form-control" rows="1" placeholder="Введите классного руководителя"> Иванова Мария Ивановна
                        </textarea>
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