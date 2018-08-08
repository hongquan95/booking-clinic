<?php

if (! function_exists('checkRouteActive')) {

    /**
     * Check request route name equal a route
     *
     * @param string $route route
     *
     * @return string
     */
    function checkRouteActive($route = '#')
    {
        return Request::route()->getName() === $route ? ' active' : '';
    }
}

if (! function_exists('generateIndex')) {

    /**
     * Generate index for table view
     *
     * @param \Illuminate\Pagination\LengthAwarePaginator
     * @param integer
     *
     * @return string
     */
    function generateIndex($paginate, $key)
    {
        return ($paginate->currentPage() - 1)  * $paginate->perPage() + $key + 1;
    }
}
