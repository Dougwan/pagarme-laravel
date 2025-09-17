<?php

namespace Dougwn\Pagarme\DTOs\Recipients;

class RecipientPFDTO
{
    public function __construct(
        public readonly RegisterInformationPFDTO $register_information,
        public readonly BankAccountDTO $default_bank_account,
        public readonly TransferSettingsDTO $transfer_settings,
        public readonly AutomaticAnticipationSettingsDTO $automatic_anticipation_settings,
        public readonly string $code,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            register_information: RegisterInformationPFDTO::fromArray($data['register_information']),
            default_bank_account: BankAccountDTO::fromArray($data['default_bank_account']),
            transfer_settings: TransferSettingsDTO::fromArray($data['transfer_settings']),
            automatic_anticipation_settings: AutomaticAnticipationSettingsDTO::fromArray($data['automatic_anticipation_settings']),
            code: $data['code'],
        );
    }

    public function toArray(): array
    {
        return [
            'register_information' => $this->register_information->toArray(),
            'default_bank_account' => $this->default_bank_account->toArray(),
            'transfer_settings' => $this->transfer_settings->toArray(),
            'automatic_anticipation_settings' => $this->automatic_anticipation_settings->toArray(),
            'code' => $this->code,
        ];
    }
}
