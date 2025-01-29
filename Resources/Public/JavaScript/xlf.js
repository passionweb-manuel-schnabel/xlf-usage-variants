document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById('js-button');
    button.addEventListener("click", function (e){
        e.preventDefault();
        alert(TYPO3.lang['xlfInJavaScript']);
    });
})


