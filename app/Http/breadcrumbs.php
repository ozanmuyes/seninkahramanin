<?php

Breadcrumbs::register("admin.index", function($breadcrumbs) {
    $breadcrumbs->push("Yönetim Paneli", route("Admin.Index"));
});

Breadcrumbs::register("admin.images.index", function($breadcrumbs) {
    $breadcrumbs->parent("admin.index");
    $breadcrumbs->push("Fotoğraflar", route("Admin.Images.Index"));
});
Breadcrumbs::register("admin.images.create", function($breadcrumbs) {
    $breadcrumbs->parent("admin.index");
    $breadcrumbs->push("Fotoğraflar", route("Admin.Images.Index"));
    $breadcrumbs->push("Fotoğraf Yükle", route("Admin.Images.Create"));
});

Breadcrumbs::register("admin.users.index", function($breadcrumbs) {
    $breadcrumbs->parent("admin.index");
    $breadcrumbs->push("Kullanıcılar", route("Admin.Users.Index"));
});
Breadcrumbs::register("admin.users.show", function($breadcrumbs) {
    $breadcrumbs->parent("admin.index");
    $breadcrumbs->push("Kullanıcılar", route("Admin.Users.Index"));
    $breadcrumbs->push("Kullanıcı Profili", route("Admin.Users.Show"));
});
Breadcrumbs::register("admin.users.create", function($breadcrumbs) {
    $breadcrumbs->parent("admin.index");
    $breadcrumbs->push("Kullanıcılar", route("Admin.Users.Index"));
    $breadcrumbs->push("Yeni Kullanıcı", route("Admin.Users.Create"));
});
Breadcrumbs::register("admin.users.edit", function($breadcrumbs) {
    $breadcrumbs->parent("admin.index");
    $breadcrumbs->push("Kullanıcılar", route("Admin.Users.Index"));
    $breadcrumbs->push("Kullanıcı Düzenle", route("Admin.Users.Create"));
});

Breadcrumbs::register("admin.orders.index", function($breadcrumbs) {
    $breadcrumbs->parent("admin.index");
    $breadcrumbs->push("Siparişler", route("Admin.Orders.Index"));
});
