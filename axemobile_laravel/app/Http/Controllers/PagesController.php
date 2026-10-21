<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function about_us()
  {
    return view('pages.about-us');
  }

  public function contact_us()
  {
    return view('pages.contact-us');
  }

  public function services()
  {
    return view('pages.services', [
      'services' => config('drivex.services'),
    ]);
  }

  public function service_detail($slug)
  {
    $services = config('drivex.services');

    if (!isset($services[$slug])) {
      abort(404);
    }

    return view('pages.service-detail', [
      'slug' => $slug,
      'service' => $services[$slug],
      'services' => $services,
    ]);
  }

  public function products()
  {
    return view('pages.products', [
      'products' => config('drivex.products'),
    ]);
  }

  public function product_detail($slug)
  {
    $products = config('drivex.products');

    if (!isset($products[$slug])) {
      abort(404);
    }

    return view('pages.product-detail', [
      'slug' => $slug,
      'product' => $products[$slug],
      'products' => $products,
    ]);
  }

  public function error_404()
  {
    return view('pages.error-404');
  }
}
