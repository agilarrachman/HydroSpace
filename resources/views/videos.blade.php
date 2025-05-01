<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>{{ $title }}</title>
    <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="HydroSpace" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/coloring.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">

    <style>
        .page-link:not(.active) {
            font-weight: 300;
            color: #223044;
            text-align: center;
        }

        .page-item:not(.active) .page-link:hover {
            color: #354e33 !important;
            box-shadow: inset 0 0 0 2px #354e33 !important;
        }

        .page-item.disabled .page-link {
            background-color: transparent !important;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>

        <!-- preloader begin -->
        <div id="de-loader"></div>
        <!-- preloader end -->

        {{-- navbar --}}
        @include('partials.navbar')
        {{-- navbar end --}}

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">

            <div id="top"></div>

            <section id="subheader" class="relative jarallax text-light">
                <img src="images/background/2.jpg" class="jarallax-img" alt="">
                <div class="container relative z-index-1000">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="crumb">
                                <li><a href="/">Beranda</a></li>
                                <li class="active">Edukasi</li>
                            </ul>
                            <h1 class="text-uppercase">Video Edukasi Hidroponik</h1>
                            <p class="col-lg-10 lead">Temukan berbagai video edukatif yang informatif dan menarik seputar hidroponik untuk memperluas wawasan Anda!</p>
                        </div>
                    </div>
                </div>
                <img src="images/logo-wm.webp" class="abs end-0 bottom-0 z-2 w-20" alt="">
                <div class="de-gradient-edge-top dark"></div>
                <div class="de-overlay"></div>
            </section>

            <section class="p-4" style="margin-bottom: 140px;">
                <div class="filter-search d-flex mt-5">
                    <div class="container mx-0 px-0 d-flex flex-column flex-md-row gap-1 gap-lg-3 flex-row align-items-start" style="margin-bottom: 4rem">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ request('category') ? $videoCategories->firstWhere('slug', request('category'))->name : '💡Semua Kategori' }}
                                <i class="bi bi-sort-down ms-2"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/edukasi">💡 Semua Kategori</a></li>
                                @foreach ($videoCategories as $category)
                                <li><a class="dropdown-item" href="?category={{ $category->slug }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <form class="container-search m-0 p-0" action="/edukasi" method="get" style="min-width: 300px; max-width: 525px !important">
                            {{-- Include category if it's selected --}}
                            @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            <div class="serach-bar d-flex gap-2">
                                <input type="text" name="search" id="name" class="de-quick-search ms-0 ms-md-3 py-2 w-100 rounded-20" placeholder="Mau belajar apa hari ini?" value="{{ request('search') }}">
                                <button class="btn btn-secondary px-3 rounded-pill" type="submit"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="container-fluid">
                    <div class="row g-4">

                        @foreach ($videos as $video)
                        <div class="col-lg-6" id="video">
                            <div class="hover rounded-1 overflow-hidden relative text-light wow fadeInRight" data-wow-delay=".3s">
                                <a href="/edukasi/{{ $video->slug }}" class="abs w-100 h-100 z-5"></a>
                                <img src="{{ asset('../storage/' . $video->thumbnail) }}" class="hover-scale-1-1 w-100" alt="" style="height: 403px;">
                                <div class="abs w-100 px-4 hover-op-1 z-4 hover-mt-40 abs-centered">
                                    <div class="mb-3">{{ $video->description }}</div>
                                    <b>Klik untuk menonton!</b>
                                </div>
                                <div class="abs bg-color z-2 top-0 w-100 h-100 hover-op-1"></div>
                                <div class="abs z-2 bottom-0 w-100 hover-op-0">
                                    <div class="bg-blur d-flex m-4 p-3 px-4 rounded-1 justify-content-between align-items-center">
                                        <div class="col-11 d-flex flex-column flex-lg-row">
                                            <div class="me-5 w-100 text-truncate">
                                                {{ $video->videoCategory->name }}
                                                <h5 class="text-truncate">{{ $video->title }}</h5>
                                            </div>
                                        </div>

                                        <div class="col-1 w-40px">
                                            <img src="images/misc/right-arrow.webp" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="gradient-trans-color-bottom abs w-100 h-40 bottom-0"></div>
                            </div>
                        </div>
                        @endforeach

                        <div class="pagination w-100 d-flex justify-content-center mt-5">
                            <div class="d-flex justify-content-center mt-4">
                                {{ $videos->links('pagination::bootstrap-4') }}
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="jarallax pt80 pb80 relative text-light">
                <img src="images/slider/1-flip.jpg" class="jarallax-img" alt="">
                <div class="container relative z-2">
                    <div class="row">
                        <div class="col-lg-8">
                            <img src="images/logo-icon.webp" class="w-60px mb-4" alt="">
                            <h2 class="text-uppercase mb-4">Pelajari Hidroponik –<br>Hubungi Kami untuk <br>Konsultasi Gratis</h2>
                            <a class="btn-main" href="/kontak">Konsultasi Gratis</a>
                        </div>
                    </div>
                </div>
                <div class="de-gradient-edge-bottom dark"></div>
                <div class="de-overlay"></div>
            </section>

        </div>
        <!-- content end -->

        {{-- footer --}}
        @include('partials.footer')
        {{-- footer end --}}
    </div>

    {{-- overlay --}}
    @include('partials.overlay')
    {{-- overlay end --}}


    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>

</body>

</html>