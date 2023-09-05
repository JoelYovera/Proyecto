<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function ir_al_index(){
        return view('frmalumnos');
    }


    public function agregarAlumno(Request $request){
        $alumno = new Alumno;
        $alumno->idalumno =$request->id;
        $alumno->nombre =$request->nombre;
        $alumno->apellidos =$request->apellidos;
        $alumno->fnacimiento =$request->fnacimiento;
        $alumno->telefono = $request->telefono;
        $alumno->email =$request->email;
        $alumno->save();
        $registros= Alumno::all();
        return view('listaralumno',compact('registros'));
    } 


    public function listarAlumno(){
        $registros=Alumno::all();
        return view('listaralumno', compact('registros'));

    }

    public function eliminarAlumno($id){
        Alumno::where('idalumno',$id)
        ->delete();
        $registros=Alumno::all();
        return view('listaralumno',compact('registros'));
    }

    public function editarAlumno(Request $request){
        try {
            $alumno = Alumno::find($request->id);
    
            if ($alumno) {
                $alumno->nombre = $request->nombre;
                $alumno->apellidos = $request->apellidos;
                $alumno->fnacimiento = $request->fnacimiento;
                $alumno->telefono = $request->telefono;
                $alumno->email = $request->email;
                $alumno->save();
    
                return back()->with("correcto", "Registro modificado correctamente");
            } else {
                return back()->with("incorrecto", "No se encontró el registro del alumno");
            }
        } catch (\Throwable $th) {
            return back()->with("incorrecto", "Error al modificar el registro: " . $th->getMessage());
        }
}
}