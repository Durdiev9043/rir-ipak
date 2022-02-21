@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-7"><h1 class="card-title">Фермерлар</h1></div>
                    <div class="col-md-1 mr-5">
                        <a class="btn btn-primary" href="{{route('admin.village.show',$id)}}">
                            <span class="btn-label">

                            </span>
                            Касанчилар рўйхат
                        </a>
                    </div>
                    <div class="col-md-1 ml-4">
                        <a class="btn btn-primary" href="{{route('admin.farm.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Фермер кошиш
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table width="90%" class="table-bordered table-striped" id="mytable">
                        <thead>
                        <tr>

                            <th  scope="col">номи</th>
                            <th  scope="col">кути сони</th>
                            <th  scope="col">гр</th>
                            <th  scope="col">режа</th>
                            <th  scope="col">ҳақиқатда топширди</th>
                            <th  scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($farmes as $farm)
                                <tr>

                                    <td >{{$farm->name}}</td>

                                    <td>{{$farm->algan_qutisi}}</td>
                                    <td>{{$farm->olgan_gr}}</td>
                                    <td>{{$farm->topshirish_rejasi}}</td>
                                    <td>{{$farm->topshirgani}}</td>

                                    <td>
                                        <form action="{{ route('admin.farm.destroy',$farm ->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-warning btn-sm" href="{{ route('admin.farm.edit',$farm->id) }}">
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

