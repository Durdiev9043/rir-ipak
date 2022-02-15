@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Кластер</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.staff.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Кластер кошиш
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table width="90%" class="table  table-bordered">
                        <thead>
                        <tr>

                            <th  scope="col">Номи</th>
                            <th  scope="col">Тел:</th>
                            <th  scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($klasteres as $klaster)
                                <tr>

                                    <td >{{$klaster->name}}</td>
                                    <td >{{$klaster->phone}}</td>

                                    <td>
                                        <form action="{{ route('admin.klaster.destroy',$klaster ->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-warning btn-sm" href="{{ route('admin.klaster.edit',$klaster->id) }}">
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

