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
        $href = "javascript: void(0)";
    }

    if (!isset($_selectable)) {
        $_selectable = false;
    }

    if (!isset($_selectable_type)) {
        $_selectable_type = "generic";
    }

    if (!isset($_selectable_name)) {
        $_selectable_name = null;
    }
?>

@if ($href !== null)
    @if ($_selectable)
        <a href="{{ $href }}" class="selectable" data-selectable-type="{{ $_selectable_type }}" data-selectable-name="{{ $_selectable_name }}">
    @else
        <a href="{{ $href }}" data-selectable-type="{{ $_selectable_type }}" data-selectable-name="{{ $_selectable_name }}">
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
