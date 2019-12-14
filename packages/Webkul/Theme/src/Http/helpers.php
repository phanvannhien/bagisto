<?php

use Webkul\Theme\ViewRenderEventManager;

if (! function_exists('themes')) {
    function themes()
    {
        return app()->make('themes');
    }
}

if (! function_exists('bagisto_asset')) {
    function bagisto_asset($path, $secure = null)
    {
        return themes()->url($path, $secure);
    }
}

if (! function_exists('view_render_event')) {
    function view_render_event($eventName, $params = null)
    {
        app()->singleton(ViewRenderEventManager::class);

<<<<<<< HEAD
        $viewEventMagnager = app()->make(ViewRenderEventManager::class);

        $viewEventMagnager->handleRenderEvent($eventName, $params);

        return $viewEventMagnager->render();
=======
        $viewEventManager = app()->make(ViewRenderEventManager::class);

        $viewEventManager->handleRenderEvent($eventName, $params);

        return $viewEventManager->render();
>>>>>>> 3dc905331bdf7f31caf86246f33b94353b5a6719
    }
}