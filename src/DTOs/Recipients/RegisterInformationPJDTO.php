<?php

namespace App\Services\Payments\Pagarme\DTOs;

class RegisterInformationPJDTO
{
    /**
     * @param  PhoneNumberDTO[]  $phone_numbers
     * @param  ManagingPartnerDTO[]  $managing_partners
     */
    public function __construct(
        public readonly array $phone_numbers,
        public readonly AddressDTO $main_address,
        public readonly string $company_name,
        public readonly string $trading_name,
        public readonly string $email,
        public readonly string $document,
        public readonly string $type, // "corporation"
        public readonly string $site_url,
        public readonly int $annual_revenue,
        public readonly string $corporation_type,
        public readonly string $founding_date,
        public readonly array $managing_partners,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            phone_numbers: array_map(fn ($p) => PhoneNumberDTO::fromArray($p), $data['phone_numbers']),
            main_address: AddressDTO::fromArray($data['main_address']),
            company_name: $data['company_name'],
            trading_name: $data['trading_name'],
            email: $data['email'],
            document: $data['document'],
            type: $data['type'],
            site_url: $data['site_url'],
            annual_revenue: $data['annual_revenue'],
            corporation_type: $data['corporation_type'],
            founding_date: $data['founding_date'],
            managing_partners: array_map(fn ($mp) => ManagingPartnerDTO::fromArray($mp), $data['managing_partners']),
        );
    }

    public function toArray(): array
    {
        return [
            'phone_numbers' => array_map(fn ($pn) => $pn->toArray(), $this->phone_numbers),
            'address' => $this->main_address->toArray(),
            'company_name' => $this->company_name,
            'email' => $this->email,
            'document' => $this->document,
            'type' => $this->type,
            'site_url' => $this->site_url,
            'trading_name' => $this->trading_name,
            'annual_revenue' => $this->annual_revenue,
            'corporation_type' => $this->corporation_type,
            'founding_date' => $this->founding_date,
            'managing_partners' => array_map(fn ($mp) => $mp->toArray(), $this->managing_partners),
        ];
    }
}
