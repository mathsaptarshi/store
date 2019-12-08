<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        @include('partials.styles')        
        <title>Your Store</title>        
    </head>
    <body>
        <div class="wrapper">
        @include('partials.nav')
            
            <!-- Start Sidebar + Content -->
            <div class="container margin-top-20">
                <div class="row">                    
                    @yield('content')                                                     
                </div>
                <!-- <div class="widget">                            
                </div> -->
            </div>
        </div>
                <!-- </div> -->
            <!-- </div> -->
            <!-- End Sidebar + Content -->            
            @include('partials.footer')
        <!-- </div> -->
        @include('partials.scripts')            
    </body>
</html> 