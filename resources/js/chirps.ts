const el = document.getElementById('flashMessage');
const btn = document.getElementById('flashClose');

if (el != null && btn != null) {
  btn.addEventListener('click', function handleClick() {
    if (el.style.display === 'none') {
      el.style.display = 'block';
      btn.textContent = 'Hide element';
    } else {
      el.style.display = 'none';
      btn.textContent = 'Show element';
    }
  });
}