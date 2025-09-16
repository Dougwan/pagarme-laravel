<?php

namespace App\Services\Payments\Pagarme\DTOs;

class PhoneNumberDTO
{
    public function __construct(
        public readonly string $ddd,
        public readonly string $number,
        public readonly string $type,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            ddd: $data['ddd'],
            number: $data['number'],
            type: $data['type'],
        );
    }

    public function toArray(): array
    {
        return [
            'ddd' => $this->ddd,
            'number' => $this->number,
            'type' => $this->type,
        ];
    }
}
