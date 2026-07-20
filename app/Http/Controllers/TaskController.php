<?php
namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // 1. عرض كاع المهام
    public function index()
    {
        return response()->json(Task::latest()->get());
    }

    // 2. إنشاء مهمة جديدة
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'livrable_url' => 'nullable|url',
            'status' => 'nullable|in:todo,in_progress,done'
        ]);

        $task = Task::create($validated);

        return response()->json([
            'message' => 'Task created successfully!',
            'task' => $task
        ], 201);
    }

    // 3. عرض مهمة واحدة
    public function show(Task $task)
    {
        return response()->json($task);
    }

    // 4. تعديل المهمة (مثلا تغيير الـ status من todo لـ done)
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'livrable_url' => 'nullable|url',
            'status' => 'sometimes|required|in:todo,in_progress,done'
        ]);

        $task->update($validated);

        return response()->json([
            'message' => 'Task updated successfully!',
            'task' => $task
        ]);
    }

    // 5. حذف المهمة
    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(['message' => 'Task deleted successfully!']);
    }
}