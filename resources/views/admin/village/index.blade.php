
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
                    <table width="90%" id="myTable" class="table  table-bordered">
                        <thead>
                        <tr>

                            <th class="content_admin" scope="col">name</th>
                            <th class="content_admin" scope="col">kasanchilar soni</th>
                            <th class="content_admin" scope="col">kasanchilar olgani</th>
                            <th class="content_admin" scope="col">kasanchillar rejasi</th>
                            <th class="content_admin" scope="col">topshirgani</th>

                            <th class="content_admin" scope="col">Действие</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($villages as $village)
                            <tr>

                                <td>
                                    <a href="{{route('admin.village.show',$village->id)}}">{{$village->name}}</a>
                                </td>
                               <td>

                                    <?php
                                    $soni=0;
                                    $olgan=0;
                                    $topshirish_rejasi=0;
                                    $topshirgani=0;
                                        foreach ($staffes as $staff) {
                                            if ($staff->village_id==$village->id){
                                                $soni=$soni+1;
                                                $olgan=$olgan+($staff->olgan_gr);
                                                $topshirish_rejasi=$topshirish_rejasi+($staff->topshirish_rejasi);
                                                $topshirgani=$topshirgani+($staff->topshirgani);
                                            };
                                        };
                                    ?>
                                    {{ $soni }}
                               </td>
                               <td>
                                    {{ $olgan }}
                               </td>
                               <td>
                                   {{ $topshirish_rejasi }}
                               </td>
                               <td>
                                    {{ $topshirgani }}
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
    $('#myTable').DataTable();
} );
</script>
@endsection

