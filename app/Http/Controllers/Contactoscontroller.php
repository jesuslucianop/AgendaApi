<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactos;

class Contactoscontroller extends Controller
{
   public function Createcontact(Request $request)
   {
        $data = $request->all();
        $contacto= Contactos::create($data);
        return $contacto;

   }
   public function Getallcontacts()
   {
       $contactos = Contactos::all();
       return $contactos;
   }
   public function UpdateContact(Request $request)
   {
       $id= $request->id;
       $Nombre= $request->Nombre;
       $Apellido= $request->Apellido;
       $Telefeno= $request->Telefeno;
       $Correo= $request->Correo;
     $contacto = Contactos::where('id', $id);
      if ($contacto != null) {

            $contacto->update([
             'Nombre' => $Nombre,
             'Apellido' => $Apellido,
             'Telefeno' => $Telefeno,
             'Correo' => $Correo
        ]);
            return $request->all();
    }
   }
   public function DeleteContact(Request $request)
   {
        $id= $request->id;
        $contactos = Contactos::find($id);
        $contactos->delete();
        return "Eliminado correctamente";
   }
}
