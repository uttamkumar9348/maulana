<?php

/****************** ADMIN MIDDLEWARE PAGES ROUTES START****************/

use App\Http\Controllers\Admin\CenterMappingController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CollegeController;
use App\Http\Controllers\Admin\CollegeCourseController;
use App\Http\Controllers\Admin\CollegeProfileController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DocumentCategoryController;
use App\Http\Controllers\Admin\DocumentCategoryEntranceFeeController;
use App\Http\Controllers\Admin\EntranceFeeController;
use App\Http\Controllers\Admin\ExamCenterRegistrationController;
use App\Http\Controllers\Admin\ExamController;
use App\Http\Controllers\Admin\GradeCategoryController;
use App\Http\Controllers\Admin\GradeController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PoliceStationController;
use App\Http\Controllers\Admin\ProspectController;
use App\Http\Controllers\Admin\SemesterController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\StudentAttendanceController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\NoticeTypeController;
use App\Http\Controllers\Admin\noticeController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\GatewayDetailController;
use App\Http\Controllers\Admin\OverviewController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ShiftController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\Web\AboutUsController;
use App\Http\Controllers\Admin\Web\CallToActionController;
use App\Http\Controllers\Admin\Web\CourseController as WebCourseController;
use App\Http\Controllers\Admin\Web\FaqController as WebFaqController;
use App\Http\Controllers\Admin\Web\FeatureController;
use App\Http\Controllers\Admin\Web\GalleryController as WebGalleryController;
use App\Http\Controllers\Admin\Web\NewsController as WebNewsController;
use App\Http\Controllers\Admin\Web\PageController as WebPageController;
use App\Http\Controllers\Admin\Web\SliderController;
use App\Http\Controllers\Admin\Web\SocialSettingController;
use App\Http\Controllers\Admin\Web\TestimonialController;
use App\Http\Controllers\Admin\Web\TopbarSettingController;
use App\Http\Controllers\Admin\Web\WebEventController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PassedexamController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\QuicklinkController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\TopbarController;
use App\Http\Controllers\Admin\Web\AdministrationController;
use App\Http\Controllers\Admin\Web\CampusController;
use App\Http\Controllers\Admin\Web\StudentsectionController;
use App\Http\Controllers\Admin\Web\ViewgalleryController;
use App\Http\Controllers\Frontwebuser\Web\GalleryController;
use App\Http\Controllers\Prospect\ResultController;
use App\Models\GatewayDetail;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth:user', 'admin'], function () {
    /*******************DASHBOARD ROUTE START*************/
    Route::view('dashboard', 'admin.dashboard.index')->name('dashboard.index');
    /*******************DASHBOARD ROUTE END*************/
    /*******************USER ROUTE START*************/
    Route::get('user/verified/{id}', [UserController::class, 'verified'])->name('user.verified');
    Route::get('user/revert_verification/{id}', [UserController::class, 'revert_verification'])->name('user.revert_verification');
    Route::get('user/active/{id}', [UserController::class, 'active'])->name('user.active');
    Route::get('user/in_active/{id}', [UserController::class, 'in_active'])->name('user.in_active');
    Route::resource('user', UserController::class);
    /*******************USER ROUTE END*************/
    /*******************COLLEGE ROUTE START*************/
    Route::resource('college', CollegeController::class);
    /*******************COLLEGE PROFILE ROUTE START*************/
    Route::get('college_profile/download/{id}', [CollegeProfileController::class, 'downloadFile'])->name('college_profile.download');
    Route::resource('college_profile', CollegeProfileController::class);
    /*******************COLLEGE PROFILE ROUTE END*************/
    /*******************COLLEGE COURSE ROUTE START*************/
    Route::resource('college_course', CollegeCourseController::class);
    /*******************COLLEGE PROFILE ROUTE END*************/
    /*******************COLLEGE ROUTE END*************/
    /*******************STUDENT ROUTE START*************/
    /*******************COLLEGE PROFILE ROUTE START*************/

    // Route::resource('student_profile', StudentProfileController::class);

    /*******************COLLEGE PROFILE ROUTE END*************/
    Route::resource('student', StudentController::class);
    /*******************STUDENT ROUTE END*************/
    /*******************PROSPECT ROUTE END*************/
    Route::post('status_update', [ProspectController::class, 'statusUpdate'])->name('prospect.status_update');
    Route::post('get_admit_content', [ProspectController::class, 'getAdmitContent'])->name('prospect.get_admit_content');
    Route::resource('prospect', ProspectController::class);
    Route::resource('center_mapping',CenterMappingController::class);
    /*******************PROSPECT ROUTE END*************/
    /*******************TEACHER ROUTE START*************/
    Route::resource('teacher', TeacherController::class);
    /*******************TEACHER ROUTE END*************/

    /*******************ADMIN USER ROUTE START*************/
    Route::get('adminuser/list',[AdminUserController::class,'list'])->name('AdminUser.list');
    Route::get('adminuser/add',[AdminUserController::class,'add'])->name('AdminUser.add');
    Route::post('adminuser/store',[AdminUserController::class,'store'])->name('AdminUser.store');
    Route::get('adminuser/edit{id}',[AdminUserController::class,'edit'])->name('AdminUser.edit');
    Route::post('adminuser/update',[AdminUserController::class,'update'])->name('AdminUser.update');
    Route::get('adminuser/delete{id}',[AdminUserController::class,'delete'])->name('AdminUser.delete');
    /*******************ADMIN USER ROUTE END*************/

    /*******************COURSE ROUTE START*************/
    // Route::resource('course', CourseController::class);
    Route::resource('course', WebCourseController::class);
    /*******************COURSE ROUTE END*************/
    /*******************SEMESTER ROUTE START*************/
    Route::resource('semester', SemesterController::class);
    /*******************SEMESTER ROUTE END*************/
    /*******************SUBJECT ROUTE START*************/
    Route::post('subject/get_course_semsters', [SubjectController::class, 'getCourseSemsters'])->name('subject.get_course_semsters');
    Route::resource('subject', SubjectController::class);
    /*******************SUBJECT ROUTE END*************/
    /*******************COUNTRY ROUTE START*************/
    Route::resource('country', CountryController::class);
    /*******************COUNTRY ROUTE END*************/
    /*******************STATE ROUTE START*************/
    Route::resource('state', StateController::class);
    /*******************STATE ROUTE END*************/
    /*******************CITY ROUTE START*************/
    Route::resource('city', CityController::class);
    /*******************CITY ROUTE END*************/
    /*******************STUDENT ATTENDANCE ROUTE START*************/
    Route::post('get_students_for_attendance', [StudentAttendanceController::class, 'getStudents'])->name('student_attendance.get_student');
    Route::post('force_allowed', [StudentAttendanceController::class, 'forceAllowed'])->name('student_attendance.force_allowed');
    Route::resource('student_attendance', StudentAttendanceController::class);
    /*******************STUDENT ATTENDANCE ROUTE END*************/
    /*******************ROLE START*************/
    Route::resource('roles', RolesController::class);
    /*******************ROLE END*************/
    /*******************Notice Type Start*************/
    Route::get('/noticetype/list',[NoticeTypeController::class,'list'])->name('NoticeType.list');
    Route::get('/noticetype/add',[NoticeTypeController::class,'add'])->name('NoticeType.add');
    Route::post('/noticetype/add',[NoticeTypeController::class,'store'])->name('NoticeType.store');
    Route::get('/noticetype/edit{id}',[NoticeTypeController::class,'edit'])->name('NoticeType.edit');
    Route::post('/noticetype/update',[NoticeTypeController::class,'update'])->name('NoticeType.update');
    Route::get('/noticetype/delete{id}',[NoticeTypeController::class,'delete'])->name('NoticeType.delete');
    /*******************Notice Type END*************/
    /*******************Notice  Start*************/
    Route::get('/notice/list',[noticeController::class,'list'])->name('Notice.list');
    Route::get('/notice/add',[noticeController::class,'add'])->name('Notice.add');
    Route::post('/notice/add',[noticeController::class,'store'])->name('Notice.store');
    Route::get('/notice/edit{id}',[noticeController::class,'edit'])->name('Notice.edit');
    Route::post('/notice/update',[noticeController::class,'update'])->name('Notice.update');
    Route::get('/notice/delete{id}',[noticeController::class,'delete'])->name('Notice.delete');

    /*******************Notice END*************/
    // Route::resource('team', TeamController::class);

    /*******************Notice END*************/

    /*******************EXAM ROUTE START*************/
    Route::resource('exam', ExamController::class);
    /*******************EXAM ROUTE END*************/
    /*******************GRADE CATEGORY ROUTE START*************/
    Route::resource('grade_category', GradeCategoryController::class);
    /*******************GRADE CATEGORY ROUTE END*************/
    /*******************GRADE ROUTE START*************/
    Route::resource('grade', GradeController::class);
    /*******************GRADE  ROUTE END*************/
    /*******************Passed Exam ROUTE START*************/
    Route::resource('passed_exam', PassedexamController::class);
    /*******************Passed Exam ROUTE END*************/
    /*******************Board ROUTE START*************/
    Route::resource('board', BoardController::class);
    /*******************Board  ROUTE END*************/
    /*******************POLICE STATION ROUTE START*************/
    Route::resource('police_station', PoliceStationController::class);
    /*******************POLICE STATION  ROUTE END*************/
    /*******************ENTRANCE FEE ROUTE START*************/
    Route::resource('entrance_fee', EntranceFeeController::class);
    /*******************ENTRANCE FEE ROUTE END*************/

    //Quiz
    Route::get('/add-quiz', [QuizController::class, 'addQuiz'])->name('add.quiz');

    Route::get('/add-question/{id}', [QuestionController::class, 'addQuestion'])->name('add.question');

    Route::post('/store-quiz', [QuizController::class, 'storeQuiz'])->name('store.quiz');
    Route::get('/edit-quiz/{id}', [QuizController::class, 'editQuiz'])->name('edit.quiz');
    Route::post('/update-quiz', [QuizController::class, 'updateQuiz'])->name('update.quiz');
    Route::get('/delete-quiz/{id}', [QuizController::class, 'deleteQuiz'])->name('delete.quiz');

    Route::post('/store-question', [QuestionController::class, 'storeQuestion'])->name('store.question');
    Route::get('/edit-question/{id}', [QuestionController::class, 'editQuestion'])->name('edit.question');
    Route::post('/update-question', [QuestionController::class, 'updateQuestion'])->name('update.question');
    Route::get('/delete-question/{id}', [QuestionController::class, 'deleteQuestion'])->name('delete.question');
    Route::get('/results', [ResultController::class, 'index'])->name('results');

    /*******************Document Category ROUTE START*************/
    Route::resource('document_category', DocumentCategoryController::class);
    /*******************Document Category ROUTE END*************/
    /*******************Document Category Entrance Fee ROUTE START*************/
    Route::resource('document_category_entrance_fee', DocumentCategoryEntranceFeeController::class);
    /*******************Document Category Entrance Fee ROUTE END*************/
    /*******************Exam Center Registration ROUTE START*************/
    Route::resource('exam_center_registration', ExamCenterRegistrationController::class);
    /*******************Exam Center Registration ROUTE END*************/
    /*******************Exam Shift ROUTE START*************/
    Route::resource('shift', ShiftController::class);
    /*******************Exam Shift ROUTE END*************/
    /*******************Gateway ROUTE START*************/
    Route::resource('gateway', GatewayDetailController::class);
    /*******************Gateway ROUTE END*************/

    Route::prefix('web')->group(function () {
        Route::resource('menu', MenuController::class);
        Route::resource('slider', SliderController::class);
        Route::resource('feature', FeatureController::class);
        Route::resource('about-us', AboutUsController::class);
        // Route::resource('course', WebCourseController::class);
        Route::resource('web-event', WebEventController::class);

        //Overview
        Route::get('/overview/list',[OverviewController::class,'list'])->name('Overview.list');
        Route::post('/overview/store',[OverviewController::class,'store'])->name('Overview.store');

        //team
        Route::get('/team/list',[TeamController::class,'list'])->name('Team.list');
        Route::get('/team/add',[TeamController::class,'add'])->name('Team.add');
        Route::post('/team/store',[TeamController::class,'store'])->name('Team.store');
        Route::get('/team/edit{id}',[TeamController::class,'edit'])->name('Team.edit');
        Route::post('/team/update',[TeamController::class,'update'])->name('Team.update');
        Route::get('/team/delete{id}',[TeamController::class,'delete'])->name('Team.delete');

        //Quick-links
        Route::get('/quick_link/list',[QuicklinkController::class,'list'])->name('Quicklink.list');
        Route::get('/quick_link/add',[QuicklinkController::class,'add'])->name('Quicklink.add');
        Route::post('/quick_link/store',[QuicklinkController::class,'store'])->name('Quicklink.store');
        Route::get('/quick_link/edit{id}',[QuicklinkController::class,'edit'])->name('Quicklink.edit');
        Route::post('/quick_link/update',[QuicklinkController::class,'update'])->name('Quicklink.update');
        Route::get('/quick_link/delete{id}',[QuicklinkController::class,'delete'])->name('Quicklink.delete');

        //Top Bar
        Route::get('/top_bar/list',[TopbarController::class,'list'])->name('Topbar.list');
        Route::get('/top_bar/add',[TopbarController::class,'add'])->name('Topbar.add');
        Route::post('/top_bar/store',[TopbarController::class,'store'])->name('Topbar.store');
        Route::get('/top_bar/edit{id}',[TopbarController::class,'edit'])->name('Topbar.edit');
        Route::post('/top_bar/update',[TopbarController::class,'update'])->name('Topbar.update');
        Route::get('/top_bar/delete{id}',[TopbarController::class,'delete'])->name('Topbar.delete');

        //View-Gallery
        Route::get('galleries/list',[ViewgalleryController::class,'list'])->name('Viewgalleries.list');
        Route::get('galleries/add',[ViewgalleryController::class,'add'])->name('Viewgalleries.add');
        Route::post('galleries/store',[ViewgalleryController::class,'store'])->name('Viewgalleries.store');
        Route::get('galleries/edit{id}',[ViewgalleryController::class,'edit'])->name('Viewgalleries.edit');
        Route::post('galleries/update',[ViewgalleryController::class,'update'])->name('Viewgalleries.update');
        Route::get('galleries/delete{id}',[ViewgalleryController::class,'delete'])->name('Viewgalleries.delete');

        //Campus
        Route::get('/campus/list',[CampusController::class,'list'])->name('campus.list');
        Route::get('/campus/add',[CampusController::class,'add'])->name('campus.add');
        Route::post('/campus/store',[CampusController::class,'store'])->name('campus.store');
        Route::get('/campus/edit{id}',[CampusController::class,'edit'])->name('campus.edit');
        Route::post('/campus/update',[CampusController::class,'update'])->name('campus.update');
        Route::get('/campus/delete{id}',[CampusController::class,'delete'])->name('campus.delete');

        //Administration
        Route::get('/administration/list',[AdministrationController::class,'list'])->name('administration.list');
        Route::get('/administration/add',[AdministrationController::class,'add'])->name('administration.add');
        Route::post('/administration/store',[AdministrationController::class,'store'])->name('administration.store');
        Route::get('/administration/edit{id}',[AdministrationController::class,'edit'])->name('administration.edit');
        Route::post('/administration/update',[AdministrationController::class,'update'])->name('administration.update');
        Route::get('/administration/delete{id}',[AdministrationController::class,'delete'])->name('administration.delete');

        //STUDENT Section
        Route::get('/student/list',[StudentsectionController::class,'list'])->name('student.list');
        Route::get('/student/add',[StudentsectionController::class,'add'])->name('student.add');
        Route::post('/student/store',[StudentsectionController::class,'store'])->name('student.store');
        Route::get('/student/edit{id}',[StudentsectionController::class,'edit'])->name('student.edit');
        Route::post('/student/update',[StudentsectionController::class,'update'])->name('student.update');
        Route::get('/student/delete{id}',[StudentsectionController::class,'delete'])->name('student.delete');

        Route::resource('news', WebNewsController::class);
        Route::resource('gallery', WebGalleryController::class);
        Route::resource('faq', WebFaqController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('page', WebPageController::class);
        Route::resource('call-to-action', CallToActionController::class);
        Route::resource('social-setting', SocialSettingController::class);
        Route::resource('topbar-setting', TopbarSettingController::class);
    });
});
/****************** ADMIN MIDDLEWARE PAGES ROUTES END****************/
