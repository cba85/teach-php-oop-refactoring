<?php

namespace App\Models;

use Carbon\Carbon;

class Article
{
    public function getCreatedAt()
    {
        return new Carbon($this->created_at);
    }
}
