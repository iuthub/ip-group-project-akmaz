<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Information;
use App\Models\Product;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class IndexController extends Controller
{

	/**
	 * @var $service
	 */
	protected $service;

	/**
	 * @var $information
	 */
	protected $information;

	/**
	 * @var $product
	 */
	protected $product;

	/**
	 * @var $contact
	 */
	protected $contact;

	/**
	 * @param \App\Models\Service
	 */
	public function __construct(Service $service, Product $product,  Information $information, Contact $contact)
	{
		$this->service = $service;
		$this->product = $product;
		$this->contact = $contact;
		$this->information = $information;
	}

   /**
    * Display index page
    *
    */ 
   public function index()
   {
   	return view('pages.index')->with([
   		'services' => $this->service->getServices(),
   		'remont_one' => $this->information->getInformationBySlug('remont1'),
   		'remont_two' => $this->information->getInformationBySlug('service'),
   		'remont_three' => $this->information->getInformationBySlug('remont2'),
   		'remont_four' => $this->information->getInformationBySlug('remont3'),
   	]);
   }

   public function schema()
   {
   	return view('pages.schema');
   }

   public function payment()
   {
   	return view('pages.payment');	
   }

   public function product()
   {
   	return view('pages.product')->with([
   		'information' => $this->information->getInformationBySlug('product'),
   		'services' => $this->service->getServices(),
   		'products'=> $this->product->getProducts(),
   	]);	
   }

   public function contact()
   {
   	return view('pages.contact');
   }

   public function contactGet(ContactRequest $request)
   {
   	$data = $this->contact->StoreData($request->toArray());

   	if($data)
   	{
   		return redirect()->route('index');
   	}

   	return redirect()->back();
   }
}
