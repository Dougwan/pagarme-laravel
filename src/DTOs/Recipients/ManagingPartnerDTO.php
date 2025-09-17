<?php

namespace App\Services\Payments\Pagarme\DTOs;

class ManagingPartnerDTO
{
    /**
     * @param  PhoneNumberDTO[]  $phone_numbers
     */
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $document,
        public readonly string $type, // "individual"
        public readonly string $mother_name,
        public readonly string $birthdate,
        public readonly int $monthly_income,
        public readonly string $professional_occupation,
        public readonly bool $self_declared_legal_representative,
        public readonly AddressDTO $address,
        public readonly array $phone_numbers,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            name: $data['name'],
            email: $data['email'],
            document: $data['document'],
            type: $data['type'],
            mother_name: $data['mother_name'],
            birthdate: $data['birthdate'],
            monthly_income: $data['monthly_income'],
            professional_occupation: $data['professional_occupation'],
            self_declared_legal_representative: (bool) $data['self_declared_legal_representative'],
            address: AddressDTO::fromArray($data['address']),
            phone_numbers: array_map(fn ($p) => PhoneNumberDTO::fromArray($p), $data['phone_numbers']),
        );
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'document' => $this->document,
            'type' => $this->type,
            'mother_name' => $this->mother_name,
            'birthdate' => $this->birthdate,
            'monthly_income' => $this->monthly_income,
            'professional_occupation' => $this->professional_occupation,
            'self_declared_legal_representative' => $this->self_declared_legal_representative,
            'address' => $this->address->toArray(),
            'phone_numbers' => array_map(fn ($pn) => $pn->toArray(), $this->phone_numbers),
        ];
    }
}
