<?php 
    return function ($page) {
        $events = $page->children()->listed();
        $filterBy = get('filter');
        $unfiltered = $events;
        $filters = $unfiltered->pluck('filter', null, true);
        return [
            'events' => $events,
            'filterBy' => $filterBy,
            'unfiltered' => $unfiltered,
            'filters' => $filters,
        ];
    };
?>