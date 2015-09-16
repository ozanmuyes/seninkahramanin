@extends("layouts.admin.default")

@section("title", "Anasayfa")
@section("subtitle", "Bütün ayarları anasayfanızda görebilirsiniz")

@section("breadcrumb")
    {!! Breadcrumbs::render("admin.index") !!}
@endsection

@section("content")
    <div class="row">
        <div class="col-md-12">
            <ul>
                <li>
                    Bekleyen sipariş sayısını göster
                </li>

                <li>
                    Basılan toplam tişört adedini göster
                </li>

                <li>
                    Kargoda olan toplam tişört adedini göster
                </li>

                <li>
                    Müşteri istatistiğini göster
                </li>

                <li>
                    Toplu e-mail gönder
                </li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{ trans_choice("admin.orders", 2) }}</h3>
                </div>

                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Item</th>
                                    <th>Status</th>
                                    <th>Popularity</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <a href="pages/examples/invoice.html">OR9842</a>
                                    </td>

                                    <td>
                                        Call of Duty IV
                                    </td>

                                    <td>
                                        <span class="label label-success">Shipped</span>
                                    </td>

                                    <td>
                                        <div data-height="20" data-color="#00a65a" class="sparkbar"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="pages/examples/invoice.html">OR1848</a>
                                    </td>

                                    <td>
                                        Samsung Smart TV
                                    </td>

                                    <td>
                                        <span class="label label-warning">Pending</span>
                                    </td>

                                    <td>
                                        <div data-height="20" data-color="#f39c12" class="sparkbar"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="pages/examples/invoice.html">OR7429</a>
                                    </td>

                                    <td>
                                        iPhone 6 Plus
                                    </td>

                                    <td>
                                        <span class="label label-danger">Delivered</span>
                                    </td>

                                    <td>
                                        <div data-height="20" data-color="#f56954" class="sparkbar"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="pages/examples/invoice.html">OR7429</a>
                                    </td>

                                    <td>
                                        Samsung Smart TV
                                    </td>

                                    <td>
                                        <span class="label label-info">Processing</span>
                                    </td>

                                    <td>
                                        <div data-height="20" data-color="#00c0ef" class="sparkbar"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="pages/examples/invoice.html">OR1848</a>
                                    </td>

                                    <td>
                                        Samsung Smart TV
                                    </td>

                                    <td>
                                        <span class="label label-warning">Pending</span>
                                    </td>

                                    <td>
                                        <div data-height="20" data-color="#f39c12" class="sparkbar"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="pages/examples/invoice.html">OR7429</a>
                                    </td>

                                    <td>
                                        iPhone 6 Plus
                                    </td>

                                    <td>
                                        <span class="label label-danger">Delivered</span>
                                    </td>

                                    <td>
                                        <div data-height="20" data-color="#f56954" class="sparkbar"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="pages/examples/invoice.html">OR9842</a>
                                    </td>

                                    <td>
                                        Call of Duty IV
                                    </td>

                                    <td>
                                        <span class="label label-success">Shipped</span>
                                    </td>

                                    <td>
                                        <div data-height="20" data-color="#00a65a" class="sparkbar"><canvas style="display: inline-block; width: 34px; height: 20px; vertical-align: top;" width="34" height="20"></canvas></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">

        </div>
    </div>
@endsection