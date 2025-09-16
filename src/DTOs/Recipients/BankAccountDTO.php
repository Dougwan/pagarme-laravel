<?php

namespace App\Services\Payments\Pagarme\DTOs;

class BankAccountDTO
{
    public function __construct(
        public readonly string $holder_name,
        public readonly string $holder_type,
        public readonly string $holder_document,
        public readonly string $bank,
        public readonly string $branch_number,
        public readonly string $branch_check_digit,
        public readonly string $account_number,
        public readonly string $account_check_digit,
        public readonly string $type,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            holder_name: $data['holder_name'],
            holder_type: $data['holder_type'],
            holder_document: $data['holder_document'],
            bank: $data['bank'],
            branch_number: $data['branch_number'],
            branch_check_digit: $data['branch_check_digit'],
            account_number: $data['account_number'],
            account_check_digit: $data['account_check_digit'],
            type: $data['type'],
        );
    }

    public function toArray(): array
    {
        return [
            'holder_name' => $this->holder_name,
            'holder_type' => $this->holder_type,
            'holder_document' => $this->holder_document,
            'bank' => $this->bank,
            'branch_number' => $this->branch_number,
            'branch_check_digit' => $this->branch_check_digit,
            'account_number' => $this->account_number,
            'account_check_digit' => $this->account_check_digit,
            'type' => $this->type,
        ];
    }
}
