<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// 追加
use App\Task;
use App\Http\Requests;

class TasksController extends Controller{
  // 登録ページ
  public function create(){
    return view('tasks/create')->with('task', new Task());
  }
  
  // DB登録
  public function store(Request $request){
    $task = new Task();
    $task->fill($request->all());
    $task->save();
    return redirect()->route('tasks.index');
  }

  // 登録済みタスク一覧の表示&TOPページ
  public function index(){
    $tasks = Task::orderBy('updated_at', 'desc')->get();
    return view('tasks/index')->with('tasks',$tasks);
  }

  // タスク詳細ページ
  public function show($id){
    $task = Task::find($id);
    return view('tasks/show')->with('task',$task);
  }

  // タスクの編集ページ
//  public function edit($id){
//    $task = Task::find($id);
//    return view('tasks/edit')->with('task',$task);
//  }

  // 勉強のためのタスクの編集ページ
    public function edit(Request $editRequest){
      $id = $editRequest->id;
      $task = Task::find($id);
      return view('tasks/edit')->with('task',$task);
    }



  // タスクの編集結果反映
  public function update(Request $request, $id){
    $task = Task::find($id);
    $task->fill($request->all());
    $task->save();
    return redirect()->route('tasks.index');
  }

  // タスクの論理削除
  public function destroy($id){
    $task = Task::find($id);
    $task->delete();
    return redirect()->route('tasks.index');
  }
}
