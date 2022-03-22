<?php

namespace Brandshopru\Dadata;

class Settings
{
    /**
     * Базовый URL стандартизации адреса.
     */
    const BASE_URL_CLEANER = "https://cleaner.dadata.ru/api/v1/";

    /**
     * Базовый URL адресных подсказок.
     */
    const BASE_URL_SUGGEST = "https://suggestions.dadata.ru/suggestions/api/4_1/rs/";

    /**
     * Базовый URL сервиса.
     */
    const BASE_URL = "https://dadata.ru/api/v2/";

    /**
     * Кол-во запрашиваемых подсказок
     */
    const SUGGESTION_COUNT = 5;

    /**
     * Таймаут запроса
     */
    const TIMEOUT_SEC = 3;
}
