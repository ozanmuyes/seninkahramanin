<?php
    if ((!isset($headers) && !isset($footers)) || !isset($data)) {
        return;
    }

    if (!isset($id)) {
        $id = uniqid("table-");
    }

    if (!isset($isFirst)) {
        $isFirst = false;
    } else {
        $isFirst = !!$isFirst;
    }


    // TODO Add table specific options check here
    if (!isset($headers) && isset($footers)) {
        $headers = $footers;
    } else if (isset($headers) && !isset($footers)) {
        if (isset($showFooter) && $showFooter === true) {
            $footers = $headers;
        } else {
            $footers = null;
        }
    }

    if (!isset($operations)) {
        $operations = false;
    } else {
        $operations = !!$operations;
    }

    $data = [
        [
            "ozan müs",
            "foo str bar no 18",
            "OK",
            "Delivered",
            "Ürün Listesi >>",
            "11.10.2045",
            "11.10.2045",
            "Gör / Düzenle / Sil"
        ],
        [
            "mutlu erdem",
            "bar str baz no 35",
            "OK",
            "On the Way",
            "Ürün Listesi >>",
            "11.10.2045",
            "11.10.2045",
            "Gör / Düzenle / Sil"
        ]
    ];
?>

<table id="{{ $id }}" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            @foreach ($headers as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
    </thead>

    @unless ($footers === null)
        <tfoot>
            <tr>
                @foreach ($footers as $footer)
                    <th>{{ $footer }}</th>
                @endforeach
            </tr>
        </tfoot>
    @endunless

    <tbody>
        @foreach ($data as $dat)
            <tr>
                @foreach($dat as $da)
                    <td>{{ $da }}</td>
                @endforeach

                @unless ($operations == false)
                    {{-- <td>TODO Add operations links</td> --}}
                @endunless
            </tr>
        @endforeach
    </tbody>
</table>

@if ($isFirst)
    {{-- TODO Add stylesheets and JavaScripts here --}}
@endif