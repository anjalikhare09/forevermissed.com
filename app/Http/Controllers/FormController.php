<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function step_form_1(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        return redirect()->route('step_two_form', ['data' => $data]);
    }

    public function step_form_2(Request $request)
    {
        $data = $request->input('data');

        return view('form.step_two')->with('data', $data);
    }

    public function step_form_3(Request $request)
    {
        $data = $request->all();
        return view('form.step_three')->with('data', $data);
    }

    public function step_form_4(Request $request)
    {
        $data = $request->except('_token');
        return view('form.step_four')->with('data', $data);
    }
    public function step_form_5(Request $request)
    {
        $data = $request->except('_token');
        return view('form.step_five')->with('data', $data);
    }


}
