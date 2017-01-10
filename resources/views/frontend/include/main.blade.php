<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            {{--<div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Pages</li>
                    </ul>
                </div>
            </div>--}}
            <div class="row">
                <div class="col-md-12">
                    <h1>{{isset($title)?$title:''}}</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-9">

                @yield('content')

            </div>

            <div class="col-md-3">
                @include('frontend.include.right_sidebar')
            </div>
        </div>

    </div>

</div>
