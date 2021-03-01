<?php


use App\Student;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/insert', function () {
    $student=new Student;
   $student->name='Zere';
   $student->date_of_birth='20011216';
   $student->JPA=3;
   $student->advisor="Aigul";
   $student->save();
});
Route::get('/insert1', function () {
    $student=new Student;
   $student->name='Zhibek';
   $student->date_of_birth='20021216';
   $student->JPA=4;
   $student->advisor="Kolia";
   $student->save();
});

Route::get('/insert2', function () {
    $student=new Student;
   $student->name='Aisha';
   $student->date_of_birth='20031215';
   $student->JPA=3;
   $student->advisor="Ayla";
   $student->save();
});

Route::get('/select', function () {
    $results = DB::select('select*from kak where id=?',[2]);
    foreach($results as $kak)
    {
    	echo "name is :".$kak->name;
    	echo "<br>";
    	echo "JPA is: ".$kak->JPA;
    }
});

Route::get('/update', function () {
    $update=DB::update('update kak set name="Aiman" where id =?',[3]);
    return $update;
});

Route::get('/delete', function () {
$delete=DB::delete('delete from kak where id=?',[1]);
return $delete;
});
Route::get('/read',function(){
$kak=Student::all();
foreach($kak as $student){
	echo $student->name;
	echo "<br>";
}
});
Route::get('/find',function() {
	$kak=Student::find(2);
	return $kak->name;
});

Route::get('/find',function() {
	$kak=Student::find(2);
	return $kak->name;
});

Route::get('/find2',function() {
	$kak=Student::where('id',2)->first();
	return $kak;
});
Route::get('/find3',function() {
	$kak=Student::where('id',2)->value('name');
	return $kak;
});
Route::get('/basicupdate',function() {
	$student=Student::find(2);
	$student->name="Maryiam";
	$student->JPA=3.4;
	$student->save();
});
Route::get('/delete1',function(){
$student=Student::find(2);
$student->delete();
});
Route::get('/destroy',function(){
Student::destroy(3);
});

Route:: get('/destroy3',function(){
Student::destroy([4,5]);
});
Route::get('/delete4',function(){
	Student::where('name','Zere')->delete();
});