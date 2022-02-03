<template>
  <section class="posts">
    <post class="post" v-for="post in posts" :key="post">
      <div class="card">
        <div class="card-body">
          <h3>{{ post.title }}</h3>
        </div>
      </div>
    </post>
  </section>
</template>

<script>
export default {
  data() {
    return {
      loading: true,
      meta: null,
      links: null,
    };
  },
  mounted() {
    axios.get("api/posts").then((response) => {
      console.log(response);
      this.posts = response.data.data;

      this.loading = false;
    });
    console.log("Component mounted.");
  },
};
</script>
