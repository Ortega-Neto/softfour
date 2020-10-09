<template>
  <div>
    <v-app-bar>     
      <v-img
        :src="require('../assets/logo.png')"
        contain
        position="left"
        height="60"
      />    
      <v-col cols="1" align-self="end">
        <v-btn text color="black">
          Inicio
        </v-btn>
      </v-col>
      <v-col cols="1">
        <v-btn text color="black">
          Filmes
        </v-btn>
      </v-col>
      <v-col cols="1">
        <v-btn text color="black">
          Series
        </v-btn>
      </v-col>
      <v-col cols="1">
        <v-btn text color="black">
          Livros
        </v-btn>
      </v-col>
       
      <v-btn
        depressed
        elevation="2"
        outlined
        rounded
        color="green"
        right>
          Entrar
        </v-btn>
    </v-app-bar> 

    <center><v-row>
     
      <v-col>     
        <v-img
          :src="require('../assets/book.jpeg')"
          contain
          height="300"
          width="300"
        />
        <p> Descrição Filmes </p>
      </v-col>

      <v-col><br>   
        <p>bla bla</p>  
        <v-img
          :src="require('../assets/book.jpeg')"
          contain
          height="300"
          width="300"
        />
      </v-col>

      <v-col>     
        <v-img
          :src="require('../assets/book.jpeg')"
          contain
          height="300"
          width="300"
        />
        <p>bla bla</p>
      </v-col>
    </v-row></center>
  </div>
</template>

<script>
  export default {
    name: 'Home',
 
  }
</script>
