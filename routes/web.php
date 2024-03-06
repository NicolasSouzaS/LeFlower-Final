<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EsteticaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;
use App\Models\ServicosModel;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/servico', [ServicoController::class, 'index'])->name('servico');
Route::get('/cadastrar-se', [CadastroController::class, 'index'])->name('cadastroCliente');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard.admin');
route::get('/contato', [ContatoController::class, 'index'])->name('contato');
route::get('/sobre', [SobreController::class, 'index'])->name('sobre');


// Serviços
Route::get('/servico/cabelos', [ServicoController::class, 'servicoCabelo'])->name('servicoCabelo');
Route::get('/servico/maquiagens', [ServicoController::class, 'servicoMaquiagem'])->name('servicoMaquiagem');
Route::get('/servico/barbas', [ServicoController::class, 'servicoBarba'])->name('servicoBarba');
Route::get('/servico/cilios', [ServicoController::class, 'servicoCilios'])->name('servicoCilios');
Route::get('/servico/massagens', [ServicoController::class, 'servicoMassagem'])->name('servicoMassagens');
Route::get('/servico/unhas', [ServicoController::class, 'servicoUnha'])->name('servicoUnhas');
Route::get('/servico/rosto', [ServicoController::class, 'servicoRosto'])->name('servicoRosto');
Route::get('/servico/depilacao', [ServicoController::class, 'servicoDepilacao'])->name('servicoDepilacoes');
Route::get('/servico/sobrancelhas', [ServicoController::class, 'servicoSobrancelha'])->name('servicoSobrancelhas');


// Rotas contato enviar/salvar
route::post('/contato/enviar', [ContatoController::class, 'salvarNoBanco'])->name('contato.enviar');
route::post('/contatos/newsLetter', [ContatoController::class, 'salvarNoemail'])->name('newsletter.salvar');






// Rotas com middleware
// Dashboard cliente
Route::middleware(['autenticacao:cliente'])->group(function(){
    Route::get('/cliente',[ClienteController::class,'index'])->name('dashboard.cliente');
    Route::get('/agendar',[ClienteController::class,'agendar'])->name('dashboard.agendar');

    // Rota AJAX
    Route::get('/agendar-cabelo', [ServicoController::class, 'AjaxCabelo'])->name('ajax.cabelo');


    Route::get('/servicos', function () {
        $servicos = ServicosModel::all();
        return response()->json($servicos);
    });

    Route::get('/servicos',[ServicoController::class, 'indexServico']);


});
Route::middleware(['autenticacao:Administrador'])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('dashboard.funcionarios.admin');
});Route::middleware(['autenticacao:Esteticista'])->group(function(){
    Route::get('/esteticista',[EsteticaController::class,'index'])->name('dashboard.funcionarios.estetica');
});





// Rota de login de usuario
Route::post('/login', [LoginController::class, 'autenticar'])->name('login.autenticar');

// Rota de cadastro de usuário
Route::post('/', [CadastroController::class, 'cadastroCliente'])->name('cadastro.store');
