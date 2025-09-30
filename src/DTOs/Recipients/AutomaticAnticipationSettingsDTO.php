<?php

namespace Dougwn\Pagarme\DTOs\Recipients;

class AutomaticAnticipationSettingsDTO
{
    public function __construct(
        public readonly bool $enabled,
        public readonly string $type,
        public readonly string $volume_percentage,
        public readonly ?string $delay,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            enabled: filter_var($data['enabled'], FILTER_VALIDATE_BOOLEAN),
            type: $data['type'],
            volume_percentage: $data['volume_percentage'],
            delay: $data['delay'] ?? null,
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'enabled' => $this->enabled,
            'type' => $this->type,
            'volume_percentage' => $this->volume_percentage,
            'delay' => $this->delay,
        ], fn ($value) => !is_null($value));
    }
}
