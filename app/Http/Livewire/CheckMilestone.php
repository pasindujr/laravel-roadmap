<?php

namespace App\Http\Livewire;

use App\Models\Milestone;
use App\Models\User;
use Livewire\Component;

class CheckMilestone extends Component
{

    public $milestoneId;
    public bool $checked = false;

    public function processMark()
    {
        if ($this->checked) {
            $this->mark();
        } else {
            $this->unMark();
        }

    }

    public function mark()
    {
        $milestone = Milestone::where('id', $this->milestoneId)
            ->first();

        $user = User::where('id', auth()->id())
            ->first();

        $user->milestones()->attach($milestone);

    }

    public function unMark()
    {
        $milestone = Milestone::where('id', $this->milestoneId)
            ->first();

        $user = User::where('id', auth()->id())
            ->first();

        $user->milestones()->detach($milestone);

    }

    public function render()
    {
        return view('livewire.check-milestone');
    }
}
