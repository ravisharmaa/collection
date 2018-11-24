<?php
/**
 * Created by PhpStorm.
 * User: ravibastola
 * Date: 8/25/18
 * Time: 3:46 PM
 */
use PHPUnit\Framework\TestCase;
use App\Collection;
use App\Exceptions\MustBeArrayException;

class CollectionTest extends TestCase
{
    /**
     * @test
     */
    public function testException()
    {
        new Collection('sdf');
        $this->expectException(MustBeArrayException::class);
    }
}
