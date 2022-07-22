<template>

       

<div class="container"></div>
</template>

<script>

export default {
 mounted: function () {
        this.afficheLesPersonnagesEnFonctionDeLeurVillage();
    },
  methods : {
    afficheLesPersonnagesEnFonctionDeLeurVillage(){
      const container = document.querySelector('.container')
      // Connexion
fetch(`http://localhost:3000/api/personnages`)

.then(response => {
    if(response.ok)
        return response.json()
    else
        console.log(`Connexion failed`)
})

.then( response => {
    response.map(personnage => {
        const searchParams = new URLSearchParams(window.location.search)
        const village = searchParams.get('village')

        if(personnage.village === village) {

            const box = document.createElement('a')
            box.className = "box"
            container.appendChild(box)
            box.style.backgroundImage= `url(${personnage.imageCard})`
            box.href = `/personnage?id=${personnage.id}`
            const nameCharacter = document.createElement('h1')
            nameCharacter.setAttribute('id','nameCharacter')
            box.appendChild(nameCharacter)
            nameCharacter.textContent = personnage.nom
        }
        });
}
)    }
  }
}

</script>

<style>
@import '@/assets/css/village.css';
</style>
