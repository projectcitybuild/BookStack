<?php

use BookStack\Facades\Theme;
use BookStack\Theming\ThemeEvents;

require "BookStack/themes\pcb\PCBSocialiteProvider.php";

Theme::listen(ThemeEvents::APP_BOOT, function($app) {
    Theme::addSocialDriver('pcb', [
        'client_id' => 'abc123',
        'client_secret' => 'def456789',
        'name' => 'PCB',
    ], '\BookStack\themes\pcb\PCBSocialiteProvider@handle');
});
