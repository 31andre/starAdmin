@include("partials._header")

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
                @include("partials._navbar")
                @include("partials._sidebar")
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            @yield('content')
                        </div>
                    </div>
                </div>
        </div>
    </div>
    @include('partials._footer')
     @include('partials._script')
</body>