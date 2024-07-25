<?php

namespace App\Http\Controllers;

use App\Models\Rutinas;
use Illuminate\Http\Request;

class RutinasController extends Controller
{
    public function index(){
          
    $rutinas = Rutinas::all();
    return view('rutinas.index',compact('rutinas'));    
       }  

        public function crear(){
    return view('rutinas.crear');
       }
       public function enviar(Request $request){
        $rutina = new Rutinas();
        $rutina-> Descripcion_rutina = $request->input('Descripcion_rutina');
        $rutina-> Vence_rutina = $request->input('Vence_rutina');
        $rutina->save();
        return redirect('/rutinas');
       }

       public function editar($id){
        $rutina = Rutinas::findOrFail($id);
        return view('rutinas.editar',compact('$rutina'));
    
       }
       public function actualizar(Request $request, Rutinas $rutina){
        $rutina-> Descripcion_rutina = $request->input('Descripcion_rutina');
        $rutina-> Vence_rutina = $request->input('Vence_rutina');
        $rutina->save();
        return redirect('/rutinas');
       }
       public function eliminar(Rutinas $rutina){
        $rutina->delete();
        return redirect('/rutinas');

       }
}