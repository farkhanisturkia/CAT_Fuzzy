@php
    $title = 'Data Kemampuan';
@endphp
@extends('layouts.admin_template')
@section('title', $title)
@section('content')

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="overview-wrap">
                    <h2 class="title-1">@yield('title')</h2>
                    @include('layouts.partials.breadcrumb')
                </div>
            </div>
        </div>
        <div class="row m-t-25">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <h5 class="m-0 font-weight-bold">
                            <i class="fas fa-table"></i>&ensp;{{ $title }}
                        </h5>
                        <h5 class="m-0 font-weight-bold">
                            <i class="fa fa-area-chart fa-lg"></i>&ensp;{{ $Kemampuan }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-white" style="background-color: #365cad;">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Latihan</th>
                                        <th>Nilai Latihan</th>
                                        <th>Jumlah Soal</th>
                                        {{-- <th>Nilai Kemampuan</th> --}}
                                        {{-- <th>Kemampuan</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fuzzy as $result)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $result->exam?->name }}</td>
                                            {{-- <td>{{ $result->final_score }}</td> --}}
                                            <td><?php echo (round( $result->final_score ))?></td>
                                            <td>{{ $result->exam?->total_question }}</td>
                                            {{-- <td>{{ $Output }}</td> --}}
                                            {{-- <td>{{ $Kemampuan }}</td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>soal Max :{{ $max2 }}</p>
                    <p>soal Min :{{ $min2 }}</p>
                    <p>soal Mean :{{ $mean2 }}</p>
                    <p>Jumlah Soal terakhir :{{ $last2 }}</p>
                    <p>Nilai Max :{{ $max }}</p>
                    <p>Nilai Min :{{ $min }}</p>
                    <p>Nilai Mean :{{ $mean }}</p>
                    <p>Jumlah Nilai terakhir :{{ $last }}</p>
                    <p>JSSedikit :{{ $JSSedikit }}</p>
                    <p>JSSedang :{{ $JSSedang }}</p>
                    <p>JSBanyak :{{ $JSBanyak }}</p>
                    <p>NHRendah :{{ $NHRendah }}</p>
                    <p>NHSedang :{{ $NHSedang }}</p>
                    <p>NHTinggi :{{ $NHTinggi }}</p>
                    <p>rule1 : {{ $rule1 }} </p>
                    <p>rule2 : {{ $rule2 }} </p>
                    <p>rule3 : {{ $rule3 }} </p>
                    <p>rule4 : {{ $rule4 }} </p>
                    <p>rule5 : {{ $rule5 }} </p>
                    <p>rule6 : {{ $rule6 }} </p>
                    <p>rule7 : {{ $rule7 }} </p>
                    <p>rule8 : {{ $rule8 }} </p>
                    <p>rule9 : {{ $rule9 }} </p>
                    <p>KMP1 : {{ $KMP1 }}</p>
                    <p>KMP2 : {{ $KMP2 }}</p>
                    <p>KMP3 : {{ $KMP3 }}</p>
                    <p>KMPTotal : {{ $KMPTotal }}</p>
                    <p>DEF1 : {{ $DEF1 }}</p>
                    <p>DEF2 : {{ $DEF2 }}</p>
                    <p>DEF3 : {{ $DEF3 }}</p>
                    <p>DEFTotal : {{ $DEFTotal }}</p>
                    <p>Output : {{ $Output }}</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('scripts')

@endpush
