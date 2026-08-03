<?php

use Illuminate\Support\Facades\Route;

// 1. Home Page
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. About Us Page
Route::get('/about-us', function () {
    return view('about_us');
})->name('about.us');

// 3. Events Page
Route::get('/events', function () {
    return view('events');
})->name('events');

// 4. Blogs Page
Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

// 5. Teachers FAQ Page
Route::get('/teachers/faq', function () {
    return view('teacher.faq');
})->name('teachers.faq');

// 6. Parents FAQ Page
Route::get('/parents/faq', function () {
    return view('parent.faq');
})->name('parents.faq');

// 7. Markets Page
Route::get('/markets', function () {
    return view('markets');
})->name('markets');

// 7. Jobs Page
Route::get('/jobs', function () {
    return view('jobs');
})->name('jobs');

// 8. Contact Us Page
Route::get('/contact-us', function () {
    return view('contact_us');
})->name('contact.us');

// 9. Admin Panel Verification
Route::get('/admin/teacher_verification', function () {
    return view('admin.teacher_verification');
})->name('admin.teacher_verification');

// 10. Admin Payment Verification List for Parents and Teachers
Route::get('/admin/payment-verification-list', function () {
    return view('admin.payment_verification_list');
})->name('admin.payment.verification.list');

// 11. Teacher Profile
Route::get('/teacher/profile/submit', function () {
    return view('teacher.profile_submit');
})->name('teacher.profile.submit');

// 12. Parent Search Teacher
Route::get('/parent/search/teacher', function () {
    return view('parent.search_teacher');
})->name('parent.search_teacher');

// 13. User Authentication
Route::get('/login', function () {
    return view('authentication.login');
})->name('login');

// 14. User Registration
Route::get('/register', function () {
    return view('authentication.register');
})->name('register');

// 15. Password Reset
Route::get('/password/reset', function () {
    return view('authentication.password_reset');
})->name('password.request');

// 16. Password Reset Email Sent
Route::get('/password/reset/verify', function () {
    return view('authentication.password_reset_email_verify');
})->name('password.reset.email.verify');

// 17. Password Reset Confirmation
Route::get('/password/reset/confirm', function () {
    return view('authentication.password_reset_confirm');
})->name('password.reset.confirm');

// 10. Teacher List
Route::get('/admin/teacher_list', function () {
    return view('admin.teacher_list');
})->name('admin.teacher_list');

// 11. Teacher Profile Detail
Route::get('/teacher/profile/detail', function () {
    return view('teacher.profile_detail');
})->name('teacher.profile.detail');

// 12. Teacher Profile Edit
Route::get('/teacher/profile/edit', function () {
    return view('teacher.profile_edit');
})->name('teacher.profile.edit');

// 13. Teacher Request List
Route::get('/admin/teacher_request_list', function () {
    return view('admin.teacher_request_list');
})->name('admin.teacher_request_list');

// 14. Teacher Parent Requests
Route::get('/teacher/parent/requests', function () {
    return view('teacher.parent_requests');
})->name('teacher.parent.requests');

// 15. Parent Teacher Request
Route::get('/parent/teacher_request', function () {
    return view('parent.teacher_request');
})->name('parent.teacher_request');

// 14. Parent Profile Create
Route::get('/parent/profile/create', function () {
    return view('parent.profile_create');
})->name('parent.profile.create');

// 15. Admin Dashboard
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// 16. Parent Dashboard
Route::get('/parent/dashboard', function () {
    return view('parent.dashboard');
})->name('parent.dashboard');

// 17. Parent Profile Settings
Route::get('/parent/profile/settings', function () {
    return view('parent.profile_settings');
})->name('parent.profile.settings');

// 18. Parent Deposit Setup
Route::get('/parent/deposit/setup', function () {
    return view('parent.deposit_setup');
})->name('parent.deposit.setup');

// 19. Parent Teacher Rating
Route::get('/parent/teacher/rating', function () {
    return view('parent.teacher_rating');
})->name('parent.teacher.rating');

// 19a. Parent Teacher Acceptance Confirmation
Route::get('/parent/teacher/acceptance/confirm', function () {
    return view('parent.teacher_acceptance_confirmation');
})->name('parent.teacher.acceptance.confirm');

// 20. Shared Periodic Feedback for Parent and Teacher
Route::get('/parent/periodic/feedback', function () {
    return view('feedback.periodic_feedback');
})->name('parent.periodic.feedback');

Route::get('/teacher/periodic/feedback', function () {
    return view('feedback.periodic_feedback');
})->name('teacher.periodic.feedback');

// 21. Parent Attendance Tracking
Route::get('/parent/attendance/tracking', function () {
    return view('parent.attendance_tracking');
})->name('parent.attendance.tracking');

// 22. Teacher Dashboard
Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->name('teacher.dashboard');

// 23. Teacher Attendance Tracking
Route::get('/teacher/attendance/tracking', function () {
    return view('teacher.attendance_tracking');
})->name('teacher.attendance.tracking');

// 24. Teacher Payment Verification List
Route::get('/teacher/payment/verification/list', function () {
    return view('teacher.payment_verification_list');
})->name('teacher.payment.verification.list');

// 24. Admin Attendance Verification (Combined Teacher and Student)
Route::get('/admin/attendance-verification', function () {
    return view('admin.attendance_verification');
})->name('admin.attendance.verification');

// 25. Admin Feedback List
Route::get('/admin/feedback/list', function () {
    return view('admin.feedback_list');
})->name('admin.feedback.list');

// 26. Admin Teacher Rating List
Route::get('/admin/teacher/rating/list', function () {
    return view('admin.teacher_rating_list');
})->name('admin.teacher.rating.list');

