<?php 
    return function ($page) {
        $events = $page->children()->listed();
        $filterBy = get('filter');
        $unfiltered = $events;
        $events = $unfiltered
            ->when($filterBy, function($filterBy) {
            return $this->filterBy('events', $filterBy);
            });
        $filters = $unfiltered->pluck('events', null, true);
        return [
            'events' => $events,
            'filterBy' => $filterBy,
            'unfiltered' => $unfiltered,
            'filters' => $filters,
        ];
    };
?>