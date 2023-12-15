<?php

namespace App\Livewire;

use Livewire\Component;
use MattDaneshvar\Survey\Models\Survey;

class SurveyForm extends Component
{

    public $id;

    public function render()
    {
        $survey = Survey::find($this->id);
        if (!$survey) abort(404);
        return view('livewire.survey-form', compact('survey'));
    }
}
