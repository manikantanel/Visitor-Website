# Visitor-Website

![image](https://github.com/user-attachments/assets/71309c18-6081-491c-acfb-23bbe2270b19) 

![image](https://github.com/user-attachments/assets/efcf3968-2dd5-42f4-98f3-b818fd46080d)

![image](https://github.com/user-attachments/assets/c8ce9451-9766-4dea-a412-5c588a035187)

# 🧳  Travel Website 


This is a full-featured, accessible, and responsive travel website built with PHP, JavaScript, and MySQL. It reflects best practices in front-end UI/UX, backend security, and accessibility—all designed from scratch without external libraries.

---

## ✨ Features Overview

### 🔍 Look & Feel
- Fully responsive layout with adaptive navigation for Chrome, Firefox, Safari, and Edge
- Sticky header with dropdown and hamburger menu for mobile
- CRAP principles (Contrast, Repetition, Alignment, Proximity) applied for clear visual design
- Smooth transitions and refined breakpoints (`1024px`) for mobile friendliness

### 🧱 Modular Architecture
- Header and footer implemented using PHP `include()` statements
- Active link highlighting using `$_SERVER['PHP_SELF']`
- Semantic HTML5 structure and consistent session control

### ⚙️ JavaScript & DHTML Components
- Original JavaScript for:
  - Testimonial AJAX system
  - Accessibility widget (dark mode + text magnifier)
  - Travel tip rotator
  - Weather API widget (OpenWeatherMap)
  - Countdown timer
  - Modal popup on first visit
  - Dynamic hero slider

---

## 💬 Comment Form
- Validates name, email, comment, location, rating, image
- Sanitized with `htmlspecialchars()`, `filter_var()`, `prepare()`, and `bind_param()`
- Stored securely in MySQL
- Adminer used for backend comment viewing

---

## 🔐 Security & Access Control
- Secure login/register system with:
  - Password strength check
  - Show/hide toggle
  - Prepared SQL statements
- Role-based access to `special-deals.php`
- Logged-in users can:
  - View hotel bookings, ticket history, and event registrations
  - See personalized confirmation messages after submissions

---

## 🖼️ Visual Enhancements
- Radial overlay gradients on cards
- Auto-sliding hero banners
- Zoom-hover image effects
- Map zoom on scroll
- Responsive layout optimized for tablets (2-column layout from `768px–1024px`)
- Popup modal appears on first homepage load using `localStorage`

---

## ✅ Extras & Bonus Features
- ✅ Live weather widget across all pages
- ✅ AJAX testimonial system with auto-refresh slider
- ✅ Countdown reveal for time-limited deals
- ✅ Mobile user icon with session-aware login/profile navigation
- ✅ Image viewer for multiple galleries
- ✅ Accessibility mode + dark mode toggle
- ✅ XSS protection via HTML escaping, validation, and server sanitization

---

## 📁 Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript (vanilla)
- **Backend**: PHP, MySQL
- **AJAX**: For comment submission and testimonials
- **Security**: Prepared statements, input sanitization, session control
- **APIs**: OpenWeatherMap (for live weather widget)

---

## 🔗 Live Demo & Source

- 🔗 [Live Site (Solace)](https://solace.ist.rit.edu/~me2083/646/Final/index.php)
- 💻 Source Code: *(Files uploaded via Solace FTP — GitHub repo mirrors static pages only)*

---

## 📸 Screenshots
> _You can optionally embed screenshots here for visual reference._

---

## 🙌 Author

**Manikantan Eakiri Lakshmanan**  
Master's in Software Engineering @ RIT  
[GitHub](https://github.com/manikantanel) | [LinkedIn](https://linkedin.com/in/manikantan-eakiri-lakshmanan-a6a85b193)

---





