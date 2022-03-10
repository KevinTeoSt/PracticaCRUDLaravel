<?php

namespace App\Http\Controllers;

use App\Models\Coursesandteacher;
use Illuminate\Http\Request;

/**
 * Class CoursesandteacherController
 * @package App\Http\Controllers
 */
class CoursesandteacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coursesandteachers = Coursesandteacher::paginate();

        return view('coursesandteacher.index', compact('coursesandteachers'))
            ->with('i', (request()->input('page', 1) - 1) * $coursesandteachers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coursesandteacher = new Coursesandteacher();
        return view('coursesandteacher.create', compact('coursesandteacher'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Coursesandteacher::$rules);

        $coursesandteacher = Coursesandteacher::create($request->all());

        return redirect()->route('coursesandteachers.index')
            ->with('success', 'Coursesandteacher created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coursesandteacher = Coursesandteacher::find($id);

        return view('coursesandteacher.show', compact('coursesandteacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coursesandteacher = Coursesandteacher::find($id);

        return view('coursesandteacher.edit', compact('coursesandteacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Coursesandteacher $coursesandteacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coursesandteacher $coursesandteacher)
    {
        request()->validate(Coursesandteacher::$rules);

        $coursesandteacher->update($request->all());

        return redirect()->route('coursesandteachers.index')
            ->with('success', 'Coursesandteacher updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $coursesandteacher = Coursesandteacher::find($id)->delete();

        return redirect()->route('coursesandteachers.index')
            ->with('success', 'Coursesandteacher deleted successfully');
    }
}
