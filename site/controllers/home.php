<?php 
    return function ($page) {
        $events = $page->children()->listed();
        return [
            'events' => $events,
        ];
    };
?>