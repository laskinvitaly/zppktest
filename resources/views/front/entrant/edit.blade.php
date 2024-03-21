@extends('front.layouts.main')
@section('content')
  <h1 class="entrant-title">Личный кабинет абитуриента</h1>
  
  <table class="entarnt-table">
    <thead class="table-body">
      <tr>
        <th>Фамилия:</th>
        <th>Имя:</th>
        <th>Отчество:</th>
        <th>Телефон:</th>
        <th>Эл. почта:</th>
        <th>Прописка:</th>
      </tr>
    </thead>
    <tbody class="table-body">
      <tr>
        <td>{{ $user->family }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->patronymic }}</td>
        <td>+78005553535</td>
        <td>ivan@mail.com</td>
        <td>Зубова Поляна, улица Новикова-Прибоя, 22</td>
      </tr>
    </tbody>
  </table>

  <form class="entrants" action="" method="POST">
    @csrf

    <div class="form-entrant">
      <label for="">Ксерокопия паспорта</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile">
        </div>
      </div>
    </div>
    <div class="form-entrant">
      <label for="">Документ государсвенного образца об образовании</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile">
        </div>
      </div>
    </div>
    <div class="form-entrant">
      <label for="">Медицинская справка 0-8бу</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile">
        </div>
      </div>
    </div>
    <div class="form-entrant">
      <label for="">Сертификат о профилактических прививках</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile">
        </div>
      </div>
    </div>
    <div class="form-entrant">
      <label for="">СНИЛС</label>
      <div class="input-group">
        <div class="custom-file">
          <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
          <input type="file" class="custom-file-input" id="exampleInputFile">
        </div>
      </div>
    </div>

    <button type="submit" class="btn-entrant">Отправить</button>
  </form>
@endsection