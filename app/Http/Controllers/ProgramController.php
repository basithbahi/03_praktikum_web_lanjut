<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        return view('program', [
            'judul' => 'Program']);
    }

    public function satu(){
        return view('program', [
            'judul' => 'Event']);
    }

    public function dua(){
        return view('program', [
            'judul' => 'Karir']);
    }

    public function tiga(){
        return view('program', [
            'judul' => 'Magang']);
    }

    public function empat(){
        return view('program', [
            'judul' => 'Kunjungan Industri']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
