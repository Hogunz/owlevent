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
 * App\Models\Blog
 *
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property string $name
 * @property string $image
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog query()
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Blog whereUserId($value)
 */
	class Blog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Gig> $gigs
 * @property-read int|null $gigs_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Faq
 *
 * @property int $id
 * @property int $gig_id
 * @property string $question
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq query()
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereGigId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Faq whereUpdatedAt($value)
 */
	class Faq extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Gig
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property int $category_id
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GigComment> $comments
 * @property-read int|null $comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Faq> $faqs
 * @property-read int|null $faqs_count
 * @property-read mixed $ratings
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GigPackage> $gigPackages
 * @property-read int|null $gig_packages_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GigUpload> $gigUploads
 * @property-read int|null $gig_uploads_count
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Gig newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gig newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gig query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gig whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gig whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gig whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gig whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gig whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gig whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gig whereUserId($value)
 */
	class Gig extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GigComment
 *
 * @property int $id
 * @property int $gig_id
 * @property int $commenter_id
 * @property string $text
 * @property int $ratings
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $commenter
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GigCommentReply> $replies
 * @property-read int|null $replies_count
 * @method static \Illuminate\Database\Eloquent\Builder|GigComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GigComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GigComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|GigComment whereCommenterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigComment whereGigId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigComment whereRatings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigComment whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigComment whereUpdatedAt($value)
 */
	class GigComment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GigCommentReply
 *
 * @property int $id
 * @property int $gig_comment_id
 * @property int $commenter_id
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GigCommentReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GigCommentReply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GigCommentReply query()
 * @method static \Illuminate\Database\Eloquent\Builder|GigCommentReply whereCommenterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigCommentReply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigCommentReply whereGigCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigCommentReply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigCommentReply whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigCommentReply whereUpdatedAt($value)
 */
	class GigCommentReply extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GigPackage
 *
 * @property int $id
 * @property int $gig_id
 * @property string $package
 * @property float $price
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GigPackage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GigPackage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GigPackage query()
 * @method static \Illuminate\Database\Eloquent\Builder|GigPackage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigPackage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigPackage whereGigId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigPackage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigPackage wherePackage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigPackage wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigPackage whereUpdatedAt($value)
 */
	class GigPackage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GigUpload
 *
 * @property int $id
 * @property int $gig_id
 * @property string $url
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GigUpload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GigUpload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GigUpload query()
 * @method static \Illuminate\Database\Eloquent\Builder|GigUpload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigUpload whereGigId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigUpload whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigUpload whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigUpload whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GigUpload whereUrl($value)
 */
	class GigUpload extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Occupation
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Occupation whereUpdatedAt($value)
 */
	class Occupation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Skill
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill query()
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Skill whereUpdatedAt($value)
 */
	class Skill extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SupplierComment
 *
 * @property int $id
 * @property int $user_id
 * @property int $commenter_id
 * @property string $text
 * @property int $ratings
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $commenter
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SupplierCommentReply> $replies
 * @property-read int|null $replies_count
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierComment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierComment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierComment query()
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierComment whereCommenterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierComment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierComment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierComment whereRatings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierComment whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierComment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierComment whereUserId($value)
 */
	class SupplierComment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SupplierCommentReply
 *
 * @property int $id
 * @property int $supplier_comment_id
 * @property int $commenter_id
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $commenter
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierCommentReply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierCommentReply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierCommentReply query()
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierCommentReply whereCommenterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierCommentReply whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierCommentReply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierCommentReply whereSupplierCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierCommentReply whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SupplierCommentReply whereUpdatedAt($value)
 */
	class SupplierCommentReply extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $fb_id
 * @property string|null $google_id
 * @property string|null $twitter_id
 * @property string $name
 * @property string|null $avatar
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $business_name
 * @property string|null $description
 * @property string|null $id_card
 * @property string|null $selfie_photo
 * @property string|null $address
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SupplierComment> $comments
 * @property-read int|null $comments_count
 * @property-read mixed $full_name
 * @property-read mixed $ratings
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\GigComment> $gigComments
 * @property-read int|null $gig_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Gig> $gigs
 * @property-read int|null $gigs_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Occupation> $occupations
 * @property-read int|null $occupations_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Skill> $skills
 * @property-read int|null $skills_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SupplierComment> $supplierComments
 * @property-read int|null $supplier_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereBusinessName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFbId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGoogleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIdCard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSelfiePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwitterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

