<?php

return [
    'required' => 'Поле «:attribute» обязательно для заполнения.',
    'email' => 'Поле «:attribute» должно быть корректным email-адресом.',
    'string' => 'Поле «:attribute» должно быть строкой.',
    'max' => [
        'string' => 'Поле «:attribute» не должно быть длиннее :max символов.',
        'numeric' => 'Поле «:attribute» не должно быть больше :max.',
    ],
    'min' => [
        'string' => 'Поле «:attribute» должно быть не короче :min символов.',
        'numeric' => 'Поле «:attribute» должно быть не меньше :min.',
    ],
    'confirmed' => 'Подтверждение поля «:attribute» не совпадает.',
    'unique' => 'Такое значение поля «:attribute» уже используется.',
    'exists' => 'Выбранное значение для поля «:attribute» некорректно.',
    'date' => 'Поле «:attribute» должно быть корректной датой.',
    'numeric' => 'Поле «:attribute» должно быть числом.',
    'boolean' => 'Поле «:attribute» должно быть истинным или ложным.',

    'attributes' => [
        'name' => 'Имя',
        'email' => 'Email',
        'password' => 'Пароль',
        'password_confirmation' => 'Подтверждение пароля',

        'form.email' => 'Email',
        'form.password' => 'Пароль',
        'form.remember' => 'Запомнить меня',

        'address' => 'Адрес',
        'customer' => 'Заказчик',
        'comment' => 'Комментарий',
        'date' => 'Дата',
        'area' => 'Площадь',
        'type' => 'Тип объекта',
    ],
];
