<?php

declare(strict_types=1);

namespace Charpand\GoogleTagManager;

use Bolt\Extension\BaseExtension;

class Extension extends BaseExtension
{
    public function getName(): string
    {
        return 'Google Tag Manager';
    }

    /**
     * Loads the Google Tag Manager Scripts.
     *
     * Script comes in 2 parts - one goes in the <body> tag, the other goes
     * in the <head>.
     */
    public function initialize(): void
    {
        $this->addWidget(new GoogleTagManagerHeadWidget());
        $this->addWidget(new GoogleTagManagerBodyWidget());
        $this->addWidget(new GoogleTagManagerCookieWidget());
    }
}
