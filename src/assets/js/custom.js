//callback form

const callBtn = document.getElementById('callback-action');
const callForm = document.getElementById('intouch-form');

callBtn.addEventListener('click', function(event) {
    callForm.classList.toggle('open');
});