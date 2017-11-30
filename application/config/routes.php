<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = "frontend/c_home";
$route['vinatech'] = "backend/c_admin";
$route['fw-admin'] = "backend/c_admin";
$route['admin'] = "backend/c_admin";

$route['^tin-tuc\/([a-z0-9A-Z-.]+)'] = "frontend/c_news_catalog/ListNews"; // Điều hướng trang danh mục tin
$route['^tin-tuc\/([a-z0-9A-Z-.]+)\/:num'] = "frontend/c_news_catalog/ListNews"; // Điều hướng trang danh mục tin phân trang
$route['^tin-tuc\/([a-zA-Z0-9-]+)\/([a-zA-Z0-9-.]+).html'] = "frontend/c_news/DetailNews";	// Điều hướng trang tin

$route['^san-pham\/([a-z0-9A-Z-.]+)'] = "frontend/c_product_catalog/ListProduct"; // Điều hướng trang danh mục sản phẩm
$route['^san-pham\/([a-z0-9A-Z-.]+)\/:num'] = "frontend/c_product_catalog/ListProduct"; // Điều hướng trang danh mục sản phẩm phân trang
$route['^san-pham\/([a-zA-Z0-9-]+)\/([a-zA-Z0-9-.]+).html'] = "frontend/c_product/DetailProduct";	// Điều hướng trang sản phẩm

$route['lien-he'] = "frontend/c_contact/Contact"; // điều hướng trang liên hệ
$route['search'] = "frontend/c_search/Search"; // điều hướng trang tim kiếm

$route['gio-hang/themsp/(:any)'] = "frontend/c_cart/Add"; // điều hướng trang giỏ hàng add
$route['gio-hang'] = "frontend/c_cart"; // điều hướng trang giỏ hàng

$route['dat-hang'] = "frontend/c_book"; // điều hướng trang đặt hàng
$route['thanks'] = "frontend/c_thanks"; // điều hướng trang cảm ơn

$route['404_override'] = 'errors/page_missing';


/* End of file routes.php */
/* Location: ./application/config/routes.php */