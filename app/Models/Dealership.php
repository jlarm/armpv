<?php

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonInterface;
use Database\Factories\DealershipFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read int $id
 * @property-read string $uuid
 * @property-read string $name
 * @property-read array<string,mixed> $settings
 * @property-read CarbonInterface $created_at
 * @property-read CarbonInterface $updated_at
 * @property-read CarbonInterface|null $deleted_at
 */
final class Dealership extends Model
{
    /** @use HasFactory<DealershipFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'uuid' => 'string',
            'name' => 'string',
            'settings' => 'array',
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'deleted_at' => 'datetime',
        ];
    }
}
