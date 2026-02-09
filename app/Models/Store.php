<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\State;
use Carbon\CarbonInterface;
use Database\Factories\StoreFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property-read int $id
 * @property-read string $uuid
 * @property-read int $dealership_id
 * @property-read string $name
 * @property-read string|null $address
 * @property-read string|null $city
 * @property-read State|null $state
 * @property-read string|null $zip
 * @property-read CarbonInterface $created_at
 * @property-read CarbonInterface $updated_at
 * @property-read CarbonInterface|null $deleted_at
 */
final class Store extends Model
{
    /** @use HasFactory<StoreFactory> */
    use HasFactory;

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'uuid' => 'string',
            'dealership_id' => 'integer',
            'name' => 'string',
            'address' => 'string',
            'city' => 'string',
            'state' => State::class,
            'zip' => 'string',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }
}
