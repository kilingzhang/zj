<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DB\Task;
use App\Models\DB\Team;
use App\Models\DB\ResearchResult;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Cookie;

class TaskController extends ApiController
{
    // 获取系统中所有的 task及其创建者部分信息
    public function getAllTask()
    {
        $tasks = Task::with('belongsToUser')->get(['id', 'title', 'desc', 'created_at', 'creater_id']);
        $tasks = $tasks->map(function ($item, $key) {
            $creater = $item->belongsToUser;
            $item['creater'] = ["name" => $creater->name, "avatar" => $creater->avatar];
            return $item;
        })->toArray();
        foreach ($tasks as $key => $value) {
            array_forget($tasks[$key], 'belongs_to_user');
        }
        return self::setResponse($tasks, 200, 0);
    }

    // 获取一个 task 的详细数据
    public function getTaskDetail(Request $request)
    {
        // TODO validate

        $taskId = $request->taskId;

        $task = Task::find($taskId);
        if(!$task) return self::setResponse(null, 404, -4005);

        $creater = User::find($task->creater_id);
        $registTeams = $task->belongsToManyTeams->count();

        // 数据处理
        $task->creater_avatar = $creater->avatar;
        $task->creater_name = $creater->name;
        $task->registTeams = $registTeams;
        $task->file = json_decode($task->file);
        $task->signTeams = $task->belongsToManyTeams->pluck('id')->toArray();

        // 时间部分处理
        $registRemain = strtotime($task->regist_end_at) - time();
        if ($registRemain < 0) {
            $task->regist_end_at = "已过期";
        } else {
            $days = floor($registRemain / 86400);
            $hours = floor(($registRemain - $days * 86400) / 3600);
            $mins = floor(($registRemain - $days * 86400 - $hours * 3600) / 60);
            if (!$days && !$hours) {
                $task->regist_end_at = $hours . "时" . $mins . "分";
            } else {
                $task->regist_end_at = $days . "天" . $hours . "时";
            }
        }

        $submitRemain = strtotime($task->submit_end_at) - time();
        if ($submitRemain < 0) {
            $task->submit_end_at = "已过期";
        } else {
            $days = floor($submitRemain / 86400);
            $hours = floor(($submitRemain - $days * 86400) / 3600);
            $mins = floor(($submitRemain - $days * 86400 - $hours * 3600) / 60);
            if (!$days && !$hours) {
                $task->submit_end_at = $hours . "时" . $mins . "分";
            } else {
                $task->submit_end_at = $days . "天" . $hours . "时";
            }
        }

        $task = $task->toArray();
        array_forget($task, 'belongs_to_many_teams');

        return self::setResponse($task, 200, 0);
    }

    public function getMoreTasks(Request $request)
    {
        // TODO validate

        $userId = $request->userId;

        $tasks = Task::where('creater_id', $userId)->get(['id', 'title']);
        return self::setResponse($tasks, 200, 0);
    }

    public function getTasksByUserId(Request $request)
    {
        if (Cookie::get('id')) {
            $userId = Crypt::decrypt(Cookie::get('id'));
        } else {
            return self::setResponse(null, 400, -4007);
        }    // 未登录

        if ($user = User::with('belongsToManyTeams.belongsToManyTasks.belongsToUser')->find($userId)) {
            // 自己作为队员的组
            $teams = $user->belongsToManyTeams;
            $tasks = $teams->map(function ($item) {
                $tasks = $item->belongsToManyTasks;
                $tasks = $tasks->map(function ($item2) use ($item) {
                    $res = [];
                    $res['title'] = $item2->title;
                    $res['time'] = $this->timeFormat($item2->submit_end_at);
                    $res['team'] = $item->team_name;
                    $res['taskId'] = $item2->pivot->task_id;
                    $res['teacher'] = $item2->belongsToUser->name;
                    $res['isLeader'] = false;
                    if (ResearchResult::where('task_id', $item2->pivot->task_id)->where('team_id', $item2->pivot->team_id)->first()) {
                        $res['isSubmit'] = true;
                    } else {
                        $res['isSubmit'] = false;
                    }
                    return $res;
                });
                return $tasks;
            });

            // 自己作为队长的组
            $user = User::with('hasManyTeams.belongsToManyTasks.belongsToUser')->find($userId);
            $teams2 = $user->hasManyTeams;
            $tasks2 = $teams2->map(function ($item) {
                $tasks2 = $item->belongsToManyTasks;
                $tasks2 = $tasks2->map(function ($item2) use ($item) {
                    $res = [];
                    $res['title'] = $item2->title;
                    $res['time'] = $this->timeFormat($item2->submit_end_at);
                    $res['team'] = $item->team_name;
                    $res['taskId'] = $item2->pivot->task_id;
                    $res['teamId'] = $item2->pivot->team_id;
                    $res['teacher'] = $item2->belongsToUser->name;
                    $res['isLeader'] = true;
                    if (ResearchResult::where('task_id', $item2->pivot->task_id)->where('team_id', $item2->pivot->team_id)->first()) {
                        $res['isSubmit'] = true;
                    } else {
                        $res['isSubmit'] = false;
                    }
                    return $res;
                });
                return $tasks2;
            });

            // 去除空元素,化为一维
            $tasksArray = array_merge($tasks->toArray(), $tasks2->toArray());
            $tasks = [];
            foreach ($tasksArray as $key => $value) {
                if ($value) {
                    $tasks[] = $value[0];
                }
            }
            return self::setResponse($tasks, 200, 0);
        } else {
            return self::setResponse(null, 404, -4005);
        }
    }

    // 传入结束时间的 str 形式
    protected function timeFormat($end)
    {
        $submitRemain = strtotime($end) - time();
        if ($submitRemain < 0) {
             return "已过期";
        } else {
            $days = floor($submitRemain / 86400);
            $hours = floor(($submitRemain - $days * 86400) / 3600);
            $mins = floor(($submitRemain - $days * 86400 - $hours * 3600) / 60);
            if (!$days && !$hours) {
                return $hours . "时" . $mins . "分";
            } else {
                return $days . "天" . $hours . "时";
            }
        }
    }
}
