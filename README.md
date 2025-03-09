# 📶 WiFi QR Code Generator 📱

A simple and elegant QR code generator to easily share your WiFi network with guests. No more manually typing complex passwords!

## ✨ Features

- 🔄 **Automatic QR Code Generation** as soon as information is entered
- 💾 **Automatic WiFi Data Storage** in a database
- 🛡️ **Supports Multiple Encryption Types** (WPA/WPA2/WPA3, WEP, or Open Network)
- 💫 **User-Friendly Interface** with a modern and animated design
- 📱 **Responsive Design** for desktop and mobile use

## 🚀 How to Use

1. Enter your WiFi Network Name (SSID)
2. Enter the Password (if applicable)
3. Select the Encryption Type
4. The QR code is generated automatically!
5. Guests can scan the QR code with their smartphone to connect instantly

## 🛠️ Technologies Used

- HTML5, CSS3, and JavaScript for the front-end
- PHP for server-side processing
- MySQL for data storage
- Library [qrcodejs](https://github.com/davidshimjs/qrcodejs) for QR code generation

## ⚙️ Installation

### Prerequisites

- A web server with PHP support (e.g., Apache)
- MySQL or MariaDB
- XAMPP (or an alternative) for local development

### Installation Steps

1. Clone this repository into your web directory:

```bash
git clone https://github.com/your-username/wifi-qr-generator.git
```

2. Create a MySQL database named `wifi_database`

3. Import the `database.sql` file to create the table structure

4. Configure the database connection details in `saveWifi.php`:

```php
$db_host = "localhost";
$db_user = "your_username";
$db_pass = "your_password";
$db_name = "wifi_database";
```

5. Access the application via your browser!

## 🔒 Privacy

All WiFi information is stored locally on your server. No data is shared with external services.

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👏 Acknowledgments

- Thanks to [davidshimjs](https://github.com/davidshimjs) for the qrcodejs library
- Inspired by the need to simplify WiFi sharing

---

💡 **Tip**: You can print the QR code and display it in your home or business to make WiFi access easier!

## 🌍 Website Access
➡️ [Visit the site here]([https:///](https://mohammed-es.github.io/Network_QR_Generator/)) 🌐

