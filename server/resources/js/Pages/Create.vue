<template>
    <div>
      <h1>Create Event</h1>
  
      <!-- Formulaire de création d'événement -->
      <form @submit.prevent="submitForm">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" id="title" v-model="form.title" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" id="date" v-model="form.date" class="form-control" required>
        </div>
  
        <button type="submit" class="btn btn-primary">Create Event</button>
      </form>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        form: {
          title: '',
          date: ''
        }
      };
    },
    methods: {
      submitForm() {
        // Soumettre le formulaire au contrôleur pour créer l'événement
        this.$inertia.post(route('events.store'), this.form);
      }
    }
  };
  </script>

  
  
  
  