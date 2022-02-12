@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Добавить сотрудники</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('staff.update',$id)}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="header_ru">имя</label>
                            <input type="text" name="name" class="form-control" id="header_ru" placeholder="имя">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">фамиля</label>
                            <input type="text" name="surname" class="form-control" id="header_ru" placeholder="фамиля">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">работа</label>
                            <input type="text" name="job" class="form-control" id="header_ru" placeholder="работа">
                        </div>

                        <div class="form-group">
                            <label for="description">Текст (Ру)</label>
                            <textarea class="form-control" name="description_ru" id="description" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Текст (en)</label>
                            <textarea class="form-control" name="description_en" id="description" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Текст (uz)</label>
                            <textarea class="form-control" name="description_uz" id="description" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="img">Добавьте рисунок <b><i>РАЗМЕР РИСУНОК:(600x300)</i></b></label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>



                        <button type="submit" id="alert" class="btn btn-primary">Submit</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
