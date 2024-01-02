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
                                    <form class="mb-2 form-group" id="employer-search-form"><input
                                            name="utf8" type="hidden" value="✓">
                                        <div class="form-group position-relative m-0">
                                            <i class="lni lni-search-alt text-primary position-absolute"></i>
                                            <input class="form-control form-group fluent-form-control bg-light"
                                                   placeholder="Tìm công ty" type="text"
                                                   name="keyword">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="horizontal-divider my-3"></div>

                            <div>
                                <div class="d-flex align-items-center mb-3">
                                    <h5 class="mb-0">
                                        Nơi làm việc
                                    </h5>
                                </div>
                                <div class="beauty-scrollbar" id="provinces-filter">
                                    <select class="mb-2 form-group form-select">
                                        <?php use App\Models\City;use Illuminate\Support\Facades\DB;
                                        $quan = DB::table('table_district')->where('trangthai', 1)->get() ?>

                                        <option value="0">Tất cả</option>

                                        @foreach($quan as $list)
                                            <option value="{{ $list -> id }}"> {{ $list -> tendaydu }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="horizontal-divider my-3"></div>
                            {{--                            <div>--}}
                            {{--                                <div class="d-flex align-items-center mb-3">--}}
                            {{--                                    <h5 class="mb-0">--}}
                            {{--                                        Quy mô--}}
                            {{--                                    </h5>--}}
                            {{--                                </div>--}}
                            {{--                                <a class="mb-2 fluent-radio" href="/nha-tuyen-dung-hang-dau?company_size=C"><input--}}
                            {{--                                        class="mr-2" type="radio">--}}
                            {{--                                    <div class="checkmark"></div>--}}
                            {{--                                    <span class="text-line-clamp-1">--}}
                            {{--25 - 99 nhân viên--}}
                            {{--</span>--}}
                            {{--                                </a><a class="mb-2 fluent-radio" href="/nha-tuyen-dung-hang-dau?company_size=D"><input--}}
                            {{--                                        class="mr-2" type="radio">--}}
                            {{--                                    <div class="checkmark"></div>--}}
                            {{--                                    <span class="text-line-clamp-1">--}}
                            {{--100 - 499 nhân viên--}}
                            {{--</span>--}}
                            {{--                                </a><a class="mb-2 fluent-radio" href="/nha-tuyen-dung-hang-dau?company_size=E"><input--}}
                            {{--                                        class="mr-2" type="radio">--}}
                            {{--                                    <div class="checkmark"></div>--}}
                            {{--                                    <span class="text-line-clamp-1">--}}
                            {{--500 - 999 nhân viên--}}
                            {{--</span>--}}
                            {{--                                </a><a class="mb-2 fluent-radio" href="/nha-tuyen-dung-hang-dau?company_size=F"><input--}}
                            {{--                                        class="mr-2" type="radio">--}}
                            {{--                                    <div class="checkmark"></div>--}}
                            {{--                                    <span class="text-line-clamp-1">--}}
                            {{--1.000 - 4.999 nhân viên--}}
                            {{--</span>--}}
                            {{--                                </a><a class="mb-2 fluent-radio" href="/nha-tuyen-dung-hang-dau?company_size=G"><input--}}
                            {{--                                        class="mr-2" type="radio">--}}
                            {{--                                    <div class="checkmark"></div>--}}
                            {{--                                    <span class="text-line-clamp-1">--}}
                            {{--5.000 - 9.999 nhân viên--}}
                            {{--</span>--}}
                            {{--                                </a><a class="mb-2 fluent-radio" href="/nha-tuyen-dung-hang-dau?company_size=H"><input--}}
                            {{--                                        class="mr-2" type="radio">--}}
                            {{--                                    <div class="checkmark"></div>--}}
                            {{--                                    <span class="text-line-clamp-1">--}}
                            {{--10.000 - 19.999 nhân viên--}}
                            {{--</span>--}}
                            {{--                                </a></div>--}}
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-10 pl-lg-5">
                <div class="row employers-list">
                    <?php $employers = DB::table('table_employers')
                        ->select('table_employers.ten','table_employers.avt','table_employers.tenkhongdau','table_employers.city',DB::raw('count(table_jobs.id) as dangtuyen'))
                        ->rightJoin('table_jobs', 'table_employers.id', '=', 'table_jobs.id_nhatuyendung')
                        ->where('table_jobs.trangthai', 1)
                        ->groupBy('table_employers.ten','table_employers.avt','table_employers.tenkhongdau','table_employers.city')->get() ?>
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
