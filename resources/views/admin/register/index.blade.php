@extends('layouts.main')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Заявки на регистрацию</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> 
              <li class="breadcrumb-item"><a href="{{ route('main')}}">Главная</a></li>             
              <li class="breadcrumb-item active">Заявки на регистрацию</li>
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
                <h3 class="card-title">Список заявок</h3>                
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                @foreach ($requestRegisters as $requestRegister) 
                <div id="accordion">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h4 class="card-title w-100">
                        <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                          {{ $requestRegister['fio'] }}
                        </a>
                      </h4>                     
                    </div>
                    <div id="collapseOne" class="collapse @if ($loop->first) show @endif" data-parent="#accordion">
                      <div class="card-body">
                        <form class="p-3" action="" method="POST">
                          @csrf
                            <div class="form-group">
                              <label for="sername">Фамилия</label>
                              <input type="text" name="sername" class="form-control @error('fio') is-invalid @enderror" placeholder="Введите фамилию" value="{{ $requestRegister->sername() }}" required autofocus>
                              @error('sername')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="name">Имя</label>
                              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Введите имя" value="{{ $requestRegister->name() }}" required>
                              @error('name')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="parentname">Отчество</label>
                              <input type="text" name="parentname" class="form-control @error('parentname') is-invalid @enderror" placeholder="Введите отчество" value="{{ $requestRegister->parentname() }}" required>
                              @error('parentname')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="phone">Номер телефона</label>
                              <input type="text" name="phone" class="form-control input-phone @error('phone') is-invalid @enderror" placeholder="+7(000)-00-00" value="{{ $requestRegister['phone'] }}" required>
                              @error('phone')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="password">Воспользуйтесь сгенерированным паролем или придумайте свой</label>
                              <p class="text-danger">Не забудьте записать пароль. Пароли в БД хранятся в хешированном виде</p>
                              <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Введите пароль" value="{{ Str::password(8)}}" required>
                              @error('password')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror                                
                            </div>
                                                        
                            <div class="form-group">
                              <label for="role"></label>
                              <select name="role" class="custom-select rounded-0" >
                                @foreach (config('settings.roles') as $key => $role)
                                <option value="{{ $role['value'] }}" @if ($role['value']==2) selected="selected" @endif>{{ $role['text'] }}</option>
                                @endforeach                                
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="">Классный руководитель</label>
                              <textarea class="form-control" rows="1" placeholder="Введите классного руководителя"> Иванова Мария Ивановна
                              </textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-success">Одобрить</button> 
                            <form action="" method="POST">
                              @csrf
                              @method('delete')
                              <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>                   
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                    @endforeach 
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