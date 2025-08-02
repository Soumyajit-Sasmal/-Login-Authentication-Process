 
 # 🔐 Simple PHP User Login Authentication System

🚀 A beginner-friendly user login and registration project built using **HTML**, **PHP**, and **MySQL**.

---

## 📁 Project Structure

| 🗂️ File Name       | 📝 Description                                        |
|-------------------|-------------------------------------------------------|
| `form.html`        | 🌐 Frontend form for user registration                |
| `connection.php`   | 🔌 Database connection to MySQL                       |
| `submit.php`       | 📨 Handles form data insertion into DB                |
| `display.php`      | 📋 Displays registered users (simple dashboard)       |
| `login.php`        | 🔑 Login form (HTML)                                  |
| `logcheck.php`     | ✅ Verifies login credentials & authenticates user    |

---

## __⚙️ Requirements__

### 📌 Before starting, make sure you have:

__- ✅ PHP 7.x or above__  
__- ✅ MySQL database__  
__- ✅ Apache server (XAMPP, WAMP, LAMP)__  
__- ✅ Any modern web browser__  

---
✅ Login Authentication Process:
### 🔐 1. User Input Credentials


### 🔍 2. Validation of Input (Frontend)
      Basic checks before sending to server:

          Fields not empty

          Password length format check

          Email format (if applicable)

### 📤 3. Send to Backend Server
           The frontend (web/app) sends a POST request to the backend:


### 🗄️ 4. Database Check (Backend)
           Server receives credentials and:

          Looks for the username/email in the database.

               If user exists, it retrieves the stored hashed password.

                 If user does not exist, return error (Invalid Username).

### 🔑 5. Password Verification
         Server hashes the user-provided password and compares it with the stored hash.

         If match, proceed ✅

        If not match, return error (Incorrect Password) ❌


### ✅ 7. Login Successful
           Redirect user to dashboard or home page.


### 🔁 Flowchart Overview:
          [form.html] → [submit.php] → (user saved to DB)
                              ↓
           [login.php] → [logcheck.php] → (auth check)
                              ↓
          [display.php] → (success or fail response)
###   🎯 Features
✅ Simple user registration
✅ Secure login authentication
✅ User data display
✅ Modular PHP file structure
✅ Easy to modify and expand
### 👤 Author <br>
   __Made with ❤️ by @soumyajit sasmal...__






