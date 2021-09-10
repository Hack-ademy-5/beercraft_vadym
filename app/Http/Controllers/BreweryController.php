<?php namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BreweryController extends Controller {

    //Para visualizar la tarjeta creada a traves del formulario
    public function __construct() {

        View::share('breweries', Brewery::all());
     }

     public function home() {
            
        return view('home');
    }

    public function cervecerias() {
            
        return view('cervecerias');
    }

    public function paginaCervezas() {
            
        return view('paginaCervezas');
    }
 
     public function crearCerveceria() {
             
         return view('crearCerveceria');
     }

    public function guardarFormulario(Request $request) {      

        //Validacion con los requerimientos para cada campo

        $misdatos = $request->validate([
            'name'=>'required|min:3',
            'phone'=>'required',
            'email'=>'required',
            'message'=>'required|min:10|max:255',
            
        ]);

        //Guardar la brewery en el database
        // Desde el mundo Object oriented al mundo database

         $brewery = new Brewery; // asociado a una tabla breweries

        $brewery->name = $misdatos['name']; // asociada a la columna name
        $brewery->phone = $misdatos['phone']; // asociada a la columna capacity
        $brewery->email= $misdatos['email'];  // asociada a la columna email
        $brewery->message= $misdatos['message']; // asociada a la columna description

        // // hasta aquí estamos en el mundo object oriented
        $brewery->save(); // Guardado mundo Data Base , el objeto se convierte en un record */

        
        // Al completar satisfactoriamente el formulario nos redirige al la "home" con el mensaje "La cerveceria se ha añadido correctamente"
        return redirect()->route('cervecerias')->with('message',"La cerveceria se ha añadido correctamente");
    


 }
}