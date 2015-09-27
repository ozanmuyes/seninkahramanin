@extends("layouts.admin.default")

@section("title", "Kullanıcılar")
@section("subtitle", "Tüm kullanıcıları görebilir ve gerekli olanlarda değişiklik yapabilirsiniz")

@section("breadcrumb")
    {!! Breadcrumbs::render("admin.users.index") !!}
@endsection

@section("content")
    <div class="box">
        <div class="box-body">
            <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Adı ve Soyadı</th>
                        <th>Kullanıcı Adı</th>
                        <th>E-Mail Adresi</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Değiştirilme Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th>Adı ve Soyadı</th>
                        <th>Kullanıcı Adı</th>
                        <th>E-Mail Adresi</th>
                        <th>Oluşturulma Tarihi</th>
                        <th>Değiştirilme Tarihi</th>
                        <th>İşlemler</th>
                    </tr>
                </tfoot>

                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><a href="{{ route('Site.Users.Show', ['slug' => $user->username]) }}" title="Profilini sitede görüntüle">{{ $user->name }}</a></td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>{{ $user->updated_at }}</td>
                            <td>
                                <a href="{{ route('Admin.Users.Edit', ['slug' => $user->username]) }}" title="Düzenle">
                                    <i class="fa fa-fw fa-pencil"></i>
                                </a>

                                <a href="{{ route('Admin.Users.Delete', ['slug' => $user->username]) }}" title="Sil" class="text-danger" data-bootbox-type="confirmation" data-bootbox-title="{{ $user->name }}">
                                    <i class="fa fa-fw fa-trash-o"></i>
                                </a>
                            </td>
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
    {!! Html::script("js/admin/bootbox.js") !!}

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
                    { "orderable": false }
                ],
                "order": [[ 3, "desc" ]]
            });
        });

        bootbox.setDefaults({
            locale: "tr"
        });

        $("a[data-bootbox-type='confirmation']").on("click", function(e) {
            e.preventDefault();
            $this = $(this);

            bootbox.confirm({
                title: "Duyuru Sil",
                message: "'" + $this.data("bootboxTitle") + "'<br>isimli kullanıcıyı silmek istediğinize emin misiniz?",
                className: "modal-danger",
                buttons: {
                    cancel: {
                        label: "Vazgeç",
                        className: "btn-default pull-left",
                    },
                    confirm: {
                        label: "Sil",
                        className: "btn-outline",
                    }
                },
                callback: function (result) {
                    if (result === true) {
                        window.location = $this.prop("href");
                    }
                }
            });
        });
    </script>
@endsection
