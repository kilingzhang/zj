<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group([
//     'prefix' => 'auth'
// ], function ($router) {
//     Route::post('login', 'AuthController@login');
//     Route::post('logout', 'AuthController@logout');
//     Route::post('refresh', 'AuthController@refresh');
//     Route::post('me', 'AuthController@me');
// });


$api = app('Dingo\Api\Routing\Router');
$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {
    // 爬取课程信息[需要带 cookie 访问]
    $api->post('/course', 'SpiderController@getCourseInfo');
    // 根据课程 ID 查看课程信息
    $api->get('/course/{courseId}', 'CourseController@getCourse');
    // 查看一个用户的所有课程[需要带 cookie 访问]
    $api->get('/user/course', 'CourseController@getAllCourseByUserId');
    // 获取 tag
    $api->get('/tag/{courseId}', 'TagController@listTags');
    // 增加 tag [需要带 cookie 访问]
    $api->post('/tag/{courseId}', 'TagController@addTag');
    // 删除 tag [需要带 cookie 访问]
    $api->delete('/tag/{courseId}', 'TagController@removeTag');
    // 爬取课程树 [需要带 cookie 访问]
    $api->post('/courseTree/{courseId}', 'SpiderController@getCourseTree');
    // 获取课程树
    $api->get('/courseTree/{courseId}', 'CourseTreeController@getCourseTree');
    // 更新课程树 [需要带 cookie 访问]
    $api->put('/courseTree/{courseId}', 'CourseTreeController@setCourseTree');
    // 新建问卷[需要带 cookie 访问]
    $api->post('/survey', 'SurveyController@addSurvey');
    // 修改问卷[需要带 cookie 访问]
    $api->put('/survey', 'SurveyController@updateSurvey');
    // 查看一个问卷的数据
    $api->get('/survey/{id}', 'SurveyController@getSurvey');
    // 检查一个用户是否填写过某一个问卷[需要带 cookie 访问]
    $api->get('/answerRecord/{surveyId}', 'AnswerRecordController@checkRecord');
    // 填写一个问卷,记录结果[需要带 cookie 访问]
    $api->post('/answerRecord/{surveyId}', 'AnswerRecordController@addRecord');
    // 删除一个问卷填写记录[需要带 cookie 访问]
    $api->delete('/answerRecord/{surveyId}', 'AnswerRecordController@delete');
    // 获取一个定制化课程的数据
    $api->get('/customCourse/{id}', 'CustomCourseController@getCustomCourse');
    // 获取已经登录的用户信息[需要带 cookie 访问]
    $api->get('/me', 'LoginController@me');
    // 根据用户 ID 返回其创建的所有队伍[需要带 cookie 访问]
    $api->get('/user/team', 'ResearchResultsController@getTeamsByUserId');
    // 根据队伍 ID 返回其所参加的所有课题
    $api->get('/team/task', 'ResearchResultsController@getTasksByTeamId');
    // 获取系统中所有的课程
    $api->get('/course', 'CourseController@getAllCourse');
    // 获取系统中所有的研究课题
    $api->get('/task', 'TaskController@getAllTask');
    // 获取系统中所有的团队
    $api->get('/team', 'TeamController@getAllTeam');
    // 获取某一个团队的信息
    $api->get('/team/{teamId}', 'TeamController@getTeam');
    // 删除队伍的一个成员[需要带 cookie 访问]
    $api->delete('/team/member', 'TeamController@deleteMember');
    // 解散一个团队
    $api->delete('/team/{teamId}', 'TeamController@deleteTeam');
    // 获取一只队伍所有的成员信息
    $api->get('/team/member/{teamId}', 'TeamController@getAllMember');
    // 添加一个成员到一个队伍[需要带 cookie 访问]
    $api->post('/team/member', 'TeamController@addMember');
    // 根据 id 获取一个科研课题的详细信息
    $api->get('/task/{taskId}', 'TaskController@getTaskDetail');
    // 获取一个用户的其他课题信息
    $api->get('/task/more/{userId}', 'TaskController@getMoreTasks');
    // 一支队伍报名一个课题
    $api->post('/task/sign', 'TeamController@signTask');
    // 一支队伍退出一个课题
    $api->post('/task/leave', 'TeamController@leaveTask');
    // 搜索用户
    $api->get('/search/user', 'UserController@search');
    // 绑定用户联系信息[需要带 cookie 访问]
    $api->post('/user/bind/{type}', 'UserController@bindContact');
    // 获取一个用户参与的所有 task[需要带 cookie 访问]
    $api->get('/user/tasks', 'TaskController@getTasksByUserId');
    // 获取一个用户参加的所有组的所有研究成果[需要带 cookie 访问]
    $api->get('/user/results', 'ResearchResultsController@getResults');
    // 获取一个用户所有填写记录[需要带 cookie 访问]
    $api->get('/user/ansrecs', 'UserController@getAnswerRecord');
    // 获取一个用户所有的团队[需要带 cookie 访问]
    $api->get('/user/teams', 'UserController@getMyTeams');
    // 退出团队[需要带 cookie 访问]
    $api->delete('/user/team/{teamId}', 'TeamController@leaveTeam');
    // 根据 id 获取一个科研成果的详细信息
    $api->get('/result/{resultId}', 'ResearchResultsController@getResultDetail');
    // 获取大学城登陆校验的随机 key
    $api->get('/loginKey', "LoginController@loginKey");
});
