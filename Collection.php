<?php
/**
 * Created by PhpStorm.
 * User: ravibastola
 * Date: 7/28/18
 * Time: 11:45 AM
 */

class Collection
{
    /**
     * @var array
     */
    protected  $items;

    public function __construct($items = [])
    {
        $this->items = $items;
    }

    public function all()
    {
        return $this->items;
    }

    public function count()
    {
        return count($this->items);
    }

    public function first($default = null)
    {
        return isset($this->items[0])?$this->items[0]:$default;
    }

    public function last($default = null)
    {
        $reversed = array_reverse($this->items);
        return isset($reversed[0])?$reversed[0]:$default;
    }

    public function filter(callable $callback)
    {
        return new static(array_filter($this->items, $callback));
    }

    public function map(callable $callback)
    {
        return new static(array_map($callback, $this->items));
    }


}