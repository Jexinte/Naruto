<template>
      <ListeDesPersonnages></ListeDesPersonnages>
</template>


<script>
import ListeDesPersonnages from'@/components/Personnages.vue'

export default {
    data() {
        return {};
    },
    mounted: function () {
        this.afficheLesPersonnagesDepuisLapi();
    },
    methods: {
        afficheLesPersonnagesDepuisLapi() {
            const container = document.querySelector(".container");
            /* CONNEXION API */
            fetch(`http://localhost:3000/api/personnages`)
                .then(response => {
                if (response.ok)
                    return response.json();
                else
                    console.log(`Connexion failed`);
            })
                .then(response => {
                response.map(personnage => {
                    const box = document.createElement("a");
                    box.className = "box";
                    container.appendChild(box);
                    box.style.backgroundImage = `url(${personnage.imageCard})`;
                    box.href = `/personnage?id=${personnage.id}`
                    const nameCharacter = document.createElement("h1");
                    nameCharacter.setAttribute("class", "nameCharacter");
                    box.appendChild(nameCharacter);
                    nameCharacter.textContent = personnage.nom;
                });
            });
        }
    },
    components: { ListeDesPersonnages }
}
</script>

<style>
@import "@/assets/css/personnages.css";
</style>
