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


                    <form action="{{route('admin.staff.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="number">maxallani tanlang</label>
                            <select class="custom-select" id="price_id" name="village_id">

                                @foreach($villages as $village)
                                    <option value="{{$village->id}}">{{$village->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="header_ru">имя</label>
                            <input type="text" name="fullname" class="form-control" id="header_ru" placeholder="toliq ism familya">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">passport seria va raqami</label>
                            <input type="text" name="passport" class="form-control" id="header_ru" placeholder="фамиля">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">inn</label>
                            <input type="text" name="inn" class="form-control" id="header_ru" placeholder="работа">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">olgan_qutisi</label>
                            <input type="text" name="algan_qutisi" class="form-control" id="header_ru">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">olgan_gr</label>
                            <input type="text" name="olgan_gr" class="form-control" id="header_ru">
                        </div>

                        <div class="form-group">
                            <label for="header_ru">topshirishi kerak bolgan reja</label>
                            <input type="text" name="topshirish_rejasi" class="form-control" id="header_ru" placeholder="работа">
                        </div>
                        <div class="form-group">
                            <label for="header_ru">topshirgani</label>
                            <input type="text" name="topshirgani" class="form-control" id="header_ru" placeholder="работа">
                        </div>



                        <button type="submit" id="alert" class="btn btn-primary">Submit</button>
                        <input type="reset" class="btn btn-danger" value="Очистить">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
