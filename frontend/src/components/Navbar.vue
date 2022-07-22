<template>


    <section class="test">

        <nav>
            <router-link to="/"> <img class="logo" src="@/assets/img/logo.webp" height="80" width="80"/> </router-link>
      <router-link to="/addCharacter" id="create">Ajouter un personnage</router-link> 
      <router-link to="/konoha?village=konoha" id="konoha">Konoha</router-link> 
      <router-link to="/kumo?village=kumo" id="kumo" >Kumo</router-link>
      <router-link to="/suna?village=suna" id="suna" >Suna</router-link>

    </nav>
                </section>
    <router-view/>

</template>
