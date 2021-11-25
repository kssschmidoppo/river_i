<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInfoRequest;
use App\Models\Info;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;

class InfosController extends Controller
{

    public function store(StoreInfoRequest $request, Project $project): RedirectResponse
    {
        $position = $project->info()->where('user_id', NULL)->max('position') + 1;
        $project->inf()->create($request->validated() + ['position' => $position]);

        return redirect()->route('projects.edit', [
            $project->categories_id, $project
        ]);
    }

    public function edit(Project $project, Info $info): View
    {
        return view('projects.info.edit', compact('projects', 'info'));
    }

    public function update(StoreInfoRequest $request, Project $project, Info $info): RedirectResponse
    {
        $info->update($request->validated());

        return redirect()->route('projects.edit', [
            $project->categories_id, $project
        ]);
    }

    public function destroy(Project $project, Info $info): RedirectResponse
    {
        $project->tasks()->where('user_id', NULL)->where('position', '>', $info->position)->decrement('position', 1);

        $info->delete();

        return redirect()->route('projects.edit', [
            $project->categories_id, $project
        ]);
    }
}
