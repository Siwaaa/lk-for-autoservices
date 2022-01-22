<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class AutoController extends Controller
{
    /**
     * Возвращает массив объектов всех авто заданной марки
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $autos = Brand::find($request->brand_id)->autos;

        // Странно, но после тестирования запросов с relationships и без, быстрее оказался второй вариант
        $brand = Brand::where('name', $request->brand)->first();
        $autos = Auto::where('brand_id', $brand->id)
            ->select(['id_modification', 'class_vaksoil','brand_id','brand_RUS', 'model', 'series', 'generation', 'year_start_GENERATION', 'year_finish_GENERATION', 'modification'])
            ->orderBy('model', 'asc')
            ->get();
        // select нужен для уменьшения времени обработки запроса. Вернет не все значения таблицы, а только указанные

        return response()->json([
            'data' => $autos
        ],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function show(Auto $auto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function edit(Auto $auto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auto $auto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auto  $auto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auto $auto)
    {
        //
    }
}
