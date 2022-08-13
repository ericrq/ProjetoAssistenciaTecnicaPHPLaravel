<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Client;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('welcome', ['products' => $products]);
    }

    public function TabelaAdm()
    {
        $clients = DB::table('clients')
                    ->join('products', 'clients.product_id', '=', 'products.id')
                    ->select('clients.*', 'products.type')
                    ->get();

        return view('TabelaAdm', ['clients' => $clients]);
    }

    public function store(Request $request)
    {
        $client = new Client;
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->cpf = $request->cpf;
        $client->email = $request->email;
        $client->defect = $request->defect;
        $client->product_id = $request->idTypeProduct;

        $client->save();

        return redirect('/TabelaAdm');
    }

    public function destroy($id)
    {
        Client::findOrFail($id)->delete();
        return redirect('TabelaAdm');
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);
        $products = Product::all();
        return view('edit', ['client' => $client, 'products' => $products]);
    }

    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->cpf = $request->cpf;
        $client->email = $request->email;
        $client->defect = $request->defect;
        $client->product_id = $request->idTypeProduct;

        $client->save();

        return redirect('/TabelaAdm');
    }
}
