@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>


                <form method="POST" action="{{route('addtatami')}}">
                        @csrf
                    <div class="form-group">
                        <label for="example-text-input" class="col-xs-1 col-form-label">Дата
                        <input class="form-control" type="date" name="data" value="" id="example-text-input" required>
                        </label>

                        <label for="example-text-input" class="col-xs-2 col-form-label">Татами
                        <input class="form-control" type="text" name="tatami" value="" id="example-text-input" placeholder="Tatami" required>
                        </label>
                    </div>
                    <button type="submit" name="sub" value="1" class="btn btn-primary">Добавить татами</button>
                    <button type="submit" name="sub" value="2" class="btn btn-primary">Просмотр татами</button>
                </form>




                <form method="POST" action="{{route('addjudges')}}">
                        @csrf

                @if(isset($tatami))
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col"></th>
                        <th scope="col">Дата</th>
                        <th scope="col">Татами</th>
                        <th scope="col">Обновить</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($tatami as $tatamis)
                        <tr>
                        <th scope="row">{{$tatamis->id}}</th>
                        <td><input class="form-check-input" name="ch" type="checkbox" value="{{$tatamis->id}}" id="defaultCheck1"></td>
                        <td><input class="form-control" name="data.{{$tatamis->id}}" type="date" value="{{$tatamis->data}}"  ></td>
                        <td><input class="form-control" name="edit.{{$tatamis->id}}" type="text" value="{{$tatamis->name}}"  ></td>
                        <td><button type="submit" name="save" value="save"  class="btn btn-primary">save</button></td>
                        </tr>
                        <tr>       
                       
                    @endforeach
                    </tbody>
                    </table>

                @endif

               
                    <div class="form-group">
                        <label for="example-text-input" class="col-xs-2 col-form-label">Судья</label>
                        <input class="form-control"  type="text"  id="example-text-input">
                        
                    </div>
                    <button type="submit" name="judgest" value="judgest" class="btn btn-primary">Добавить судью</button>
                </form>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
