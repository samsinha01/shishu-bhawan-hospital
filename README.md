# 🚀 Run PHP Website Using XAMPP Server  

Welcome! This guide will walk you through setting up and running a PHP website on your local machine using the **XAMPP Server**. Let's get started!  

---

## 📋 Prerequisites  

Make sure you have the following installed before starting:  
- 🖥️ [XAMPP](https://www.apachefriends.org/)  
- 📝 A code editor like [Visual Studio Code](https://code.visualstudio.com/) or Sublime Text  

---

## ⚡ Steps to Run the Website  

### 1️⃣ Install XAMPP  
1. Download XAMPP from the official website: [Download XAMPP](https://www.apachefriends.org/download.html) 🛠️  
2. Follow the installation steps based on your operating system (Windows, macOS, Linux).  

---

### 2️⃣ Start XAMPP Server  
1. Open the **XAMPP Control Panel**.  
2. Start the following services by clicking the **Start** button:  
   - 🟢 **Apache**  
   - 🟢 **MySQL**  

---

### 3️⃣ Place Your PHP Files 🗂️  
1. Go to the `htdocs` folder in your XAMPP installation directory:  

### find httdoc according to OS 
  1. Windows: C:\xampp\htdocs
  2. macOS: /Applications/XAMPP/htdocs


2. Create a new folder for your project, e.g., `shishu-bhawan-hospital`.  
3. Copy all your PHP files and assets into this folder. 

---

### 4️⃣ Configure Database (If Required) 🛢️  
1. Open [phpMyAdmin](http://localhost/phpmyadmin/) in your browser.  
2. Create a new database:  
- Click **New** in the left menu.  
- Enter a name for your database and click **Create**.  
3. Import any SQL file (if provided) into the database:  
- Select your database from the left panel.  
- Go to the **Import** tab and upload the SQL file.  

---

### 5️⃣ Access Your Website 🌐  
- Open your browser and navigate to:`http://localhost/<your-project-folder-name>`.
- Example: If your project folder is named `shishu-bhawan-hospital`, visit: `http://localhost/shishu-bhawan-hospital/`.


---

### 🛠️ Common Troubleshooting  

- **Apache/MySQL not starting?**  
- Ensure no other application is using the ports (e.g., Skype, IIS).  
- Update the port configuration in XAMPP if necessary.  

- **Database connection errors?**  
- Double-check your `db.php` or `config.php` files for correct database credentials.  

---

## 🖼️ Screenshots  

Here’s what your setup might look like:  
1. **XAMPP Control Panel:**  
![XAMPP Control Panel](https://www.apachefriends.org/xampp-control-panel.jpg)  

2. **Project in Browser:**  
![PHP Project Example](https://example.com/php-project-screenshot.jpg)  

*(Replace the URLs with actual screenshots of your setup.)*  

---

## 🤝 Contributing  

Got a suggestion or improvement? Feel free to:  
- Open an **issue**  
- Submit a **pull request**  

---

## 📜 License  

This guide is open-sourced under the [MIT License](LICENSE).  

---

> **Happy Coding!** 💻✨  


