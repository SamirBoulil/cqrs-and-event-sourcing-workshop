<?php

namespace Simple\EventStore;

/**
 * If the events recorded inside an object need to be persisted using the `EventStore`, it should implement this
 * interface.
 */
interface EventSourced
{
    /**
     * @return string
     */
    public function id() : string;

    /**
     * @return object
     */
    public function popRecordedEvents();

    /**
     * @param \Iterator $events
     * @return static
     */
    public static function reconstitute(\Iterator $events);
}
