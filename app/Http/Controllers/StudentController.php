<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\City;
use App\Models\Grupe;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with(['city', 'grupe'])->paginate(20);
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $cities = City::all();
        $grupes = Grupe::all();
        return view('students.create', compact('cities', 'grupes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'gim_data' => 'required|date',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'city_id' => 'required|exists:cities,id',
            'grupe_id' => 'required|exists:grupes,id',
        ]);

        Student::create($request->only([
            'name',
            'surname',
            'gim_data',
            'address',
            'phone',
            'city_id',
            'grupe_id',
        ]));

        return redirect()->route('students.index')->with('success', 'Studentas pridėtas!');
    }

    public function edit(Student $student)
    {
        $cities = City::all();
        $grupes = Grupe::all();
        return view('students.edit', compact('student', 'cities', 'grupes'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'gim_data' => 'required|date',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'city_id' => 'required|exists:cities,id',
            'grupe_id' => 'required|exists:grupes,id',
        ]);

        $student->update($request->only([
            'name',
            'surname',
            'gim_data',
            'address',
            'phone',
            'city_id',
            'grupe_id',
        ]));

        return redirect()->route('students.index')->with('success', 'Studentas atnaujintas!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Studentas ištrintas!');
    }

    public function trashed()
    {
        $students = Student::onlyTrashed()->with(['city', 'grupe'])->paginate(20);
        return view('students.trashed', compact('students'));
    }

    public function restore($id)
    {
        Student::withTrashed()->findOrFail($id)->restore();
        return redirect()->route('students.trashed')->with('success', 'Studentas atkurtas!');
    }

    public function forceDelete($id)
    {
        Student::withTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('students.trashed')->with('success', 'Studentas ištrintas visam laikui!');
    }
}