<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    public $page;
    public $pagePath;
    public $hasPage;
    public $mainRoute;
    public $mainPath;
    public $hasMainRoute;
    public $subRoute;
    public $subPath;
    public $hasSubRoute;

    /**
     * Create a new component instance.
     */
    public function __construct($page, $pagePath, $hasPage, $mainRoute, $mainPath, $hasMainRoute, $subRoute, $subPath, $hasSubRoute)
    {
        $this->page = $page;
        $this->pagePath = $pagePath;
        $this->hasPage = $hasPage;
        $this->mainRoute = $mainRoute;
        $this->mainPath = $mainPath;
        $this->hasMainRoute = $hasMainRoute;
        $this->subRoute = $subRoute;
        $this->subPath = $subPath;
        $this->hasSubRoute = $hasSubRoute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrumbs');
    }
}
