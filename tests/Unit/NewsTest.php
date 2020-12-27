<?php

namespace Tests\Unit;

use App\Models\News;
use PHPUnit\Framework\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $model = new News();
        $data = $model->getNewsByIdCategory(1);
        $this->assertIsArray($data);
        $this->assertNotEmpty($data);
        foreach ($data as $item) {
            $this->assertEquals(3, $item['id_category']);
        }
    }
}
