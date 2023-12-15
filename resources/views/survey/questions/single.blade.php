<div class="border-bottom p-4">
    @include(view()->exists("survey.questions.types.{$question->type}")
            ? "survey::questions.types.{$question->type}"
            : 'survey::questions.types.text',
        [
            'disabled' => !($survey->isEligible(auth()->user()) ?? true),
            'value' => $survey->lastEntry(auth()->user()) ? $survey->lastEntry(auth()->user())->answerFor($question) : null,
            'includeResults' => ($survey->lastEntry(auth()->user()) ?? null) !== null,
        ]
    )
</div>
