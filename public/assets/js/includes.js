// Attach UI handlers after DOM and ensure elements exist.
document.addEventListener('DOMContentLoaded', function(){
  // If header/footer are loaded server-side, do not fetch fragments.
  // Safely attach hamburger handler when element is present.
  function attachHamburger() {
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');
    if (!hamburger || !navLinks) return false;
    if (!hamburger._attached) {
      hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navLinks.classList.toggle('show');
      });
      hamburger._attached = true;
    }
    return true;
  }

  // Try immediately, otherwise poll briefly until fragment content loads.
  if (!attachHamburger()) {
    let tries = 0;
    const interval = setInterval(() => {
      if (attachHamburger() || tries++ > 20) clearInterval(interval);
    }, 100);
  }
});