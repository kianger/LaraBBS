<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Carbon;

/**
 * App\Models\Topic
 *
 * @property int $id
 * @property string $title
 * @property string $body
 * @property int $user_id
 * @property int $category_id
 * @property int $reply_count
 * @property int $view_count
 * @property int $last_reply_user_id
 * @property int $order
 * @property string|null $excerpt
 * @property string|null $slug
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Category $category
 * @property-read User $user
 * @method static Builder|Topic newModelQuery()
 * @method static Builder|Topic newQuery()
 * @method static Builder|Model ordered()
 * @method static Builder|Topic query()
 * @method static Builder|Model recent()
 * @method static Builder|Topic whereBody($value)
 * @method static Builder|Topic whereCategoryId($value)
 * @method static Builder|Topic whereCreatedAt($value)
 * @method static Builder|Topic whereExcerpt($value)
 * @method static Builder|Topic whereId($value)
 * @method static Builder|Topic whereLastReplyUserId($value)
 * @method static Builder|Topic whereOrder($value)
 * @method static Builder|Topic whereReplyCount($value)
 * @method static Builder|Topic whereSlug($value)
 * @method static Builder|Topic whereTitle($value)
 * @method static Builder|Topic whereUpdatedAt($value)
 * @method static Builder|Topic whereUserId($value)
 * @method static Builder|Topic whereViewCount($value)
 * @mixin Eloquent
 */
class Topic extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'category_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
