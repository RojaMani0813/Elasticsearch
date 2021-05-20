<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 05 Sep 2018 08:29:36 +0000.
 */

namespace App\Models;

use Elasticquent\ElasticquentTrait;
use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Article
 * 
 * @property int $id
 * @property string $title
 * @property string $body
 * @property int $tags
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $article
 *
 * @package App\Models
 */
class Article extends Eloquent
{
    use ElasticquentTrait;

    protected $fillable = ['title', 'body', 'tags'];

    protected $mappingProperties = array(
        'title' => [
          'type' => 'text',
          "analyzer" => "standard",
        ],
        'body' => [
          'type' => 'text',
          "analyzer" => "standard",
        ],
        'tags' => [
          'type' => 'text',
          "analyzer" => "standard",
        ],
      );
    
}
