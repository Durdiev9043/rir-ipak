@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">сотрудники</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="#">
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

                            <th class="content_admin" scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($regions as $region)
                            <tr>
                                <td>
                                    <a href="{{route('admin.region.show',$region->id)}}">{{$region->name}}</a>
                                </td>
                                <td>{{$region->name}}</td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

