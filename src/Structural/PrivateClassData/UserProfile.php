<?php

declare(strict_types=1);

namespace App\Structural\PrivateClassData;

use http\Exception\InvalidArgumentException;

final class UserProfile
{
    private string $userId;
    private string $displayName;
    private string $email;
    private \DateTimeImmutable $registrationDate;
    private ?\DateTimeImmutable $lastLoginDate = null;
    private bool $isPremiumMember = false;

    public function __construct(string $userId, string $displayName, string $email)
    {
        if (trim($userId) === '') {
            throw new InvalidArgumentException('ID DO USUARIO NAO PODE SER VAZIO');
        }
        $this->userId = $userId;
        $this->changeDisplayName($displayName);
        $this->changeEmail($email);
        $this->registrationDate = new \DateTimeImmutable();
    }

    public function __toString()
    {
        return $this->displayName;
    }

    /**
     * @return string
     */
    public function getDisplayName(): string
    {
        return $this->displayName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getLastLoginDate(): ?\DateTimeImmutable
    {
        return $this->lastLoginDate;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getRegistrationDate(): \DateTimeImmutable
    {
        return $this->registrationDate;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    public function changeEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('O FORMATO DO EMAIL NÃO É VALIDO');
        }
        $this->email = $email;
    }

    public function changeDisplayName(string $displayName): void
    {
        if (strlen($displayName) < 3) {
            throw new InvalidArgumentException('O NOME DEVE TER MAIS DE 3 CARACTERES');
        }
        $this->displayName = $displayName;
    }

    public function upgradeToPremium()
    {
        $this->isPremiumMember = true;
    }
}
