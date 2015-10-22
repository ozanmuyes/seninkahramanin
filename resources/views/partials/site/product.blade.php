<?php
    if (!isset($name) || !isset($image)) {
        return;
    }

    if (!isset($buttons)) {
        $buttons = false;
    } elseif ($buttons !== false) {
        if (!isset($id) || !isset($slug)) {
            return;
        }
    }

    if (is_object($image)) {
        $imagePath = $image->path;
        $imageAlt = $image->alt;
    } else {
        $imagePath = $image["path"];
        $imageAlt = $image["alt"];
    }

    if (!preg_match("~^(?:f|ht)tps?://~i", $imagePath)) {
        $imagePath = "img/" . trim($imagePath, "\/ ");
    }

    if (!isset($href)) {
        $href = "";
    }

    if (!isset($onClick)) {
        $onClick = null;
    }
?>

@if ($href !== null)
    @if ($onClick !== null)
        <a href="{{ $href }}" onclick="{{ $onClick }}">
    @else
        <a href="{{ $href }}">
    @endif
@endif

<div class="product">
    <div class="photo">
        {!! Html::image($imagePath, $imageAlt, ["class" => "img-responsive"]) !!}
    </div>

    <div class="info">
        <h5>{{ $name }}</h5>

        @if ($buttons)
            <hr>

            <div class="buttons">
                <div class="row vertically-divide">
                    @for ($i = 0, $buttonsCount = count($buttons); $i < $buttonsCount; $i++)
                        <div class="col-md-{{ floor(12/$buttonsCount) }} text-center">
                            <i class="{{ $buttons[$i]['icon'] }}"></i>&nbsp;
                            <a href="{{ str_replace('\slug', $slug, str_replace('\id', $id, $buttons[$i]['href'])) }}">{{ $buttons[$i]["text"] }}</a>
                        </div>
                    @endfor
                </div>
            </div>
        @endif
    </div>
</div>

@unless ($href === null)
    </a>
@endunless
