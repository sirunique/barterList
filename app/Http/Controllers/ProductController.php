<?php

namespace App\Http\Controllers;

use App\ItemCondition;
use Illuminate\Http\Request;
use App\ServiceType;
use App\ShippingType;
use App\Trade;
use App\Category;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $trades = Trade::where('userid', Auth::guard('users')->user()->id)->get();
        $trades  = DB::table('trades')
            ->join('service_types', 'trades.serviceid', '=', 'service_types.id')
            ->select('trades.*', 'service_types.servicetype')
            ->where('userid', Auth::guard('users')->user()->id)
            ->get();
        return view('account.catalog.view', [
            'trades' => $trades
        ]);
    }

    public function detail(Request $request)
    {
        $trade  = DB::table('trades')
            ->join('service_types', 'trades.serviceid', '=', 'service_types.id')
            ->select('trades.*', 'service_types.servicetype')
            ->where(['trades.id' => $request->route('id')])
            ->get();

        if (count($trade) == 0) return view('account.errors.404');
        if ($trade[0]->userid != Auth::guard('users')->user()->id) return view('account.errors.401');


        if ($request->input('edit')) {
            // dd($request->input('edit'));
            return $this->create($trade[0]);
        }

        return view('account.catalog.detail', [
            'trade' => $trade
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($trade = null)
    {
        // dd($trade);
        $serviceType = ServiceType::all();
        $categoryType = Category::all();
        $shippingType = ShippingType::all();
        $itemCondition = ItemCondition::all();
        return view('account.catalog.create', [
            'serviceType' => $serviceType,
            'shippingType' => $shippingType,
            'itemCondition' => $itemCondition,
            'categoryType' => $categoryType,
            'trade' => $trade
        ]);
    }

    public function postcatalog(Request $request)
    {
        // dd($request->all());

        // validate rules
        $rules = [
            'title' => 'required',
            'itemconditionid' => 'required',
            'serviceid' => 'required',
            'categoryid' => 'required',
            'websiteref' => 'required',
            'tradevalue' => 'required',
            'cashvalue' => 'required',
            'shippingtypeid' => 'required',
            'shippingamount' => 'required',
            'shippingamount' => 'required',
            'package_handling_amount' => 'required',
            'returnpolicy' => 'required',
            'shortdescription' => 'required',
            'longdescription' => 'required',
        ];
        // validate messages
        $customMessages = [
            'required' => ' :attribute is required'
        ];
        // validate data
        $this->validate($request, $rules, $customMessages);

        $trade = (null);

        if ($request->id != null) $trade = Trade::where('id', $request->id)->first();

        if (!$trade) {
            $trade = new Trade();
            $trade->userid = Auth::guard('users')->user()->id;
            $trade->itemnumber = $this->getCode();
        }

        foreach ($request->all() as $key => $value) {
            $trade[$key] = $value;
        }
        unset($trade['_token']);
        $trade->save();

        if ($trade) {
            // return redirect()->route('account.catalog');
            return redirect()->route('account.catalogdetail', ['id' => $trade->id]);
        }
    }

    private function generatecode()
    {
        $code = '0123456343534535789abcdefghij353453535353535klmnopqrst43534543uvwxyz';
        return substr(str_shuffle($code), 0, 10);
    }

    private function getCode()
    {
        $code = $this->generatecode();
        if (Trade::where('itemnumber', $code)->exists()) {
            return $this->getCode();
        }
        return $code;
    }

    //Added by Ibrahim.S 08/09/2020
    public function wishlist(){
        return 'Wish List';
    }

    public function tradeconsole(){
        // $catlog = Trade::all();
        return view('account.tradeconsole.trade');
        // dd($catlog);
        // return view('account.tradeconsole.trade', ['catelog' => $catlog]);
    }

    //Added by Ibrahim.S 17/09/2020
    public function getdetail(){
        return view('account.tradeconsole.tradesingle');
    }
    public function searchproduct()
    {
        return 'Documemtation Page';
        // return view('account.profile.profile');
    }
}
