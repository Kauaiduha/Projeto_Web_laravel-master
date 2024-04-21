<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    private $materia;

    public function __construct()
    {
        $this->materia = new Materia();
    }

    public function index()
    {
        $materias = Materia::all();
        return view('materias_index', compact('materias'));
    }
    public function destroy(Materia $materia)
    {
        $materia->delete();

        return redirect()->route('materia.index')->with('success', 'Matéria excluída com sucesso!');
    }

    
}
