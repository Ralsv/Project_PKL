<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Mpdf\Mpdf;
use App\Models\Product;
use PDF;


class ProductController extends Controller
{
    public function index(Request $request){
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.product.home',compact(['products', 'total']));

    }

    public function PrintProduct(Request $request){
        $printproducts = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.print-product',compact(['printproducts', 'total']));

    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function save(Request $request)
    {
        $validation = $request->validate([
            'type' => 'required',
            'serial_number' => 'required',
            'description' => 'required'
        ]);
        $data = Product::create($validation);
        if ($data) {
            session()->flash('success', 'Product Add Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin.products/create'));
        }
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.product.update', compact('products'));
    }

    public function delete($id)
    {
        $products = Product::findOrFail($id)->delete();
        if ($products) {
            session()->flash('success', 'Product Delete Successfully');
            return redirect(route('admin/products'));
        } else {
        session()->flash('error', 'Product Not Delete succesfully');
        return redirect(route('admin/products'));
        }
    }

    public function update(Request $request, $id)
    {
        $products = Product::findOrfail($id);
        $type = $request->type;
        $serial_number = $request->serial_number;
        $description = $request->description;

        $products->type = $type;
        $products->serial_number = $serial_number;
        $products->description = $description;
        $data = $products->save();
        if ($data) {
            session()->flash('success', 'Product Update Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin/products/update'));
        }
    }
    public function search(Request $request) {
        if($request->has('search')) {
            $products = Product::where('type', 'LIKE', '%'.$request->search.'%')->get();
        }
        else {
            $products = Product::all();
        }
        return view('admin.product.home' ,['products' => $products]);
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
