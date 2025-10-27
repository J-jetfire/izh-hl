<?php
/**
 * Единый файл подключения к базе данных
 * Используется во всех частях сайта
 */

// Предотвращаем прямое выполнение файла
if (!defined('INCLUDE_CHECK')) {
    die('Прямой доступ к файлу запрещен');
}

// Конфигурация базы данных
define('DB_HOST', 'localhost');
define('DB_USER', 'u3247279_default');
define('DB_PASS', '618cR8eCeS1hSHuX');
define('DB_NAME', 'u3247279_izhhlru_20');

// Дополнительные настройки сайта
define('LEAGUE_NAME', 'ИХЛ');
define('SEASON', '2025-2026');
define('CALENDAR_TABLE', 'calendar8');

/**
 * Функция подключения к базе данных
 * @return mysqli|false Возвращает объект подключения или false при ошибке
 */
function getDBConnection() {
    static $connection = null;
    
    if ($connection === null) {
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        
        if (!$connection) {
            error_log("Ошибка подключения к БД: " . mysqli_connect_error());
            die("Ошибка подключения к базе данных");
        }
        
        // Устанавливаем кодировку UTF-8
        if (!mysqli_set_charset($connection, "utf8")) {
            error_log("Ошибка установки кодировки: " . mysqli_error($connection));
        }
    }
    
    return $connection;
}

/**
 * Функция для обратной совместимости
 * @deprecated Используйте getDBConnection()
 * @return mysqli
 */
function db_connect() {
    return getDBConnection();
}

// Создаем глобальную переменную $con для обратной совместимости
$con = getDBConnection();

// Дополнительные переменные для обратной совместимости
$database = DB_NAME;
$league = LEAGUE_NAME;
$season = SEASON;
$calendar = CALENDAR_TABLE;

// Подключаем конфигурацию кубков
require_once __DIR__ . '/cup_config.php';

?>
