<?php
/**
 * Единая система управления конфигурацией кубков и таблиц
 * Автоматически определяет текущий кубок и создает динамические таблицы
 */

// Предотвращаем прямое выполнение файла
if (!defined('INCLUDE_CHECK')) {
    die('Прямой доступ к файлу запрещен');
}

// Подключаем базу данных
require_once __DIR__ . '/database.php';

/**
 * Получает текущую конфигурацию кубка из базы данных
 * @return array Массив с данными текущего кубка
 */
function getCurrentCupConfig() {
    static $cupConfig = null;
    
    if ($cupConfig === null) {
        $con = getDBConnection();
        $sql = "SELECT * FROM `cupselect` LIMIT 1";
        $result = mysqli_query($con, $sql);
        
        if ($result && mysqli_num_rows($result) > 0) {
            $cupConfig = mysqli_fetch_assoc($result);
        } else {
            // Fallback конфигурация
            $cupConfig = [
                'id' => 8,
                'league' => 'ИХЛ',
                'season' => '2025-2026',
                'part' => '1',
                'cuplogo' => ''
            ];
        }
    }
    
    return $cupConfig;
}

/**
 * Получает ID текущего кубка
 * @return int ID кубка
 */
function getCurrentCupId() {
    $config = getCurrentCupConfig();
    return (int)$config['id'];
}

/**
 * Получает название текущей лиги
 * @return string Название лиги
 */
function getCurrentLeague() {
    $config = getCurrentCupConfig();
    return $config['league'];
}

/**
 * Получает текущий сезон
 * @return string Сезон
 */
function getCurrentSeason() {
    $config = getCurrentCupConfig();
    return $config['season'];
}

/**
 * Получает текущую часть сезона
 * @return string Часть сезона
 */
function getCurrentPart() {
    $config = getCurrentCupConfig();
    return $config['part'];
}

/**
 * Получает логотип кубка
 * @return string Путь к логотипу
 */
function getCurrentCupLogo() {
    $config = getCurrentCupConfig();
    return $config['cuplogo'];
}

/**
 * Создает динамические имена таблиц на основе ID кубка
 * @param int $cupId ID кубка (если не указан, используется текущий)
 * @return array Массив с именами таблиц
 */
function getDynamicTables($cupId = null) {
    if ($cupId === null) {
        $cupId = getCurrentCupId();
    }
    
    return [
        'cup' => $cupId,
        'table' => "cuptable{$cupId}",
        'calendar' => "calendar{$cupId}",
        'players' => "players{$cupId}",
        'game_info_file' => "GAME_INFO_{$cupId}.php"
    ];
}

/**
 * Подключает файл GAME_INFO для текущего кубка
 * @param int $cupId ID кубка (если не указан, используется текущий)
 * @return bool Успешность подключения
 */
function includeGameInfo($cupId = null) {
    if ($cupId === null) {
        $cupId = getCurrentCupId();
    }
    
    $gameInfoFile = "GAME_INFO_{$cupId}.php";
    
    if (file_exists($gameInfoFile)) {
        include_once $gameInfoFile;
        return true;
    }
    
    return false;
}

/**
 * Инициализирует все переменные для текущего кубка
 * Создает глобальные переменные для обратной совместимости
 */
function initializeCupVariables() {
    $cupId = getCurrentCupId();
    $tables = getDynamicTables($cupId);
    $config = getCurrentCupConfig();
    
    // Создаем глобальные переменные для обратной совместимости
    global $idofcup, $league, $season, $part, $cup, $calendar, $players, $table;
    
    $idofcup = $cupId;
    $league = $config['league'];
    $season = $config['season'];
    $part = $config['part'];
    $cup = $cupId;
    $calendar = $tables['calendar'];
    $players = $tables['players'];
    $table = $tables['table'];
    
    // Подключаем GAME_INFO файл
    includeGameInfo($cupId);
}

/**
 * Получает список всех доступных кубков
 * @return array Массив всех кубков
 */
function getAllCups() {
    static $allCups = null;
    
    if ($allCups === null) {
        $con = getDBConnection();
        $sql = "SELECT * FROM `cupselect` ORDER BY id DESC";
        $result = mysqli_query($con, $sql);
        
        $allCups = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $allCups[] = $row;
            }
        }
    }
    
    return $allCups;
}

/**
 * Сбрасывает кеш конфигурации кубка
 */
function resetCupConfigCache() {
    static $cupConfig = null;
    $cupConfig = null;
}

/**
 * Переключает текущий кубок
 * @param int $cupId ID кубка для переключения
 * @return bool Успешность переключения
 */
function switchCup($cupId) {
    $con = getDBConnection();
    $sql = "UPDATE `cupselect` SET id=? WHERE id > 0 LIMIT 1";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $cupId);
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    // Сбрасываем кеш конфигурации
    resetCupConfigCache();
    
    return $result;
}

// Автоматическая инициализация при подключении файла (только если не в режиме ошибок)
if (!headers_sent()) {
    initializeCupVariables();
}

?>
