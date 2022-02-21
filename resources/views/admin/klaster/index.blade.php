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
                    <table width="90%" id="data" class="table-striped table-bordered">
                        <thead>
                        <tr class="table-light border-bottom border-secondary">
                            <th  rowspan="2" scope="col">Номи</th>
                            <th rowspan="2" scope="col">Туманлар</th>
                            <th class="border-bottom " colspan="4" scope="col">касаначилари</th>
                            <th class="border-bottom " colspan="3" scope="col">Фермерлар</th>
                            <th rowspan="2" scope="col">Действие</th>
                        </tr>
                        <tr class="table-light">
                            <th  scope="col">режа</th>
                            <th scope="col">амалда</th>
                            <th scope="col">фарқи, (+,-)</th>
                            <th  scope="col">фоиз, %</th>

                            <th  scope="col">режа</th>
                            <th scope="col">амалда</th>
                            <th scope="col">фоиз, %</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($klasteres as $klaster)
                            <tr>

                                <td >{{$klaster->name}}</td>
                                <td>
                                    <?php
                                    $soni=0;
                                    $olgan=0;
                                    $topshirish_rejasi=0;
                                    $topshirgani=0;
                                    $x=0;
                                    $farqi=0;
                                    $jarima=0;
                                    $toladi=0;
                                    $qoldi=0;

                                    $F_olgan=0;
                                    $F_topshirish_rejasi=0;
                                    $F_topshirgani=0;
                                    $y=0;
                                    foreach ($regions as $region){
                                        if ($region->klaster_id==$klaster->id){

                                            echo $region->name." ";

                                            foreach ($staffs as $staff){
                                                if ($staff->region_id==$region->id){
                                                    $soni=$soni+1;
                                                    $olgan=$olgan+($staff->olgan_gr);
                                                    $topshirish_rejasi=$topshirish_rejasi+($staff->topshirish_rejasi);
                                                    $topshirgani=$topshirgani+($staff->topshirgani);
                                                    $x=($topshirgani *100)/$topshirish_rejasi;
                                                    $farqi=$topshirgani-$topshirish_rejasi;
                                                    $jarima=$farqi*22;
                                                    $toladi=$toladi+($staff->toladi);
                                                    $qoldi=$toladi-$jarima;
                                                };
                                            };
                                                foreach ($farmes as $farm){
                                                if ($farm->region_id==$region->id){
                                                    $F_olgan=$F_olgan+($farm->olgan_gr);
                                                    $F_topshirish_rejasi=$F_topshirish_rejasi+($farm->topshirish_rejasi);
                                                    $F_topshirgani=$F_topshirgani+($farm->topshirgani);
                                                    $y=($F_topshirgani *100)/$F_topshirish_rejasi;
                                                    $farqi=$topshirgani-$topshirish_rejasi;
                                                    $jarima=$farqi*22;
                                                    $toladi=$toladi+($farm->toladi);
                                                    $qoldi=$toladi-$jarima;
                                                };
                                            }
                                        }
                                    }
                                    ?>
                                </td>
                                <td id="k_reja">{{$topshirish_rejasi}}</td>
                                <td id="k_top">{{$topshirgani}}</td>
                                <td>{{$farqi}}</td>
                                <td id="k_x">{{$x}}</td>


                                <td id="f_reja">{{$F_topshirish_rejasi}}</td>
                                <td id="f_top">{{$F_topshirgani}}</td>
                                <td id="f_y">{{$y}}</td>

{{--                                <td id="reja"></td>--}}
{{--                                <td id="top"></td>--}}
{{--                                <td id="foiz"></td>--}}

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


    <script type="text/javascript">
        //jQuery.noConflict();
        $(document).ready( function () {
            $('#data').DataTable({
                "language": {
                    "lengthMenu": "_MENU_",
                    "zeroRecords": "Касаначи қошинг",
                    "info": "_PAGE_ / _PAGES_",
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
        var reja=document.getElementById("k_reja").textContent+document.getElementById("f_reja").textContent;
        document.getElementById("reja").innerHTML=reja;
        console.log(reja)

        var table = document.getElementById("data"),sumVal = 0;
        $(table).find('tbody tr').each(function() {
            $(this).find('#reja').each(function(i){
                    sumVal = sumVal + parseFloat($(this).text());
            });
        });
        document.getElementById("tot").innerHTML = sumVal;
        console.log(sumVal);
    </script>
@endsection

