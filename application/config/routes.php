<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Homepage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['yonetim-paneli'] = 'admin/Admin/homepage_admin';
$route['yonetim-paneli-giris'] = 'admin/Admin';
$route['yonetim-paneli/cikis'] = 'admin/Admin/logout';
$route['yonetim-paneli/profil-duzenle'] = 'admin/Admin/edit_profile';
$route['yonetim-paneli/hakkimizda'] = 'admin/Admin/about';
$route['yonetim-paneli/iletisim'] = 'admin/Admin/contact';
$route['yonetim-paneli/mesajlar'] = 'admin/Admin/messages';
$route['yonetim-paneli/banner-duzenle/(:any)'] = 'admin/Admin/banner_update/$1';
$route['yonetim-paneli/aydinlatma-metni'] = 'admin/Admin/contract';
$route['yonetim-paneli/site-ayarlari'] = 'admin/Admin/site_settings';
$route['yonetim-paneli/yeteneklerimiz'] = 'admin/Admin/facility';
$route['yonetim-paneli/banner'] = 'admin/Admin/banner';

$route['yonetim-paneli/neden-biz'] = 'admin/Admin/preference';
$route['yonetim-paneli/neden-biz-duzenle/(:any)'] = 'admin/Admin/preference_update/$1';

$route['yonetim-paneli/dikkat-edilmesi-gereken-ekle'] = 'admin/Admin/add_attention';
$route['yonetim-paneli/dikkat-edilmesi-gereken-listele'] = 'admin/Admin/list_attention';
$route['yonetim-paneli/dikkat-edilmesi-gereken-duzenle/(:any)'] = 'admin/Admin/update_attention/$1';

$route['yonetim-paneli/hukuki-metin-ekle'] = 'admin/Admin/add_legal_text';
$route['yonetim-paneli/hukuki-metin-listele'] = 'admin/Admin/list_legal_text';
$route['yonetim-paneli/hukuki-metin-duzenle/(:any)'] = 'admin/Admin/update_legal_text/$1';

$route['yonetim-paneli/slider-ekle'] = 'admin/Admin/add_slider';
$route['yonetim-paneli/slider-listele'] = 'admin/Admin/list_slider';
$route['yonetim-paneli/slider-duzenle/(:any)'] = 'admin/Admin/update_slider/$1';

$route['yonetim-paneli/sinif-ekle'] = 'admin/Admin/class_add';
$route['yonetim-paneli/siniflari-listele'] = 'admin/Admin/class_list';
$route['yonetim-paneli/sinif-duzenle/(:any)'] = 'admin/Admin/class_update/$1';
$route['yonetim-paneli/etiket-listele/(:any)'] = 'admin/Admin/ticket_list/$1';
$route['yonetim-paneli/etiket-duzenle/(:any)'] = 'admin/Admin/update_ticket/$1';


$route['yonetim-paneli/galeri-ekle'] = 'admin/Admin/add_gallery';
$route['yonetim-paneli/galeri-listele'] = 'admin/Admin/list_gallery';
$route['yonetim-paneli/galeri-duzenle/(:any)'] = 'admin/Admin/update_gallery/$1';
$route['yonetim-paneli/galeri-gruplar'] = 'admin/Admin/add_gallery_group';
$route['yonetim-paneli/galeri-grup-duzenle/(:any)'] = 'admin/Admin/update_gallery_group/$1';

$route['yonetim-paneli/etkinlik-ekle'] = 'admin/Admin/add_event';
$route['yonetim-paneli/etkinlikleri-listele'] = 'admin/Admin/list_event';
$route['yonetim-paneli/etkinlik-duzenle/(:any)'] = 'admin/Admin/update_event/$1';

$route['yonetim-paneli/ogretmen-ekle'] = 'admin/Admin/add_teacher';
$route['yonetim-paneli/ogretmenleri-listele'] = 'admin/Admin/list_teacher';
$route['yonetim-paneli/ogretmen-duzenle/(:any)'] = 'admin/Admin/update_teacher/$1';


$route['anasayfa'] = 'Homepage';
$route['hakkimizda'] = 'Homepage/about';
$route['siniflarimiz/(:any)'] = 'Homepage/classes/$1';
$route['siniflarimiz'] = 'Homepage/classes';
$route['sinif-detaylari/(:any)'] = 'Homepage/classes_detail/$1';
$route['etkinliklerimiz'] = 'Homepage/events';
$route['etkinlik-detaylari/(:any)'] = 'Homepage/event_detail/$1';
$route['ogretmenlerimiz'] = 'Homepage/teachers';
$route['galeri'] = 'Homepage/gallery';
$route['iletisim'] = 'Homepage/contact';
$route['ogretmen-bilgileri/(:any)'] = 'Homepage/teacher_detail/$1';
