@extends('component.index')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Data Produksi
                </h3>   
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="m-portlet akses-list">
            <div class="m-portlet__body">
                <div class="table-responsive">
                    <table 
                        class="akses-list table table-bordered datatable"
                        data-url="{{route('produksiList')}}"
                        >
                        <thead>
                            <tr>
                                <th class="no-sort" >No</th>
                                <th class="no-sort" >Kode Produksi</th>
                                <th class="no-sort" >Lokasi</th>
                                <th class="no-sort" >Tanggal Mulai</th>
                                <th class="no-sort" >Tanggal Selesai</th>
                                <th class="no-sort" >Status</th>
                                <th class="no-sort" >Publish</th>
                                <th class="no-sort" >Menu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data2 as $data)
                            <tr>
                                <td>{{$data->urutan}}</td>
                                <td>{{$data->kode_produksi}}</td>
                                <td>{{$data->lokasi->lokasi}}</td>
                                <td>{{$data->tgl_mulai_produksi}}</td>
                                <td>{{$data->tgl_selesai_produksi}}</td>
                                <td>{{$data->status}}</td>
                                <td>{{$data->publish}}</td>
                                <td>Coming Soon</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $data2->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection