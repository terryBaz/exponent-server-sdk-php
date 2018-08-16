<?php

namespace ExponentPhpSDK;

interface ExpoRepository
{
    /**
     * Stores an Expo token with a given identifier
     *
     * @param $key
     * @param $value
     *
     * @return bool
     */
    public function store($key, $value);
    /**
     * Retrieve an Expo token with a given identifier
     *
     * @param string $key
     *
     * @return string|null
     */
    public function retrieve($key);
    /**
     * Removes an Expo token with a given identifier
     *
     * @param string $key
     *
     * @return bool
     */
    public function forget($key);
}