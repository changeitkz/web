<?php

return [
    'invalid_vat_format' => 'The given vat id has a wrong format',
    'security-warning' => 'Suspicious activity found!!!',
    'nothing-to-delete' => 'Nothing to delete',

    'layouts' => [
        'my-account' => 'Мой аккаунт',
        'profile' => 'Профиль',
        'address' => 'Адрес',
        'reviews' => 'Мои истории',
        'wishlist' => 'Список желаний',
        'donelist' => 'Сделано',
        'orders' => 'Челленджи',
        'downloadable-products' => 'Предложения'
    ],

    'common' => [
        'error' => 'Что-то пошло не так. Пожалуйста попробуйте позже.',
        'no-result-found' => 'Мы не нашли ничего :(.'
    ],

    'home' => [
        'page-title' => config('app.name') . ' - Главная',
        'featured-products' => 'Рекомендуемые челленджи',
        'all-products' => 'Весь каталог челленджей',
        'new-products' => 'Новые челленджи',
        'verify-email' => 'Подтвердить свою учетную запись электронной почты',
        'resend-verify-email' => 'Повторно отправить письмо подтверждения'
    ],

    'header' => [
        'title' => 'Аккаунт',
        'dropdown-text' => 'Профиль, достижения, ранг, список желаний',
        'sign-in' => 'Войти',
        'sign-up' => 'Регистрация',
        'account' => 'Аккаунт',
        'rating' => 'Рейтинг',
        'profile' => 'Профиль',
        'wishlist' => 'Список желаний',
        'logout' => 'Выйти',
        'search-text' => 'Поиск челленджей здесь'
    ],

    'minicart' => [
        'view-cart' => 'Перейти',
        'checkout' => 'Выбрать',
        'cart' => 'Принятые вызовы',
        'zero' => '0'
    ],

    'footer' => [
        'subscribe-newsletter' => 'Подписаться на новости',
        'subscribe' => 'Подписаться',
        'locale' => 'Язык',
        'currency' => 'Валюта',
    ],

    'subscription' => [
        'unsubscribe' => 'Отписаться',
        'Подписаться' => 'Подписаться',
        'subscribed' => 'Вы подписаны на электронные письма подписки.',
        'not-subscribed' => 'Вы не можете подписаться на электронные письма подписки, повторите попытку позже.',
        'already' => 'Вы уже подписаны на наш список подписки.',
        'unsubscribed' =>'Вы отменили подписку на рассылочные письма.',
        'ready-unsub '=>' Вы уже отписались. ',
        'not-subscribed' => 'Ошибка! Почта не может быть отправлена в настоящее время, попробуйте позже. '
    ],

    'search' => [
        'no-results' => 'Результаты не найдены',
        'page-title' => config ('app.name'). '- Поиск',
        'found-results' => 'Результаты поиска найдены',
        'found-result' => 'Результат поиска найден'
    ],

    'reviews' => [
        'title' => 'Заголовок',
        'add-review-page-title' => 'Добавить историю',
        'write-review' => 'Написать историю',
        'review-title' => 'Дайте вашей истории заголовок',
        'product-review-page-title' => 'Истории прохождения челленджа',
        'rating-reviews' => 'Рейтинг и Истории',
        'submit' => 'ОТПРАВИТЬ',
        'delete-all' => 'Все истории удалены успешно',
        'ratingreviews' => ':rating рейтинг & :review историй',
        'star' => 'Звезда',
        'percentage' => ':percentage %',
        'id-star' => 'звезда',
        'name' => 'Имя',
    ],

    'customer' => [
        'signup-text' => [
            'account_exists' => 'Уже есть аккаунт',
            'title' => 'Войти'
        ],

        'signup-form' => [
            'page-title' => 'Создать новую учетную запись клиента',
            'title' => 'Зарегистрироваться',
            'firstname' => 'Имя',
            'lastname' => 'Фамилия',
            'email' => 'Email',
            'password' => 'Пароль',
            'confirm_pass' => 'Подтвердить пароль',
            'button_title' => 'Регистрация',
            'agree' => 'согласен',
            'terms' => 'Условия',
            'conditions' => 'Условия',
            'using'=> 'используя этот сайт',
            'agreement' => 'Соглашение',
            'success' => 'Аккаунт успешно создан.',
            'success-verify' => 'Аккаунт успешно создан, электронное письмо отправлено для проверки.',
            'success-verify-email-unsent' => 'Аккаунт успешно создан, но электронное письмо с подтверждением отправлено.',
            'failed' => 'Ошибка! Не можете создать свой аккаунт, попробуйте позже. ',
            'already-verified' => 'Ваш аккаунт уже подтвержден. Или попробуйте отправить новое письмо с подтверждением еще раз.',
            'verify-not-sent' => 'Ошибка! Проблема с отправкой подтверждающего электронного письма, повторите попытку позже. ',
            'verify-sent' => 'Письмо с подтверждением отправлено',
            'verified' => 'Ваша учетная запись была подтверждена, попробуйте войти.',
            'verify-failed' => 'Мы не можем подтвердить ваш почтовый аккаунт.',
            'dont-have-account' => 'У вас нет учетной записи.',
            'success' => 'Аккаунт успешно создан',
            'success-verify' => 'Аккаунт успешно создан, электронное письмо отправлено для проверки.',
            'success-verify-email-unsent' => 'Учетная запись успешно создана, но электронное письмо с подтверждением отправлено',
            'failed' => 'Ошибка! Невозможно создать аккаунт, попробуйте позже',
            'already-verified' => 'Ваш аккаунт уже подтвержден или попробуйте отправить новое письмо с подтверждением еще раз',
            'verify-not-sent' => 'Ошибка! Проблема при отправке письма с подтверждением, попробуйте позже',
            'verify-sent' => 'Письмо с подтверждением отправлено',
            'verified' => 'Ваша учетная запись была проверена, попробуйте войти сейчас',
            'verify-failed' => 'Мы не можем подтвердить ваш почтовый аккаунт',
            'dont-have-account' => 'У вас нет учетной записи на нашем сайте.',
            'customer-registration' => 'Клиент успешно зарегистрирован!'
        ],

        'login-text' => [
            'no_account' => 'Нет учетной записи',
            'title' => 'Зарегистрироваться',
        ],

        'login-form' => [
            'page-title' => 'Логин клиента',
            'title' => 'Войти',
            'email' => 'Email',
            'password' => 'Пароль',
            'forgot_pass' => 'Забыли пароль?',
            'button_title' => 'Войти',
            'remember' => 'Запомнить меня',
            'footer' => '© Авторское право :year Webkul Software, Все права защищены',
            'invalid-creds' => 'Пожалуйста, проверьте свои учетные данные и повторите попытку.',
            'verify-first' => 'Сначала проверьте свою учетную запись электронной почты.',
            'not-activated' => 'Ваша активация требует одобрения администратора',
            'resend-verify' => 'Повторно отправить письмо-подтверждение еще раз'
        ],

        'forgot-password' => [
            'title' => 'Восстановить пароль',
            'email' => 'Email',
            'submit' => 'Отправить сброс пароля на электронную почту',
            'page_title' => 'Забыли пароль?'
        ],

        'reset-password' => [
            'title' => 'Сброс пароля',
            'email' => 'Зарегистрированный Email',
            'password' => 'Пароль',
            'confirm-password' => 'Подтвердите пароль',
            'back-link-title' => 'Вернуться к входу в систему',
            'submit-btn-title' => 'Сбросить пароль'
        ],

        'account' => [
            'dashboard' => 'Редактировать профиль',
            'menu' => 'Меню',
            'offer' => [
                'id' => 'ID предложения',
                'date' => 'Дата',
                'status' => 'Статус',
                'pending' => 'В ожидании',
                'available' => 'Подвержден',
                'expired' => 'Отклонен',
                'info' => 'Остальная информация',
                'delete' => 'Удалить',
                'unlimited' => 'Неограничено',
                'title' => 'Мои предложения',
                'empty' => 'Вы пока не создавали ни одно предложение',
                'page-title' => 'Предложения',
                'create' => 'Предложить челлендж',
                'name' => 'Название',
                'category' => 'Категория',
                'description' => 'Описание',
                'image' => 'Изображение',
                'name-placeholder' => 'Что сделать?',
                'send' => 'Отправить',
                'cancel' => 'Отменить'
            ],
            'profile' => [
                'index' => [
                    'page-title' => 'Профиль',
                    'title' => 'Профиль',
                    'edit' => 'Редактировать',
                ],

                'edit-success' => 'Профиль успешно обновлен.',
                'edit-fail' => 'Ошибка! Профиль не может быть обновлен, повторите попытку позже. ',
                'unmatch' => 'Старый пароль не совпадает.',

                'fname' => 'Имя',
                'lname' => 'Фамилия',
                'gender' => 'Пол',
                'other' => 'Другое',
                'male' => 'Мужской',
                'female' => 'Женский',
                'dob' => 'Дата рождения',
                'phone' => 'Телефон',
                'email' => 'Email',
                'opassword' => 'Старый пароль',
                'password' => 'Пароль',
                'cpassword' => 'Подтвердить пароль',
                'submit' => 'Обновить профиль',

                'edit-profile' => [
                    'title' => 'Редактировать профиль',
                    'page-title' => 'Редактировать форму профиля'
                ]
            ],

            'address' => [
                'index' => [
                    'page-title' => 'Адрес',
                    'title' => 'Адрес',
                    'add' => 'Добавить адрес',
                    'edit' => 'Редактировать',
                    'empty' => 'У вас нет сохраненных адресов здесь, попробуйте создать его, нажав на ссылку ниже',
                    'create' => 'Создать адрес',
                    'delete' => 'Удалить',
                    'make-default' => 'Сделать по умолчанию',
                    'default' => 'По умолчанию',
                    'contact' => 'Контакт',
                    'verify-delete' => 'Вы действительно хотите удалить этот адрес?',
                    'default-delete' => 'Адрес по умолчанию изменить нельзя.',
                    'enter-password' => 'Введите свой пароль.',
                ],

                'create' => [
                    'page-title' => 'Добавить адресную форму',
                    'company_name' => 'Название компании',
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'vat_id' => 'ID Налогоплательщика',
                    'vat_help_note' => '[Примечание: используйте код страны с идентификатором НДС. Например. INV01234567891]',
                    'title' => 'Добавить адрес',
                    'street-address' => 'Улица, дом',
                    'country' => 'Страна',
                    'state' => 'Область',
                    'select-state' => 'Выбрать область, штат или провинцию',
                    'city' => 'Город',
                    'postcode' => 'Почтовый индекс',
                    'phone' => 'Телефон',
                    'submit' => 'Сохранить адрес',
                    'success' => 'Адрес был успешно добавлен.',
                    'error' => 'Адрес не может быть добавлен.'
                ],

                'edit' => [
                    'page-title' => 'Редактировать адрес',
                    'company_name' => 'Название компании',
                    'first_name' => 'Имя',
                    'last_name' => 'Фамилия',
                    'vat_id' => 'ID Налогоплательщика',
                    'title' => 'Редактировать адрес',
                    'street-address' => 'Улица, дом',
                    'submit' => 'Сохранить адрес',
                    'success' => 'Адрес успешно обновлен.',
                ],
                'delete' => [
                    'success' => 'Адрес успешно удален',
                    'fail' => 'Адрес не может быть удален',
                    'wrong-password' => 'Неправильный пароль!'
                ]
            ],

            'order' => [
                'index' => [
                    'page-title' => 'челленджи',
                    'title' => 'челленджи',
                    'order_id' => 'Код челленджа',
                    'date' => 'Дата',
                    'status' => 'Статус',
                    'total' => 'Итого',
                    'order_number' => 'Номер челленджа'
                ],

                'view' => [
                    'page-tile' => 'челлендж #:order_id',
                    'info' => 'Информация',
                    'place-on' => 'Размещены на',
                    'products-orders' => 'челленджанные продукты',
                    'invoices' => 'Счета',
                    'shipments' => 'Отправки',
                    'SKU' => 'Bar-код',
                    'product-name' => 'Наименование',
                    'qty' => 'Кол-во',
                    'item-status' => 'Статус челленджа',
                    'item-order' => 'Выполнено челленджей (:qty_ordered)',
                    'item-invoice' => 'Выставлено в счет (:qty_invoiced)',
                    'item-shipped' => 'Отправлено (:qty_shipped)',
                    'item-cancelled' => 'Отменено (:qty_canceled)',
                    'item-refunded' => 'Возмещено (:qty_refunded)',
                    'price' => 'Цена',
                    'total' => 'Итог',
                    'subtotal' => 'промежуточный итог',
                    'shipping-Handling' => 'Доставка и обработка',
                    'tax' => 'Налог',
                    'discount' => 'Скидка',
                    'tax-процент' => 'Налоговый процент',
                    'tax-amount' => 'Сумма налога',
                    'discount-amount' => 'Сумма скидки',
                    'grand-total' => 'Общий итог',
                    'total-paid' => 'Всего оплачено',
                    'total-refunded' => 'Всего возмещено',
                    'total-due' => 'Итого к оплате',
                    'shipping-address' => 'Адрес доставки',
                    'billing-address' => 'Адрес плательщика',
                    'shipping-method' => 'Способ доставки',
                    'payment-method' => 'Способ оплаты',
                    'Individual-invoice' => 'Счет #:invoice_id',
                    'Individual-Shipment' => 'Отгрузка №:shipment_id',
                    'print' => 'Распечатать',
                    'invoice-id' => 'ID счета',
                    'order-id' => 'ID челленджа',
                    'order-date' => 'Дата челленджа',
                    'bill-to' => 'Плательщик',
                    'ship-to' => 'Получатель',
                    'contact' => 'Контакт',
                    'refunds' => 'Возмещения',
                    'Individual-refund' => 'Refund #:refund_id',
                    'setting-refund' => 'Корректировка возмещений',
                    'adjustment-fee' => 'Комиссия за корректировку',
                ]
            ],

            'wishlist' => [
                'page-title' => 'Список желаний',
                'title' => 'Список желаний',
                'deleteall' => 'Удалить все',
                'moveall' => 'Приняться за все вызовы',
                'move-to-cart' => 'Принять вызов',
                'error' => 'Невозможно добавить челлендж в список желаний из-за неизвестных проблем, пожалуйста, проверьте позже',
                'add' => 'Челлендж успешно добавлен в список желаний',
                'remove' => 'Челлендж успешно удален из списка желаний',
                'Move' => 'Челлендж успешно принят',
                'option-missing' => 'Опции челленджа отсутствуют, поэтому элемент нельзя переместить в список желаний.',
                'move-error' => 'Челлендж не может быть перемещен в список желаний, повторите попытку позже',
                'success' => 'Челлендж успешно добавлен в список желаний',
                'fail' => 'Невозможно добавить челлендж в список желаний, повторите попытку позже',
                'already' => 'Челлендж уже присутствует в вашем списке желаний',
                'removed' => 'Челлендж успешно удален из списка желаний',
                'remove-fail' => 'Невозможно удалить элемент из списка желаний, повторите попытку позже',
                'empty' => 'У вас нет челленджей в списке желаний',
                'remove-all-success' => 'Все челленджи из вашего списка желаний были удалены',
            ],

            'donelist' => [
                'page-title' => 'Достигнутые челленджи',
                'title' => 'Достигнутые челленджи',
                'deleteall' => 'Удалить все',
                'moveall' => 'Отметить все невыполненными',
                'move-to-cart' => 'Отменить',
                'write-review' => 'Добавить историю',
                'error' => 'Невозможно добавить челлендж в список желаний из-за неизвестных проблем, пожалуйста, проверьте позже',
                'add' => 'Челлендж успешно добавлен в список желаний',
                'remove' => 'Челлендж успешно удален из списка желаний',
                'move' => 'Челлендж успешно принят',
                'option-missing' => 'Опции челленджа отсутствуют, поэтому элемент нельзя переместить в список выполненных.',
                'move-error' => 'Челлендж не может быть перемещен в список выполненных, повторите попытку позже',
                'success' => 'Челлендж успешно добавлен в список выполненных',
                'fail' => 'Невозможно добавить челлендж в список выполненных, повторите попытку позже',
                'already' => 'Челлендж уже присутствует в вашем списке выполненного',
                'removed' => 'Челлендж успешно удален из списка выполненного',
                'remove-fail' => 'Невозможно удалить элемент из списка выполненного, повторите попытку позже',
                'empty' => 'У вас нет выполненных челленджей',
                'remove-all-success' => 'Все челленджи из вашего списка выполненных были удалены',
            ],

            'downloadable_products' => [
                'title' => 'Мои предложения',
                'order-id' => 'ID предложения',
                'date' => 'Дата',
                'name' => 'Заголовок',
                'status' => 'Статус',
                'pending' => 'В ожидании',
                'available' => 'Подвержден',
                'expired' => 'Отклонен',
                'remaining-downloads' => 'Остальная информация',
                'unlimited' => 'Неограничено',
                'download-error' => 'Ссылка на скачивание устарела.'
            ],

            'review' => [
                'index' => [
                    'title' => 'Истории',
                    'page-title' => 'Истории'
                ],

                'view' => [
                    'page-tile' => 'История #:id',
                ]
            ]
        ]
    ],

    'rating' => [
        'header' => 'Рейтинг пользователей',
        'card' => 'Ранг'
    ],

    'products' => [
        'layered-nav-title' => 'Shop By',
        'price-label' => 'Столь же низко',
        'remove-filter-link-title' => 'Очистить все',
        'sort-by' => 'Сортировать по',
        'from-a-z' => 'А-Я',
        'from-z-a' => 'Я-A',
        'newest-first' => 'Сначала новинки',
        'old-first' => 'Сначала старые',
        'cheap-first' => 'Сначала дешевые',
        'expensive-first' => 'Сначала дорогие',
        'show' => 'Показать',
        'pager-info' => ':showing из :total элементов',
        'description' => 'Описание',
        'specification'=> 'Характеристика',
        'total-reviews' => ':total историй',
        'total-rating' => ':total_rating рейтинг и :total_reviews историй',
        'by' => ':name',
        'up-sell-title' => 'Мы нашли другие челленджи, которые вам могут понравиться!',
        'related-product-title' => 'Сопутствующие челленджи',
        'cross-sell-title' => 'Больше вариантов',
        'reviews-title' => 'Рейтинги и обзоры',
        'write-review-btn' => 'Написать историю',
        'choose-option' => 'Выберите опцию',
        'sale' => 'Особая награда',
        'new' => 'Новинка',
        'empty' => 'Нет челленджей в этой категории',
        'add-to-cart' => 'Принять вызов',
        'buy-now' => 'Уже сделано',
        'whoops' => 'Упс!',
        'quantity' => 'Количество',
        'in-stock' => 'Активен',
        'out-of-stock' => 'Не активен',
        'view-all' => 'Просмотреть все',
        'select-over-options' => 'Пожалуйста, сначала выберите опции выше.',
        'less-amount' => 'Количество не может быть меньше единицы.',
        'samples' => 'Образцы',
        'links' => 'Ссылки',
        'sample' => 'Образец',
        'name' => 'Название',
        'qty' => 'Кол-во',
        'start-at' => 'Начиная с',
        'customize-options' => 'Настроить параметры',
        'choose-selection' => 'Выберите выбор',
        'your-customization' => 'Ваша настройка',
        'total-amount' => 'Общее кол-во',
        'none' => 'Ничего',
        'you-get' => 'Вы получите',
        'for-challange' => 'за этот челлендж'
    ],

    // 'reviews' => [
    //     'empty' => 'You Have Not Reviewed Any Of Product Yet'
    // ]

    'buynow' => [
        'no-options' => 'Пожалуйста, выберите параметры перед выбором этого челленджа.'
    ],

    'checkout' => [
        'cart' => [
            'integrity' => [
                'missing_fields' => 'Некоторые обязательные поля отсутствуют для этого продукта.',
                'missing_options' => 'Опции для этого продукта отсутствуют.',
                'missing_links' => 'Для этого продукта отсутствуют загружаемые ссылки.',
                'qty_missing' => 'По крайней мере, один продукт должен иметь более 1 количества.',
                'qty_impossible' => 'Невозможно добавить более одного из этих челленджей в список.'
            ],
            'mark-as-done' => 'Отметить выполненным',
            'mark-as-done-all' => 'Я выполнил всё!',
            'create-error' => 'Обнаружена некоторая проблема при создании экземпляра списка.',
            'title' => 'Принятые вызовы',
            'empty' => 'Ваш список челленджей пуст',
            'update-cart' => 'Обновить список челленджей',
            'continue-shopping' => 'Перейти к каталогу',
            'continue-to-checkout' => 'Отметить челлендж выполненным',
            'remove' => 'Убрать',
            'remove-link' => 'Убрать',
            'move-to-wishlist' => 'В список желаний',
            'move-to-donelist' => 'Отметить выполненным',
            'move-to-wishlist-success' => 'Элемент успешно перемещен в список желаний.',
            'move-to-donelist-success' => 'Элемент успешно перемещен в список выполненных.',
            'move-to-wishlist-error' => 'Невозможно переместить элемент в список желаний, повторите попытку позже.',
            'move-to-donelist-error' => 'Вы уже выполняли этот челлендж.',
            'add-config-warning' => 'Пожалуйста, выберите опцию перед добавлением в список.',
            'quantity' => [
                'quantity' => 'Количество',
                'success' => 'Список успешно обновлен!',
                'illegal' => 'Количество не может быть меньше единицы.',
                'inventory_warning' => 'Запрашиваемое количество недоступно, повторите попытку позже.',
                'error' => 'Невозможно обновить челленджи в данный момент, повторите попытку позже.'
            ],

            'item' => [
                'error_remove' => 'Нет челленджей для удаления из списка.',
                'success' => 'Челлендж был успешно добавлен в список.',
                'success-remove' => 'Челлендж был успешно удален из списка.',
                'error-add' => 'челлендж не может быть добавлен в список, повторите попытку позже.',
            ],
            'amount-error' => 'Запрашиваемое количество недоступно.',
            'cart-subtotal' => 'Всего вы получите',
            'cart-remove-action' => 'Вы действительно хотите это сделать?',
            'part-cart-update' => 'Только некоторые из продуктов были обновлены',
            'link-missing' => ''
        ],

        'onepage' => [
            'title' => 'Оформление челленджа',
            'information' => 'Информация',
            'shipping' => 'Отправка',
            'payment' => 'Оплата',
            'complete' => 'Завершить',
            'billing-address' => 'Адрес плательщика',
            'sign-in' => 'Войти',
            'company-name' => 'Название компании',
            'name-name' => 'Имя',
            'last-name' => 'Фамилия',
            'email' => 'Email',
            'address1' => 'Адрес',
            'city' => 'Город',
            'state' => 'Область',
            'select-state' => 'Выбрать регион, штат или провинцию',
            'postcode' => 'Почтовый индекс',
            'phone' => 'Телефон',
            'country' => 'Страна',
            'order-summary' => 'Сводка челленджа',
            'shipping-address' => 'Адрес доставки',
            'use_for_shipping' => 'Доставить по этому адресу',
            'continue' => 'Продолжить',
            'shipping-method' => 'Выберите способ доставки',
            'payment-methods' => 'Выберите способ оплаты',
            'payment-method' => 'Метод оплаты',
            'summary' => 'Сколько поинтов вы получите?',
            'price' => 'Вы получите',
            'quantity' => 'Количество',
            'contact' => 'Контакт',
            'place-order' => 'Разместить челлендж',
            'new-address' => 'Добавить новый адрес',
            'save_as_address' => 'Сохранить этот адрес',
            'apply-coupon' => 'Применить купон',
            'amt-payable' => 'Сумма к оплате',
            'got' => 'Ок',
            'free' => 'Бесплатно',
            'coupon-used' => 'Купон уже использован',
            'apply' => 'Купон приложен',
            'back' => 'Назад',
            'cash-desc' => 'Наличные при доставке',
            'money-desc' => 'Денежный перевод',
            'paypal-desc' => 'Стандарт Paypal',
            'free-desc' => 'Это бесплатная доставка',
            'flat-desc' => 'Это фиксированная ставка',
            'password' => 'Пароль',
            'login-exist-message' => 'У вас уже есть аккаунт с нами, войдите или продолжите как гость.',
            'enter-coupon-code' => 'Введите код купона'
        ],

        'total' => [
            'order-summary' => 'Сводка челленджей',
            'sub-total' => 'челленджей',
            'grand-total' => 'Всего вы получите:',
            'delivery-charges' => 'Стоимость доставки',
            'tax' => 'Налог',
            'discount' => 'Скидка',
            'for' => 'За',
            'you-will-get' => 'челленджа',
            'price' => 'поинты',
            'disc-amount' => 'Сумма дисконтирования',
            'new-grand-total' => 'Новый общий итог',
            'coupon' => 'Купон',
            'coupon-apply' => 'Прикладной купон',
            'remove-coupon' => 'Убрать купон',
            'can-apply-coupon' => 'Не могу применить купон',
            'invalid-coupon' => 'Код купона недействителен.',
            'success-coupon' => 'Код купона успешно применен.',
            'coupon-apply-issue' => 'Код купона не может быть применен.'
        ],

        'success' => [
            'title' => 'Челлендж успешно размещен',
            'thanks' => 'Спасибо за ваше предложение!',
            'order-id-info' => 'ID вашего челленджа: #:order_id',
            'info' => 'Мы отправим вам электронное письмо, информацию о вашем челлендже и информацию для отслеживания'
        ]
    ],

    'mail' => [
        'order' => [
            'subject' => 'Подтверждение нового челленджа',
            'heading' => 'Подтверждение челленджа!',
            'dear' => 'Дорогой :customer_name',
            'dear-admin' => 'Дорогой :admin_name',
            'greeting' => 'Спасибо за ваш челлендж :order_id, он размещен :creation_at',
            'greeting-admin' => 'Идентификатор челленджа :order_id размещен :create_at',
            'summary' => 'Сводка челленджа',
            'shipping-address' => 'Адрес доставки',
            'billing-address' => 'Адрес плательщика',
            'contact' => 'Контакт',
            'shipping' => 'Способ доставки',
            'payment' => 'Способ оплаты',
            'price' => 'Цена',
            'quantity' => 'Количество',
            'subtotal' => 'Промежуточный итог',
            'shipping-handling' => 'Доставка и обработка',
            'tax' => 'Налог',
            'discount' => 'Скидка',
            'grand-total' => 'Общий итог',
            'final-summary' => 'Спасибо за проявленный интерес к нашему магазину, мы вышлем вам номер для отслеживания после его отправки',
            'help' => 'Если вам нужна какая-либо помощь, пожалуйста, свяжитесь с нами по адресу :support_email',
            'thanks' => 'Спасибо!',
            'cancel' => [
                'subject' => 'Подтверждение отмены челленджа',
                'heading' => 'челлендж отменен',
                'dear' => 'Дорогой :customer_name',
                'greeting '=>' Ваш челлендж с ID №:order_id был отменен :create_at',
                'summary' => 'Сводка челленджа',
                'shipping-address' => 'Адрес доставки',
                'billing-address' => 'Адрес плательщика',
                'contact' => 'Контакт',
                'shipping' => 'Способ доставки',
                'payment' => 'Способ оплаты',
                'subtotal' => 'промежуточный итог',
                'shipping-handling' => 'Доставка и обработка',
                'tax' => 'Налог',
                'discount' => 'Скидка',
                'grand-total' => 'Общий итог',
                'final-summary' => 'Спасибо за проявленный интерес к нашему магазину',
                'help' => 'Если вам нужна какая-либо помощь, пожалуйста, свяжитесь с нами по адресу :support_email',
                'спасибо' => 'Спасибо!',
            ]
        ],

        'invoice' => [
            'heading' => 'Ваш номер счета-фактуры :invoice_id для челленджа №:order_id',
            'subject' => 'Счет для вашего челленджа #:order_id',
            'summary' => 'Сводка счета',
        ],

        'shipment' => [
            'heading' => 'Отгрузка #:shipment_id был сгенерирован для Order #:order_id',
            'inventory-heading' => 'Новый номер отгрузки :shipment_id был сгенерирован для Order #:order_id',
            'subject' => 'Отгрузка для вашего челленджа #:order_id',
            'inventory-subject' => 'Новая партия была сгенерирована для Order #:order_id',
            'summary' => 'Сводка отгрузки',
            'carrier' => 'Перевозчик',
            'tracking-number' => 'Номер для отслеживания',
            'greeting '=>' челлендж :order_id был размещен :create_at ',
        ],

        'refund' => [
            'heading' => 'Ваш номер возврата :refund_id для № челленджа :order_id',
            'subject' => 'Возврат средств за ваш челлендж №:order_id',
            'summary' => 'Сумма возврата',
            'setting-refund' => 'Корректировка возврата',
            'adjustment-fee' => 'Комиссия за корректировку'
        ],

        'forget-password' => [
            'subject' => 'Пароль для сброса клиента',
            'dear' => 'Дорогой :name',
            'info' => 'Вы получаете это письмо, потому что мы получили запрос на сброс пароля для вашей учетной записи',
            'reset-password' => 'Сбросить пароль',
            'final-summary' => 'Если вы не запрашивали сброс пароля, никаких дальнейших действий не требуется',
            'спасибо' => 'Спасибо!'
        ],

        'customer' => [
            'new' => [
                'дорогой' => 'Дорогой :customer_name',
                'username-email' => 'Имя пользователя / Email',
                'subject' => 'Регистрация нового клиента',
                'password' => 'Пароль',
                'summary' => 'Ваш аккаунт создан. Детали вашего аккаунта ниже:',
                'thanks' => 'Спасибо!',
            ],

            'registration' => [
                'subject' => 'Регистрация нового клиента',
                'customer-registration' => 'Клиент успешно зарегистрирован',
                'dear' => 'Дорогой :customer_name',
                'greeting '=>' Добро пожаловать и спасибо за регистрацию у нас! ',
                'summary' => 'Ваша учетная запись была успешно создана, и вы можете войти, используя свой адрес электронной почты и пароль. После входа в систему вы сможете получить доступ к другим услугам, включая просмотр прошлых челленджей, списков пожеланий и редактирование информации о вашей учетной записи. ',
                'thanks' => 'Спасибо!',
            ],

            'verification' => [
                'heading' => config ('app.name'). ' - Подтверждение адреса электронной почты',
                'subject' => 'Почта подтверждения',
                'verify' => 'Подтвердите ваш аккаунт',
                'summary' => 'Это письмо, подтверждающее, что введенный вами адрес электронной почты принадлежит вам.
                Пожалуйста, нажмите кнопку Подтвердить свою учетную запись ниже, чтобы подтвердить свою учетную запись. '
            ],

            'subscription' => [
                'subject' => 'Email подписки',
                'greeting' => 'Добро пожаловать'. config ('app.name'). '- Электронная подписка',
                'unsubscribe' => 'Отписаться',
                'summary' => 'Спасибо, что поместили меня в свой почтовый ящик. Прошло много времени с тех пор, как вы прочитали'. config ('app.name'). 'напишите, и мы не хотим перегружать ваш почтовый ящик. 
                Если вы все еще не хотите получать последние новости маркетинга по электронной почте, то обязательно нажмите кнопку ниже. '
            ]
        ]
    ],

    'webkul' => [
        'copy-right' => '© Copyright :year Antresolle, Все права защищены',
    ],

    'response' => [
        'create-success' => ':name успешно создан.',
        'update-success' => ':name успешно обновлен.',
        'delete-success' => ':name успешно удален.',
        'submit-success' => ':name успешно отправлен.'
    ],
];
