<?php

/**
 * Generate a thumbnail image which is shown in the navigation menu.
 */
Event::listen('ideaspace-360-video-gallery.videos.video-thumbnail', function($image) {

    /* remember power of two rule for image sizes */
    return [
        'video-thumbnail-resized' => [
            'fit' => ['width' => 256, 'height' => 128],
        ]
    ];
});

