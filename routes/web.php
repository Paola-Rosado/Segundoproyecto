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
   $pagina->name ='Maria';
   $pagina ->email='maria@gmail.com';
   $pagina ->email_verified=date( 'Y-m-d');
   $pagina ->password='123456';
   $pagina ->avatar='user.png';
   $pagina ->telefono='9999999';
   $pagina ->calle='89';
   $pagina ->save();
   return $pagina;
});

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