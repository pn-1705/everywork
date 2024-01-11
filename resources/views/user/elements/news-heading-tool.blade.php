<section class="cb-career-advice-nav" style="    z-index: 500;
    position: -webkit-sticky;
    position: sticky;
    top: 95px;
    left: 0;
    width: 100%;
    padding: 0 !important;">
    <div class="container">
        <div class="category-name">
            <h4>Danh mục</h4>
            <h4 class="active">Danh mục</h4><em class="mdi mdi-chevron-down"></em>
        </div>
        <div class="button-search"><em class="mdi icon-change"></em>
            <div class="show-hide">
                <div class="searchbox">
                    <input type="text" id="keynews_mb" placeholder="Nhập từ khóa" name="keynews" maxlength="200"
                           value="">
                    <button type="button" id="search_news_mb" class="btn-gradient">
                        <em class="mdi mdi-magnify"></em></button>
                </div>
            </div>
        </div>
        <div class="main-nav">
            <ul class="list-nav-left">
                <li>
                    <div class="title"><a href="">Mới nhất</a></div>
                </li>
                <?php use Illuminate\Support\Facades\DB;
                $listNewsCate = DB::table('table_news_cate')->get() ?>
                @foreach($listNewsCate as $list)
                    <li class="dropdown {{--{{ Route::is('user.pages.viewNewsCate') ? 'active' : '' }}--}}">
                        <div class="title"><a
                                href="{{ route('user.pages.viewNewsCate', $list -> tenkhongdau) }}">{{ $list -> tendaydu }}</a>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="list-nav-right">
                <li class="button-search">
                    <div class="">
                        <div class="searchbox">

                            <input type="text" id="keynews" placeholder="Nhập từ khóa" name="keynews" maxlength="200"
                                   value="">
                            <button type="button" id="search_news" class="btn-gradient"><em
                                    class="mdi mdi-magnify"></em></button>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
</section>

