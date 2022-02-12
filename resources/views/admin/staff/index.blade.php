@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">сотрудники</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('staff.create')}}">
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

                            <th class="content_admin" scope="col">name</th>
                            <th class="content_admin" scope="col">surname</th>
                            <th class="content_admin" scope="col">работа</th>
                            <th class="content_admin" scope="col">description_ru</th>
                            <th class="content_admin" scope="col">description_en</th>
                            <th class="content_admin" scope="col">description_ru</th>
                            <th class="content_admin" scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($staffes as $staff)
                                <tr>

                                    <td>{{$staff->name}}</td>
                                    <td>{{$staff->surname}}</td>
                                    <td>{{$staff->job}}</td>
                                    <td>{{$staff->description_ru}}</td>
                                    <td>{{$staff->description_en}}</td>
                                    <td>{{$staff->description_uz}}</td>
                                    <td>
                                        <form action="{{ route('staff.destroy',$staff ->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-warning btn-sm" href="{{ route('staff.edit',$staff->id) }}">
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

