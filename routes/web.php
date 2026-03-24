<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrincipalController;
use App\Models\Pagina;

Route::get('/hello',HomeController::class);
Route::get('post/mensaje',[PostController::class, 'Mensaje']);
Route::get('post/about/{param}/{name}', [PostController::class, 'About']);
Route::get('post/contacto', [PostController::class,'Contacto']);
Route::get('/Principal',[PrincipalController::class,'index']);
Route::get('Llamado',[PostController::class, 'llamado_componente']);

Route::get('/principalpagina',[PostController::class,'principal']);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello/{d}', function ($d=null){
   return "Hello, Word! {$d}"; 
})-> where ('d','[0-9]+');
Route::get('/hello/{x}', function ($x=null){
   return "Hello, Word! {$x}"; 
})-> where ('x','\w+');
Route::get('/Principal', function (){
   return "Bienvenido a la pàgina principal"; 
});
Route::get('/about/{param?}', function ($p=null){
    if (($p == null) || (empty($p))) {
   return "No se ingreso ningùn parametro"; 
}
return"El paràmetro ingresado es:{$p}";
});

Route::get('/empresa',[HomeController::class,'empresa'])->name('empresa');
Route::get('/nuevoregistro', function (){
   $pagina=new Pagina;
   $pagina->name ='Luica Lopez';
   $pagina ->email_verified='lucia@gmail.com';
   $pagina ->email_verified=date( 'Y-m-d');
   $pagina ->password='123456';
   $pagina ->avatar='user.png';
   $pagina ->telefono='9999999';
   $pagina ->calle='89';
   $pagina ->save();
   return $pagina;
});
//Define el metodo para buscar por el id
//Para obtener unicamente un registro
Route::get('buscarpaginaid',function(){
   $post=Pagina::find(1);
   return $post;
});

Route::get('buscarxname',function(){
   $post=Pagina::where ('name','Maria')->first();
   return $post;
});

Route::get('obtenertodos',function(){
   $post=Pagina::all();
   return $post;
});

Route::get('updatename',function(){
   $post=Pagina::where('name','Maria')->first();
   $post->email='maria@gmail.com';
   $post->save();
   return $post;
});

Route::get('filter',function(){
   $post=Pagina::where('calle','like','%123%')->orderBy("id","desc")->get();
   return $post;
});

Route::get('trescampos',function(){
   $post=Pagina::select('name','email','telefono')-> get();
   return $post;
});

//Conforme a una selección solamente traerme un cierto número de registros
Route::get('filtroxnumreg',function(){
   $post=Pagina::select("name","email")->orderBy("name")->take(3)->get();
   return $post;
});

//Para eliminar un determinado registro
Route::get('eliminar_registro',function(){
   $post=Pagina::find(5);
   $post->delete();
   return "Eliminado";
});

//obtener la fecha conforme a un formato
Route::get('Obtenerfechaformato',function(){
   $post=Pagina::select("name","email","created_at")->find(3);
   return $post;
});

//obtener el valor de is_active
Route::get('Obtenerstatus',function(){
   $post=Pagina::find(1);
   //dd funciòn de depuracion que muestra el contenido de una variable
   dd($post->is_active);
});

Route::put('/actualizar-dato/{id}',[HomeController::class,'update'])->name('dato.update');

Route::get('prueba',function(){
});
