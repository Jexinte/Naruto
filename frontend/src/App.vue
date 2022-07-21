<template>
 
      <section>

            <nav>
      <router-link to="/addCharacter" id="create">Ajouter un personnage</router-link> 
      <router-link to="/konoha?village=konoha" id="konoha">Konoha</router-link> 
      <router-link to="/kumo?village=kumo" id="kumo" >Kumo</router-link>
      <router-link to="/suna?vilage=suna" id="suna" >Suna</router-link>

    </nav>
    <router-view/>

    </section>
    
    <div class="container" ></div>

</template>

<script>

export default {
  data(){
    return {

    }
  },
mounted:function(){
this.afficheLesPersonnagesDepuisLapi()
},
  methods : {
    afficheLesPersonnagesDepuisLapi() {
  const container = document.querySelector('.container')



  /* CONNEXION API */

  fetch(`http://localhost:3000/api/personnages`)

  .then(response => {
      if(response.ok)
          return response.json()
      else
          console.log(`Connexion failed`)
  })

  .then( response => {


      response.map(personnage => {
        
          const box = document.createElement('a')
                box.className = "box"
                container.appendChild(box)
                box.style.backgroundImage= `url(${personnage.imageCard})`
                box.href = `./personnage.html?id=${personnage.id}`
          const nameCharacter = document.createElement('h1')
                nameCharacter.setAttribute('id','nameCharacter')
                box.appendChild(nameCharacter)
                nameCharacter.textContent = personnage.nom
      });
 
}
)
    }
  }
}
</script>

<style scoped>
@import '@/assets/css/main.css';




</style>