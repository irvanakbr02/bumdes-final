<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
//Pesan
$routes->get('/pesan', 'Pesan::pesan');
$routes->post('/pesan/save', 'Pesan::save');
//Admin Pesan
$routes->get('/admin/pesan', 'Pesan::index');
$routes->delete('/admin/pesan/(:num)', 'Pesan::Delete/$1');
//Admin laporan
$routes->get('/admin/laporan', 'AdminLaporan::laporan');
$routes->get('/admin/laporan/edit/(:segment)', 'AdminLaporan::LaporanEdit/$1');
$routes->delete('/admin/laporan/(:num)', 'AdminLaporan::LaporanDelete/$1');
$routes->get('/admin/laporan/create', 'AdminLaporan::LaporanCreate');
$routes->post('/admin/laporan/save', 'AdminLaporan::LaporanSave');
$routes->post('/admin/laporan/update/(:segment)', 'AdminLaporan::LaporanUpdate/$1');
//Admin Berita or Artikel
$routes->get('/admin/berita', 'AdminBerita::berita');
$routes->get('/admin/berita/edit/(:segment)', 'AdminBerita::Edit/$1');
$routes->delete('/admin/berita/(:num)', 'AdminBerita::Delete/$1');
$routes->get('/admin/berita/create', 'AdminBerita::Create');
$routes->post('/admin/berita/save', 'AdminBerita::Save');
$routes->post('/admin/berita/update/(:segment)', 'AdminBerita::Update/$1');
//All Menu
$routes->get('admin/menu', 'Menu::index');
$routes->get('/admin/menu/create', 'Menu::create');
$routes->post('/admin/menu/save', 'Menu::save');
$routes->get('admin/menu/detail/(:any)', 'Menu::detail/$1');
$routes->get('/admin/menu/edit/(:segment)', 'Menu::Edit/$1');
$routes->delete('/admin/menu/(:num)', 'Menu::Delete/$1');
$routes->post('/admin/menu/update/(:segment)', 'Menu::Update/$1');
//Kategori on menu
$routes->get('admin/menu/kategori', 'Kategori::index');
$routes->get('/admin/menu/kategori/create', 'Kategori::create');
$routes->post('/admin/menu/kategori/save', 'Kategori::save');
$routes->get('/admin/menu/kategori/edit/(:segment)', 'Kategori::Edit/$1');
$routes->delete('/admin/menu/kategori/(:num)', 'Kategori::Delete/$1');
$routes->post('/admin/menu/kategori/update/(:segment)', 'Kategori::Update/$1');
//Admin Profil Visi Misi
$routes->get('admin/profil/visi', 'Visi::index');
//Admin Profil Anggota
$routes->get('admin/profil/anggota', 'Anggota::index');
//Admin Profil Periode
$routes->get('admin/profil/periode', 'Periode::index');
$routes->get('/admin/profil/periode/create', 'Periode::create');
$routes->post('/admin/profil/periode/save', 'Periode::save');
$routes->get('/admin/profil/periode/edit/(:segment)', 'Periode::Edit/$1');
$routes->delete('/admin/profil/periode/(:num)', 'Periode::Delete/$1');
$routes->post('/admin/profil/periode/update/(:segment)', 'Periode::Update/$1');




/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
