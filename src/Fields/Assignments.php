<?php

namespace DigitalCloud\NovaResourceAssignment\Fields;

use DigitalCloud\NovaResourceAssignment\Resources\Assignment;
use Illuminate\Support\Str;
use Laravel\Nova\Fields\Field;

class Assignments extends Field {

    public $component = 'assignments-field';

    public $showOnCreation = false;
    public $showOnUpdate = false;
    public $showOnIndex = false;

    /**
     * The class name of the related resource.
     *
     * @var string
     */
    public $resourceClass;

    /**
     * The URI key of the related resource.
     *
     * @var string
     */
    public $resourceName;

    /**
     * The name of the Eloquent "has many" relationship.
     *
     * @var string
     */
    public $hasManyRelationship;

    /**
     * The displayable singular label of the relation.
     *
     * @var string
     */
    public $singularLabel;

    public function __construct()
    {
        parent::__construct('Assignments', 'assignments');

        $resource = Assignment::class;

        $this->resourceClass = $resource;
        $this->resourceName = $resource::uriKey();
        $this->hasManyRelationship = $this->attribute;
    }

    /**
     * Set the displayable singular label of the resource.
     *
     * @return string
     */
    public function singularLabel($singularLabel)
    {
        $this->singularLabel = $singularLabel;

        return $this;
    }

    /**
     * Get additional meta information to merge with the field payload.
     *
     * @return array
     */
    public function meta()
    {
        return array_merge([
            'resourceName' => $this->resourceName,
            'hasManyRelationship' => $this->hasManyRelationship,
            'listable' => true,
            'singularLabel' => $this->singularLabel ?? Str::singular($this->name),
        ], $this->meta);
    }


}
