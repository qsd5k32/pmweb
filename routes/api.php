<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::post('/deploy', function (Request $request) {
    $secret = env('GITHUB_WEBHOOK_SECRET');

    $signature = 'sha256=' . hash_hmac('sha256', $request->getContent(), $secret);
    /*if(!$request->header('X-Hub-Signature-256'))
    {
        abort(403, 'Unauthorized action.');
    }
    if (!hash_equals($signature, $request->header('X-Hub-Signature-256'))) {
        abort(403, 'Unauthorized action.');
    }*/
    // test working webhook
    $output = [];
    $status = 0;

    exec('/var/www/pmweb/deploy.sh', $output, $status);
    //exec('whoami', $output, $status);

    return response()->json([
        'status' => $status === 0 ? 'success' : 'failure',
        'output' => $output,
    ]);
});
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/tables', function () {
//     $tables = DB::select('SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES'); // returns an array of stdObjects
//     foreach ($tables as $table) {
//         $tableName = $table->TABLE_NAME;
//         echo "<h3>$tableName</h3>";
//     }
// });
Route::post('/login', [AuthController::class, 'login']);
// Route::prefix('api')->group(function () {
// });

// Protected routes
Route::prefix('api')->middleware('api.auth:api')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    
    // Add your other protected API routes here
});
Route::get('/tables', function () {
    $avTables = DB::select("SELECT TABLE_NAME 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_NAME LIKE 'AV_%'
        ORDER BY TABLE_NAME");
        
    $nonAvTables = DB::select("SELECT TABLE_NAME 
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_NAME NOT LIKE 'AV_%'
        ORDER BY TABLE_NAME");
    
    return response()->json([
        'av_tables' => collect($avTables)->map(function($table) {
            return $table->TABLE_NAME;
        }),
        'other_tables' => collect($nonAvTables)->map(function($table) {
            return $table->TABLE_NAME;
        })
    ]);
});


Route::get('/tables/submital', function () {
    $tables = DB::select('SELECT * FROM CostManagement_BillingTermsList');
    return response()->json($tables);
});
// Route::get('/tables/CompanyTypes', function () {
//     $tables = DB::select('SELECT * FROM CompanyTypes');
//     return response()->json($tables);
// });

// Route::apiResource('/CompanyTypes', App\Http\Controllers\CompanyTypesController::class)->only([
//     'index', 'show', 'store', 'update', 'destroy'
// ]);
Route::prefix('CompanyTypes')->group(function () {
    Route::get('/', [App\Http\Controllers\CompanyTypesController::class, 'index']);
    Route::post('/', [App\Http\Controllers\CompanyTypesController::class, 'store']);
    Route::delete('/{companyTypes}', [App\Http\Controllers\CompanyTypesController::class, 'destroy']);
    Route::put('/{companyTypes}', [App\Http\Controllers\CompanyTypesController::class, 'update']);
    Route::get('/{companyTypes}', [App\Http\Controllers\CompanyTypesController::class, 'show']);
});
Route::apiResource('/ChangeOrdersDetails', App\Http\Controllers\ChangeOrdersDetailsController::class);
Route::apiResource('/SiteHandOverDays', App\Http\Controllers\SiteHandOverDaysController::class);
Route::apiResource('/CommitmentCategories', App\Http\Controllers\CommitmentCategoriesController::class)->only([
    'index', 'store', 'destroy'
]);
Route::apiResource('/CommitmentTypes', App\Http\Controllers\CommitmentTypesController::class)->only([
    'index', 'store', 'destroy'
]);
Route::apiResource('/CompaniesList', App\Http\Controllers\CompaniesListController::class);
Route::apiResource('/CorrictiveActions', App\Http\Controllers\CorrictiveActionsController::class);
Route::apiResource('/CountOfAccidents', App\Http\Controllers\CountOfAccidentsController::class);
Route::apiResource('/CountOfCommitmentProjects', App\Http\Controllers\CountOfCommitmentProjectsController::class);
Route::apiResource('/CountOfCorrectiveActions', App\Http\Controllers\CountOfCorrectiveActionsController::class);
Route::apiResource('/CountOfInspection', App\Http\Controllers\CountOfInspectionController::class);
Route::apiResource('/CountOfMeetings', App\Http\Controllers\CountOfMeetingsController::class);
Route::apiResource('/CountOfNCR', App\Http\Controllers\CountOfNCRController::class);
Route::apiResource('/CountOfSiteInstructions', App\Http\Controllers\CountOfSiteInstructionsController::class);
Route::apiResource('/CountOfSubmittals', App\Http\Controllers\CountOfSubmittalsController::class);
Route::apiResource('/Countries', App\Http\Controllers\CountriesController::class);
Route::apiResource('/Currencies', App\Http\Controllers\CurrenciesController::class);
Route::apiResource('/DocStatus', App\Http\Controllers\DocStatusController::class);
Route::apiResource('/SafetyFormsTypes', App\Http\Controllers\SafetyFormsTypesController::class);
Route::apiResource('/IncidentInfo', App\Http\Controllers\IncidentInfoController::class);
Route::apiResource('/InspectionDetails', App\Http\Controllers\InspectionDetailsController::class);
Route::apiResource('/ListOfPrograms', App\Http\Controllers\ListOfProgramsController::class);
Route::apiResource('/programs', App\Http\Controllers\ProgramsController::class);
Route::apiResource('/NCRDangerDisciplines', App\Http\Controllers\NCRDangerDisciplinesController::class);
Route::apiResource('/PaymentDetails', App\Http\Controllers\PaymentDetailsController::class);
Route::apiResource('/PaymentsSumForProjects', App\Http\Controllers\PaymentsSumForProjectsController::class);
Route::apiResource('/PlannedCashflowLabor', App\Http\Controllers\PlannedCashflowLaborController::class);
Route::apiResource('/PlannedCashflowLaborMonth', App\Http\Controllers\PlannedCashflowLaborMonthController::class);
Route::apiResource('/PlannedCashflowTBD', App\Http\Controllers\PlannedCashflowTBDController::class);
Route::apiResource('/Priorities', App\Http\Controllers\PrioritiesController::class);
Route::apiResource('/ProgressInvoiceDetails', App\Http\Controllers\ProgressInvoiceDetailsController::class);
Route::apiResource('/ProjectCategories', App\Http\Controllers\ProjectCategoriesController::class)->only([
    'index', 'store', 'destroy'
]);
Route::apiResource('/ProjectCommitmentsDetails', App\Http\Controllers\ProjectCommitmentsDetailsController::class);
Route::apiResource('/ProjectLocations', App\Http\Controllers\ProjectLocationsController::class)->only([
    'index', 'store', 'destroy'
]);
Route::apiResource('/ProjectStatuses', App\Http\Controllers\ProjectStatusesController::class)->only([
    'index', 'store', 'destroy'
]);
Route::apiResource('/ProjectTypes', App\Http\Controllers\ProjectTypesController::class)->only([
    'index', 'store', 'destroy'
]);
// Route::prefix('ProjectTypes')->group(function () {
//     Route::get('/', [App\Http\Controllers\ProjectTypesController::class, 'index']);
//     Route::post('/', [App\Http\Controllers\ProjectTypesController::class, 'store']);
//     Route::delete('/{projectType}', [App\Http\Controllers\ProjectTypesController::class, 'destroy']);
// });
Route::apiResource('/Projects', App\Http\Controllers\ProjetcsController::class);
Route::apiResource('/RfiAnsweredDays', App\Http\Controllers\RfiAnsweredDaysController::class);
Route::apiResource('/RFIsCountOf', App\Http\Controllers\RFIsCountOfController::class);
Route::apiResource('/SafetyFormInfo', App\Http\Controllers\SafetyFormInfoController::class);
Route::apiResource('/SiteInstructions', App\Http\Controllers\SiteInstructionsController::class);
Route::apiResource('/States', App\Http\Controllers\StatesController::class);
Route::apiResource('/SubmittalDetails', App\Http\Controllers\SubmittalDetailsController::class);
Route::apiResource('/SumOfProgressInvoice', App\Http\Controllers\SumOfProgressInvoiceController::class);
Route::apiResource('/UpdateProjectStatus', App\Http\Controllers\UpdateProjectStatusController::class);

Route::apiResource('/InitiativeBudget', App\Http\Controllers\InitiativeBudgetController::class)->only([
    'index', 'show','store', 'update', 'destroy'
]);
// Route::post('/InitiativeBudget-remove', [App\Http\Controllers\InitiativeBudgetController::class, 'destroy']);

Route::apiResource('/InitiativeRatings', App\Http\Controllers\InitiativeRatingsController::class)->only([
    'index', 'show', 'store', 'update', 'destroy'
]);
Route::apiResource('/InitiativeScoring', App\Http\Controllers\InitiativeScoringController::class)->only([
    'index', 'show','store', 'update', 'destroy'
]);
Route::apiResource('/pbs', App\Http\Controllers\PBsController::class)->only([
    'index', 'show','store', 'update', 'destroy'
]);
Route::apiResource('/funding-source', App\Http\Controllers\FundingSourceController::class)->only([
    'index', 'show','store', 'update', 'destroy'
]);
Route::apiResource('/workflow-calender', App\Http\Controllers\WorkflowCalenderController::class)->only([
    'index', 'show','store', 'update', 'destroy'
]);
