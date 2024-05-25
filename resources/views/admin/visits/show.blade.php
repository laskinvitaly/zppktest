@extends('layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Посещаемость</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="{{ route('main')}}">Главная</a></li>             
              <li class="breadcrumb-item active">Посещаемость</li>
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
                <h3 class="card-title">Список посещаемости</h3>

                <div class="card-tools">
                    
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th style="width: 20px;">Id</th>
                      <th class="text-left">Фамилия</th>
                      <th class="text-left">Имя</th>
                      <th class="text-left">Отчество</th>
                      <th class="text-left">Дата посещения</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($attendance as $att)
                    <tr>
                      <td>{{ $att->id }}</td>
                      <td>
                        @foreach ($user as $us)
                          @if ($us->id == $att->student_id )
                            {{ $us->family }}
                          @endif
                        @endforeach
                      </td>
                      <td>
                        @foreach ($user as $us)
                          @if ($us->id == $att->student_id )
                            {{ $us->name }}
                          @endif
                        @endforeach
                      </td>
                      <td>
                        @foreach ($user as $us)
                          @if ($us->id == $att->student_id )
                            {{ $us->patronymic }}
                          @endif
                        @endforeach
                      </td>
                      <td>{{ $att->date_attendance }}</td> 
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