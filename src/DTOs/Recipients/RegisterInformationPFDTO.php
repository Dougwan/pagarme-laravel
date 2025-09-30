<?php

namespace Dougwn\Pagarme\DTOs\Recipients;

class RegisterInformationPFDTO
{
    /**
     * @param  PhoneNumberDTO[]  $phone_numbers
     */
    public function __construct(
        public readonly array $phone_numbers,
        public readonly AddressDTO $address,
        public readonly string $name,
        public readonly string $email,
        public readonly string $document,
        public readonly string $type, // "individual"
        public readonly ?string $site_url,
        public readonly string $mother_name,
        public readonly string $birthdate,
        public readonly int $monthly_income,
        public readonly string $professional_occupation,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            phone_numbers: array_map(fn ($p) => PhoneNumberDTO::fromArray($p), $data['phone_numbers']),
            address: AddressDTO::fromArray($data['address']),
            name: $data['name'],
            email: $data['email'],
            document: $data['document'],
            type: $data['type'],
            site_url: $data['site_url'] ?? null,
            mother_name: $data['mother_name'],
            birthdate: $data['birthdate'],
            monthly_income: $data['monthly_income'],
            professional_occupation: $data['professional_occupation'],
        );
    }

    public function toArray(): array
    {
        return array_filter([
            'phone_numbers' => array_map(fn ($pn) => $pn->toArray(), $this->phone_numbers),
            'address' => $this->address->toArray(),
            'name' => $this->name,
            'email' => $this->email,
            'document' => $this->document,
            'type' => $this->type,
            'site_url' => $this->site_url,
            'mother_name' => $this->mother_name,
            'birthdate' => $this->birthdate,
            'monthly_income' => $this->monthly_income,
            'professional_occupation' => $this->professional_occupation,
        ], fn ($value) => !is_null($value));
    }
}
