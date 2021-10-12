<?php

namespace App\Traits;

use App\Models\Membership;
use App\Models\Workspace;

trait HasWorkspace{

    /**
     * Determine if the given team is the current workspace.
     *
     * @param  mixed  $workspace
     * @return bool
     */
    public function isCurrentWorkspace($workspace)
    {
        return $workspace->id === $this->currentWorckspace->id;
    }

    /**
     * Get the current team of the user's context.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currentWorkspace()
    {
        if (is_null($this->current_workspace_id) && $this->id) {
            $this->switchWorkspace($this->personalWorkspace());
        }

        return $this->belongsTo(Workspace::class, 'current_workspace_id');
    }

    /**
     * Switch the user's context to the given team.
     *
     * @param  mixed  $workspace
     * @return bool
     */
    public function switchWorkspace($workspace)
    {
        if (! $this->belongsToWorkspace($workspace)) {
            return false;
        }

        $this->forceFill([
            'current_workspace_id' => $workspace->id,
        ])->save();

        $this->setRelation('currentWorkspace', $workspace);

        return true;
    }

    /**
     * Get all of the workspaces the user owns or belongs to.
     *
     * @return \Illuminate\Support\Collection
     */
    public function allWorkspaces()
    {
        return $this->ownedWorkspaces->merge($this->workspaces)->sortBy('name');
    }

    /**
     * Get all of the workspaces the user owns.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ownedWorkspaces()
    {
        return $this->hasMany(Workspace::class);
    }

    /**
     * Get all of the workspaces the user belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function workspaces()
    {
        return $this->belongsToMany(Workspace::class, Membership::class)
            ->withPivot('role')
            ->withTimestamps()
            ->as('membership');
    }

    /**
     * Get the user's "personal" team.
     *
     * @return \App\Models\Workspace
     */
    public function personalWorkspace()
    {
        return $this->ownedWorkspaces->where('personal_workspace', true)->first();
    }

    /**
     * Determine if the user owns the given workspace.
     *
     * @param  mixed  $workspace
     * @return bool
     */
    public function ownsWorkspace($workspace)
    {
        if (is_null($workspace)) {
            return false;
        }

        return $this->id == $workspace->{$this->getForeignKey()};
    }

    /**
     * Determine if the user belongs to the given workspace.
     *
     * @param  mixed  $workspace
     * @return bool
     */
    public function belongsToworkspace($workspace)
    {
        return $this->workspaces->contains(function ($t) use ($workspace) {
                return $t->id === $workspace->id;
            }) || $this->ownsWorkspace($workspace);
    }
}
