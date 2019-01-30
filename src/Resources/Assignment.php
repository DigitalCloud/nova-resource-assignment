<?php

namespace DigitalCloud\NovaResourceAssignment\Resources;


use App\Nova\Resource;
use App\Nova\User;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Text;

class Assignment extends Resource {

    public static $model = 'DigitalCloud\ModelAssignment\Models\Assignment';

    public static $displayInNavigation = false;

    public function fields(Request $request)
    {
        return [
            BelongsTo::make('Assignee', 'user', User::class),
            Text::make('Note'),

        ];
    }

}
