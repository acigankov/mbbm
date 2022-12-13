const buttons = document.querySelectorAll('.tarifs-button');
const textarea = document.getElementById('join-comment')

buttons.forEach(function (item) {
    item.addEventListener('click', function (event) {
        const text = this.dataset.tarif;
        textarea.value = 'Хочу выбрать тариф ' + text;
    });
})