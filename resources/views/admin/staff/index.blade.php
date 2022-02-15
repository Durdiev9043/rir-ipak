@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Касанчилар</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.staff.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                             кошиш
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table width="90%" class="table-bordered table-striped" id="mytable">
                        <thead>
                        <tr>

                            <th  scope="col">Ф.И.Ш</th>
                            <th  scope="col">пасспорт</th>
                            <th  scope="col">инн</th>
                            <th  scope="col">ШЖБПТ</th>
                            <th  scope="col">кути сони</th>
                            <th  scope="col">гр</th>
                            <th  scope="col">режа</th>
                            <th  scope="col">ҳақиқатда топширди</th>
                            <th  scope="col">контур</th>
                            <th  scope="col">га</th>
                            <th  scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($staffes as $staff)
                                <tr>

                                    <td >{{$staff->fullname}}</td>
                                    <td>{{$staff->passport}}</td>
                                    <td>{{$staff->inn}}</td>
                                    <td>{{$staff->jshir}}</td>
                                    <td>{{$staff->algan_qutisi}}</td>
                                    <td>{{$staff->olgan_gr}}</td>
                                    <td>{{$staff->topshirish_rejasi}}</td>
                                    <td>{{$staff->topshirgani}}</td>
                                    <td>{{$staff->kontur}}</td>
                                    <td>{{$staff->maydon}}</td>
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

    <script src="{{asset('/assets/js/core/jquery.3.2.1.min.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#mytable').DataTable({
                "language": {
                    "lengthMenu": "_MENU_",
                    "zeroRecords": "Касаначи қошинг",
                    "info": "_PAGE_ of _PAGES_",
                    "infoEmpty": " ",
                    "search":"қидириш:",
                    "paginate": {
                        "first": "биринчи",
                        "previous": "олдинги",
                        "next": "кейинки",
                        "last": "охирги"
                    },
                }
            });
        } );
    </script>
@endsection

