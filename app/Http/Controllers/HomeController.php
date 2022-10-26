<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

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
        $pdashboard = 'Dashboard';

        return view('dashboard')
        ->with('pdashboard', $pdashboard);
    }
}

