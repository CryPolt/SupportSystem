<?php

return [
    'accepted'                       => 'Поле :attribute должно быть принято.',
    'active_url'                     => 'Поле :attribute содержит недействительный URL.',
    'after'                          => 'Поле :attribute должно быть датой после :date.',
    'after_or_equal'                 => 'Поле :attribute должно быть датой после или равной :date.',
    'alpha'                          => 'Поле :attribute может содержать только буквы.',
    'alpha_dash'                     => 'Поле :attribute может содержать только буквы, цифры и дефисы.',
    'alpha_num'                      => 'Поле :attribute может содержать только буквы и цифры.',
    'latin'                          => 'Поле :attribute может содержать только буквы основного латинского алфавита.',
    'array'                          => 'Поле :attribute должно быть массивом.',
    'before'                         => 'Поле :attribute должно быть датой до :date.',
    'before_or_equal'                => 'Поле :attribute должно быть датой до или равной :date.',
    'between'                        => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file'    => 'Поле :attribute должно быть между :min и :max килобайт.',
        'string'  => 'Поле :attribute должно быть между :min и :max символов.',
        'array'   => 'Поле :attribute должно содержать от :min до :max элементов.',
    ],
    'boolean'                        => 'Поле :attribute должно быть true или false.',
    'confirmed'                      => 'Подтверждение поля :attribute не совпадает.',
    'date'                           => 'Поле :attribute не является действительной датой.',
    'date_format'                    => 'Поле :attribute не соответствует формату :format.',
    'different'                      => 'Поля :attribute и :other должны быть разными.',
    'digits'                         => 'Поле :attribute должно быть длиной :digits цифр.',
    'digits_between'                 => 'Поле :attribute должно быть длиной от :min до :max цифр.',
    'dimensions'                     => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct'                       => 'Поле :attribute имеет повторяющееся значение.',
    'email'                          => 'Поле :attribute должно быть действительным адресом электронной почты.',
    'exists'                         => 'Выбранное значение для :attribute недействительно.',
    'file'                           => 'Поле :attribute должно быть файлом.',
    'filled'                         => 'Поле :attribute должно быть заполнено.',
    'gt'                             => [
        'numeric' => 'Поле :attribute должно быть больше чем :value.',
        'file'    => 'Поле :attribute должно быть больше чем :value килобайт.',
        'string'  => 'Поле :attribute должно быть больше чем :value символов.',
        'array'   => 'Поле :attribute должно содержать больше чем :value элементов.',
    ],
    'gte'                            => [
        'numeric' => 'Поле :attribute должно быть больше или равно :value.',
        'file'    => 'Поле :attribute должно быть больше или равно :value килобайт.',
        'string'  => 'Поле :attribute должно быть больше или равно :value символов.',
        'array'   => 'Поле :attribute должно содержать :value элементов или больше.',
    ],
    'image'                          => 'Поле :attribute должно быть изображением.',
    'in'                             => 'Выбранное значение для :attribute недействительно.',
    'in_array'                       => 'Поле :attribute не существует в :other.',
    'integer'                        => 'Поле :attribute должно быть целым числом.',
    'ip'                             => 'Поле :attribute должно быть действительным IP-адресом.',
    'ipv4'                           => 'Поле :attribute должно быть действительным IPv4-адресом.',
    'ipv6'                           => 'Поле :attribute должно быть действительным IPv6-адресом.',
    'json'                           => 'Поле :attribute должно быть действительной JSON строкой.',
    'lt'                             => [
        'numeric' => 'Поле :attribute должно быть меньше чем :value.',
        'file'    => 'Поле :attribute должно быть меньше чем :value килобайт.',
        'string'  => 'Поле :attribute должно быть меньше чем :value символов.',
        'array'   => 'Поле :attribute должно содержать меньше чем :value элементов.',
    ],
    'lte'                            => [
        'numeric' => 'Поле :attribute должно быть меньше или равно :value.',
        'file'    => 'Поле :attribute должно быть меньше или равно :value килобайт.',
        'string'  => 'Поле :attribute должно быть меньше или равно :value символов.',
        'array'   => 'Поле :attribute не должно содержать более :value элементов.',
    ],
    'max'                            => [
        'numeric' => 'Поле :attribute не может быть больше :max.',
        'file'    => 'Поле :attribute не может быть больше :max килобайт.',
        'string'  => 'Поле :attribute не может быть больше :max символов.',
        'array'   => 'Поле :attribute не может содержать более :max элементов.',
    ],
    'mimes'                          => 'Поле :attribute должно быть файлом одного из типов: :values.',
    'mimetypes'                      => 'Поле :attribute должно быть файлом одного из типов: :values.',
    'min'                            => [
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'file'    => 'Поле :attribute должно быть не менее :min килобайт.',
        'string'  => 'Поле :attribute должно быть не менее :min символов.',
        'array'   => 'Поле :attribute должно содержать не менее :min элементов.',
    ],
    'not_in'                         => 'Выбранное значение для :attribute недействительно.',
    'not_regex'                      => 'Формат поля :attribute недействителен.',
    'numeric'                        => 'Поле :attribute должно быть числом.',
    'password'                       => 'Пароль неверен.',
    'present'                        => 'Поле :attribute должно быть присутствовать.',
    'regex'                          => 'Формат поля :attribute недействителен.',
    'required'                       => 'Поле :attribute обязательно для заполнения.',
    'required_if'                    => 'Поле :attribute обязательно, если :other равно :value.',
    'required_unless'                => 'Поле :attribute обязательно, если :other не находится в :values.',
    'required_with'                  => 'Поле :attribute обязательно, если присутствует :values.',
    'required_with_all'              => 'Поле :attribute обязательно, если присутствуют все :values.',
    'required_without'               => 'Поле :attribute обязательно, если отсутствует :values.',
    'required_without_all'           => 'Поле :attribute обязательно, если отсутствуют все :values.',
    'same'                           => 'Поля :attribute и :other должны совпадать.',
    'size'                           => [
        'numeric' => 'Поле :attribute должно быть размером :size.',
        'file'    => 'Поле :attribute должно быть размером :size килобайт.',
        'string'  => 'Поле :attribute должно быть размером :size символов.',
        'array'   => 'Поле :attribute должно содержать :size элементов.',
    ],
    'string'                         => 'Поле :attribute должно быть строкой.',
    'timezone'                       => 'Поле :attribute должно быть действительным часовым поясом.',
    'unique'                         => 'Поле :attribute уже существует.',
    'uploaded'                       => 'Не удалось загрузить файл :attribute.',
    'url'                            => 'Формат поля :attribute недействителен.',
    'custom'                         => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'reserved_word'                  => 'Поле :attribute содержит зарезервированное слово.',
    'dont_allow_first_letter_number' => 'Поле :attribute не может начинаться с цифры.',
    'exceeds_maximum_number'         => 'Поле :attribute превышает максимальную длину модели.',
    'attributes'                     => [],
];
