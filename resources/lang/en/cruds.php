<?php

return [
    'userManagement' => [
        'title'          => 'Управление пользователями',
        'title_singular' => 'Управление пользователями',
    ],
    'permission'     => [
        'title'          => 'Права доступа',
        'title_singular' => 'Право доступа',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Название',
            'title_helper'      => '',
            'created_at'        => 'Дата создания',
            'created_at_helper' => '',
            'updated_at'        => 'Дата обновления',
            'updated_at_helper' => '',
            'deleted_at'        => 'Дата удаления',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Роли',
        'title_singular' => 'Роль',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Название',
            'title_helper'       => '',
            'permissions'        => 'Права',
            'permissions_helper' => '',
            'created_at'         => 'Дата создания',
            'created_at_helper'  => '',
            'updated_at'         => 'Дата обновления',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Дата удаления',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Пользователи',
        'title_singular' => 'Пользователь',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Имя',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email подтвержден',
            'email_verified_at_helper' => '',
            'password'                 => 'Пароль',
            'password_helper'          => '',
            'roles'                    => 'Роли',
            'roles_helper'             => '',
            'remember_token'           => 'Токен для входа',
            'remember_token_helper'    => '',
            'created_at'               => 'Дата создания',
            'created_at_helper'        => '',
            'updated_at'               => 'Дата обновления',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Дата удаления',
            'deleted_at_helper'        => '',
        ],
    ],
    'status'         => [
        'title'          => 'Статусы',
        'title_singular' => 'Статус',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Название',
            'name_helper'       => '',
            'color'             => 'Цвет',
            'color_helper'      => '',
            'created_at'        => 'Дата создания',
            'created_at_helper' => '',
            'updated_at'        => 'Дата обновления',
            'updated_at_helper' => '',
            'deleted_at'        => 'Дата удаления',
            'deleted_at_helper' => '',
        ],
    ],
    'priority'       => [
        'title'          => 'Приоритеты',
        'title_singular' => 'Приоритет',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Название',
            'name_helper'       => '',
            'color'             => 'Цвет',
            'color_helper'      => '',
            'created_at'        => 'Дата создания',
            'created_at_helper' => '',
            'updated_at'        => 'Дата обновления',
            'updated_at_helper' => '',
            'deleted_at'        => 'Дата удаления',
            'deleted_at_helper' => '',
        ],
    ],
    'category'       => [
        'title'          => 'Категории',
        'title_singular' => 'Категория',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Название',
            'name_helper'       => '',
            'color'             => 'Цвет',
            'color_helper'      => '',
            'created_at'        => 'Дата создания',
            'created_at_helper' => '',
            'updated_at'        => 'Дата обновления',
            'updated_at_helper' => '',
            'deleted_at'        => 'Дата удаления',
            'deleted_at_helper' => '',
        ],
    ],
    'ticket'         => [
        'title'          => 'Тикеты',
        'title_singular' => 'Тикет',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'title'                   => 'Заголовок',
            'title_helper'            => '',
            'content'                 => 'Содержание',
            'content_helper'          => '',
            'status'                  => 'Статус',
            'status_helper'           => '',
            'priority'                => 'Приоритет',
            'priority_helper'         => '',
            'category'                => 'Категория',
            'category_helper'         => '',
            'author_name'             => 'Имя автора',
            'author_name_helper'      => '',
            'author_email'            => 'Email автора',
            'author_email_helper'     => '',
            'assigned_to_user'        => 'Назначено пользователю',
            'assigned_to_user_helper' => '',
            'comments'                => 'Комментарии',
            'comments_helper'         => '',
            'created_at'              => 'Дата создания',
            'created_at_helper'       => '',
            'updated_at'              => 'Дата обновления',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Дата удаления',
            'deleted_at_helper'       => '',
            'attachments'             => 'Вложения',
            'attachments_helper'      => '',
        ],
    ],
    'comment'        => [
        'title'          => 'Комментарии',
        'title_singular' => 'Комментарий',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'ticket'              => 'Тикет',
            'ticket_helper'       => '',
            'author_name'         => 'Имя автора',
            'author_name_helper'  => '',
            'author_email'        => 'Email автора',
            'author_email_helper' => '',
            'user'                => 'Пользователь',
            'user_helper'         => '',
            'comment_text'        => 'Текст комментария',
            'comment_text_helper' => '',
            'created_at'          => 'Дата создания',
            'created_at_helper'   => '',
            'updated_at'          => 'Дата обновления',
            'updated_at_helper'   => '',
            'deleted_at'          => 'Дата удаления',
            'deleted_at_helper'   => '',
        ],
    ],
    'auditLog'       => [
        'title'          => 'Журнал аудита',
        'title_singular' => 'Журнал аудита',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => '',
            'description'         => 'Описание',
            'description_helper'  => '',
            'subject_id'          => 'ID субъекта',
            'subject_id_helper'   => '',
            'subject_type'        => 'Тип субъекта',
            'subject_type_helper' => '',
            'user_id'             => 'ID пользователя',
            'user_id_helper'      => '',
            'properties'          => 'Свойства',
            'properties_helper'   => '',
            'host'                => 'Хост',
            'host_helper'         => '',
            'created_at'          => 'Дата создания',
            'created_at_helper'   => '',
            'updated_at'          => 'Дата обновления',
            'updated_at_helper'   => '',
        ],
    ],
];
