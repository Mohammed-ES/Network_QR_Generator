CREATE TABLE IF NOT EXISTS wifi_credentials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ssid VARCHAR(255) NOT NULL,
    password VARCHAR(255),
    encryption ENUM('WPA', 'WEP', 'nopass') DEFAULT 'WPA',
    created_at DATETIME NOT NULL,
    INDEX idx_ssid (ssid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;