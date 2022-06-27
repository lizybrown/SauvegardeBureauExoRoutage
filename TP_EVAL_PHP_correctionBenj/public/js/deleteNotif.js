let notif = document.querySelector('#notif');
let deleteButton = document.querySelector('#deleteButton');
deleteButton.addEventListener('click',()=>{
    notif.remove();
})