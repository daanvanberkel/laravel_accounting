<?php
namespace Dvb\Accounting;

class AccountingMutationLine {
    /**
     * @var float   The line amount without vat
     */
    protected float $amount = 0;
    protected string $vat_code = '';
    protected float $vat_percentage = 0;
    protected ?string $invoice_number = null;
    protected ?string $ledger_code = null;

    /**
     * Get the amount without vat
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return AccountingMutationLine
     */
    public function setAmount(float $amount): AccountingMutationLine
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getVatCode(): string
    {
        return $this->vat_code;
    }

    /**
     * @param string $vat_code
     * @return AccountingMutationLine
     */
    public function setVatCode(string $vat_code): AccountingMutationLine
    {
        $this->vat_code = $vat_code;
        return $this;
    }

    /**
     * @return float
     */
    public function getVatPercentage(): float
    {
        return $this->vat_percentage;
    }

    /**
     * @param float $vat_percentage
     * @return AccountingMutationLine
     */
    public function setVatPercentage(float $vat_percentage): AccountingMutationLine
    {
        $this->vat_percentage = $vat_percentage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->invoice_number;
    }

    /**
     * @param string|null $invoice_number
     * @return AccountingMutationLine
     */
    public function setInvoiceNumber(?string $invoice_number): AccountingMutationLine
    {
        $this->invoice_number = $invoice_number;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLedgerCode(): ?string
    {
        return $this->ledger_code;
    }

    /**
     * @param string|null $ledger_code
     * @return AccountingMutationLine
     */
    public function setLedgerCode(?string $ledger_code): AccountingMutationLine
    {
        $this->ledger_code = $ledger_code;
        return $this;
    }
}
