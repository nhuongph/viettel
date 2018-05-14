<?php

if (!function_exists('getCurrentUserLogin')) {

    /**
     * Get Current User Login
     *
     * @param array $fields Fields
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    function getCurrentUserLogin($fields = ['*'])
    {
        $user = \Illuminate\Support\Facades\Auth::user();

        return $user->setVisible(array_merge($user->getVisible(), $fields));
    }
}
