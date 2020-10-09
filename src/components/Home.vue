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

    <v-container>
      <v-row> 
        <v-col>     
          <img
            src="../assets/book.jpeg"
            contain
            height="300"
            width="300"
            style="border-radius: 10px"
          />
          <p> Descrição Livro </p>
        </v-col>

        <v-col><br>   
          <p>Descrição Filme</p>  
          <img
            :src="require('../assets/movie.jpeg')"
            contain
            height="300"
            width="300"
            style="border-radius: 10px"
          />
        </v-col>

        <v-col>     
          <img
            :src="require('../assets/serie.jpeg')"
            contain
            height="300"
            width="300"
            style="border-radius: 10px"
          />
          <p>Descrição Serie</p>
        </v-col>
      </v-row>
    </v-container>

    <v-card height="200">
      <v-footer
        absolute
        class="font-weight-medium"
      >
        <v-col
          class="text-center"
          cols="12">
          <h5>© 2020 MiCs Minha Criticas. Todos os direitos reservados.</h5>
        </v-col>
      </v-footer>
    </v-card>
  </div>
</template>

<script>
  export default {
    name: 'Home',
 
  }
</script>
