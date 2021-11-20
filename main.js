fetch('https://jsonplaceholder.typicode.com/posts')
.then(res => res.json())
.then(res => {
    const app = document.getElementById('app')
    res.forEach(element => {
        const paragraf = document.createElement('p')
        paragraf.style.color = 'red'
        paragraf.innerHTML = element.title
        app.appendChild(paragraf)
    });
})