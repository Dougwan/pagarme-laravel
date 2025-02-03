<?php

namespace Dougwn\Pagarme\Endpoints;

use Dougwn\Pagarme\Utils\ApiAdapter;

class Subscription extends ApiAdapter
{
    /**
     * Criar assinatura avulsa / Criar assinatura de plano
     *
     * @param array $data
     */
    public function create(array $data)
    {
        return $this->post('subscriptions', $data);
    }

    /**
     * Obter assinatura
     *
     * @param string $id
     */
    public function find($id)
    {
        return $this->get("subscriptions/{$id}");
    }

    /**
     * Listar assinaturas
     *
     */
    public function all(array $queryParams = [])
    {
        return $this->get("subscriptions", $queryParams);
    }

    /**
     * Cancelar assinatura
     *
     * @param string $id
     */
    public function cancel($id)
    {
        return $this->delete("subscriptions/{$id}");
    }

    /**
     * Editar cartão da assinatura
     * @param string $id
     */
    public function updateCard($id, $data)
    {
        return $this->patch("subscriptions/{$id}/card", $data);
    }

    /**
     * Editar metadados da assinatura
     * @param string $id
     */
    public function updateMetadata($id, $data)
    {
        return $this->patch("subscriptions/{$id}/metadata", $data);
    }

    /**
     * Editar meio de pagamento da assinatura
     * @param string $id
     */
    public function updatePaymentMethod($id, $data)
    {
        return $this->patch("subscriptions/{$id}/payment-method", $data);
    }

    /**
     * Editar data de início da assinatura
     * @param string $id
     */
    public function updateStartAt($id, $data)
    {
        return $this->patch("subscriptions/{$id}/start-at", $data);
    }

    /**
     * Editar preço mínimo da assinatura
     * @param string $id
     */
    public function updateMinimumPrice($id, $data)
    {
        return $this->patch("subscriptions/{$id}/minimum_price", $data);
    }

    /**
     * Ativar faturamento manual
     * @param string $id
     */
    public function enableManualBilling($id)
    {
        return $this->post("subscriptions/{$id}/manual-billing", []);
    }

    /**
     * Desativar faturamento manual
     * @param string $id
     */
    public function disableManualBilling($id)
    {
        return $this->delete("subscriptions/{$id}/manual-billing");
    }
}
