@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">

                <div class="row">
                    <div class="col-9"><h1 class="card-title p-2">Туманлар</h1></div>

                </div>

                <div class="card-body">
                    <table width="90%" id="mytable" class="table-striped table-bordered">
                        <thead>
                        <tr rowspan="2">
                            <th rowspan="2"  >Туман номи</th>
                            <th rowspan="2"  >Тумандаги касанчилар сони</th>
                            <th  colspan="4">Пилла топшириши</th>
                            <th rowspan="2" >Действие</th>

                        </tr>
                        <tr>



                            <th  >режа</th>
                            <th  >ҳақиқатда топширди</th>
                            <th >фоиз,%</th>
                            <th  >фарқи (+/-)</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($regions as $region)
                            <tr>
                                <td scope="row">
                                    <a href="{{route('admin.region.show',$region->id)}}">{{$region->name}}</a>
                                </td>
                                <td>

                                    <?php
                                    $soni=0;
                                    $olgan=0;
                                    $topshirish_rejasi=0;
                                    $topshirgani=0;
                                    $x=0;
                                    $farqi=0;
                                        foreach ($staffes as $staff) {
                                            if ($staff->village_id==$region->id){
                                                $soni=$soni+1;
                                                $olgan=$olgan+($staff->olgan_gr);
                                                $topshirish_rejasi=$topshirish_rejasi+($staff->topshirish_rejasi);
                                                $topshirgani=$topshirgani+($staff->topshirgani);
                                                $x=($topshirgani *100)/$topshirish_rejasi;
                                                $farqi=$topshirgani-$topshirish_rejasi;
                                            };

                                        };

                                    ?>
                                    {{ $soni }}
                               </td>

                               <td>
                                   {{ $topshirish_rejasi }}
                               </td>
                               <td>
                                    {{ $topshirgani }}
                               </td>
                                <td>
                                    {{ $x }}
                               </td>
<td>
    {{$farqi}}
</td>
                               <td>
                                <form action="{{ route('admin.region.destroy',$region ->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.region.edit',$region->id) }}">
                                            <span class="btn-label">
                                                <i class="fa fa-pen"></i>
                                            </span>
                                        </a>
                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                            <i class="fa fa-trash"></i></span>
                                        </button>
                                    </div>
                                </form>
                            </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
    <script>
        $(document).ready( function () {
            $('#mytable').DataTable();
        } );
    </script>

@endsection

