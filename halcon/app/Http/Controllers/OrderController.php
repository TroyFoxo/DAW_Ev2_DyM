<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Order;
use App\Models\OrderPhoto;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('is_deleted', false)->latest()->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        Order::create($request->all());
        return redirect()->route('orders.index');
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());
        return redirect()->route('orders.index');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->update(['is_deleted' => true]);
        return redirect()->route('orders.index');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function search(Request $request)
    {
        $invoiceNumber = $request->input('invoice_number');
        $order = Order::where('invoice_number', $invoiceNumber)->first();

        return view('home', compact('order'));
    }

}