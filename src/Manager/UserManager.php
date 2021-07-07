<?php

namespace App\Manager;


use App\Entity\User;

class UserManager
{
    /**
     * @return User[]
     */
    public function getUserList() : array
    {
        return [
            new User('Иван', 'Сергеевич', 'Сапогов', '+71112223344'),
            new User('Фёдор', 'Викторович', 'Лаптев', '+72223334455'),
            new User('Пётр', 'Михайлович', 'Стеклов', '+73334445566'),
            new User('Игнат', 'Глебович', 'Лопухов', '+74445556677'),
        ];
    }

    public function getUserVueList() : array
    {
        return array_map(function (User $user) {
            return $user->toArray();
        }, $this->getUserList());
    }
}