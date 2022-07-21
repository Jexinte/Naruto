<template>


    <section>

        <nav>
            <router-link to="/">Accueil</router-link>
      <router-link to="/addCharacter" id="create">Ajouter un personnage</router-link> 
      <router-link to="/konoha?village=konoha" id="konoha">Konoha</router-link> 
      <router-link to="/kumo?village=kumo" id="kumo" >Kumo</router-link>
      <router-link to="/suna?vilage=suna" id="suna" >Suna</router-link>

    </nav>
                </section>
    <router-view/>

</template>
