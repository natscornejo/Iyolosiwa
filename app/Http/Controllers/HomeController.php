<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function Index()
    {
        $pnosotros = 'Nosotros';
        $pservicios = 'Servicios';
        $pvoluntariado = 'Voluntariado';
        $pdonaciones = 'Donaciones';
        $pcontacto = 'Contacto';
        
        return view('inicio')
        ->with('pnosotros',$pnosotros)
        ->with('pservicios',$pservicios)
        ->with('pvoluntariado',$pvoluntariado)
        ->with('pdonaciones',$pdonaciones)
        ->with('pcontacto', $pcontacto); 
    }


    public function Nosotros()
    {
        $pinicio = 'Inicio';
        $pservicios = 'Servicios';
        $pvoluntariado = 'Voluntariado';
        $pdonaciones = 'Donaciones';
        $pcontacto = 'Contacto';

        return view('nosotros')
        ->with('pinicio', $pinicio)
        ->with('pservicios',$pservicios)
        ->with('pvoluntariado',$pvoluntariado)
        ->with('pdonaciones',$pdonaciones)
        ->with('pcontacto', $pcontacto);
    }

    public function Servicios()
    {
        $pinicio = 'Inicio';
        $pnosotros = 'Nosotros';
        $pvoluntariado = 'Voluntariado';
        $pdonaciones = 'Donaciones';
        $pcontacto = 'Contacto';

        return view('servicios')
        ->with('pinicio', $pinicio)
        ->with('pnosotros',$pnosotros)
        ->with('pvoluntariado',$pvoluntariado)
        ->with('pdonaciones',$pdonaciones)
        ->with('pcontacto', $pcontacto);
    }

    public function Voluntariado()
    {
        $pinicio = 'Inicio';
        $pnosotros = 'Nosotros';
        $pservicios = 'Servicios';
        $pdonaciones = 'Donaciones';
        $pcontacto = 'Contacto';


        return view('voluntariado')
        ->with('pinicio', $pinicio)
        ->with('pnosotros',$pnosotros)
        ->with('pservicios',$pservicios)
        ->with('pdonaciones',$pdonaciones)
        ->with('pcontacto', $pcontacto);
    }

    public function Donaciones()
    {
        $pinicio = 'Inicio';
        $pnosotros = 'Nosotros';
        $pservicios = 'Servicios';
        $pvoluntariado = 'Voluntariado';
        $pcontacto = 'Contacto';

        return view('donaciones')
        ->with('pinicio', $pinicio)
        ->with('pnosotros',$pnosotros)
        ->with('pservicios',$pservicios)
        ->with('pvoluntariado',$pvoluntariado)
        ->with('pcontacto', $pcontacto);
    }

    public function Contacto()
    {
        $pinicio = 'Inicio';
        $pnosotros = 'Nosotros';
        $pservicios = 'Servicios';
        $pvoluntariado = 'Voluntariado';
        $pdonaciones = 'Donaciones';

        return view('contacto')
        ->with('pinicio', $pinicio)
        ->with('pnosotros',$pnosotros)
        ->with('pservicios',$pservicios)
        ->with('pvoluntariado',$pvoluntariado)
        ->with('pdonaciones',$pdonaciones);
    }

    public function Dashboard()
    {
        $pdashboard = 'dashboard';

        return view('dashboard')
        ->with('pdashboard', $pdashboard);
    }

    // public function NombreDeLaFuncion
    public function Socios()
    {
        $psocios = 'socios';

        // return view('nombre de la plantilla')
        return view('socios')
        ->with('psocios', $psocios);
    }

    public function Tycondiciones()
    {
        $ptycondiciones = 'terminos-y-condiciones';

        // return view('nombre de la plantilla')
        return view('tycondiciones')
        ->with('ptycondiciones', $ptycondiciones);
    }
}

