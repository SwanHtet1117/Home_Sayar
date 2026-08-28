<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ParentProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes (Wrapped in 'web' middleware group for Session Support)
|--------------------------------------------------------------------------
*/
Route::middleware(['web'])->group(function () {

    // 1. Public Pages
    Route::get('/', function () { return view('home'); })->name('home');
    Route::get('/about-us', function () { return view('about_us'); })->name('about.us');
    Route::get('/events', function () { return view('events'); })->name('events');
    Route::get('/blogs', function () { return view('blogs'); })->name('blogs');
    Route::get('/teachers/faq', function () { return view('teacher.faq'); })->name('teachers.faq');
    Route::get('/parents/faq', function () { return view('parent.faq'); })->name('parents.faq');
    Route::get('/marketplace', function () { return view('marketplace'); })->name('marketplace');
    Route::get('/jobs', function () { return view('jobs'); })->name('jobs');
    Route::get('/contact-us', function () { return view('contact_us'); })->name('contact.us');
    Route::get('/teacher/profile/submit', function () { return view('teacher.profile_submit'); })->name('teacher.profile.submit');
    Route::get('/parent/search/teacher', function () { return view('parent.search_teacher'); })->name('parent.search_teacher');
    Route::get('/teacher/feedback', function () { return view('feedback.teacher_feedback'); })->name('teacher.feedback');
    Route::get('/parent/feedback', function () { return view('feedback.parent_feedback'); })->name('parent.feedback');

    // 2. Authentication Routes (Guest Only)
    Route::middleware('guest')->group(function () {
        Route::get('/login', function () { return view('authentication.login'); })->name('login');
        Route::post('/login', [LoginController::class, 'store'])->name('login.store');

        Route::get('/register', function () { return view('authentication.register'); })->name('register');
        Route::post('/register', [RegisterController::class, 'store']);

        Route::get('/password/reset', function () { return view('authentication.password_reset'); })->name('password.request');
        Route::get('/password/reset/verify', function () { return view('authentication.password_reset_email_verify'); })->name('password.reset.email.verify');
        Route::get('/password/reset/confirm', function () { return view('authentication.password_reset_confirm'); })->name('password.reset.confirm');
    });

    // 3. Email Verification Routes
    Route::middleware('auth')->group(function () {
        Route::get('/email/verify', function () { return view('authentication.verify_email'); })->name('verification.notice');
        Route::post('/email/verification-notification', function (Request $request) {
            $request->user()->sendEmailVerificationNotification();
            return back()->with('status', 'verification-link-sent');
        })->middleware('throttle:6,1')->name('verification.send');
    });

    Route::get('/email/verify/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['auth', 'signed'])
        ->name('verification.verify');

    // 4. Authenticated Protected Routes (Requires Login)
    Route::middleware('auth')->group(function () {
        Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

        // Admin Routes
        Route::get('/admin/dashboard', function () { return view('admin.dashboard'); })->name('admin.dashboard');
        Route::get('/admin/users', [AdminUserController::class, 'index'])->name('admin.users');
        Route::patch('/admin/users/{user}/role', [AdminUserController::class, 'updateRole'])->name('admin.users.role');
        Route::delete('/admin/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
        Route::get('/admin/teacher_verification', function () { return view('admin.teacher_verification'); })->name('admin.teacher_verification');
        Route::get('/admin/payment-verification-list', function () { return view('admin.payment_verification_list'); })->name('admin.payment.verification.list');
        Route::get('/admin/teacher_list', function () { return view('admin.teacher_list'); })->name('admin.teacher_list');
        Route::get('/admin/teacher_request_list', function () { return view('admin.teacher_request_list'); })->name('admin.teacher_request_list');
        Route::get('/admin/attendance-verification', function () { return view('admin.attendance_verification'); })->name('admin.attendance.verification');
        Route::get('/admin/feedback/list', function () { return view('admin.feedback_list'); })->name('admin.feedback.list');
        Route::get('/admin/teacher/rating/list', function () { return view('admin.teacher_rating_list'); })->name('admin.teacher.rating.list');

        // Parent Routes
        Route::get('/parent/dashboard', function () { return view('parent.dashboard'); })->name('parent.dashboard');
        Route::get('/parent/profile/create', function () { return view('parent.profile_create'); })->name('parent.profile.create');
        Route::get('/parent/profile/settings', [ParentProfileController::class, 'edit'])->name('parent.profile.settings');
        Route::put('/parent/profile/settings', [ParentProfileController::class, 'update'])->name('parent.profile.update');
        Route::get('/parent/teacher_request', function () { return view('parent.teacher_request'); })->name('parent.teacher_request');
        Route::get('/parent/deposit/setup', function () { return view('parent.deposit_setup'); })->name('parent.deposit.setup');
        Route::get('/parent/teacher/rating', function () { return view('parent.teacher_rating'); })->name('parent.teacher.rating');
        Route::get('/parent/teacher/acceptance/confirm', function () { return view('parent.teacher_acceptance_confirmation'); })->name('parent.teacher.acceptance.confirm');
        Route::get('/parent/attendance/tracking', function () { return view('parent.attendance_tracking'); })->name('parent.attendance.tracking');
        Route::get('/parent/student/performance', function () { return view('parent.student_performance'); })->name('parent.student.performance');
        Route::get('/parent/chat', function () { return view('chat.index'); })->name('parent.chat');

        // Teacher Routes
        Route::get('/teacher/dashboard', function () { return view('teacher.dashboard'); })->name('teacher.dashboard');
        Route::get('/teacher/profile/detail', function () { return view('teacher.profile_detail'); })->name('teacher.profile.detail');
        Route::get('/teacher/profile/edit', function () { return view('teacher.profile_edit'); })->name('teacher.profile.edit');
        Route::get('/teacher/parent/requests', function () { return view('teacher.parent_requests'); })->name('teacher.parent.requests');
        Route::get('/teacher/check-in-out', function () { return view('teacher.check_in_out'); })->name('teacher.check.in.out');
        Route::get('/teacher/attendance/tracking', function () { return view('teacher.attendance_tracking'); })->name('teacher.attendance.tracking');
        Route::get('/teacher/student/performance', function () { return view('teacher.student_performance'); })->name('teacher.student.performance');
        Route::get('/teacher/payment/verification/list', function () { return view('teacher.payment_verification_list'); })->name('teacher.payment.verification.list');
        Route::get('/teacher/chat', function () { return view('chat.index'); })->name('teacher.chat');

        // Shared Chat Route
        Route::get('/chat', function () { return view('chat.index'); })->name('chat.index');
    });

});