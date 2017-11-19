<?php

namespace App\Http\Controllers\Backend;

use App\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('backend.coupon.index', compact('coupons'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('backend.coupon.createOrEdit');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validation = ['code' => 'required', 'value' => 'required'];
        $this->validate(\request(), $validation);
        $coupon = new Coupon();
        $coupon->fill($request->all());
        $coupon->save();
        return redirect(route('backend_coupons'))->with('message_success', 'Nouveau coupon ajouté.');
    }

    /**
     * @param $id_coupon
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id_coupon)
    {
        $coupon = Coupon::find($id_coupon);
        return view('backend.coupon.createOrEdit', compact('coupon'));
    }

    /**
     * @param Request $request
     * @param $id_coupon
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id_coupon)
    {
        $coupon     = Coupon::find($id_coupon);
        $validation = ['code' => 'required', 'value' => 'required'];
        $this->validate(\request(), $validation);
        $coupon->fill($request->all());
        $coupon->save();
        return redirect(route('backend_coupons'))->with('message_success', 'Le coupon a bien été mise à jour.');
    }

    /**
     * @param $id_coupon
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id_coupon)
    {
        $coupon = Coupon::find($id_coupon);
        $coupon->delete();
        return redirect(route('backend_coupons'))->with('message_success', 'Le coupon a été supprimé.');
    }
}
