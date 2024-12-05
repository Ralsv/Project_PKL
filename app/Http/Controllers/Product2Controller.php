<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product2;


class Product2Controller extends Controller
{
    public function index(Request $request){
        $product2s = Product2::orderBy('id', 'desc')->get();
        $total = Product2::count();
        return view('admin.product2.home',compact(['product2s', 'total']));

    }
    public function PrintProduct2(Request $request){
        $printproduct2s = Product2::orderBy('id', 'desc')->get();
        $total = Product2::count();
        return view('admin.print-product2',compact(['printproduct2s', 'total']));

    }

    public function create()
    {
        return view('admin.product2.create');
    }

    public function save(Request $request)
    {
        $validation = $request->validate([
            'type' => 'required',
            'serial_number' => 'required',
            'description' => 'required'
        ]);
        $data = Product2::create($validation);
        if ($data) {
            session()->flash('success', 'Product Add Successfully');
            return redirect(route('admin/product2s'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin.product2s/create'));
        }
    }

    public function edit($id)
    {
        $product2s = Product2::findOrFail($id);
        return view('admin.product2.update', compact('product2s'));
    }

    public function delete($id)
    {
        $product2s = Product2::findOrFail($id)->delete();
        if ($product2s) {
            session()->flash('success', 'Product Delete Successfully');
            return redirect(route('admin/product2s'));
        } else {
        session()->flash('error', 'Product Not Delete succesfully');
        return redirect(route('admin/product2s'));
        }
    }

    public function update(Request $request, $id)
    {
        $products = Product2::findOrfail($id);
        $type = $request->type;
        $serial_number = $request->serial_number;
        $description = $request->description;

        $products->type = $type;
        $products->serial_number = $serial_number;
        $products->description = $description;
        $data = $products->save();
        if ($data) {
            session()->flash('success', 'Product Update Successfully');
            return redirect(route('admin/product2s'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin/product2s/update'));
        }
    }
    public function search(Request $request) {
        if($request->has('search')) {
            $product2s = Product2::where('type', 'LIKE', '%'.$request->search.'%')->get();
        }
        else {
            $product2s = Product2::all();
        }
        return view('admin.product2.home' ,['product2s' => $product2s]);
    }
    
    // public function view_pdf(){
    //     $mpdf = new \Mpdf\Mpdf();
    //     $mpdf->WriteHTML('<h1>Hello world!</h1>');
    //     $mpdf->Output();
    // }

    // public function download_pdf(){
    //     $data = Product::limit(10)->get();
    //     $pdf = PDF::loadView('admin.products.pdf', compact('data'));
    //     $pdf->setPaper('A4', 'potrait');
    //     return $pdf->stream('product.pdf');
    // }
}
