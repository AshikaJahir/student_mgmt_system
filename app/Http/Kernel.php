<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \App\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \App\Http\Middleware\TrustProxies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'Register' => \App\Http\Middleware\RegisterMiddleware::class,//for register screen
        'Login' => \App\Http\Middleware\LoginMiddleware::class,//for login screen
        'ForgotPwd' => \App\Http\Middleware\ForgotPwdMiddleware::class,//for forgot password page
        //Before modification of db(that is )
        'Student' => \App\Http\Middleware\Student\Admission\StudentMiddleware::class,//for students basic info for crud
        'TransportData' => \App\Http\Middleware\Student\Admission\TransportDataMiddleware::class,//for students transport info for crud
        'FeeData' => \App\Http\Middleware\Student\Admission\FeeDataMiddleware::class,//for students fee info for crud
        'ClassDetail' => \App\Http\Middleware\Student\ClassData\ClassDetailMiddleware::class,//for students class info for crud
        'Teacher' => \App\Http\Middleware\Teacher\Recruitment\TeacherMiddleware::class,//for teacher basic info for crud
        'TeacherClassDetail' => \App\Http\Middleware\Teacher\ClassDetails\ClassDetailMiddleware::class,//for teacher class info for crud
        'PTAMeeting' => \App\Http\Middleware\Teacher\PTA\PTAMeetingMiddleware::class,//for pta meeting info for crud
        'SubjectDetail' => \App\Http\Middleware\Teacher\ClassDetails\SubjectDetailMiddleware::class,//for teacher class info for crud
        'Admin' => \App\Http\Middleware\Admin\AdminMiddleware::class,//for admin basic info for crud
        'Parent' => \App\Http\Middleware\Parent\ParentMiddleware::class,//for parent basic info for crud
        //After modification of DB
        'CourseDetails' => \App\Http\Middleware\CourseDetailsMiddleware::class,//for course details table
        'StudentAttendance' => \App\Http\Middleware\StudentAttendanceMiddleware::class,//for student_attendance table
        'StudentDetails' => \App\Http\Middleware\StudentDetailsMiddleware::class,//for student_details table
        'StudentSubject' => \App\Http\Middleware\StudentSubjectPaperMapping::class,//for student_subject_paper_mapping table
        'SubjectPaper' => \App\Http\Middleware\SubjectPaperDetails::class,//for subject_paper_details table
        'User' => \App\Http\Middleware\UserMiddleware::class,//for user table
        
    ];
}
