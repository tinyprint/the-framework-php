<?php

namespace The;

interface RequestInterface
{
    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getParam(string $key, $default = null);

    /**
     * @param string $key
     * @param string|null $default
     * @return mixed
     */
    public function getSessionParam(string $key, ?string $default = null);

    /**
     * @param string $key
     * @param string|null $default
     * @return mixed
     */
    public function getCookie(string $key, ?string $default = null);
}
