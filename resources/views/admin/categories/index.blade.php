@extends('layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Категории</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="{{ route('main')}}">Главная</a></li>             
              <li class="breadcrumb-item active">Категории</li>
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
                <h3 class="card-title">Список категорий</h3>

                <div class="card-tools">
                    <a class="btn btn-block btn-primary" href="{{ route('category.create')}}">Создать</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th style="width: 20px;">Id</th>
                      <th class="text-left">Название</th>                      
                      <th style="width: 20px;">&nbsp;</th>
                      <th style="width: 20px;">&nbsp;</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                    <tr>
                      <td>{{ $category->id }}</td>
                      <td>{{ $category->categori }}</td>
                      <td><a class="btn btn-block btn-success" href="{{ route('category.edit',$category->id)}}"><i class="fas fa-pen"></i></a></td>
                      <td>
                        <form action="{{route('category.destroy', $category->id)}}" method="POST">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-block btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                      </td>                      
                    </tr> 
                    @endforeach

                  </tbody>
                </table>
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