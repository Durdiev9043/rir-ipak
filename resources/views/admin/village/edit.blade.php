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


                    <form action="{{route('admin.village.update',$village->id)}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="number">maxallani tanlang</label>
                            <select class="custom-select" id="price_id" name="region_id">
                                    <option value="{{$village->region->id}}">{{$village->region->name}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="header_ru">имя</label>
                            <input type="text" name="name" class="form-control" value="{{$village->name}}" id="header_ru" placeholder="toliq ism familya">
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Submit</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
