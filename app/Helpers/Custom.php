<?php
function getCurrentUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' 
                 || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $domain   = $_SERVER['HTTP_HOST'];
    $request  = $_SERVER['REQUEST_URI'];

    return $protocol . $domain . $request;
}

function getHostUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' 
                 || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    return $protocol . $host;
}

function getBaseUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' 
                 || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    $folder = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    return $protocol . $host . $folder;
}

function getConfigurationField($key)
{
    $pdo = Database::connect();

    $stmt = $pdo->prepare("SELECT config_value FROM configurations WHERE config_key = :key AND status = 1 LIMIT 1");
    $stmt->execute(['key' => $key]);

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result['config_value'] ?? false;
}


?>