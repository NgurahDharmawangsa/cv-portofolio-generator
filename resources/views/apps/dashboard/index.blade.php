@extends('themes.default')

@section('title', 'Dashboard')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css'])
@endsection

@section('content')
    <div class="container-fluid">
        @include('components.breadcrumb')
        @if (auth()->user()->isMahasiswa())
            <h1>Tampilan Mahasiswa</h1>
        @else
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon orange">
                            <i class="lni lni-user"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Total Mahasiswa</h6>
                            {{-- <h3 class="text-bold mb-10">{{ $total_mahasiswa }}</h3> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon purple">
                            <i class="lni lni-dollar"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Invoice</h6>
                            {{-- <h3 class="text-bold mb-10">{{ \App\Helpers\Helper::convertCurrency($total_invoice) }}</h3> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon success">
                            <i class="lni lni-dollar"></i>
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Remining Invoice</h6>
                            {{-- <h3 class="text-bold mb-10">{{ \App\Helpers\Helper::convertCurrency($total_remaining) }}</h3> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
            </div>
            <!-- End Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style">
                        <div class="title d-flex flex-wrap justify-content-between">
                            <div class="left">
                                <h4 class="text-bold">Payment Transaction</h4>
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="chart">
                            <canvas id="Chart1" style="width: 100%; height: 400px; margin-left: -35px;"></canvas>
                        </div>
                        <!-- End Chart -->
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection

@section('url')
    {{-- <input type="hidden" id="chart-label" value="{{ json_encode($chart['label']) }}">
    <input type="hidden" id="chart-value" value="{{ json_encode($chart['value']) }}">
    <input type="hidden" id="table-url" value="{{ route('invoice.student.table') }}"> --}}
@endsection

@section('script')
    {{-- @vite(['resources/js/apps/dashboard/dashboard.js'])
    @vite(['resources/js/apps/invoice/invoice-student.js']) --}}
@endsection
