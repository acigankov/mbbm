//callback form

const callBtn = document.getElementById('callback-action');
const callForm = document.getElementById('intouch-form');

callBtn.addEventListener('click', function(event) {
    callForm.classList.toggle('open');
});

window.addEventListener('click', function(event) {
    if (event.target.className !== 'intouch-form' && !event.target.closest('#intouch-form')  && event.target.className !== 'callback-action' && callForm.classList.contains('open') ) {
            callForm.classList.remove('open');
    }
});
