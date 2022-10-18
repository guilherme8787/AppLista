<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Convidados\ConvidadosRepositoryInterface;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(private ConvidadosRepositoryInterface $convidados)
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view(
            'home',
            [
                'itens' => $this->convidados->getList()
            ]
        );
    }
}
