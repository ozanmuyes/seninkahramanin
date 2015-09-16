<?php
    if (!isset($images)) {
        return;
    }

    if (!isset($id)) {
        $id = uniqid("owl-");
    }

    if (!isset($isFirst)) {
        $isFirst = false;
    }


    if (!isset($singleItem)) {
        $singleItem = false;
    }

    if (!isset($items)) {
        $items = 4;
    }

    if (!isset($navigation)) {
        $navigation = false;
    }

    if (!isset($navigationText)) {
        $navigationText = ["", ""];
    }

    if (!isset($itemWrapper)) {
        $itemWrapper = "%s";
    }
?>

<div id="{{ $id }}" class="owl-carousel">
    @foreach ($images as $image)
        <?php printf($itemWrapper, "<img class='img-responsive' src='img/" . $image["path"] . "' alt='" . $image["alt"] . "'>"); ?>
    @endforeach
</div>

@if (!!$isFirst)
    @section("styles")
        @parent

        {!! Html::style("css/partials/site/owl/owl.carousel.css") !!}
        {!! Html::style("css/partials/site/owl/owl.theme.css") !!}
        {!! Html::style("css/partials/site/owl/owl.transitions.css") !!}
    @endsection
@endif

@section("scripts")
    @parent

    @if (!!$isFirst)
        {!! Html::script("js/partials/site/owl/owl.carousel.min.js") !!}
    @endif

    <script>
        $(document).ready(function() {
            $("#{{ $id }}").owlCarousel({
                items: {{ $items }},
                singleItem: {{ !!$singleItem ? "true" : "false" }},
                navigation: {{ !!$navigation ? "true" : "false" }},
                navigationText: <?php printf('["%s","%s"]', $navigationText[0], $navigationText[1]) ?>
            });
        });
    </script>
@endsection

