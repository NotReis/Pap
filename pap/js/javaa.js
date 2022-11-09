const AlimentosButtonTemplate = document.querySelector("[data-alimentos-template]")
const AlimentosButtonContainer = document.querySelector("[data-alimento-Button-container]")
const procurarInput = document.querySelector("[data-procurar]")

let aliselec = []

procurarInput.addEventListener("input", function (e) {
        const value = e.target.value.toLowerCase()

        alimentos.forEach(nome => {
            const isVisible = nome.name.toLowerCase().includes(value)
            nome.element.classList.toggle("hide", !isVisible)

        })
            
    })

//fetch("https://jsonplaceholder.typicode.com/users")
fetch("ListaAli.json")
    .then(res => res.json())
    .then(data => {
      alimentos = data.map(nome=> {
            const Button = AlimentosButtonTemplate.content.cloneNode(true).children[0]
            const header = Button.querySelector("[data-header]")
            header.textContent = nome.name
            AlimentosButtonContainer.append(Button) 
            
            return { name: nome.name, element:Button }
            
        

        })
    
})


            





