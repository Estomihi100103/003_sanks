<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LoginController::class, 'index'])->name('login');
//untuk login
Route::post('/', [LoginController::class, 'authenticate'])->name('authenticate');


Route::get('/beranda-mhs', [BerandaController::class, 'viewBerandaMhs'])->name('berandaMhs');


Route::get('/beranda-ds', [BerandaController::class, 'viewBeranda'])->name('beranda.ds');

Route::get('/buat-proposal', [ProposalController::class, 'viewBuatProposal'])->name('buat.proposal');
Route::get('/pengajuan-proposal-berhasil', [ProposalController::class, 'viewPengajuanProposalBerhasil'])->name('pengajuanberhasil.proposal');
Route::get('/pengajuan-proposal', [ProposalController::class, 'viewPengajuanProposal'])->name('pengajuan.proposal');  //untuk view pengajuan proposal melalui id
Route::get('/map-asesor', [Controller::class, 'viewMapAsesor'])->name('map.asesor');
Route::get('/penilaian-proposal', [Controller::class, 'viewPenilaian'])->name('penilaian.proposal');
Route::get('/riwayat-proposal', [ProposalController::class, 'viewRiwayatProposal'])->name('riwayat.proposal');
Route::get('/status-proposal', [ProposalController::class, 'viewStatusProposal'])->name('status.proposal');
Route::get('/tinjau-proposal', [ProposalController::class, 'viewTinjau'])->name('penilaian.tinjau');













// Route::get('/beranda-mhs', function () {
//     return view('beranda.beranda-mhs');
// });

// Route::get('/beranda-ds', function () {
//     return view('beranda.beranda-ds');
// });

// Route::get('/pengajuan-proposal', function () {
//     return view('pengajuan-proposal');
// });

// Route::get('/tinjau-proposal', function () {
//     return view('tinjau-proposal');
// });

// Route::get('/status-proposal', function () {
//     return view('status-proposal');
// });

// Route::get('/riwayat-proposal', function () {
//     return view('riwayat-proposal');
// });

// Route::get('/buat-proposal', function () {
//     return view('buat-proposal');
// });

// Route::get('/penilaian-proposal', function () {
//     return view('penilaian-proposal');
// });

// Route::get('/pengajuan-proposal-berhasil', function () {
//     return view('pengajuan-proposal-berhasil');
// });

// Route::get('/status-proposal', function () {
//     return view('status-proposal');
// });
