<?php

namespace App\Services\Payments\Pagarme\DTOs;

class AddressDTO
{
    public function __construct(
        public readonly string $street,
        public readonly string $complementary,
        public readonly string $street_number,
        public readonly string $neighborhood,
        public readonly string $city,
        public readonly string $state,
        public readonly string $zip_code,
        public readonly string $reference_point,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            street: $data['street'],
            complementary: $data['complementary'],
            street_number: $data['street_number'],
            neighborhood: $data['neighborhood'],
            city: $data['city'],
            state: $data['state'],
            zip_code: $data['zip_code'],
            reference_point: $data['reference_point'],
        );
    }

    public function toArray(): array
    {
        return [
            'street' => $this->street,
            'complementary' => $this->complementary,
            'street_number' => $this->street_number,
            'neighborhood' => $this->neighborhood,
            'city' => $this->city,
            'state' => $this->state,
            'zip_code' => $this->zip_code,
            'reference_point' => $this->reference_point,
        ];
    }
}
