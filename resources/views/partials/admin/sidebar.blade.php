<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                {!! Html::image($picture->path, $picture->alt, ["class" => "img-circle"]) !!}
            </div>

            <div class="pull-left info">
                <p>{{ $admin->name }}</p>
                <p>Yönetici</p>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header">MENÜ</li>

            <li class="{{ Active::route('Admin.Index') }}">
                <a href="{{ route('Admin.Index') }}" title="Yönetim panelinin anasayfasına git">
                    <i class="fa fa-fw fa-home"></i>&nbsp;
                    <span>Anasayfa</span>
                </a>
            </li>

            <li class="treeview {{ Active::routePattern('Admin.Users.*') }}">
                <a href="#">
                    <i class="fa fa-fw fa-user"></i>&nbsp;
                    <span>Kullanıcılar</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu">
                    <li class="{{ Active::route('Admin.Users.Index') }}">
                        <a href="{{ route('Admin.Users.Index') }}">
                            <i class="fa fa-fw fa-list-alt"></i>&nbsp;
                            Tümünü Gör
                        </a>
                    </li>

                    <li class="{{ Active::route('Admin.Users.Create') }}">
                        <a href="{{ route('Admin.Users.Create') }}">
                            <i class="fa fa-fw fa-user-plus"></i>&nbsp;
                            Yeni Kullanıcı
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ Active::routePattern('Admin.Images.*') }}">
                <a href="#">
                    <i class="fa fa-fw fa-camera"></i>&nbsp;
                    <span>Fotoğraflar</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu">
                    <li class="{{ Active::route('Admin.Images.Index') }}">
                        <a href="{{ route('Admin.Images.Index') }}">
                            <i class="fa fa-fw fa-list-alt"></i>&nbsp;
                            Tümünü Gör
                        </a>
                    </li>

                    <li class="{{ Active::route('Admin.Images.Create') }}">
                        <a href="{{ route('Admin.Images.Create') }}">
                            <i class="fa fa-fw fa-upload"></i>&nbsp;
                            Yükle
                        </a>
                    </li>

                    <li class="{{ Active::routePattern('Admin.Images.Slides.*') }}">
                        <a href="#">
                            <i class="fa fa-fw fa-photo"></i>&nbsp;
                            <span>Slaytlar</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>

                        <ul class="treeview-menu">
                            <li class="{{ Active::route('Admin.Images.Slides.Index') }}">
                                <a href="{{ route('Admin.Images.Slides.Index') }}">
                                    <i class="fa fa-fw fa-list-alt"></i>&nbsp;
                                    Tümünü Gör
                                </a>
                            </li>

                            <li class="{{ Active::route('Admin.Images.Slides.Create') }}">
                                <a href="{{ route('Admin.Images.Slides.Create') }}">
                                    <i class="fa fa-fw fa-plus"></i>&nbsp;
                                    Yeni Slayt
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ Active::routePattern('Admin.Products.*') }}">
                <a href="#">
                    <i class="fa fa-fw fa-cubes"></i>&nbsp;
                    <span>Ürünler</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu">
                    <li class="{{ Active::route('Admin.Products.Index') }}">
                        <a href="{{ route('Admin.Products.Index') }}">
                            <i class="fa fa-fw fa-list-alt"></i>&nbsp;
                            Tümünü Gör
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview {{ Active::routePattern('Admin.Orders.*') }}">
                <a href="#">
                    <i class="fa fa-fw fa-truck"></i>&nbsp;
                    <span>Siparişler</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu">
                    <li class="{{ Active::route('Admin.Orders.Index') }}">
                        <a href="{{ route('Admin.Orders.Index') }}">
                            <i class="fa fa-fw fa-list-alt"></i>&nbsp;
                            Tümünü Gör
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
