@extends("layouts.admin.default")

@section("title", "Siparişler")
@section("subtitle", "Kullanıcıların siparişlerini görün ve sipariş durumlarını yönetin")

@section("breadcrumb")
    {!! Breadcrumbs::render("admin.orders.index") !!}
@endsection

@section("content")
    <div class="box">
        <div class="box-body">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Sipariş Numarası</th>
                        <th>Adı ve Soyadı</th>
                        <th>Adres</th>
                        <th>Durum</th>
                        <th>Kargo Durumu</th>
                        <th>Ürünler</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Değiştirilme Tarihi</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>Sipariş Numarası</th>
                        <th>Adı ve Soyadı</th>
                        <th>Adres</th>
                        <th>Durum</th>
                        <th>Kargo Durumu</th>
                        <th>Ürünler</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Değiştirilme Tarihi</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td><a href="{{ route('Admin.Users.Show', ['slug' => $order->address->user->username, '#siparisler']) }}" title="Kullanıcı özeti">{{ $order->address->user->name }}</a></td>
                            {{-- <td>{{ $order->address }}</td>
                            <td>{{ $order->getStatusAsString }}</td>
                            <td>{{ "order->cargoStatus" }}</td>
                            <td>{{ "order->products link" }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->updated_at }}</td> --}}

                            <td>{!! link_to_route("Site.Index", $order->address, $order->id, ["title" => "Adresi görüntüle"]) !!}</td>
                            <td>{{ $order->getStatusAsString() }}</td>
                            <td>{{ $order->status >= App\Order::STATUS_SHIPPED ? $order->getCargoStatus() : "N/A" }}</td>
                            <td>{!! link_to_route("Site.Index", "Ürünleri görüntüle") !!}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ $order->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section("styles")
    {!! Html::style("css/admin/datatables/dataTables.bootstrap.css") !!}
    {!! Html::style("css/admin/datatables/extensions/dataTables.responsive.css") !!}
@endsection

@section("scripts")
    {!! Html::script("js/admin/datatables/jquery.dataTables.min.js") !!}
    {!! Html::script("js/admin/datatables/dataTables.bootstrap.min.js") !!}
    {!! Html::script("js/admin/datatables/extensions/dataTables.responsive.min.js") !!}

    <script>
        $(document).ready(function() {
            $('#example').dataTable({
                // Extensions
                "responsive": true,
                // Settings
                "language": {
                    "sProcessing":   "İşleniyor...",
                    "sLengthMenu":   "Sayfada _MENU_ Kayıt Göster",
                    "sZeroRecords":  "Eşleşen Kayıt Bulunmadı",
                    "sInfo":         "  _TOTAL_ Kayıttan _START_ - _END_ Arası Kayıtlar",
                    "sInfoEmpty":    "Kayıt Yok",
                    "sInfoFiltered": "( _MAX_ Kayıt İçerisinden Bulunan)",
                    "sInfoPostFix":  "",
                    "sSearch":       "Bul:",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "İlk",
                        "sPrevious": "Önceki",
                        "sNext":     "Sonraki",
                        "sLast":     "Son"
                    }
                },
                "columns": [
                    null,
                    null,
                    null,
                    null,
                    null,
                    { "orderable": false },
                    null,
                    null
                ],
                "order": [[ 0, "asc" ]]
            });
        });
    </script>
@endsection
