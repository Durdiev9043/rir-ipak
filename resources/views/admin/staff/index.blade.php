@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">сотрудники</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.staff.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить сотрудники
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table width="90%" class="table  table-bordered">
                        <thead>
                        <tr>

                            <th  scope="col">ismi familyasi</th>
                            <th  scope="col">passport</th>
                            <th  scope="col">inn</th>
                            <th  scope="col">olgan qutisi</th>
                            <th  scope="col">olgan gr</th>
                            <th  scope="col">topshirish rejasi</th>
                            <th  scope="col">topshirgani</th>
                            <th  scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($staffes as $staff)
                                <tr>

                                    <td >{{$staff->fullname}}</td>
                                    <td>{{$staff->passport}}</td>
                                    <td>{{$staff->inn}}</td>
                                    <td>{{$staff->algan_qutisi}}</td>
                                    <td>{{$staff->olgan_gr}}</td>
                                    <td>{{$staff->topshirish_rejasi}}</td>
                                    <td>{{$staff->topshirgani}}</td>
                                    <td>
                                        <form action="{{ route('admin.staff.destroy',$staff ->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-warning btn-sm" href="{{ route('admin.staff.edit',$staff->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                            </a>

                                            <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

