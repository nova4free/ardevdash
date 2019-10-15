<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Place;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Yassi\NestedForm\NestedForm;

class Account extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Account';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'company_name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            // Company panel
            new Panel('Company information', $this->companyFields()),
            // Contact panel
            new Panel('Contact information', $this->contactFields()),
            // Client logins
            //new Panel('Client logins', $this->clientLoginFields()),
            NestedForm::make('ClientLogin'),

            Currency::make('Total budget'),
            Text::make('Services')->rules('required'),
        ];
    }

    /**
     * Get the company fields for the Account
     *
     * @return array
     */
    protected function companyFields()
    {
        return [
            Text::make('Company name')->sortable()->rules('required'),
            Place::make('Company address line 1')->hideFromIndex()->rules('required'),
            Text::make('Company address line 2')->hideFromIndex()->rules('required'),
            Text::make('Company city')->hideFromIndex()->rules('required'),
            Text::make('Company postcode')->hideFromIndex()->rules('required'),
            Country::make('Company country')->hideFromIndex()->rules('required'),
            Text::make('Company email')->hideFromIndex()->rules('required, email:rfc,dns'),
            Text::make('Company tel no')->hideFromIndex()->rules('required'),
        ];
    }

    /**
     * Get the contact fields for the Account
     *
     * @return array
     */
    protected function contactFields()
    {
        return [
            Text::make('Contact name')->sortable()->rules('required'),
            Text::make('Contact job title')->hideFromIndex()->rules('required'),
            Text::make('Contact tel no')->hideFromIndex()->rules('required'),
            Text::make('Contact email')->hideFromIndex()->rules('required'),
        ];
    }

    /**
     * Get the client login fields for the Account
     *
     * @return array
     */
    protected function clientLoginFields()
    {
        return [
            //HasMany::make('ClientLogins'),
            //NestedForm::make('ClientLogin')
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
