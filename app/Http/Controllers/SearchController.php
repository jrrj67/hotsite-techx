<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $validatedSearch = $request->validate([
            'search' => 'max:255'
        ]);

        switch ($validatedSearch['search']) {
            default:
                $request->session()->flash('error', 'Nenhum resultado');
                return back();
            break;
        }
    }
}
