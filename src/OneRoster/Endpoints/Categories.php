<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\CategoriesOutputModel;
use Blackbaud\SKY\OneRoster\Components\CategoryInputModel;
use Blackbaud\SKY\OneRoster\Components\CategoryOutputModel;

/**
 * @api
 */
class Categories extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/categories/{id}";

    /**
     * Returns a collection of categories.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\CategoriesOutputModel OK -
     *   It was possible to read the collection.
     */
    public function get(): CategoriesOutputModel
    {
        return new CategoriesOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Returns a specific category.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the category
     *
     * @return \Blackbaud\SKY\OneRoster\Components\CategoryOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): CategoryOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new CategoryOutputModel($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Returns the category object that was created or updated.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the category
     * @param \Blackbaud\SKY\OneRoster\Components\CategoryInputModel
     *   $requestBody input model for a category
     *
     * @return \Blackbaud\SKY\OneRoster\Components\CategoryOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function putById(array $params, CategoryInputModel $requestBody): CategoryOutputModel
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new CategoryOutputModel($this->send("put", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody));
    }
}
