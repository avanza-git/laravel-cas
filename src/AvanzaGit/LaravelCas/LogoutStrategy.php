<?php

namespace AvanzaGit\LaravelCas;

/**
 * Isolates the exit() function so we can run tests without exiting
 */
class LogoutStrategy
{
    public function completeLogout(): void
    {
        exit();
    }
}
