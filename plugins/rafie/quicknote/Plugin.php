<?php namespace RAFIE\Quicknote;

use Backend;
use System\Classes\PluginBase;

/**
 * quicknote Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'quicknote',
            'description' => 'No description provided yet...',
            'author'      => 'RAFIE',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'RAFIE\Quicknote\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'rafie.quicknote.some_permission' => [
                'tab' => 'quicknote',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'quicknote' => [
                'label'       => 'quicknote',
                'url'         => Backend::url('rafie/quicknote/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['rafie.quicknote.*'],
                'order'       => 500,
            ],
        ];
    }

}
