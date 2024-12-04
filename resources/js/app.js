import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    const contentChoice = document.getElementById('contentChoice');
    const pdfChoice = document.getElementById('pdfChoice');
    const textEditor = document.getElementById('textEditor');
    const pdfUploader = document.getElementById('pdfUploader');

    contentChoice.addEventListener('change', function () {
        if (contentChoice.checked) {
            textEditor.classList.remove('hidden');
            pdfUploader.classList.add('hidden');
        }
    });

    pdfChoice.addEventListener('change', function () {
        if (pdfChoice.checked) {
            textEditor.classList.add('hidden');
            pdfUploader.classList.remove('hidden');
        }
    });
});