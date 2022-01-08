<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\blog_banner
 *
 * @property int $id
 * @property string $title
 * @property string $metatitle
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|blog_banner newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|blog_banner newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|blog_banner query()
 * @method static \Illuminate\Database\Eloquent\Builder|blog_banner whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_banner whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_banner whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_banner whereMetatitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_banner whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_banner whereUpdatedAt($value)
 */
	class blog_banner extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\blog_category
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\blog_post[] $posts
 * @property-read int|null $posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|blog_category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|blog_category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|blog_category query()
 * @method static \Illuminate\Database\Eloquent\Builder|blog_category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_category whereUpdatedAt($value)
 */
	class blog_category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\blog_post
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $metatitle
 * @property string $content
 * @property string $image
 * @property int $categories_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\blog_category $category
 * @method static \Illuminate\Database\Eloquent\Builder|blog_post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|blog_post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|blog_post query()
 * @method static \Illuminate\Database\Eloquent\Builder|blog_post whereCategoriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_post whereMetatitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|blog_post whereUpdatedAt($value)
 */
	class blog_post extends \Eloquent {}
}

