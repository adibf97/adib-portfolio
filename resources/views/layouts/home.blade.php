
<!DOCTYPE html>
<html lang="en">
    @include('layouts._partials.headHome')

    <body>
        <!-- Page navigation -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/imgs/logo.svg') }}" alt="Adib Farhan Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}#service">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}#blog">Others</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of page navibation -->

        {{-- Main Content --}}
        @yield('content')

        <!--Footer-->
        @include('layouts._partials.footerHome')
        <!--END Footer-->
    </body>


</html>
