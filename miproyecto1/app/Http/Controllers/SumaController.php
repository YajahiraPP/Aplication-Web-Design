
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;


class SumaController extends Controller
{
    public function index()
    {
        return view('suma');
    }
    public function calcular(Request $request)
    {
        $numero1 = $request->input('numero1', 0);
        $numero2 = $request->input('numero2', 0);
        $resultado = $numero1 + $numero2;
        
        return view('suma', ['resultado' => $resultado, 'numero1' => $numero1, 'numero2' => $numero2]);
    }
}