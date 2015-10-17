<nav class="navbar navbar-fixed-top navbar-brand-bow">
    <!--We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns.-->
    <div class="container">
        <div class="navbar-header">
            <button aria-expanded="false" class="navbar-toggle collapsed" data-target="#main-nav" data-toggle="collapse" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ route('Site.Index') }}" title="Senin Kahramanın">
                {{-- Logo --}}
                {!! Html::image("img/logo-menu.png", "Logo") !!}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ Active::route('Site.Index') }}">
                    <a href="{{ route('Site.Index') }}">{{ trans("menu.index") }}</a>
                </li>

                <li class="{{ Active::route('Site.Guide') }}">
                    <a href="{{ route('Site.Guide') }}">{{ trans("menu.guide") }}</a>
                </li>

                <li class="{{ Active::route('Site.Design') }}">
                    <a href="{{ route('Site.Design') }}">{{ trans("menu.design") }}</a>
                </li>

                <li class="{{ Active::route('Site.AboutUs') }}">
                    <a href="{{ route('Site.AboutUs') }}">{{ trans("menu.about_us") }}</a>
                </li>

                <li class="{{ Active::route('Site.Cart.Index') }}">
                    <a href="{{ route('Site.Cart.Index') }}">{{ trans("menu.cart") }} <span class="badge">{{ Cart::getContent()->count() }}</span></a>
                </li>

                @if (Auth::check())
                    <li class="{{ Active::route('Site.Profile') }}">
                        <a href="{{ route('Site.Profile') }}">{{ trans("menu.my_profile") }}</a>
                    </li>

                    <li>
                        <a id="btn-logout" href="{{ route('Logout') }}">{{ trans("menu.logout") }}</a>
                    </li>
                @else
                    <li>
                        {{-- <a href="{{ route('Login.Provider', 'facebook') }}">{{ trans("menu.login") }}</a> --}}
                        <a href="{{ route('Login') }}">{{ trans("menu.login") }}</a>
                    </li>

                    <li>
                        <a href="{{ route('Register') }}">{{ trans("menu.register") }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
