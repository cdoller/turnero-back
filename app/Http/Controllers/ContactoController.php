<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Requests\ContactoRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\NuevoContacto;

class ContactoController extends Controller
{
    /**
     * Devuelve el listado de los contactos historicos
     *
     * @return \Illuminate\Http\Response
     */
    public function obtenerContactos()
    {
        $contactos = Contacto::all();
        $data = $contactos->map(function ($contacto){
            return [
                'id' => $contacto->id,
                'nombre' => $contacto->nombre,
                'mail' => $contacto->mail,
                'telefono' => $contacto->telefono,
                'mensaje'=> $contacto->mensaje,
                'created_at' => $contacto->created_at->toDateTimeString(),
                'updated_at' => $contacto->updated_at->toDateTimeString()
            ];
        });

        return response()->json([
            'mensaje' => 'Listado de contactos historico',
            'data' => $data
        ]);
    }

    /**
     * Obtiene la informacion de la DB del contacto definido
     * 
     * @param id , id del contacto que se quiere identificar
     * @return \Illuminate\Http\Response
     */
    public function obtenerContacto($id)
    {
        $contacto = Contacto::findOrFail($id);

        return response()->json([
            'mensaje' => 'Contacto',
            'data' => $contacto
        ]);
    }

    /**
     * Guarda un nuevo contacto en la base de datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertarContacto(ContactoRequest $request)
    {     
        $nuevoContacto = Contacto::create([
            'nombre' => $request['nombre'],
            'mail' => $request['mail'],
            'telefono' => $request['telefono'],
            'mensaje' => $request['mensaje']
        ]);

        $details = [
            'title' => 'Se ha recibido un nuevo contacto',
            'body' =>   $nuevoContacto
        ];

        self::enviarMail($details);

        return response()->json([
            'mensaje' => 'Se agrego correctamente el contacto',
            'data' => $nuevoContacto
        ]);
    }

    /**
     * Actualiza el contacto que tiene $id, los campos son obligatorios
     *
     * @param id , id del contacto
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function actualizaContacto($id, ContactoRequest $request)
    {
        $contacto = Contacto::find($id);
        $contacto->nombre = $request['nombre'];
        $contacto->mail = $request['mail'];
        $contacto->telefono = $request['telefono'];
        $contacto->mensaje = $request['mensaje'];
        $contacto->save();

        return response()->json([
            'mensaje' => 'Datos del contacto modificados',
            'data' => $contacto
        ]);
    }

    /**
     * Borra Logicamente el contacto segun su id
     *
     * @param  id , id del contacto que se desea borrar
     * @return \Illuminate\Http\Response
     */
    public function borrarContacto($id)
    {
        $contacto = Contacto::findOrFail($id);
        $contacto->delete();

        return response()->json([
            'mensaje' => 'Contacto',
            'data' => $contacto
        ]);
    }

    /**
     * Hace el envio de mail
     */

    private function enviarMail($details)
    {
        Mail::to('carlosoller1994@gmail.com')->send(new NuevoContacto($details));
    }
}
