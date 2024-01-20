@extends('user.layout')

@section('pageTitle', 'Nhà tuyển dụng hàng đầu')

@section('content')
    <body class="search-result-list-page" style="">
    <div class="container my-5">
        <div class="row mt-4">
            <div class="col-lg-2">
                <div id="employer-filter-container">
                    <div id="employer-filter">
                        <div class="px-3 pt-3 p-lg-0">
                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="mb-0">
                                        Tìm kiếm
                                    </h5>
                                </div>
                                <div class="beauty-scrollbar" id="provinces-filter">
                                    <form method="get" class="mb-2 form-group" id="employer-search-form" action="{{ route('user.searchNTD') }}">
                                        @csrf
                                        <div class="form-group position-relative m-0">
                                            <i class="lni lni-search-alt text-primary position-absolute"></i>
                                            <input value="@if(isset($key)) {{ $key }} @endif" class="form-control form-group fluent-form-control bg-light"
                                                   placeholder="Tìm công ty" type="text"
                                                   name="keyword">
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <?php use App\Models\City;use Illuminate\Support\Facades\DB;
                            $quan = DB::table('table_district')->where('trangthai', 1)->get() ?>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-10 pl-lg-5">
                <div class="row employers-list">

                    @foreach($employers as $list)
                        <div class="col-6 col-lg-3 employer-item position-relative mb-4">
                            <div class="employer-logo border" style="padding-top: 100%; position: relative;">
                                <img style="max-width: 100%;
                                    position: absolute;
                                    top: 50%;
                                    left: 50%;
                                    -webkit-transform: translate(-50%, -50%);
                                    transform: translate(-50%, -50%);
                                    max-width: 70%;
                                    max-height: 70%;"
                                     alt="{{ $list -> ten }}" loading="lazy"
                                     src="{{ asset('public/avatar/'. $list -> avt) }}">
                            </div>
                            <a class="clickable-outside text-decoration-none"
                               href="{{ route('pages.nha-tuyen-dung.detail',$list -> tenkhongdau) }}"><h6
                                    class="text-line-clamp-2 mt-3 mb-1">
                                    {{ $list -> ten }}
                                </h6>
                            </a>
                            <p class="employer-jobs-count text-primary m-0">
                                {{ $list ->dangtuyen }} việc đang tuyển
                            </p>
                            <p class="employer-location text-secondary">
                                <?php
                                $listCitys = City::all()->where('trangthai', 1)
                                ?>
                                @foreach($listCitys as $jobs)
                                    @if ($jobs -> id == $list -> city)
                                        {{$jobs->tendaydu}}
                                    @endif
                                @endforeach
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </body>

@endsection
