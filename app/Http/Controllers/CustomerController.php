<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Customers;
use Carbon\Carbon;
// use RealRashid\SweetAlert\Facades\Alert;
// use Alert;
class CustomerController extends Controller{
   
   	public function addCutomrer(Request $request){
   		// print_r($request->all());
   		$customers = "INSERT INTO customers (company_id, c_prefix, c_firstname, c_lastname,c_company, c_company_short, c_color, c_whatsapp, c_phone, c_email, user_id, datetime) values(1,'".$request->prefix."','".$request->first_name."','".$request->last_name."','".$request->company_name."','".$request->compnay_short_name."','".$request->color."','".$request->whatsapp_number."','".$request->phone_number."','".$request->email."',1,UNIX_TIMESTAMP())";

   		DB::insert($customers);
   		$last_customer = DB::table('customers')->latest('datetime')->pluck('c_id')->first();
   		$address = "INSERT INTO customers_address (company_id, c_id, ca_location_name, ca_prefix, ca_firstname, ca_lastname, ca_company, ca_address1, ca_address2, ca_city, ca_zip, ca_country, ca_phone1, ca_phone2, user_id, datetime) values(1, ".$last_customer.",'Default', '".$request->ca_prefix."', '".$request->ca_firstname."', '".$request->ca_lastname."','".$request->ca_company."','".$request->ca_address1."','".$request->ca_address2."','".$request->ca_city."','".$request->ca_zip."','".$request->ca_country."','".$request->ca_phone1."','".$request->ca_phone2."',1,UNIX_TIMESTAMP() )";
   		DB::insert($address);
   		Alert::success('Congrats', 'You\'ve Successfully Registered Customer'); 
   		return redirect('customers/add');
   	}
	
	public function viewAddCustomer(){
		return view('customers.add');
	}
   	public function viewCustomers(){
   		$customers = DB::select('SELECT * FROM customers');
   		// print_r($customers);
   		return view('customers.view', ['customers'=>$customers]);
   	}

   	public function detailCustomer($id){
   		$customer = DB::table('customers')
            ->where('c_id', '=', $id)
            ->get();
        $addresses = DB::table('customers_address')
            ->where('c_id', '=', $id)
            ->get();
        return view('customers.detail', ['customer'=> $customer[0], 'addresses'=>$addresses]);
   	}
   	public function addAddress(Request $request,$id){
		// $request->validate([
		// 	'cid'=>'required',
		// 	'ca_prefix'=>'required',
		// 	'ca_firstname'=>'required',
		// 	'ca_lastname'=>'required',
		// 	'ca_company'=>'required',
		// 	'ca_address1'=>'required',
		// 	'ca_address2'=>'required',
		// 	'ca_city'=>'required',
		// 	'ca_zip'=>'required',
		// 	'ca_country'=>'required',
		// 	'ca_phone1'=>'required',
		// 	'ca_phone2'=>'required'
		// ]);
   		$address = "INSERT INTO customers_address (company_id, c_id, ca_location_name, ca_prefix, ca_firstname, ca_lastname, ca_company, ca_address1, ca_address2, ca_city, ca_zip, ca_country, ca_phone1, ca_phone2, user_id, datetime) values(1, ".$id.",'Default', '".$request->ca_prefix."', '".$request->ca_firstname."', '".$request->ca_lastname."','".$request->ca_company."','".$request->ca_address1."','".$request->ca_address2."','".$request->ca_city."','".$request->ca_zip."','".$request->ca_country."','".$request->ca_phone1."','".$request->ca_phone2."',1,UNIX_TIMESTAMP() )";
   		DB::insert($address);
   		// return ($address);
   		Alert::success('Congrats', 'You\'ve Successfully Added Address'); 
   		return redirect('customers/detail='.$id);
   	}

   	public function disableAddress($cid,$aid){
   		Alert::success('Congrats', 'You\'ve Successfully Disabled'); 
   		// return 'hello'.$aid. $cid;
		DB::update("UPDATE `customers_address` SET `ca_status` = '0' WHERE `customers_address`.`ca_id` = ".$aid);
   		return redirect('/customers/detail='.$cid);
   	}
	public function enableAddress($cid,$aid){
		Alert::success('Congrats', 'You\'ve Successfully Enabled'); 
		// return 'hello'.$aid. $cid;
	 	DB::update("UPDATE `customers_address` SET `ca_status` = '1' WHERE `customers_address`.`ca_id` = ".$aid);
		return redirect('/customers/detail='.$cid);
	}

	// update customer
	// view update customer
	public function viewUpdateCustomer($id){
		$customer = DB::table('customers')
            ->where('c_id', '=', $id)
            ->get();
		// print_r($customer[0]);
		return view('customers/update', ['customer'=>$customer[0]]);
	}

	public function updateCustomer(Request $request, $id){
		$customer = "UPDATE `customers` SET `c_prefix` = '".$request->c_prefix."', `c_firstname` = '".$request->first_name."', `c_lastname` = '".$request->last_name."', `c_company` = '".$request->company_name."', `c_company_short` = '".$request->compnay_short_name."', `c_color` = '".$request->color."', `c_whatsapp` = '".$request->whatsapp_number."', `c_phone` = '".$request->phone_number."', `c_email` = '".$request->email."', `c_status` = '".$request->status."' WHERE `customers`.`c_id` = ".$id."";
		DB::update($customer);
		Alert::success('Congrats', 'You\'ve Successfully Updated'); 
		// return $request->all();
		return redirect('customers/update='.$id);
	}

	public function updateCustomerAddress(Request $request){
		$address = "UPDATE `customers_address` SET `ca_prefix` = '".$request->prefix."', `ca_firstname` = '".$request->firstname."', `ca_lastname` = '".$request->lastname."', `ca_company` = '".$request->company."', `ca_address1` = '".$request->address1."', `ca_address2` = '".$request->address2."', `ca_city` = '".$request->city."', `ca_zip` = '".$request->zip."', `ca_country` = '".$request->country."', `ca_phone1` = '".$request->phone1."', `ca_phone2` = '".$request->phone2."' WHERE `customers_address`.`ca_id` = ".$request->aid;
		DB::update($address);
		Alert::success('Congrats', 'You\'ve Successfully Updated'); 
		return redirect('/customers/detail='.$request->cid);
	}

	public function test(){
		$user = DB::table('customers')->latest('datetime')->pluck('c_id')->first();
	    return $user;
	}

}
