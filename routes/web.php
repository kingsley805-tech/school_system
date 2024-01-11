<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\BussesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\createLoginController;
use App\Http\Controllers\SMSController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LiveClassController;
use App\Http\Controllers\PromotionalController;
use App\Http\Controllers\SettingController;

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

Route::get('/', [CustomAuthController::class,'loginPage'])->middleware('guest');
// Route::get('/register', [CustomAuthController::class,'registerPage'])->middleware('AllreadyLogin');
// Route::post('/register-user', [CustomAuthController::class,'registerUser'])->name('register-user');
// Route::post('/login-user', [CustomAuthController::class,'loginUser'])->name('login-user');
// Route::get('/admin-dashboard', [CustomAuthController::class,'adminDashboard'])->middleware('isLogin');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::post('/create-user', '\App\Http\Controllers\Auth\RegisterController@create');

Route::get('/student-register', [StudentController::class,'studentRegistrationPage'])->middleware('isLogin');
Route::post('/create-class', [StudentController::class,'createClass'])->name('create-class');
Route::post('/student-registration', [StudentController::class,'newStudentPost'])->name('student-registration');
Route::get('/student-list', [StudentController::class,'FetchStudentList'])->middleware('isLogin');



Route::get('/account-admin-page', [AccountController::class,'AccountPage'])->middleware('isLogin');
Route::get('/account-feetype-form', [AccountController::class,'AddFeeTypeForm'])->middleware('isLogin');
Route::get('/account-feetype', [AccountController::class,'FeeType'])->middleware('isLogin');
Route::post('/fee-structure-post', [AccountController::class,'AddFeeStructure'])->name('fee-structure-post');


Auth::routes();
Route::prefix('parent')->middleware(['auth'])->group(function (){

});

Route::prefix('student')->middleware(['auth'])->group(function (){

});

Route::prefix('admin')->group(function (){
    // Route::get('/academic/dashboard', '\App\Http\Controllers\AcademicController@index');
    // Route::get('/academic/class', '\App\Http\Controllers\AcademicController@class');
    Route::prefix("academics")->middleware(['auth','is_Teacher'])->group(function (){
        Route::get('/dashboard', '\App\Http\Controllers\AcademicController@index');

        Route::get('/class-section', '\App\Http\Controllers\ClassController@showall');
        Route::post('/class-create', '\App\Http\Controllers\ClassController@create')->name('new_class');
        Route::get('/class-create-page', '\App\Http\Controllers\ClassController@showCreatePage');
        Route::post('/class-update/{id}', '\App\Http\Controllers\ClassController@update')->name('update_class');
        Route::get('/class-delete/{id}', '\App\Http\Controllers\ClassController@destroy');
        Route::get('/show/{id}', '\App\Http\Controllers\ClassController@show');
        Route::get('/class-update-page/{id}', '\App\Http\Controllers\ClassController@showUpdatePage');
        Route::get('/class_subjects/{id}', '\App\Http\Controllers\ClassController@classSubjects');

        Route::get('/subject', '\App\Http\Controllers\SubjectController@index');
        Route::post('/subject-create', '\App\Http\Controllers\SubjectController@create')->name('new_subject');
        Route::get('/subject-create-page', '\App\Http\Controllers\SubjectController@showCreatePage');
        Route::post('/subject-update/{id}', '\App\Http\Controllers\SubjectController@update')->name('update_subject');
        Route::get('/subject-delete/{id}', '\App\Http\Controllers\SubjectController@destroy');
        Route::get('/subject-update-page/{id}', '\App\Http\Controllers\SubjectController@showUpdatePage');

        Route::get('/routine', '\App\Http\Controllers\RoutineController@index');
        Route::post('/routine-create', '\App\Http\Controllers\RoutineController@create')->name('new_routine');
        Route::get('/routine-create-page', '\App\Http\Controllers\RoutineController@showCreatePage');
        Route::post('/routine-update/{id}', '\App\Http\Controllers\RoutineController@update')->name('update_routine');
        Route::get('/routine-delete/{id}', '\App\Http\Controllers\RoutineController@destroy');
        Route::get('/routine-update-page/{id}', '\App\Http\Controllers\RoutineController@showUpdatePage');
        Route::get('/routine-view-page/{id}', '\App\Http\Controllers\RoutineController@show');

        Route::get('/studymaterials', '\App\Http\Controllers\StudymaterialController@index');
        Route::post('/studymaterials-create', '\App\Http\Controllers\StudymaterialController@create')->name('new_studymaterials');
        Route::get('/studymaterials-create-page', '\App\Http\Controllers\StudymaterialController@showCreatePage');
        Route::post('/studymaterials-update/{id}', '\App\Http\Controllers\StudymaterialController@update')->name('update_studymaterials');
        Route::get('/studymaterials-delete/{id}', '\App\Http\Controllers\StudymaterialController@destroy');
        Route::get('/studymaterials-delete-file/{id}', '\App\Http\Controllers\StudymaterialController@destroyfile');
        Route::get('/studymaterials-update-page/{id}', '\App\Http\Controllers\StudymaterialController@showUpdatePage');
        Route::get('/studymaterials-view-page/{id}', '\App\Http\Controllers\StudymaterialController@show');

        Route::get('/download/public/studymaterials/{file}', function($file){return response()->download(storage_path('app/public/studymaterials/'.$file));});

        Route::get('/homework', '\App\Http\Controllers\HomeworkController@index');
        Route::post('/homework-create', '\App\Http\Controllers\HomeworkController@create')->name('new_homework');
        Route::get('/homework-create-page', '\App\Http\Controllers\HomeworkController@showCreatePage');
        Route::post('/homework-update/{id}', '\App\Http\Controllers\HomeworkController@update')->name('update_homework');
        Route::get('/homework-delete/{id}', '\App\Http\Controllers\HomeworkController@destroy');
        Route::get('/homework-update-page/{id}', '\App\Http\Controllers\HomeworkController@showUpdatePage');
        Route::get('/homework-view-page/{id}', '\App\Http\Controllers\HomeworkController@show');

        Route::get('/download/public/homework/{file}', function($file){return response()->download(storage_path('app/public/homework/'.$file));});

        Route::get('/noticeboard', '\App\Http\Controllers\NoticeboardController@index');
        Route::post('/noticeboard-create', '\App\Http\Controllers\NoticeboardController@create')->name('new_noticeboard');
        Route::get('/noticeboard-create-page', '\App\Http\Controllers\NoticeboardController@showCreatePage');
        Route::post('/noticeboard-update/{id}', '\App\Http\Controllers\NoticeboardController@update')->name('update_noticeboard');
        Route::get('/noticeboard-delete/{id}', '\App\Http\Controllers\NoticeboardController@destroy');
        Route::get('/noticeboard-delete-file/{id}', '\App\Http\Controllers\StudymaterialController@destroyfile');
        Route::get('/noticeboard-update-page/{id}', '\App\Http\Controllers\NoticeboardController@showUpdatePage');
        Route::get('/noticeboard-view-page/{id}', '\App\Http\Controllers\NoticeboardController@show');

        Route::get('/download/public/noticeboards/{file}', function($file){return response()->download(storage_path('app/public/noticeboards/'.$file));});

    });

    Route::prefix("administrator")->middleware(['auth','is_admin'])->group(function (){
        Route::get('/dashboard', '\App\Http\Controllers\AdministratorController@index');

        Route::get('/staff', '\App\Http\Controllers\TeacherController@index');
        Route::post('/staff-create', '\App\Http\Controllers\TeacherController@create')->name('new_Staff');
        Route::get('/staff-create-page', '\App\Http\Controllers\TeacherController@showCreatePage');
        Route::post('/staff-update/{id}', '\App\Http\Controllers\TeacherController@update')->name('update_staff');
        Route::get('/staff-delete/{id}', '\App\Http\Controllers\TeacherController@destroy');
        Route::get('/staff-update-page/{id}', '\App\Http\Controllers\TeacherController@showUpdatePage');

        Route::post('/parent-create', '\App\Http\Controllers\ParentController@create')->name('new_parent');
        Route::get('/parent-create-page', '\App\Http\Controllers\ParentController@showParentPage');
        Route::get('/parents', '\App\Http\Controllers\ParentController@index');

        Route::post('/student-create', '\App\Http\Controllers\StudentController@create')->name('new_student');
        Route::get('/student-register', '\App\Http\Controllers\StudentController@register_student');
        Route::get('/students', '\App\Http\Controllers\StudentController@index');
        
        Route::get('/student-profile/{id}', '\App\Http\Controllers\StudentController@studentProfile');
    });

    Route::prefix("parent")->middleware(['auth','is_admin'])->group(function (){
        Route::post('/create', '\App\Http\Controllers\ParentController@create')->name('new_parent');
        Route::get('/create-page', '\App\Http\Controllers\ParentController@showParentPage');
        Route::post('/show_all', '\App\Http\Controllers\ParentController@showall');
    });

    Route::prefix("student")->middleware(['auth','is_admin'])->group(function (){
        Route::post('/create', '\App\Http\Controllers\StudentController@create')->name('new_student');
        Route::get('/register', '\App\Http\Controllers\StudentController@register_student');
        Route::post('/show_all', '\App\Http\Controllers\StudentController@showall');
    });

    Route::prefix("user")->group(function (){
        Route::post('/create', '\App\Http\Controllers\UserController@create')->name('new_user');
        Route::post('/create-page', '\App\Http\Controllers\UserController@showUserPage');
        Route::post('/show_all', '\App\Http\Controllers\UserController@showall');
    });
});

//////////////////////////Account route//////////////////////////
Route::prefix('account')->middleware(['auth', 'is_Account'])->group(function (){
    Route::get('/admin-page', [AccountController::class,'AccountPage']);
    Route::get('/feetype-form', [AccountController::class,'AddFeeTypeForm']);
    Route::get('/feetype', [AccountController::class,'FeeType']);
    Route::post('/fee-structure-post', [AccountController::class,'AddFeeStructure'])->name('fee-structure-post');

    Route::get('/create-expenses', [ExpensesController::class,'ExpensesForm']);
    Route::post('/create-expenses', [ExpensesController::class,'newExpensesPost'])->name('create-expenses');
    Route::get('/expense-list', [ExpensesController::class,'fetchExpensesList']);
    Route::get('/expense/edit/{id}', [ExpensesController::class,'expensesFormEdit']);
    Route::post('/expense/edit', [ExpensesController::class,'expenseFormEditPost'])->name('expense/edit');
    Route::get('/expense/delete/{id}', [ExpensesController::class,'deleteExpense']);

    Route::get('/create-income', [IncomeController::class,'incomeFormPage']);
    Route::post('/create-income', [IncomeController::class,'createNewIncomePost'])->name('create-income');
    Route::get('/show-income-list', [IncomeController::class,'fetchIncomeList']);
    Route::get('/income/edit/{id}', [IncomeController::class,'editIncomeForm']);
    Route::post('/income/edit', [IncomeController::class,'editIncomePost'])->name('income/edit');
    Route::get('/income/delete/{id}', [IncomeController::class,'deleteIncome']);

    Route::get('/create-invoice-form', [InvoiceController::class,'createInvoicePage']);
    Route::get('/create-student-invoice-form', [InvoiceController::class,'createStudentInvoicePage']);
    Route::post('/invoice/fee-type', [InvoiceController::class,'fetchFeeStructure'])->name('/invoice/fee-type');
    Route::post('/invoice/fetch-classes', [InvoiceController::class,'fetchClassList'])->name('/invoice/fetch-classes');
    Route::post('/invoice/fetch-student', [InvoiceController::class,'fetchStudentFromClass'])->name('/invoice/fetch-student');

    Route::post('/invoice/create-invoice-student', [InvoiceController::class,'PostInvoiceForStudent'])->name('/invoice/create-invoice-student');
    
    Route::post('/invoice/create-invoice-from-class', [InvoiceController::class,'PostInvoiceFromClasses'])->name('/invoice/create-invoice-from-class');

    Route::get('/invoices', [InvoiceController::class,'fetchInvoiceList']);
    Route::get('/invoice/show/{InvoiceNumber}/{InvoiceID}', [InvoiceController::class,'showInvoice']);
    Route::get('/invoice/delete/{InvoiceNumber}/{InvoiceID}', [InvoiceController::class,'deleteInvoice']);

    Route::get('/invoice/paid/list', [InvoiceController::class,'paidInvoices']);
    Route::get('/invoice/unpaid/list', [InvoiceController::class,'unpaidInvoices']);
    Route::get('/invoice/started/list', [InvoiceController::class,'PartiallypaidInvoices']);

    Route::get('/invoices/students', [InvoiceController::class,'studentInvoice']);
    Route::get('/invoices/students/show/{InvoiceID}/{InvoiceNumber}', [InvoiceController::class,'InvoiceDetails']);

    Route::get('/payment/page', [PaymentController::class,'makePaymentPage']);

    Route::post('/payment/invoices/fetch', [PaymentController::class,'SelectInvoicesForStudent'])->name('/payment/invoices/fetch');

     Route::get('/payment/invoice/list/{InvoiceID}/{InvoiceNumber}', [PaymentController::class,'InvoiceDetails']);

     Route::get('/payment/type/oninvoice/{InvoiceID}/{InvoiceNumber}', [PaymentController::class,'payOnInvoice']);

     Route::post('/payment/invoices/create', [PaymentController::class,'createPaymentPost'])->name('/payment/invoices/create');

     Route::get('/payment/type/oninvoiceitems/{InvoiceID}/{InvoiceNumber}/{id}', [PaymentController::class,'payOnInvoiceItems']);

     Route::post('/payment/invoices/items/create', [PaymentController::class,'createPaymentPostOnItems'])->name('/payment/invoices/items/create');

     Route::get('/payment/history/all', [PaymentController::class,'fetchAllPayments']);
     Route::get('/payment/history/class', [PaymentController::class,'fetchClassRoomForPaymet']);
     Route::get('/payment/history/student', [PaymentController::class,'fetchClassRoomForPaymetTwo']);

     Route::get('/payment/invoices/student', [PaymentController::class,'fetchClassRoomForPaymetThree']);

     Route::post('/payment/history/class', [PaymentController::class,'fetchPaymentByClass'])->name('/payment/history/class');
     Route::post('/payment/history/student', [PaymentController::class,'fetchPaymentByStudent'])->name('/payment/history/student');

     Route::get('/payment/feetype/history/{id}', [PaymentController::class,'fetchFeetypeHistory']);

     Route::get('/payment/invoice/unpaid', [PaymentController::class,'fetchFeetypeHistory']);

     Route::post('/summary/first-line', [AccountController::class,'FetchAccountFirstLineAutoData'])->name('/summary/first-line');

});


////////////////////////////Examination Route/////////////
Route::prefix('examinations')->middleware(['auth', 'is_Teacher'])->group(function (){
    Route::get('/dashboard', [ExaminationController::class,'examminationDashboard']);
    Route::get('/manage-examination', [ExaminationController::class,'manageExamination']);
    Route::get('/add-exams', [ExaminationController::class,'addExamination']);
    Route::get('/add-exam-paper/{examinationNumber}', [ExaminationController::class,'addExaminationPapers']);
    Route::get('/results', [ExaminationController::class,'ExamResultPage']);
    Route::get('/results/{examinationNumber}', [ExaminationController::class,'resultEntryFormPage']);
    Route::get('/view-results', [ExaminationController::class,'getEnteredResultPage']);
    Route::get('/view-results/class/{examinationNumber}', [ExaminationController::class,'getClassResult']);
    Route::get('/view-results/students/{examinationNumber}', [ExaminationController::class,'getStudentResult']);
    Route::get('/results/remove/{id}', [ExaminationController::class,'RemoveResultFromPage']);

    Route::post('/add-exams', [ExaminationController::class,'createExamination'])->name('add-exams');
    Route::post('/add-exams-papers', [ExaminationController::class,'addExaminationSubjects'])->name('add-exams-papers');
    
    Route::post('/veiwtimetable', [ExaminationController::class,'viewExamTimeTable'])->name('veiwtimetable');
    Route::post('/fetch-student-detail', [ExaminationController::class,'fetchStudentDetail'])->name('fetch-student-detail');

    Route::post('/fetch-subject-detail', [ExaminationController::class,'fetchSubjectPaperDetail'])->name('fetch-subject-detail');

    Route::post('/postresults', [ExaminationController::class,'postExamResult'])->name('postresults');

    Route::post('/fetch-class-result', [ExaminationController::class,'fetchTheClassResult'])->name('fetch-class-result');

    Route::post('/fetch-student-result', [ExaminationController::class,'fetchStudentResult'])->name('/fetch-student-result');
    Route::get('/create-assessment/page', [ExaminationController::class,'createAssessmentPage']);

    Route::post('/get-examination-details', [ExaminationController::class,'fetchExaminationDetails'])->name('/fetch-student-result');

    Route::post('/assessment/create', [ExaminationController::class,'createAssessment'])->name('/assessment/create');

    Route::get('/enter-assessment/page', [ExaminationController::class,'enterAssessmentPage']);

    Route::post('/assessment/fetchStudentByClass', [ExaminationController::class,'AssesmentClassList'])->name('/assessment/fetchStudentByClass');

    Route::post('/assessment/student/fetch', [ExaminationController::class,'fetchStudentCreatedAssessment'])->name('/assessment/student/fetch');

    Route::get('/enter-assessment/enter-assesment/{examinationNumber}/{assesmentNumber}', [ExaminationController::class,'enterAssessmentForm']);
    Route::post('/assessment/examsresult/student', [ExaminationController::class,'studentExamResult'])->name('/assessment/examsresult/student');

    Route::post('/assessment/assessment/list', [ExaminationController::class,'assessmentCoursesListing'])->name('/assessment/assessment/list');

    Route::get('/assessment/view/page', [ExaminationController::class,'examminationAssessment']);

    Route::get('/assessment/view/student/{IndexNumber}/{assesmentNumber}', [ExaminationController::class,'fetchStudentAssesment']);

});


///////////////////////////////////Library Route////////////////////////////////

Route::prefix('library')->middleware(['auth', 'is_lib'])->group(function (){
    Route::get('/dashboard', [LibraryController::class,'libraryDashboard']);
    Route::get('/add-books', [LibraryController::class,'addBooks']);
    Route::get('/books', [LibraryController::class,'manageBooks']);
    Route::get('/books/new-issuance', [LibraryController::class,'manageBooksIssue']);
    Route::post('/post-book', [LibraryController::class,'createAddBookPost'])->name('post-book');

    Route::get('/book/issue/{id}', [LibraryController::class,'issueBooksPage']);
    Route::post('/book/issue/post', [LibraryController::class,'issueBookPostForm'])->name('/book/issue/post');
    Route::get('/issuebook/list', [LibraryController::class,'fetchIssuedBook']);

    Route::get('/issuebook/return/{bookID}/{id}', [LibraryController::class,'returnIssuedBook']);

    Route::post('/fetch-classlist', [LibraryController::class,'fetchClassList'])->name('fetch-classlist');

    Route::get('/book/edit/{id}', [LibraryController::class,'editBooksPage']);
    Route::get('/book/delete/{id}', [LibraryController::class,'deleteBook']);
    Route::post('/book/edit/post', [LibraryController::class,'editBookPost'])->name('/book/edit/post');

    Route::get('issuebook/student', [LibraryController::class,'studentIssueBookPage']);

    Route::post('/issuebooks/student/list', [LibraryController::class,'fetchStudentIssuedBook'])->name('/issuebooks/student/list');
});



Route::prefix('transport')->middleware(['auth', 'is_transport'])->group(function (){
    Route::get('/dashboard', [BussesController::class,'libraryDashboard']);

    Route::get('/addbus', [BussesController::class,'addBusesPage']);

    Route::post('/addbus', [BussesController::class,'addBusPost'])->name('/transport/addbus');

    Route::get('/bus/list', [BussesController::class,'fetchBusses']);

    Route::get('/bus/edit/{id}', [BussesController::class,'editBussesPage']);

    Route::post('/bus/edit/post', [BussesController::class,'editBussesPost'])->name('/bus/edit/post');

    Route::get('/bus/delete/{id}', [BussesController::class,'deleteBus']);

    Route::get('/routes/create', [BussesController::class,'addRoutePage']);

    Route::post('/route/post', [BussesController::class,'createRouteForm'])->name('/route/post');

    Route::get('/routes/lists', [BussesController::class,'fetchRoute']);

    Route::get('/routes/edit/{id}', [BussesController::class,'editRoutePage']);

    Route::post('/route/edit/post', [BussesController::class,'editRoutePost'])->name('/route/edit/post');

    Route::get('/routes/delete/{id}', [BussesController::class,'deleteRoute']);

    Route::get('/routes/assign-student', [BussesController::class,'assignStudentToRoutePage']);

    Route::get('/routes/assign-student/{routeID}', [BussesController::class,'assignStudentToRouteForm']);

    Route::post('/route/assign/post', [BussesController::class,'assignBusRouteToStudent'])->name('/route/assign/post');

    Route::get('/routes/student/{routeID}', [BussesController::class,'studentRouteList']);

    Route::get('/routes/remove-student/{IndexNumber}', [BussesController::class,'removeStudentFromRoute']);
});


Route::prefix('admininistration')->middleware(['auth', 'is_admin'])->group(function (){
    Route::get('/create-login-page', [createLoginController::class,'createLoginPage']);
    Route::post('/fetch-student-details', [createLoginController::class,'fetchStudentInfo'])->name('/fetch-student-details');
    Route::get('/create/login/form/{IndexNumber}', [createLoginController::class,'createLoginForm']);
    Route::get('/create/login/parent/{IndexNumber}', [createLoginController::class,'createParentLoginForm']);
    Route::post('/create/login/post', [createLoginController::class,'createStudentLogin'])->name('/create/login/post');

});

Route::prefix('school')->middleware(['auth','is_admin' ])->group(function (){
    Route::get('/sent-sms', [SMSController::class,'sendSMSPage']);
    Route::post('/send-sms-post', [SMSController::class,'sendSMS'])->name('/send-sms-post');
    Route::post('/send-sms-class-post', [SMSController::class,'sendSMSByClass'])->name('/send-sms-class-post');

    Route::get('/sent-email', [EmailController::class,'sendEmailPage']);
    Route::post('/send-email-post', [EmailController::class,'sendEmail'])->name('/send-email-post');
    Route::post('/send-email-by-class', [EmailController::class,'sendEmailByClass'])->name('/send-email-by-class');
});

Route::prefix('attendance')->middleware(['auth','is_Teacher' ])->group(function (){
    Route::get('/take/page', [AttendanceController::class,'takeAttendanceMainPage']);
    Route::get('/take/form/{id}', [AttendanceController::class,'takeAttendanceForm']);
    Route::post('/take/post', [AttendanceController::class,'postAttendance'])->name('/take/post');

    Route::get('/check/page', [AttendanceController::class,'checkAttendanceMainPage']);
    Route::get('/check/list/{id}', [AttendanceController::class,'checkattendanceForm']);

    Route::get('/student/list/{IndexNumber}', [AttendanceController::class,'StudentAttendanceList']);
    
});


Route::prefix('liveclass')->middleware(['auth','is_Teacher' ])->group(function (){
    Route::get('/create/page', [LiveClassController::class,'createLiveClassPage']);
    Route::post('/create/post', [LiveClassController::class,'createMeetingPost'])->name('/live/class/create');

    Route::get('/meeting/page', [LiveClassController::class,'fetchMeetingsPage']);
    Route::get('/meeting/list/{id}', [LiveClassController::class,'liveMeetingList']);
    Route::get('/meeting/delete/{id}', [LiveClassController::class,'deleteMeeting']);
});


Route::prefix('promotion')->middleware(['auth', 'is_admin'])->group(function (){
    Route::get('/page', [PromotionalController::class,'promotionPage']);
    Route::get('/make/{id}', [PromotionalController::class,'promoteForm']);
    Route::post('/make/post', [PromotionalController::class,'promotionPost'])->name('/make/post');

});

Route::prefix('settings')->middleware(['auth', 'is_admin'])->group(function (){
    Route::get('/users/create', [SettingController::class,'createUserPage']);
    Route::post('/users/create/post', [SettingController::class,'createUserPost'])->name('/users/create/post');

});


Route::get('/home', '\App\Http\Controllers\HomeController@index')->name('home');
Route::post('/home/statistics', '\App\Http\Controllers\DashboardControllers@dashboardStatistics')->name('home');
