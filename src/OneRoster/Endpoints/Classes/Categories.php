<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Classes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\CategoriesOutputModel;

/**
 * @api
 */
class Categories extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/categories";

    /**
     * Returns a collection of categories for a specified ```class\_id```.
     *
     * @param array{class_id: string} $params An associative array
     *     - class_id: sourcedId for the category
     *
     * @return \Blackbaud\SKY\OneRoster\Components\CategoriesOutputModel OK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByClassId(array $params): CategoriesOutputModel
    {
        assert(isset($params['class_id']), new ArgumentException("Parameter `class_id` is required"));

        return new CategoriesOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['class_id']), ARRAY_FILTER_USE_KEY), []));
    }
}
