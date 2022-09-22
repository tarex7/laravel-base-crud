const deleteBtn = document.getElementById('deleteBtn');
console.log(deleteBtn);
deleteBtn.addEventListener('submit', (e) => {
    e.preventDefault();
    alert('clicked')
})