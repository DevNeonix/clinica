<?php


/*
 * autenticacion login
 *               registro de personal
 * paciente
 *      -nombres
 *      -apellidos
 *      -nrodoc
 *      -tipdoc dni,carnetdex
 *
 * doctor
 *      -nombres
 *      -apellidos
 *      -nrodoc
 *      -cmp
 *
 * horarioA
 *      doctor_id fk
 *      rango ini 01-01-2021
 *      rango fin 31-12-2021
 *      l ,m , m ,j ,v ,s, d
 *horas
 *      doctor_id fk
 *      hora inic
 *      hora fin
 *      dia
 * citas
 *      id
 *      paciente_id
 *      doctor_id
 *      fecha
 *      hora
 * */

Route::get('/', function () {
    return redirect('login');
});

Route::get('login','AuthController@login');
Route::resource('almacen/categoria','CategoriaController');
