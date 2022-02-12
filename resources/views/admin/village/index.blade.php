@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">махаллар</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.village.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Добавить
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
                        @foreach($villages as $village)
                            <tr>
                                <td>
                                    <a href="{{route('admin.region.show',$village->id)}}">{{$village->name}}</a>
                                </td>
                                <td>{{$village->name}}</td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection

