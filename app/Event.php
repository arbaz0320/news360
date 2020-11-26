<?php

namespace App;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

use Illuminate\Database\Eloquent\Model;

class Event extends Model implements Feedable
{
    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->title)
            ->summary("Hello")
            ->updated($this->updated_at)
            ->link($this->link)
            ->author($this->author);
    }

    public static function getFeedItems()
    {
       return static::all();
    }

    public function getLinkAttribute()
{
    return route('events.show', $this);
}

}
