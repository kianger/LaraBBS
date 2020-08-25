<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name 名称
 * @property string|null $description 描述
 * @property int $post_count 帖子数
 * @method static Builder|Category newModelQuery()
 * @method static Builder|Category newQuery()
 * @method static Builder|Category query()
 * @method static Builder|Category whereDescription($value)
 * @method static Builder|Category whereId($value)
 * @method static Builder|Category whereName($value)
 * @method static Builder|Category wherePostCount($value)
 * @mixin Eloquent
 */
class Category extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'description'];
}
