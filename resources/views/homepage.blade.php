{!! "<a href='" . LaravelLocalization::getLocalizedURL("tr", "/foo") . "'>Taytıl</a>" !!}
<br>
{!! "<a href='" . LaravelLocalization::getLocalizedURL("en", "/foo") . "'>Taytıl</a>" !!}
<br>
<ul class="language_bar_chooser">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                {{{ $properties['native'] }}}
            </a>
        </li>
    @endforeach
</ul>
