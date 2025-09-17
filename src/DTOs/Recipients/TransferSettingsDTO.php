<?php

namespace Dougwn\Pagarme\DTOs\Recipients;

class TransferSettingsDTO
{
    public function __construct(
        public readonly bool $transfer_enabled,
        public readonly string $transfer_interval,
        public readonly int $transfer_day,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            transfer_enabled: filter_var($data['transfer_enabled'], FILTER_VALIDATE_BOOLEAN),
            transfer_interval: $data['transfer_interval'],
            transfer_day: $data['transfer_day'],
        );
    }

    public function toArray(): array
    {
        return [
            'transfer_enabled' => $this->transfer_enabled,
            'transfer_interval' => $this->transfer_interval,
            'transfer_day' => $this->transfer_day,
        ];
    }
}
