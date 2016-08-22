<!DOCTYPE html>
<html lang="en">
@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('layouts.partials.sidebar')
                @include('layouts.partials.mainheader')

                <div class="right_col" role="main">
                    <div class="">
                        @include('layouts.partials.contentheader')
                        <div class="clearfix"></div>
                        <section class="content">
                            @yield('main-content')
                        </section>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.partials.footer')

        @section('scripts')
            @include('layouts.partials.scripts')
        @show
    </body>
</html>