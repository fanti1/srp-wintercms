<?php

namespace Siapp\Payments;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * Payments Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'siapp.payments::lang.plugin.name',
            'description' => 'siapp.payments::lang.plugin.description',
            'author'      => 'Siapp',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register(): void
    {

    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot(): void
    {

    }

    /**
     * Registers any frontend components implemented in this plugin.
     */
    public function registerComponents(): array
    {
        return []; // Remove this line to activate

        return [
            'Siapp\Payments\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any backend permissions used by this plugin.
     */
    public function registerPermissions(): array
    {
        return []; // Remove this line to activate

        return [
            'siapp.payments.some_permission' => [
                'tab' => 'siapp.payments::lang.plugin.name',
                'label' => 'siapp.payments::lang.permissions.some_permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];
    }

    /**
     * Registers backend navigation items for this plugin.
     */
    public function registerNavigation(): array
    {
        return []; // Remove this line to activate

        return [
            'payments' => [
                'label'       => 'siapp.payments::lang.plugin.name',
                'url'         => Backend::url('siapp/payments/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['siapp.payments.*'],
                'order'       => 500,
            ],
        ];
    }
}
