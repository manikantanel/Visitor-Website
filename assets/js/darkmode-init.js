// darkmode-init.js

// Apply Dark Mode Early Before Page Load
if (localStorage.getItem('dark-mode') === 'enabled') {
    document.documentElement.classList.add('dark-mode');
  }
  