@extends("layouts.site.default")

@section("title", trans("menu.about_us"))

@section("content")
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="row">
                <div class="col-md-12 about-giris">
                    <div class="col-md-4">
                        <img src="img/team-member.gif">
                    </div>

                    <div class="col-md-8">
                         <blockquote>
                            <p class="about-motto">
                                “In odio. Mauris feugiat. Nunc posuere, felis sit amet faucibus convallis, tortor enim viverra quam, hendrerit interdum dui quam ut lacus. Vivamus accumsan. Donec molestie pede vel urna curabitur eget sem ornare felis."
                            </p>
                         </blockquote>
                        <p class="right">
                            "Vivamus accumsan / Company Director"
                        </p>
                    </div>

                </div>
            </div>

            {{-- Dotted line --}}
            <hr>

            {{-- tabbed part --}}
            <div class="row">
                <div class="col-md-12">

                    <div class="col-md-3">
                        <a href="#">

                            <p class="about-motto">
                                <img src="img/social-icon.png">
                                 Hakkımızda
                            </p>

                        </a>

                    </div>

                    <div class="col-md-9">
                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptates fugiat, sit nemo quibusdam nostrum porro? Magnam sequi architecto perspiciatis unde, illum minima ipsa suscipit, vero consequuntur perferendis nesciunt! Asperiores!</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section("styles")
    {!! Html::style('css/site/about_us.css') !!}
@endsection
