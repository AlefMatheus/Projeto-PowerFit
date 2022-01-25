'use strict'

let photo = document.getElementById('imgDefault');
let file = document.getElementById('perfil-img');

photo.addEventListener('click', () => {
    file.click();
})
file.addEventListener('change', (event) => {

    if (file.files.length <= 0){
        return;
    }

    let reader = new FileReader();
    reader.onload = () => {
        photo.src = reader.result;
    }
    reader.readAsDataURL(file.files[0])
});