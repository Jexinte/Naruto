<template>

  <section>
            

        </section>
        
        <a id="back" href="/">
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
        <div class="container">
          
        </div>

</template>

<script>

export default {
  data(){
    return{}
  },

  methods : {
    afficheUnPersonnage(){
      // Connexion
const connexionApiNaruto = fetch(`http://localhost:3000/api/personnages`)

connexionApiNaruto.then(response => {
    if(response.ok)
        return response.json()
    else
        console.log('Erreur')
})


.then(response => {
    const container = document.querySelector('.container')

    const searchParams = new URLSearchParams(window.location.search)
    const id = (parseInt(searchParams.get("id")))

    const personnage = response.find(personnage => personnage.id === id)
    const divLeft = document.createElement('div')
            divLeft.className = "left"
            divLeft.style.backgroundImage = `url(${personnage.imageHistory})`
            container.appendChild(divLeft)

    const divRight = document.createElement('div')
            divRight.className = "right"
            container.append(divRight)

    const nameOfTheCharacter = document.createElement('h1')
            nameOfTheCharacter.className = "nameOfTheCharacter"
            nameOfTheCharacter.textContent = `${personnage.nom}`
            divRight.appendChild(nameOfTheCharacter)

    const historyOfTheCharacter = document.createElement('p')
            historyOfTheCharacter.className = "historyOfTheCharacter"
            historyOfTheCharacter.textContent = `${personnage.history}`
            divRight.append(historyOfTheCharacter)

})
    }
  }
}

</script>

<style>

@import '@/assets/css/personnage.css';

</style>