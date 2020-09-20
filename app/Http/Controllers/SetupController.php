<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gender;
use App\ServiceType;
use App\ShippingType;
use App\TradeStatus;
use App\TradeType;
use App\MaritalStatus;
use App\Category;

class SetupController extends Controller
{
    // Gender Setup
    public function genderSetup()
    {
        $genders = Gender::all();
        return view('admin.setup.gender', [
            'genders' => $genders
        ]);
    }

    public function addGender(Request $request)
    {
        $request->validate([
            'gender' => 'required'
        ]);

        $gender = (null);

        if ($request->id != null) $gender = Gender::where('id', $request->id)->first();

        if (!$gender) {
            $gender = new Gender();
            unset($request->id);
        }

        foreach ($request->all() as $key => $value) {
            $gender[$key] = $value;
        }

        unset($gender['_token']);
        $gender->save();

        return redirect()->back();
    }

    public function getGender(Request $request)
    {
        $gender = Gender::where('id', $request->id)->first();
        if ($gender) {
            return response()->json([
                'status' => true, 'message' => ucwords('Gender'), 'data' => $gender
            ]);
        }
        return response()->json([
            'status' => false, 'message' => ucwords('Error'),
        ]);
    }

    public function delGender($id)
    {
        $del = Gender::where('id', '=', $id)->first();

        $del->delete();
        return redirect()->back();
    }

    // Service Type
    public function serviceSetup()
    {
        $services = ServiceType::all();
        return view('admin.setup.servicetype', [
            'services' => $services
        ]);
    }

    public function addService(Request $request)
    {
        $request->validate([
            'servicetype' => 'required'
        ]);

        $service = (null);
        if ($request->id != null) $service = ServiceType::where('id', $request->id)->first();

        if (!$service) {
            $service = new ServiceType();
            unset($request->id);
        }

        foreach ($request->all() as $key => $value) {
            $service[$key] = $value;
        }

        unset($service['_token']);
        $service->save();

        return redirect()->back();
    }

    public function getService(Request $request)
    {
        $service = ServiceType::where('id', $request->id)->first();
        if ($service) {
            return response()->json([
                'status' => true, 'message' => ucwords('Service'), 'data' => $service
            ]);
        }
        return response()->json([
            'status' => false, 'message' => ucwords('Error'),
        ]);
    }


    public function delService($id)
    {
        $del = ServiceType::where('id', '=', $id)->first();

        $del->delete();
        return redirect()->back();
    }


    // Shipping Type
    public function shippingSetup()
    {
        $shipping = shippingType::all();
        return view('admin.setup.shippingtype', [
            'shipping' => $shipping
        ]);
    }

    public function addShipping(Request $request)
    {
        $request->validate([
            'shippingtype' => 'required'
        ]);

        $shippingtype = (null);

        if ($request->id != null) $shippingtype = ShippingType::where('id', $request->id)->first();

        if (!$shippingtype) {
            $shippingtype = new ShippingType();
            unset($request->id);
        }

        foreach ($request->all() as $key => $value) {
            $shippingtype[$key] = $value;
        }

        unset($shippingtype['_token']);
        $shippingtype->save();

        return redirect()->back();
    }

    public function getShipping(Request $request)
    {
        $shippingtype = ShippingType::where('id', $request->id)->first();
        if ($shippingtype) {
            return response()->json([
                'status' => true, 'message' => ucwords('Shipping Type'), 'data' => $shippingtype
            ]);
        }
        return response()->json([
            'status' => false, 'message' => ucwords('Error'),
        ]);
    }


    public function delShipping($id)
    {
        $del = ShippingType::where('id', '=', $id)->first();

        $del->delete();
        return redirect()->back();
    }

    // Trade Status Type
    public function TradeStatusSetup()
    {
        $tradeStatuses = TradeStatus::all();
        return view('admin.setup.tradestatus', [
            'tradeStatuses' => $tradeStatuses
        ]);
    }

    public function addStatus(Request $request)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $status = (null);

        if ($request->id != null) $status = TradeStatus::where('id', $request->id)->first();

        if (!$status) {
            $status = new TradeStatus();
            unset($request->id);
        }

        foreach ($request->all() as $key => $value) {
            $status[$key] = $value;
        }

        unset($status['_token']);
        $status->save();

        return redirect()->back();
    }

    public function getTradeStatus(Request $request)
    {
        $tradeStatus = TradeStatus::where('id', $request->id)->first();
        if ($tradeStatus) {
            return response()->json([
                'status' => true, 'message' => ucwords('TradeStatus'), 'data' => $tradeStatus
            ]);
        }
        return response()->json([
            'status' => false, 'message' => ucwords('Error'),
        ]);
    }


    public function delTradeStatus($id)
    {
        $del = TradeStatus::where('id', '=', $id)->first();

        $del->delete();
        return redirect()->back();
    }




    // Marital Status Type
    public function MaritalStatusSetup()
    {
        $maritalStatuses = MaritalStatus::all();
        return view('admin.setup.maritalstatus', [
            'maritalStatuses' => $maritalStatuses
        ]);
    }

    public function addMaritalStatus(Request $request)
    {
        $request->validate([
            'status' => 'required'
        ]);

        $newShipping = MaritalStatus::create([
            'status' => $request->status
        ]);
        $newShipping->save();

        return redirect()->back();
    }


    public function delMaritalStatus($id)
    {
        $del = MaritalStatus::where('id', '=', $id)->first();

        $del->delete();
        return redirect()->back();
    }



    // Trade Type Setup
    public function TradeTypeSetup()
    {
        $tradeTypes = TradeType::all();
        return view('admin.setup.tradetype', [
            'tradeTypes' => $tradeTypes
        ]);
    }

    public function addTradeType(Request $request)
    {
        $request->validate([
            'type' => 'required'
        ]);

        $type = (null);

        if ($request->id != null) $type = TradeType::where('id', $request->id)->first();

        if (!$type) {
            $type = new TradeType();
            unset($request->id);
        }

        foreach ($request->all() as $key => $value) {
            $type[$key] = $value;
        }

        unset($type['_token']);
        $type->save();

        return redirect()->back();
    }

    public function getTradeType(Request $request)
    {
        $type = TradeType::where('id', $request->id)->first();
        if ($type) {
            return response()->json([
                'status' => true, 'message' => ucwords('Trade Type'), 'data' => $type
            ]);
        }
        return response()->json([
            'status' => false, 'message' => ucwords('Error'),
        ]);
    }

    public function delTradeType($id)
    {
        $del = TradeType::where('id', '=', $id)->first();

        $del->delete();
        return redirect()->back();
    }


    // Category Setup
    public function categorySetup()
    {
        $categories = Category::all();
        return view('admin.setup.categories', [
            'categories' => $categories
        ]);
    }

    public function addCategorType(Request $request)
    {

        $request->validate([
            'category' => 'required'
        ]);

        $category = (null);

        if ($request->id != null) $category = Category::where('id', $request->id)->first();

        if (!$category) {
            $category = new Category();
            unset($request->id);
        }

        foreach ($request->all() as $key => $value) {
            $category[$key] = $value;
        }

        unset($category['_token']);
        $category->save();

        return redirect()->back();
    }

    public function getCategory(Request $request)
    {
        $category = Category::where('id', $request->id)->first();
        if ($category) {
            return response()->json([
                'status' => true, 'message' => ucwords('Category'), 'data' => $category
            ]);
        }
        return response()->json([
            'status' => false, 'message' => ucwords('Error'),
        ]);
    }

    public function delCategoryType($id)
    {
        $del = Category::where('id', '=', $id)->first();

        $del->delete();
        return redirect()->back();
    }
}
